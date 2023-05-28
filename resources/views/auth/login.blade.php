<x-layout>

    <div class="flex justify-center items-center h-screen">
        <form class="w-90 shadow-lg" method="post" action="{{ route('login') }}">
            @csrf
            <div class="px-5 py-3 bg-white">
                <div class="mt-5 w-80" style="display: flex; justify-content: center; align-items: center;">
                    <h1 class="text-gray-600">Sign in to your account</h1>
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

                <div class="mt-3 w-80">
                    <label for="password" class="text-gray-600">Password</label>
                    <div class="relative">
                        <input type="password" name="password"
                            class="h-10 block w-full rounded-sm px-4 py-3 pr-10 text-sm focus:border-blue-500 focus:ring-blue-500 ring-gray-100 border border-gray-300"
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
                <div class="mt-5 w-80 flex justify-between">
                    <div class="flex items-center">
                        <input checked id="checked-checkbox" type="checkbox" value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checked-checkbox"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-500">Remember Me</label>
                    </div>
                    <button class="bg-blue-500 text-white rounded-md text-center w-28 h-10">Sign In</button>
                </div>

                <div class="mt-5 w-80 flex">
                    <h1 class="font-semibold justify-center mx-auto text-gray-600">- OR -</h1>
                </div>

                <div class="mt-5 w-80 flex">
                    <button class="w-full bg-blue-500 h-10 rounded-sm text-white flex items-center justify-center">
                        <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Sign In With Facebook
                    </button>
                </div>
                <div class="mt-2 w-80 flex">
                    <button class="w-full bg-gray-500 h-10 rounded-sm text-white flex items-center justify-center">
                        <svg class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12.32c0-.497-.04-.988-.116-1.473H12v2.797h4.918c-.223 1.23-.9 2.28-1.925 3.004v2.504h3.125c1.727-1.587 2.719-3.93 2.719-6.832z">
                            </path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.882 10.624C3.962 9.76 4 8.878 4 8c0-.878-.038-1.76-.118-2.624C4.363 4.227 5.202 3 6.312 3h3.603v2.797H7.797c-.462 0-.89.182-1.208.51-.318.328-.5.78-.5 1.242 0 .463.182.915.5 1.243.318.327.745.51 1.207.51h1.4v2.797H6.313c-1.11 0-1.948-1.226-1.431-2.374z">
                            </path>
                        </svg>
                        Sign In With Google +
                    </button>
                </div>

                <div class="mt-2 w-80 text-blue-700">
                    <h1><a href="{{ route('forgot-password') }}">I forgot my password</a></h1>
                    <h1><a href="{{ route('register') }}">Create an account</a></h1>
                </div>
            </div>
        </form>
    </div>
</x-layout>
