<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the tweet post page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('postatweet');
    }

    public function saveTweet(){

        $tweet= new Tweet();

        $tweet->text = request('text');

        $tweet->save();

        return redirect('/timeline');

    }
}