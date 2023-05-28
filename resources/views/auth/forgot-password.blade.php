<x-layout>
    <div class="flex justify-center items-center h-screen">
        <form class="w-90 shadow-lg" method="post" action="{{ route('forgot-password') }}">
            @csrf
            <div class="px-5 py-3 bg-white">
                <div class="mt-5 w-80" style="display: flex; justify-content: center; align-items: center;">
                    <h1 class="text-gray-600">Password Reset Link</h1>
                </div>
                <div class="mt-3 w-80">
                    <label for="email" class="text-gray-600">Email</label>
                    <div class="relative">
                        <input type="text" name="email"
                            class="h-10 block w-full rounded-sm px-4 py-3 pr-10 text-sm focus:border-blue-500 focus:ring-blue-500 ring-gray-100 border border-gray-300"
                            placeholder="Email" />
                        <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                            fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-5 w-80 flex justify-between">
                    <button class="bg-blue-500 text-white rounded-md text-center w-28 h-10">Reset</button>
                </div>

            </div>
        </form>
    </div>

    {{--    <x-splade-form class="w-4/12 justify-center mx-auto mt-20 bg-white px-5 py-3 rounded "> --}}
    {{--        <h1 class="mb-3 font-semibold text-2xl">Splade Login</h1> --}}
    {{--        <x-splade-input name="name" label="name" /> --}}
    {{--        <x-splade-input name="email" label="email" /> --}}
    {{--        <x-splade-input name="password" label="password" /> --}}
    {{--        <x-splade-select name="country_code" label="Countries" :options="1" /> --}}
    {{--        <x-splade-checkbox name="admin" label="admin" /> --}}
    {{--        <x-splade-checkbox name="admin" label="user" /> --}}
    {{--        <x-splade-checkbox name="admin" label="seller" /> --}}
    {{--        <x-splade-textarea name="description" placeholder="description" label="description" /> --}}
    {{--        <x-splade-button class="mt-4 font-semibold"> --}}
    {{--        </x-splade-button> --}}
    {{--    </x-splade-form> --}}
</x-layout>
