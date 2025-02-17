@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-gray-100">
        <h1 class="text-7xl uppercase text-red-950 font-serif mb-6">Events Page</h1>
        <p class="text-lg text-gray-700 text-center max-w-2xl mb-8">
            Stay updated with the latest events happening around you. Join us for exciting experiences and networking opportunities.
        </p>
        <div class="flex flex-col gap-4 text-center">
            <div class="bg-white p-6 rounded-lg shadow-md w-80">
                <h2 class="text-2xl font-semibold text-gray-800">Tech Conference 2025</h2>
                <p class="text-gray-600">March 15, 2025 - San Francisco, CA</p>
                <a href="/register" class="mt-2 inline-block px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">Register</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md w-80">
                <h2 class="text-2xl font-semibold text-gray-800">Marketing Summit</h2>
                <p class="text-gray-600">April 10, 2025 - New York, NY</p>
                <a href="/register" class="mt-2 inline-block px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">Register</a>
            </div>
        </div>
    </div>
@endsection
