@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-gray-100">
        <h1 class="text-7xl uppercase text-red-950 font-serif mb-6">Welcome to Our Website</h1>
        <p class="text-lg text-gray-700 text-center max-w-2xl mb-8">
            Discover amazing content, stay updated with the latest news, and explore our services.
            We are here to provide you with the best experience.
        </p>
        <a href="/about" class="px-6 py-3 bg-brown-700 text-black text-lg font-medium uppercase rounded-lg shadow-lg transition duration-300 ease-in-out hover:bg-red-800 hover:scale-105">
            Learn More
        </a>
    </div>
@endsection
