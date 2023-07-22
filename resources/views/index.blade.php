@extends('layout.app')
@section('title','home')

@section('main')
    <div class="bg-primary">
        <p>this is a home page </p>
        <h1>Welcome {{Session('username')}}
     </h1>

            
    </div>
@endsection