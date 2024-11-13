<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::whereNotNull('published_at')->get();
        return view('welcome', compact('articles'));
    }
}
