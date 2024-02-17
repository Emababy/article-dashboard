<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author_id',
        'category_id',
        'image',
    ];

    use HasFactory;

    public function user ()
    {
        return $this->belongsTo(User::class); // relations eloquent
    }

    public function category ()
    {
        return $this->belongsTo(Category::class);
    }
}
