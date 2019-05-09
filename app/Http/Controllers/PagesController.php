<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index(){
        // return view('pages.index');
        $title = 'Lorem Ipsum';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        // return view('pages.about');
        $title = 'About Page';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services Page',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

    public function blog(){
        // return view('pages.index');
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.blog')->with('posts', $user->posts);
    }

}
