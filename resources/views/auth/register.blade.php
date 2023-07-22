@extends('auth.structure')

@section('title','Register')
    

@section('content')
<div class="container box-center bg-image full-screen">
    <div class="wrapper">
        <h3 class="form-title"> Create User </h3>

        <form action="">
            <div class="form-group">
                <label for="username"> Username </label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="email"> Email </label>
                <input type="email"  id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password"> Password </label>
                <input type="password" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="conformPassword"> conform Password </label>
                <input type="password" id="confromPassword" name="conformPassword">
            </div>
            
            <div class="form-group">
                <input type="submit" value="Register">
            </div>
        </form>

        <p class="text-center signupLink"> Already have an account? <a href="{{route('login')}}" class="link"> Login </a></p>
    </div>
</div>
@endsection