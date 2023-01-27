<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>['required'],
            'body'=>['required']
        ]);

        $post = new Post;
        $post->title = $request ->input('title');
        $post->body = $request ->input('body');
        $post->save();

        session()->flash('status', 'Post Created!');

        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post'=>$post]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'=>['required'],
            'body'=>['required']
        ]);

        $post->title = $request ->input('title');
        $post->body = $request ->input('body');
        $post->save();

        session()->flash('status', 'Post Updated!');

        return to_route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
       $post->delete();

       return to_route('posts.index')->with('status', 'Post deleted');
    }
}
