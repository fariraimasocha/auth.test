<x-layout>
    <x-panel>
        <h1 class="text-2xl font-bold">Dashboard</h1>
        <p>Welcome back, {{ auth()->user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="w-20 h-10 rounded-lg bg-gray-800 text-white hover:bg-blue-700" type="submit">Logout</button>
        </form>
    </x-panel>
</x-layout>
