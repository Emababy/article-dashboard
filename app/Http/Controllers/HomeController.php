<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articlesFromDb = Article::all();
        $usersNum = DB::table('users')->count();
        $categoriesNum = DB::table('categories')->count();
        $articlesNum = DB::table('articles')->count();
        $adminNum = DB::table('users')->where('email','like','admin%')->count();

        return view('admin.index', [
            'articles' => $articlesFromDb,
            'usersNum' => $usersNum,
            'categoriesNum' => $categoriesNum,
            'articlesNum' => $articlesNum,
            'adminNum' => $adminNum
        ]);
    }
}
