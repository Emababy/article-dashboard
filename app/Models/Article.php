<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article-title',
        'article-content',
        'article-image',
        'article-author',
        'article-category',
        'article-image'
    ];
}
