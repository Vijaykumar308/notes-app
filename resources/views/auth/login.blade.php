@extends('auth.structure')

@section('title','login')
    

@section('content')
    <div class="contant-section div-center">
        <div class="row">
            <div class="left-side">
                <div class="wrapper">
                    <h3 class="form-title"> Login </h3>

                    @error('error')
                        <div class="result-info">
                            <p>{{$message}}</p>
                        </div>
                    @enderror

                    <form method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username"> Username </label>
                            <input type="text" id="username" name="username" autocomplete="off" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password"> Password </label>
                            <input type="password" id="password" name="password" autocomplete="off" required>
                        </div>
                        
                        <div class="form-group" class="btn-orange">
                            <input type="submit" value="Login">
                        </div>
                    </form>
        
                    <p class="text-center signupLink">Don't have an account? <a href="{{route('singup')}}" class="link"> Signup </a></p>  
                </div>
            </div>

            <div class="right-side">
                <section>
                    <h3>Note<span class="text-orange">Pro</span></h3>
                    <p class="slung">share you're thoughts in texts</p>
                </section>
                </div>
            </div>
        </div>
    </div>        
@endsection