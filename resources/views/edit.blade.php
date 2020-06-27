@extends('layouts.layout')

@section('content')

<style>
  .parent-edit-blade-php {
    display: flex;
    justify-content: center;
  }

  .create-blade-php {
    display: flex;
    justify-content: center;
    width: 1000px;
  }

  .form {
    margin-top: 30px;
    /*width: 50%;*/
    width: 100%;
  }
  
   .comment {
    margin-top: 30px;
    width: 30%;
    height: 20px;
  }

  .form-group {
    /*width: 50%;*/
    /*margin:auto;*/
    /*margin-right: 40%;*/
    margin-left: 20%;
    
  }
  
  .form-group2 textarea {
    resize: none;
    height: 500px;
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
    
    .comment button {
      margin-top: 10px;
      float: right;
    }
    
    .comment-show {
      margin-top: 100px;
    }
    
    .update {
        margin-top: 67px;
        margin-left: 67px;
    }
    
    .update2 {
      margin-top: 67px;
      margin-left: 3px;
    }
  
</style>

<div class="parent-edit-blade-php">

<form method='POST' action="/posts/{{ $posts->id }}">
  @csrf
  @method('PUT')
<div class="create-blade-php">
  <div class="form">
    <div class="form-group form-group1">
      <label for="textarea1"><span>タイトル</span></label>
      <textarea id="textarea1" class="form-control text1" name="title" type="text">{{ $posts->title }}</textarea>
    </div>
    <div class="form-group form-group2">
      <label for="textarea1"><span>本文</span></label>
      <textarea id="textarea1" class="form-control text2" name="body" type="text">{{ $posts->body }}</textarea>
    </div>
  </div>
  
  <div class="update">
      <button type="submit" class="btn btn-primary"><span>更新する</span></button>
  </div>
  
</form>
</div>
 
<!--<button type="submit" class="btn btn-primary">-->
<!--                    コメントする-->
<!--                </button>-->


<form class="update2" method="POST" action="/posts/{{ $posts->id }}">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger"><span>削除する</span></button>
  <!--<a class="btn btn-danger" href="/posts/{{ $posts->id }}"><span>削除する</span></a>-->
</form>
</div>

@endsection