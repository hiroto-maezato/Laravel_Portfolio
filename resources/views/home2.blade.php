@extends('layouts.layout')

@section('content')

<style>
    .button {
        height: 100px;
         margin-top: 300px;
        
    }

    .button-container {
        text-align: center;
        width: 25%;
        margin-right: auto;
        margin-left: auto;
    }
    
    .btn-block {
        height: 55px;
    }
    
    span {
        font-size: 20px;
        font-weight: 700;
        font-family: 'Noto Sans JP', sans-serif;
    }
    
    
</style>

<div class="button">
    <div class="button-container">
        <a href="{{ route('login') }}" class="btn btn-primary btn-block"><span>ログイン</span></a>
        <a href="{{ route('register') }}" class="btn btn-secondary btn-block"><span>新規登録</span></a>
    </div>
    

    
</div>


@endsection