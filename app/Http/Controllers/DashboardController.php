<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {


    $articles = Article::with('user')->latest()->get();
    $posts = Post::with('category', 'user')->latest()->get();

    return view('dashboard', compact('articles','posts'));
    }
}
