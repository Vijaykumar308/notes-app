@extends('layout.app')
@section('title','home')
{{-- <h1>Welcome {{Session('username')}}</h1> --}}

@section('main')
    <main class="hero-section">
        <div class="container-90 flex flex_override">
           <div class="hero-content">
                <h1>NotePro - Like share and deliver your thoughts</h1>
                <h2>Let's connnet the world with text</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore modi voluptatibus, perspiciatis repellat voluptas vero maxime, repudiandae unde minima, nobis maiores aliquid molestias magni tenetur. Dolorem delectus magnam possimus incidunt rem fuga animi! Natus enim quos aliquam impedit nostrum dicta ratione molestiae, doloremque, cum possimus nam voluptates dolor beatae quaerat laudantium modi repellat suscipit eveniet. Voluptate eum in deleniti corrupti facilis itaque voluptates.</p>
           </div>
           <div class="hero-image">
                <figure>
                    <img src="{{asset('images/notes2.jpg')}}" alt="notes 2">
                </figure>
           </div>
        </div>
    </main>

    <section class="features-section container-90">
       <h3 class="heading-features">Features</h3>
       <div class="flex container-90 flex_override"> 
            <div class="flex-item">
                <h4>Save Notes</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates corporis deleniti esse facere nesciunt fugit saepe quidem, qui laborum debitis! Architecto voluptas tenetur possimus rerum corporis unde reprehenderit labore dolor, beatae quia numquam ad!</p>
            </div>

            <div class="flex-item">
                <h4> Connect to community of Writers </h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil repellat eveniet molestias numquam vero delectus reprehenderit optio, ea, iure suscipit neque, necessitatibus dolores!</p>
            </div>

            <div class="flex-item">
                <h4>Share thoughts</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit aliquam corporis perferendis consectetur, distinctio ab inventore reprehenderit quia quae placeat, eligendi eum officiis.</p>
            </div>
       </div>
    </section>
@endsection