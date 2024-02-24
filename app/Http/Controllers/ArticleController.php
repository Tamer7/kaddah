<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $blogs = Article::where('status', 'PUBLISHED')
            ->orderBy('published_date', 'DESC')->paginate(10);

        return view('pages.blogs', compact('blogs'));
    }
}
