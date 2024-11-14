<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::whereNotNull('published_at')->get();
        // dd($articles[0]->comments);
        return view('welcome', compact('articles'));
    }
}
