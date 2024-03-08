<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function blogs() {
        $blogs = Article::where('status', 'PUBLISHED')
            ->orderBy('published_date', 'DESC')->paginate(10);

        return view('media.blogs')->with([
            'blogs' =>  $blogs
        ]);
    }

    public function blogShow($slug) {
        $blog = Article::where('slug', $slug)->where('status', 'PUBLISHED')->firstOrFail();

        $related = Article::where('slug', '<>', $slug)->where('status', 'PUBLISHED')->inRandomOrder()->limit(6)->get();
        
        $popularPosts = Article::where('status', 'PUBLISHED')->latest()->take(6)->get();

        return view('pages.blog', [
            'blog' => $blog,
            'related' => $related,
            'popularPosts' => $popularPosts
        ]);
    }

    public function events() {
        $events = Post::where('status', 'PUBLISHED')
            ->orderBy('published_date', 'DESC')->paginate(10);

        return view('media.events')->with([
            'events'    =>  $events
        ]);
        
    }

    public function eventShow($slug) {
        $event = Post::where('slug', $slug)->where('status', 'PUBLISHED')->firstOrFail();

        $related = Post::where('slug', '<>', $slug)->where('status', 'PUBLISHED')->inRandomOrder()->limit(6)->get();

        return view('pages.event')->with([
            'event'     =>  $event,
            'related'   =>  $related
        ]);
    }
}
