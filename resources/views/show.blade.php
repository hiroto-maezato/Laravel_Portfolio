@extends('layouts.layout')

@section('content')

<style>
  .create-blade-php {
    display: flex;
    justify-content: center;
    /*width: 1000px;*/
  }

  .form {
    margin-top: 30px;
    width: 50%;
  }
  
  .form a {
    margin-left: 20%;
  }
  
   .comment {
    margin-top: 30px;
    width: 30%;
    height: 20px;
  }

  .form-group {
    margin-left: 20%;
    
  }
  
  .form-group3 {
    /*width: 30%;*/
    
  }
  
  .text1 {
    resize: none;
    height: 50px;
  }
  
  .text2 {
    resize: none;
    height: 500px;
  }
  
  .text3 {
    resize: none;
    height: 50px;
  }
  
  span {
        font-size: 20px;
        font-weight: 700;
        font-family: 'Noto Sans JP', sans-serif;
    }
    
    .span {
      font-size: 20px;
        font-weight: 700;
        font-family: 'Noto Sans JP', sans-serif;
    }
    
    .span2 {
      font-size: 20px;
        font-weight: 700;
        font-family: 'Noto Sans JP', sans-serif;
    }
    
    .comment button {
      margin-top: 10px;
      /*float: right;*/
    }
    
    .comment-show {
      margin-top: 100px;
    }
    
    .contents1 {
      height: 70px;
      border: 1.5px solid #ddd;
    }
    
    .contents1 h2 {
      margin: 2px;
      margin-left: 16px;
    }
    
    .contents2 {
      height: 700px;
      border: 1.5px solid #ddd;
    }
    
    .contents2 p {
      /*font-size: 16px;*/
      margin: 10px;
    }
    
    .comment-flex {
      display: flex;
      flex-direction: row-reverse;
      margin-right: 95px;
    }
    
    .comment-flex a {
      margin-top: 10px;
      margin-right: 20px;
    }
    
    .editor {
      margin-top: 47px;
    }
  
</style>
<div class="create-blade-php">
  
  <!--<div class="editor">-->
  <!--       <span class="text-muted">作成者</span>-->
  <!--       <p><a href="{{ action('UsersController@index') }}" class="text-secondary"><small>&#64;{{Auth::user()->name}}</small></a></p>-->
  <!--</div>-->
  <div class="editor">
         <span class="text-muted">作成者</span>
         <p><a href="#" class="text-secondary"><small>&#64;{{$posts->user->name}}</small></a></p>
  </div>
  
  <div class="form">
    <div class="form-group form-group1">
      <div class="contents1">
        <h2><span>{{ $posts->title }}</span></h2>
      </div>
      
    </div>
    
    <div class="form-group form-group2">
      <div class="contents2">
        <p class="span2">{!! nl2br(e($posts->body)) !!}</p>
      </div>
    </div>
  </div>
  
  <div class="comment">
    <div class="form-group form-group3">
      <form method="POST" action="{{ action('CommentsController@store') }}">
        @csrf
      <input name="post_id" type="hidden" value="{{ $posts->id }}">
      <label for="textarea1"><span>コメント</span></label>
      <textarea id="textarea1" class="form-control text3 {{ $errors->has('body') ? 'is-invalid' : '' }}" name='body' type="text"></textarea>
      @if ($errors->has('body'))
          <div class="invalid-feedback">
              {{ $errors->first('body') }}
          </div>
      @endif
      <div class="comment-flex">
        <button type="submit" class="btn btn-primary">
        <span>コメントする</span>
        </button>
        @if ( Auth::id() == $posts->user_id )
        <a class="btn btn-secondary" href="{{ url('posts/'.$posts->id.'/edit') }}">
        <span>編集する</span>
        </a>
        @endif
      </div>
      
       </form>
     
    <div class="comment-show">
      @foreach( $comments as $comment ) 
      <div class="border-top p-4">
        <time class="text-secondary">
            {{ $comment->created_at }}
        </time>
        <p class="mt-2">
        {{ $comment->body }}
        {{ $comment->count() }}
        </p>
      </div>
      @endforeach
    </div>
  </div>



@endsection