<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // relationships====+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    function author() {
        return $this->belongsTo(User::class, "author_id");
    }

    function comments() {
        return $this->hasMany(Comment::class, "article_id");
    }


    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
}
