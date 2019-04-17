<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        return view('tweet');
    }

    public function postatweet(){

        $tweet= new Tweet();

        $tweet->text = request('text');

        if($tweet->text === null){
            return Redirect::back()->withErrors(['text cannot be empty', 'the error message']);
        }

        $user = Auth::user();

        $tweet->user_id = $user->id;

        $tweet->save();

        return redirect('/timeline');

    }
}