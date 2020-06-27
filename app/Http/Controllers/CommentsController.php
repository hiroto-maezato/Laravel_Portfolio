<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function store(CommentRequest $request)
   {
    
        $posts = Post::findOrFail($request->post_id);
        
        $comments = new Comment;
        
        $comments -> body    = $request -> body;
        $comments -> user_id = Auth::id();
        $comments -> post_id = $request -> post_id;
        
        $comments -> save();
        
        return redirect()->route('posts.show', ['posts' => $posts]);
       
       
   }
}