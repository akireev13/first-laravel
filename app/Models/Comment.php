<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;


    // relationships =====================

    public function article()
    {
        return $this->belongsTo(Article::class, "article_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "author_id");
    }
}