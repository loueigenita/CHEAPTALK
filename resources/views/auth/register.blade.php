@extends('base')

@section('content')
<div class="row mt-5">
  <div class="col-md-4 offset-md-4">
    <div class="card bg-black text-light mt-5">
      <div class="card-header bg-black text-center text-light">
        <img src="avatar.png" class="avatar">
      </div>

      <h1 class="text-center mt-5">REGISTER</h1>

      <form action="{{'/register'}}" method="POST">
        {{csrf_field()}}

        <div class="card-body">
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
              <label for="gender">Gender</label>
              <select title="gender" id="gender" name="gender" class="form-select" >
                  <option hidden="true">Gender</option>
                  <option selected disabled>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
          </select>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="sample@gmail.com" class="form-control">
            </div>
           
            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" v-model="user.password" placeholder="********">
            </div>

            <div class="mb-3">
              <label for="password_confirmation">Confirm Password</label>
              <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="********">
            </div>

            <div class="d-flex">
              <div class="flex-grow-1">
                <a href="{{'/login'}}">Already have an account?</a>
              </div>
              <button class="btn btn-primary px-5" type="submit">REGISTER</button>
            </div>
      </form>
    </div>
  </div>
</div>
</div>
<style>
   .login-box{
        width: 200px;
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
        width: 75%;
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