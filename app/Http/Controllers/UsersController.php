<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        $id = Auth::id();
      
        $users = User::find($id);
        
        $posts = $users->posts;
        
        $items = Post::orderby('created_at', 'desc')->get();
        
        return view('user', ['posts' => $posts, 'items' => $items, 'users' => $users,]);
        
    }
}
