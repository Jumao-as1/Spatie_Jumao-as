<nav class="bg-[#800080] flex justify-between items-center p-5 text-white uppercase">
    <div>
        <h1 class="text-3xl text-[#000000FF] font-serif">Spatie</h1>
    </div>

    <div class="flex gap-5">
        <a class=" p-2 rounded-md" href="{{ route('welcome') }}">Home</a>
        <a class=" p-2 rounded-md" href="{{ route('events') }}">Events</a>
        @can('manage-transactions')
        <a class=" p-2 rounded-md" href="{{ route('transaction') }}">Transactions</a>
        @endcan
        @if (auth()->check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="p-2 rounded-md uppercase">Logout</button>
            </form>
            <a class=" p-2 rounded-md" href="{{ route('profile') }}">Profile</a>
        @else
            <a class=" p-2 rounded-md" href="{{ route('login') }}">Login</a>
        @endif
    </div>
</nav>
