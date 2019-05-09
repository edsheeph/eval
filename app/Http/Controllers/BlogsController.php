<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BlogsController extends Controller
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

    public function blog(){
        // return view('pages.index');
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.blog')->with('posts', $user->posts);
    }
}
