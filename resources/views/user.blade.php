@extends('layouts.layout')

@section('content')

<style>
    .card {
        margin-left: 10px
        margin-top: 10px;
    }

    span {
            font-family: 'Noto Sans JP', sans-serif;
        }

    .circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: #ddd;
        /*margin-left: 20px;*/
        
    }
    
    .container {
        
    }
    .col1 {
        
    }
    .col2 {
       
     }
    
    .user-blade-php {
        width: 100%;
        margin: auto;
        display: flex;
        justify-content: center;
    }
    
    .user1 {
        width: 20%;
        margin-top: 50px;
    }
    
    .user2 {
        width: 50%;
        display: flex;
        flex-wrap: wrap;
        margin-top: 120px;
        margin-left: 50px;
    }
    
    .container {
        position: relative;
    }
    
    .btn1 {
        position: fixed;
        top: 630px;
        left: 1350px;
    }
    
    .create-btn a:hover {
        color: red;
    }
    
    .create-btn {
    
    }
    
    .circle2 {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        boder-color: #ddd;
        background: #ddd;
    }
    
    .circle2:hover {
        
    }
    
    .btn-primary {
        border-color: #ddd;
    }

    .user-item {
        display: flex;
        flex-direction: column;
    }
    
    .user-item h5 {
        margin-top: 30px;
    }
    
    
    
    .text-primary p {
        margin-top: -19px;
        
    }
    
    strong {
        font-size: 17px;
        margin-right: 6px;
    }
    
    .paginate {
        margin: 30px 0 80px;
    }
    
</style>
<div class="user-blade-php">
    
    <div class="user1 border-right p-4">
        <div class="circle"></div>
        <div class="user-name"><h4><span>{{Auth::user()->name}}</span></h4></div>
        <div class="user-name text-primary"><p><strong>&#64</strong>{{Auth::user()->email}}</p></div>
        <div class="user-item">
            
            <h5><span>メッセージ</span></h5>
            <h5><span>ブックマーク</span></h5>
            <h5><span>通知</span></h5>
            <h5><span>友達</span></h5>
            
        </div>
    </div>
    
    <div class="user2">
        
       @foreach ($posts as $post)
        <div class="card" style="width: 40%; margin-top: 10px; margin-right: 10px">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                <title>タイトル</title>
                <rect width="100%" height="100%" fill="#868e96"/>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em"></text>
            </svg>
            <div class="card-body">
                <h5 class="card-title"><span>{{ nl2br(str_limit($post->title, 30)) }}</span></h5>
                <p class="card-text"><span>{!! nl2br(str_limit(e($post->body, 200))) !!}</span></p>
            
                <!--<a href="" class="btn btn-primary"><span>編集する</span></a>-->
                <a href="{{ action('PostsController@edit', [$post->id]) }}" class="btn btn-primary"><span>編集する</span></a>
                
            </div>
          
                <a href="#" class="btn btn-primary  alert-danger">コメント〇件</a>
            
        </div>
        @endforeach
    </div>
</div>

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
@endsection