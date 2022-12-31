<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\posts;

class PostsController extends Controller
{
    public function showPosts()
    {
        $posts = Posts::select()->get();
        return view('welcome', ['posts'=> $posts]);
    }
    public function showAdmin()
    {
        $posts = Posts::select()->get();
        return view('admin', ['posts'=> $posts]);
    }
    public function showAdminPost($title)
    {
        $posts = Posts::select()->where('title', '=', $title)->get();
        return view('adminpost', ['posts'=> $posts]);
    }
    public function deletePost(Posts $post)
    {
        $post->delete();
        return redirect()->route('admin');
    }
    public function addPost(Request $request)
    {
        Posts::create($request->all());
        return redirect()->route('admin');
    }
    public function showMainPost(Posts $post)
    {
        $comments = $post->comments;
        return view('addcom', ['post' => $post, 'comments' => $comments]);
    }

}
