@extends('layout.layout')

@section('content')
    <div class="w-screen h-screen flex flex-col justify-center items-center bg-gray-100">
        <h1 class="text-7xl uppercase text-red-950 font-serif mb-6">Transactions Page</h1>
        <p class="text-lg text-gray-700 text-center max-w-2xl mb-8">
            View and manage all your transactions in one place. Track payments, invoices, and financial records efficiently.
        </p>
        <div class="flex flex-col gap-4 text-center">
            <div class="bg-white p-6 rounded-lg shadow-md w-96">
                <h2 class="text-2xl font-semibold text-gray-800">Recent Transactions</h2>
                <ul class="text-gray-600 text-left mt-2">
                    <li>✔ Payment to XYZ Corp - $200 - Feb 10, 2025</li>
                    <li>✔ Invoice from ABC Ltd - $150 - Feb 8, 2025</li>
                    <li>✔ Refund from DEF Inc - $50 - Feb 5, 2025</li>
                </ul>
                <a href="/transactions" class="mt-4 inline-block px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800">View More</a>
            </div>
        </div>
    </div>
@endsection
