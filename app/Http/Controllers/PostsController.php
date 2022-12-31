<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\Comment;

class PostsController extends Controller
{
    public function showPosts()
    {
        $posts = Posts::select()->get();
        return view('welcome', ["posts" => $posts]);
    }
    public function showAdmin()
    {
        $posts = Posts::select()->get();
        return view('admin', ["posts" => $posts]);
    }
    public function showOne(Posts $post)
    {
        $comments = $post->comments;
        return view('post', ["post" => $post, 'comments'=> $comments]);
    }
    public function showPost(Posts $post)
    {
        $comments = $post->comments;
        return view('admin_post', ["post" => $post, 'comments'=>$comments]);
    }
    public function addPost(Request $request)
    {
        Posts::create($request -> all());
        return redirect()->route('showAdmin');
    }
    public function deletePost(Posts $post)
    {
        $post->delete();
        return redirect()->route('showAdmin');
    }
    public function deleteComment(Posts $post ,Comment $comment)
    {
        $comment->delete();
        return redirect()->route("showPost",compact('post'));
    }
    public function postComm(Request $request)
    {
        Comment::create([
            'name' => $request->input('title'),
            'text' =>$request->input('comment'),
            'posts_id'=>$request->input('posts_id')
        ]);

        return response()->json([
            'name' => $request->input('title'),
            'text' =>$request->input('comment'),
            'posts_id'=>$request->input('posts_id')
        ]);
    }
}
