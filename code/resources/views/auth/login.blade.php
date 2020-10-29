<x-guest-layout>
    <div class="gradient flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{asset('images/login-office.jpeg')}}" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{asset('images/login-office-dark.jpeg')}}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                            {{__('Login')}}
                        </h1>

                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">{{__('Username')}}</span>
                                <x-jet-input id="username" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" name="username" :value="old('username')" required autofocus />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700 dark:text-gray-400">{{__('Password')}}</span>
                                <x-jet-input id="password" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="password" name="password" required autocomplete="current-password" />
                            </label>

                            <div class="block mt-4 text-sm">
                                <label for="remember_me" class="flex items-center">
                                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                {{ __('Login') }}
                            </button>
                        </form>

                        <hr class="my-8" />
                        @if (Route::has('password.request'))
                        <p class="mt-4">
                            <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
                                {{__('Forgot your password?')}}
                            </a>
                        </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
