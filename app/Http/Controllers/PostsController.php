<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;


class PostsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        
        $posts = Post::orderby('created_at', 'desc')->paginate(8);
        
        return view('index', ['posts' => $posts]);
        
    }
    
    public function index2()
    {
        
        
    }

    
    public function create()
    {
        return view('create');
    }

    
    public function store(PostRequest $request)
    {
        $posts = new Post;
        $posts -> title    = $request -> title;
        $posts -> body     = $request -> body;
        $posts -> user_id  = Auth::id();
        $posts -> save();
        
        return redirect('posts');
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        
        $posts->load('user', 'comments');
        // ↑Eagerロード
        // postsに紐づくテーブルのデータをとれる
        // ここではusers,commentsテーブルをデータが取れる
        // loadの引数にはテーブル名？メソッド名？
        // メソッド名かも
        
        $comments = $posts->comments;
        
        return view('show', ['posts' => $posts, 'comments' => $comments]);
        
    }

    
    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        
        if( Auth::id() !== $posts->user_id ){
            return abort(404);
        }

        
        return view('edit', ['posts' => $posts]);
    }

    
    public function update(PostRequest $request, $id)
    {
        
        $posts = Post::find($id);
        
        
        if(Auth::id() !== $posts->user_id){
            return abort(404);
        }
        
        
        $posts->title = $request->title;
        $posts->body = $request->body;
        
        $posts->save();
        
        return redirect('posts');
    }

    
    public function destroy($id)
    {
        $posts = Post::find($id);
        
        if(Auth::id() !== $posts->user_id){
            return abort(404);
        }
        
        $posts->delete();
        
        return redirect('posts');
    }
}
