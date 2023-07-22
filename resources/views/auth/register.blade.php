@extends('auth.structure')

@section('title','Register')
    

@section('content')
<div class="contant-section div-center">
    <div class="row">
        <div class="left-side">
            <div class="wrapper">
                <h3 class="form-title"> Sign up </h3>
                @if($errors->any())
                    <div class="result-info">
                        @foreach ($errors->all() as $error)
                            <p> {{$error}}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST">
                    @csrf
                    {{-- <div class="form-group">
                        <label for="name"> Full Name </label>
                        <input type="text" id="name" name="name" value="vijay1" >
                    </div> --}}

                    <div class="form-group">
                        <label for="username"> Username </label>
                        <input type="text" id="username" name="username" value="vijay1" >
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email"  id="email" name="email" value="jwvijay@gmail.com">
                    </div>
        
                    <div class="form-group">
                        <label for="password"> Password </label>
                        <input type="password" id="password" name="password" value="123">
                    </div>
        
                    <div class="form-group">
                        <label for="conformPassword"> conform Password </label>
                        <input type="password" id="confromPassword" name="confirmPassword" value="123">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Signup">
                    </div>
                </form>
        
                <p class="text-center signupLink"> Already have an account? <a href="{{route('login')}}" class="link"> Login </a></p>
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