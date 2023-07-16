@extends('auth.structure')

@section('title','login')
    

@section('content')
    <div class="container box-center bg-image">
        <div class="wrapper">
            <h3 class="form-title"> Login </h3>

            <form action="">
                <div class="form-group">
                    <label for="username"> Username </label>
                    <input type="text" id="username" name="username" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    <label for="password"> Password </label>
                    <input type="password" id="password" name="password" autocomplete="off" required>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Login">
                </div>
            </form>

            <p class="text-center signupLink">Need to <a href="{{route('singup')}}" class="link"> SignUp </a></p>  
        </div>
    </div>
@endsection