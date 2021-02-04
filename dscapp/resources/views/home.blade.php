@extends('layout.app')

@section('content')

<div class="w-8/12 h-screen bg-white rounded-lg mx-auto my-8 p-8 flex flex-col justify-around">

    <div class="w-full mb-16">
        <h1 class="text-8xl text-center mb-8">App Name</h1>
        <h2 class="text-4xl text-center">Join today.</h2>
    </div>

    <div class="flex justify-around">
        <div class="text-4xl"><a href="">Login</a></div>
        <div class="text-4xl"><a href="">Register</a></div>
    </div>

</div>

@endsection('content')