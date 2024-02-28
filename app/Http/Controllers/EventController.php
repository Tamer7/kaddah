<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class EventController extends Controller
{
    //
    public function index()
    {
        $events = Post::where('status', 'PUBLISHED')
            ->orderBy('published_date', 'DESC')->paginate(10);

        return view('pages.events', compact('events'));
    }
}
