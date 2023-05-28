<x-layout>
    <div class="flex justify-center items-center h-screen">
        <form class="w-90 shadow-lg" method="post" action="{{ route('register') }}">
            @csrf
            <div class="px-5 py-3 bg-white">
                <div class="mt-5 w-80" style="display: flex; justify-content: center; align-items: center;">
                    <h1 class="text-gray-600">Create New Password</h1>
                </div>
                <div class="mt-3 w-80">
                    <label for="email" class="text-gray-600">Email</label>
                    <div class="relative">
                        <input type="text" name="email"
                            class="h-10 block w-full rounded-sm px-4 py-3 border border-gray-300 pr-10 text-sm focus:border-blue-500 focus:ring-blue-500 ring-gray-100"
                            placeholder="Email@reset.com" />
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
                <div class="mt-3 w-80">
                    <label for="password" class="text-gray-600">Password</label>
                    <div class="relative">
                        <input type="password" name="password"
                            class="h-10 block w-full rounded-sm border border-gray-300 px-4 py-3 pr-10 text-sm focus:border-blue-500 focus:ring-blue-500 ring-gray-100 border border-gray-300"
                            placeholder="Password" />
                        <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                            fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3 w-80">
                    <label for="password" class="text-gray-600">Confirm Password</label>
                    <div class="relative">
                        <input type="password" name="password_confirmation"
                            class="h-10 block w-full rounded-sm px-4 py-3 pr-10 border border-gray-300 text-sm focus:border-blue-500 focus:ring-blue-500 ring-gray-100 border border-gray-300"
                            placeholder="Retype Password" />
                        <svg class="absolute right-3 top-2.5 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                            fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mt-5 w-80 flex justify-between">
                    <button class="bg-blue-500 text-white rounded-md text-center w-28 h-10">Confirm</button>
                </div>

                <div class="mt-2 w-80 text-blue-700">
                    <h1><a href="{{ route('login') }}">Already Registered login</a></h1>
                </div>
            </div>
        </form>
    </div>
</x-layout>
