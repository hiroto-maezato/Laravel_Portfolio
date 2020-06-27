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
    
    .form-button1 {
      margin-left: 20%;
    }
  
</style>

<form method='POST' action="{{ action('PostsController@store') }}">
  @csrf
<div class="create-blade-php">
  <div class="form">
    <div class="form-group form-group1">
      <label for="textarea1"><span>タイトル</span></label>
      <textarea id="textarea1" class="form-control text1 {{ $errors->has('title') ? 'is-invalid' : '' }}" name="title" type="text"></textarea>
      @if ($errors->any())
          <div class="invalid-feedback">
              {{ $errors->first('title') }}
          </div>
      @endif
    </div>
    
    <div class="form-group form-group2">
      <label for="textarea1"><span>本文</span></label>
      <textarea id="textarea1" class="form-control text2 {{ $errors->has('body') ? 'is-invalid' : '' }}" name="body" type="text" ></textarea>
      @if ($errors->any())
          <div class="invalid-feedback">
              {{ $errors->first('body') }}
          </div>
      @endif
    </div>
    
    <button type="submit" class="btn btn-primary form-button1">
      <span>投稿する</span>
    </button>
    
    <a class="btn btn-secondary" href="{{ action('PostsController@index') }}">
        <span>キャンセル</span>
    </a>
  </div>
</form>
  
</div>
@endsection