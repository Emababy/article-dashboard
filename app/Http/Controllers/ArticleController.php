<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articlesFromDb = Article::all();
        return view('admin.articles.index',
            [
                'articles' => $articlesFromDb ,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('admin.articles.create' , ['users' => $users , 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validatedData = request()->validate([
            'title' => ['required', 'min:3'],
            'content' => ['required', 'min:10'],
            'author_id' => ['required', 'exists:users,id'],
            'category' => ['required', 'exists:categories,id'],
        ]);

        Article::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'author_id' => $validatedData['author_id'],
            'category_id' => $validatedData['category'],
        ]);

        return to_route('articles.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Article $article) // route model binding
    {
        return view('admin.articles.show' , ['article' => $article ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $users = User::all();
        $categories = Category::all();
        return view('admin.articles.edit' , ['article' => $article , 'users' => $users , 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Article $article)
    {
        $validatedData = request()->validate([
            'title' => ['required', 'min:3'],
            'content' => ['required', 'min:10'],
            'author_id' => ['required', 'exists:users,id'],
            'category' => ['required', 'exists:categories,id'],
        ]);

        $article->update([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'author_id' => $validatedData['author_id'],
            'category_id' => $validatedData['category'],
        ]);

        return to_route('articles.show' , $article->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return to_route('admin.index');
    }
}
