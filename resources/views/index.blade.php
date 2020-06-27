@extends('layouts.layout')

@section('content')

    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            
        }
        
        .card {
            margin-right: 11px;
            margin-top: 10px;
        }
        
        span {
            font-family: 'Noto Sans JP', sans-serif;
        }
        
       
    </style>

    <div class="container mt-4">
        @foreach ($posts as $post)
        <div class="card" style="width: 24%;">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                <title>タイトル</title>
                <rect width="100%" height="100%" fill="#868e96"/>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
            </svg>
            <div class="card-body">
                <h5 class="card-title"><span>{{ nl2br(str_limit($post->title, 30)) }}</span></h5>
                <p class="card-text"><span>{!! nl2br(str_limit(e($post->body, 200))) !!}</span></p>
                <a href="{{ action('PostsController@show', [$post->id]) }}" class="btn btn-primary"><span>もっと読む</span></a>
                <!--↑actionの引数にその記事のidを渡してその記事の詳細ページに移動させる-->
                
            </div>
            
            
            @if ($post->comments->count() >= 10)
                <a href="#" class="btn btn-primary  alert-danger">コメント{{ $post->comments->count() }}件</a>
            @elseif ($post->comments->count() >= 5)
                <a href="#" class="btn btn-primary  alert-warning">コメント{{ $post->comments->count() }}件</a>
            @else 
                <a href="#" class="btn btn-primary alert-success">コメント{{ $post->comments->count() }}件</a>
            @endif
            
        </div>
        @endforeach
        
        
        
        
        
        
        <!--消すけど一旦おいておくやつ-->
        <!--やっぱ消さない-->
        <!--新規登録のボタン-->
<style>
.container{position: relative;}
.btn1 {
        position: fixed;
        top: 630px;
        left: 1350px;
    }.create-btn a:hover {
        color: red;
    }.circle2 {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        boder-color: #ddd;
        background: #ddd;
    } .btn-primary {
        border-color: #ddd;
    }
    .btn2 {
        position: fixed;
        top: 500px;
        left: 1350px;
    }
    </style>
        
        <div class="container">
  <div class="row justify-content-md-end btn1">
    <div class="create-btn">
        <a href="{{ action('PostsController@create') }}">  
            <button class="circle2 btn btn-primary" >
              <i class="material-icons">add</i>
            </button>
        </a>
    </div>
  </div>
</div>


<div  style="margin: 50px 0 50px;">
    {{ $posts->links() }}
</div>

        
    </div>
@endsection