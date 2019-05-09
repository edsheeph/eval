<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;
use Alert;
use DB;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        // return Post::where('title', 'Post Two')->get();
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::orderBy('title', 'desc')->take(2)->get();
        // $posts = Post::orderBy('title', 'asc')->paginate(1);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image'))
        {
            // File name with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Just Ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } 

        else 
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        alert()->success('Success Message', 'Post Created');
        $post->save();

        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        // $post = Post::orderBy('title', 'asc')->get();
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id)
        {
            alert()->error('Error Message', 'Unauthorized Page')->persistent('Close');
            return redirect('/posts');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image'))
        {
            // File name with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Just Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Just Ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image'))
        {
            $post->cover_image = $fileNameToStore;
        }
        alert()->success('Success Message', 'Post Updated');
        $post->save();

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(auth()->user()->id !== $post->user_id)
        {
            alert()->error('Error Message', 'Unauthorized Page')->persistent('Close');
            return redirect('/posts');
        }

        if($post->cover_image != 'noimage.jpg')
        {
            // Delete Image on storage
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/blog')->with('success', 'Post Removed');
    }
}
