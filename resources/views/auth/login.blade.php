@extends('base')

@section('content')

<div class="login-box">
    <img src="avatar.png" class="avatar">
    <h1>LOGIN HERE</h1>
    
    <form action="{{'/login'}}" method="POST">
        {{csrf_field()}}

        <div class="mb-1">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="sample@gmail.com" class="form-control">
    </div>
        <div class="mb-1">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="*********">
    </div>
    <div class="d-flex">
        <div class="flex-grow-1">
            <a href="{{'/register'}}">Sign up for an account?</a>
        </div>
        <button class="btn btn-sm btn-primary px-5" type="submit">LOGIN</button>
    </div>
</form>
</div>

<style>
    .login-box{
        width: 320px;
        height: 380px;
        background: rgb(0, 0, 0);
        color: rgb(255, 255, 255);
        top: 60%;
        left: 50%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
    }
    .avatar{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }
    h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }
    .login-box p{
        margin: 0;
        padding: 0;
        font-weight: bold;
    }
    .login-box input{
        width: 100%;
        margin-bottom: 20px;
    }
    .login-box input[type=""]
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }
    .login-box input[type=""]
    {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }
    .login-box input[type="submit"]
    {
        border: none;
        outline: none;
        height: 40px;
        background: #1c8adb;
        color: #fff;
        font-size: 18px;
        border-radius: 20px;
    }
    .login-box input[type="submit"]:hover
    {
        cursor: pointer;
        background: #ff002b;
        color: rgb(0, 0, 0);
    }
    
    .login-box a{
        text-decoration: none;
        font-size: 14px;
        color: rgb(0, 17, 255);
    }
    .login-box a:hover
    {
        color: #ff0000;
    }
    
    </style>
@endsection
