<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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


    <!-- hero section -->

    <section class="relative pb-36 pt-24   bg-white dark:bg-gray-800">
        <div
            class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">
            <div class="absolute w-full lg:w-1/2 inset-y-0 lg:right-0 hidden lg:block">
                <span
                    class="absolute -left-6 md:left-4 top-24 lg:top-28 w-24 h-24 rotate-90 skew-x-12 rounded-3xl bg-green-400 blur-xl opacity-60 lg:opacity-95 lg:block hidden"></span>
                <span class="absolute right-4 bottom-12 w-24 h-24 rounded-3xl bg-blue-600 blur-xl opacity-80"></span>
            </div>
            <span
                class="w-4/12 lg:w-2/12 aspect-square bg-gradient-to-tr from-blue-600 to-green-400 absolute -top-5 lg:left-0 rounded-full skew-y-12 blur-2xl opacity-40 skew-x-12 rotate-90"></span>
            <div
                class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
            lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

                <h1
                    class="text-3xl leading-tight sm:text-4xl md:text-5xl xl:text-6xl
            font-bold text-gray-900  dark:text-white">
                    Unlock Your Professional Potential: Join the Job Dating <span
                        class="text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 from-20% via-blue-600 via-30% to-green-600">Revolution!</span>

                </h1>

                <div class="mt-10  w-full flex max-w-md mx-auto lg:mx-0">
                    <div class="flex sm:flex-row flex-col gap-5 w-full">
                        <form action="#"
                            class="py-1 pl-6 w-full pr-1 flex gap-3 items-center text-gray-600 shadow-lg shadow-gray-200/20
                            border border-gray-200 bg-gray-100 rounded-full ease-linear focus-within:bg-white  focus-within:border-blue-600">
                            <span class="min-w-max pr-2 border-r border-gray-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                                </svg>
                            </span>
                            <input type="email" name="" id="" placeholder="youcode@gmail.com"
                                class="w-full py-3 outline-none border-none bg-transparent">
                            <button
                                class="flex text-white justify-center items-center w-max min-w-max sm:w-max px-6 h-12 rounded-full outline-none relative overflow-hidden border duration-300 ease-linear
                                after:absolute after:inset-x-0 after:aspect-square after:scale-0 after:opacity-70 after:origin-center after:duration-300 after:ease-linear after:rounded-full after:top-0 after:left-0 after:bg-[#172554] hover:after:opacity-100 hover:after:scale-[2.5] bg-blue-600 border-transparent hover:border-[#172554]">
                                <span class="hidden sm:flex relative z-[5]">
                                    Get Started
                                </span>
                                <span class="flex sm:hidden relative z-[5]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex flex-1 lg:w-1/2 lg:h-auto relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
                <img src="{{ asset('images/main.webp') }}" alt="Hero image" width="2350" height="2359"
                    class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96">
            </div>
        </div>
    </section>

    <!-- / hero section -->



    <!-- Announcements -->

    <div
        class="flex flex-col items-center justify-center px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="mb-10  divide-y">

            <section>
                <div class="mb-12 text-center">
                    <h2
                        class="text-dark mb-3.5 text-4xl font-bold  font-mulish text-transparent bg-clip-text bg-gradient-to-br from-indigo-600 from-20% via-blue-600 via-30% to-green-600">
                        Announcements
                    </h2>
                    <p>
                        Browse through the announcements to discover more related content</p>
                </div>
                <div class="grid grid-cols-1 gap-12 lg:gap-24 lg:grid-cols-2">

                    <div class="sm:flex lg:items-start group">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">

                            <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover"
                                src="{{ asset('images/sincerely-media-vcF5y2Edm6A-unsplash.jpg') }}" alt="text">
                        </div>
                        <div>
                            <span class="text-sm text-gray-500">August 20.20.21</span>
                            <p class="mt-3 text-lg font-medium leading-6">
                                <a href="singlepage" class="text-xl text-gray-800 hover:text-gray-500">B2B Branding: 5
                                    tips
                                    to go from boring to extraordinary </a>
                            </p>
                            <p class="mt-2 text leading-normal text-gray-500">A wonderful serenity has taken possession
                                of
                                my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </p>
                        </div>
                    </div>

                    <div class="sm:flex lg:items-start group">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                            <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover"
                                src="{{ asset('images/the-jopwell-collection-u5pAYGDWD54-unsplash.jpg') }}"
                                alt="text">
                        </div>
                        <div>
                            <span class="text-sm text-gray-500">August 20.20.21</span>
                            <p class="mt-3 text-lg font-medium leading-6">
                                <a href="./blog-post.html" class="text-xl text-gray-800 hover:text-gray-500">Building
                                    a
                                    Career in Character Design: A chat with Sarah Beth Morgan </a>
                            </p>
                            <p class="mt-2 text leading-normal text-gray-500">A wonderful serenity has taken possession
                                of
                                my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </p>
                        </div>
                    </div>

                    <div class="sm:flex lg:items-start group">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                            <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover"
                                src="{{ asset('images/uk-black-tech-uZyE3w7khzw-unsplash.jpg') }}" alt="text">
                        </div>
                        <div>
                            <span class="text-sm text-gray-500">August 20.20.21</span>
                            <p class="mt-3 text-lg font-medium leading-6">
                                <a href="./blog-post.html" class="text-xl text-gray-800 hover:text-gray-500">12
                                    Graphic
                                    Design Skills You Need To Get Hired (&amp; How to Develop Them) </a>
                            </p>
                            <p class="mt-2 text leading-normal text-gray-500">A wonderful serenity has taken possession
                                of
                                my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </p>
                        </div>
                    </div>

                    <div class="sm:flex lg:items-start group">
                        <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                            <img class="w-full rounded-md sm:h-32 sm:w-32 object-cover"
                                src="{{ asset('images/campaign-creators-qCi_MzVODoU-unsplash.jpg') }}"
                                alt="text">
                        </div>
                        <div>
                            <span class="text-sm text-gray-500">August 20.20.21</span>
                            <p class="mt-3 text-lg font-medium leading-6">
                                <a href="./blog-post.html" class="text-xl text-gray-800 hover:text-gray-500">Meet Now
                                    What?
                                    The essential new podcast for evolving designers </a>
                            </p>
                            <p class="mt-2 text leading-normal text-gray-500">A wonderful serenity has taken possession
                                of
                                my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
                            </p>
                        </div>
                    </div>

                </div>
            </section>

        </div>



        <div class="text-center mt-3">

            <a href="{{ route('allannouncements.index') }}"
                class="group flex items-center justify-between gap-4 rounded-lg border border-current px-5 py-3 text-blue-600 transition-colors hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500">
                <span class="font-medium transition-colors group-hover:text-white"> Find out more </span>

                <span class="shrink-0 rounded-full border border-blue-600 bg-white p-2 group-active:border-blue-500">
                    <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </span>
            </a>

        </div>
    </div>

    <!-- Announcements -->



    <script src="{{ asset('js/darkmode.js') }}"></script>
</body>

</html>
