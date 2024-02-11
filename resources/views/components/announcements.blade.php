<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite('resources/css/app.css')

</head>






<body class=" bg-white dark:bg-gray-800  ">

    <!-- Header -->

    <div class="w-full px-3 mb-6  mx-auto  bg-white rounded-xl dark:bg-gray-800  border-b dark:border-gray-600  ">
        <div
            class="flex flex-row justify-between  max-w-screen-xl  md:mx-auto md:items-center md:justify-between md:flex-row md:px-2 lg:px-2 mx-5  ">
            <div class="p-4  flex flex-row items-center justify-between">
                <img class="h-8 " src="{{ asset('images/logo.png') }}" alt="Logo image" />
            </div>
            <div class="flex items-center   ">


                @if (Route::has('login'))
                    @auth
                        <a class="group flex items-center justify-between gap-4 rounded-lg border border-blue-600 bg-blue-600 px-4 py-2  transition-colors hover:bg-transparent focus:outline-none focus:ring"
                            href="{{ url('/dashboard') }}">
                            <span
                                class="text-sm   text-white transition-colors group-hover:text-blue-600 group-active:text-blue-500">
                                Dashboard
                            </span>

                            <span
                                class="shrink-0 rounded-full border border-current bg-white  text-blue-600 group-active:text-blue-500">
                                <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </a>
                    @else
                        <a class="group flex items-center justify-between gap-4 rounded-lg border border-blue-600 bg-blue-600 px-4 py-2  transition-colors hover:bg-transparent focus:outline-none focus:ring"
                            href="{{ route('login') }}">
                            <span
                                class="text-sm   text-white transition-colors group-hover:text-blue-600 group-active:text-blue-500">
                                Login
                            </span>

                            <span
                                class="shrink-0 rounded-full border border-current bg-white  text-blue-600 group-active:text-blue-500">
                                <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </a>

                        @if (Route::has('register'))
                            <a class="ml-4 group flex items-center justify-between gap-4 rounded-lg border border-blue-600 bg-blue-600 px-4 py-2  transition-colors hover:bg-transparent focus:outline-none focus:ring"
                                href="{{ route('register') }}">
                                <span
                                    class="text-sm   text-white transition-colors group-hover:text-blue-600 group-active:text-blue-500">
                                    Register
                                </span>

                                <span
                                    class="shrink-0 rounded-full border border-current bg-white  text-blue-600 group-active:text-blue-500">
                                    <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </span>
                            </a>
                        @endif
                    @endauth
                @endif
                <!-- dark mode button -->
                <button id="theme-toggle" type="button"
                    class="ml-5 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4  dark:focus:ring-gray-700 rounded-lg text-sm ">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- /dark mode button -->
            </div>
        </div>
    </div>

    <!-- / Header -->


    @yield('content')



    <script src="{{ asset('js/darkmode.js') }}"></script>
</body>

</html>
