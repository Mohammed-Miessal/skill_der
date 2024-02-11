<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tiny.cloud/1/vsrjyi1h7qdx344wmh8izqmq4pzw7fqg2wa4fx9iavb8s08v/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css" />

    <script>
        // On page load or when changing themes
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        // Tiny script
        // tinymce.init({
        //     selector: 'textarea',
        //     plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        //     toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        //     tinycomments_mode: 'embedded',
        //     tinycomments_author: 'Author name',
        //     mergetags_list: [{
        //             value: 'First.Name',
        //             title: 'First Name'
        //         },
        //         {
        //             value: 'Email',
        //             title: 'Email'
        //         },
        //     ],
        //     ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
        //         "See docs to implement AI Assistant")),
        // });
    </script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="flex h-screen dark:bg-gray-800">
    <!-- Aside -->
    <div class="flex h-screen  flex-col justify-between border-e bg-white dark:bg-gray-200 w-20 ">
        <div class="flex flex-col h-full justify-between border-t border-gray-100">
            <!-- Logo -->
            <div class="flex items-center justify-center h-16 w-16 ml-3">
                <span class="grid h-10 w-10 place-content-center text-xs text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 80">
                        <path fill="#8cc78c"
                            d="M78,65c0,0-10-10-10-20c8.127-7.594,13.605-9.895,20-10.961c0,4.263,0,8.526,0,8.526 S80.931,44.737,78,49C78,59.658,78,65,78,65z">
                        </path>
                        <path fill="#8cc78c"
                            d="M88,18c0,0-34.679,0.811-50,14c4,15,12.679,29.61,28,42c6.395,0,10,0,10,0 S55.227,55.089,55.094,38.702C65.485,31.508,75.077,28.132,88,26C88,21.737,88,18,88,18z">
                        </path>
                        <path fill="#8cc78c"
                            d="M54,74H36c0,0-14.737-10.674-19-20c11.724-1.865,17-3,17-3S44.008,66.14,54,74z"></path>
                        <polygon fill="#8cc78c" points="88,78 15,78 7,69.211 7,75.206 13.395,82 88,82"></polygon>
                        <path fill="#1f212b"
                            d="M78,66c-0.26,0-0.516-0.102-0.707-0.293C76.873,65.287,67,55.296,67,45 c0-0.155,0.036-0.309,0.105-0.447C69.374,40.016,78.949,34,87.894,33.045c0.29-0.029,0.564,0.062,0.775,0.25 C88.88,33.485,89,33.756,89,34.039v8.526c0,0.438-0.286,0.826-0.706,0.956C88.229,43.542,81.8,45.559,79,49.32V65 c0,0.404-0.243,0.77-0.617,0.924C78.259,65.976,78.129,66,78,66z M69.002,45.244c0.119,6.901,5.245,13.887,7.998,17.149V49 c0-0.202,0.062-0.399,0.176-0.566c2.562-3.725,7.895-5.896,9.824-6.586v-6.671C78.682,36.447,70.896,41.855,69.002,45.244z">
                        </path>
                        <path fill="#1f212b"
                            d="M72.69,52.5c-0.197,0-0.384-0.117-0.463-0.311C71.401,50.168,71,48.307,71,46.5 c0-0.077,0.018-0.152,0.052-0.221c1.427-2.895,7.304-7.258,14.311-9.26c0.269-0.08,0.543,0.077,0.618,0.343 c0.076,0.266-0.077,0.543-0.343,0.618c-7.022,2.007-12.373,6.261-13.637,8.639c0.018,1.638,0.395,3.338,1.152,5.191 c0.104,0.256-0.019,0.548-0.273,0.652C72.817,52.488,72.754,52.5,72.69,52.5z">
                        </path>
                        <path fill="#1f212b"
                            d="M75.619,57.875c-0.163,0-0.323-0.08-0.42-0.228c-0.807-1.244-1.427-2.289-1.953-3.29 c-0.129-0.244-0.035-0.547,0.21-0.675c0.242-0.128,0.547-0.036,0.675,0.21c0.512,0.973,1.118,1.993,1.908,3.21 c0.149,0.232,0.084,0.542-0.147,0.692C75.808,57.849,75.713,57.875,75.619,57.875z">
                        </path>
                        <path fill="#1f212b"
                            d="M76,75H66c-0.229,0-0.451-0.078-0.629-0.223c-14.381-11.63-23.915-25.936-28.337-42.52 c-0.1-0.371,0.022-0.766,0.313-1.016C52.762,17.972,86.546,17.034,87.977,17c0.258-0.021,0.529,0.096,0.723,0.285 C88.892,17.473,89,17.73,89,18v8c0,0.489-0.354,0.907-0.837,0.986c-13.391,2.209-22.432,5.652-32.058,12.233 c0.563,15.643,20.365,33.856,20.567,34.041c0.306,0.278,0.409,0.715,0.26,1.101C76.783,74.746,76.413,75,76,75z M66.354,73h7.157 c-5.147-5.102-19.306-20.387-19.418-34.29c-0.003-0.331,0.158-0.642,0.431-0.83C64.25,31.147,73.709,27.433,87,25.154v-6.115 c-5.755,0.265-34.251,2.126-47.868,13.315C43.484,48.156,52.64,61.826,66.354,73z">
                        </path>
                        <path fill="#1f212b"
                            d="M67.229,71c-0.114,0-0.229-0.038-0.322-0.117c-12.868-10.834-21.885-24.037-25.39-37.179 c-0.049-0.186,0.012-0.383,0.157-0.508c2.885-2.483,6.78-4.665,11.577-6.482c0.257-0.095,0.547,0.032,0.645,0.291 c0.098,0.258-0.032,0.547-0.291,0.645c-4.555,1.726-8.267,3.777-11.039,6.102c3.51,12.844,12.373,25.748,24.985,36.366 c0.211,0.178,0.238,0.493,0.061,0.705C67.512,70.939,67.371,71,67.229,71z">
                        </path>
                        <path fill="#1f212b"
                            d="M58.239,26.066c-0.216,0-0.415-0.141-0.479-0.357c-0.078-0.265,0.072-0.543,0.337-0.622 C68.18,22.095,79,21.072,84.552,20.729c0.268-0.041,0.513,0.191,0.53,0.468c0.017,0.276-0.192,0.514-0.468,0.53 c-5.511,0.341-16.245,1.354-26.232,4.318C58.334,26.06,58.286,26.066,58.239,26.066z">
                        </path>
                        <path fill="#1f212b"
                            d="M54,75H36c-0.211,0-0.416-0.066-0.587-0.19c-0.61-0.441-15-10.938-19.322-20.394 c-0.13-0.284-0.12-0.613,0.028-0.889c0.147-0.275,0.415-0.466,0.724-0.515c11.553-1.838,16.895-2.979,16.947-2.99 c0.4-0.087,0.817,0.083,1.044,0.426c0.1,0.15,10.037,15.098,19.784,22.766c0.335,0.264,0.466,0.711,0.327,1.113 C54.806,74.729,54.426,75,54,75z M36.329,73h14.913c-8.252-7.269-15.909-18.248-17.698-20.885 c-1.677,0.339-6.557,1.29-15.038,2.656C22.882,62.788,34.453,71.604,36.329,73z">
                        </path>
                        <path fill="#1f212b"
                            d="M33.608,68.781c-0.111,0-0.224-0.037-0.316-0.112c-4.181-3.415-9.526-8.276-11.247-12.039 c-0.064-0.143-0.06-0.307,0.015-0.444c0.073-0.138,0.207-0.232,0.362-0.258c7.307-1.163,10.685-1.884,10.718-1.892 c0.282-0.05,0.537,0.115,0.595,0.384c0.058,0.271-0.114,0.536-0.384,0.595c-0.033,0.007-3.225,0.688-10.097,1.793 c2.027,3.709,7.488,8.486,10.671,11.086c0.214,0.175,0.245,0.49,0.071,0.704C33.896,68.719,33.753,68.781,33.608,68.781z">
                        </path>
                        <path fill="#1f212b"
                            d="M37,71.435c-0.104,0-0.207-0.031-0.297-0.098c-0.212-0.156-0.953-0.709-2.001-1.536 c-0.217-0.171-0.254-0.485-0.083-0.702c0.171-0.216,0.486-0.253,0.702-0.083c1.034,0.815,1.766,1.362,1.976,1.517 c0.222,0.163,0.27,0.477,0.105,0.699C37.305,71.364,37.153,71.435,37,71.435z">
                        </path>
                        <path fill="#1f212b"
                            d="M88,83H13.395c-0.275,0-0.539-0.114-0.729-0.314l-6.395-6.794C6.098,75.706,6,75.461,6,75.206 v-5.995c0-0.413,0.254-0.783,0.639-0.933c0.388-0.147,0.822-0.047,1.101,0.26L15.442,77H88c0.553,0,1,0.447,1,1v4 C89,82.553,88.553,83,88,83z M13.826,81H87v-2H15c-0.281,0-0.55-0.119-0.739-0.327L8,71.795v3.015L13.826,81z">
                        </path>
                    </svg>
                </span>
            </div>

            <!-- / Logo -->

            <!-- Sidebar -->

            <div class="px-2">
                <div class="py-4">
                    <a href="{{ route('dashboard.index') }}"
                        class="t group relative flex justify-center rounded bg-gray-100 px-2 py-1.5 text-blue-700">
                        <img src="{{ asset('images/dash.png') }}" alt="" class="h-10  w-10" />

                        <span
                            class="z-10 absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white invisible group-hover:visible">
                            General
                        </span>
                    </a>
                </div>

                <ul class="space-y-1 border-t border-gray-100 pt-4">
                    <li>
                        <a href="{{ route('announcements.index') }}"
                            class="group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                            <img src="{{ asset('images/announce.png') }}" alt="" class=" w-10 h-10  " />
                            <span
                                class=" z-10 absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white invisible group-hover:visible">
                                Announcements
                            </span>
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('companies.index') }}"
                            class="mt-4 group relative flex justify-center rounded px-2 py-1.5 text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                            <img src="{{ asset('images/company.png') }}" alt="" class="w-10 h-10 " />
                            <span
                                class=" z-10 absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white invisible group-hover:visible">
                                Companies
                            </span>
                        </a>
                    </li>


                </ul>
            </div>

            <!-- / Sidebar -->

            <!-- buttom sidebar -->

            <div
                class="flex align-bottom justify-center flex-col   sticky inset-x-0 bottom-0 border-t border-gray-100 bg-white p-2 dark:bg-gray-200">
                <div class=" flex align-middle justify-center ">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button type="submit"
                            class="group relative flex w-full justify-center rounded-lg px-2 py-1.5 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>

                            <span
                                class="absolute start-full top-1/2 ms-4 -translate-y-1/2 rounded bg-gray-900 px-2 py-1.5 text-xs font-medium text-white invisible group-hover:visible">
                                Logout
                            </span>
                        </button>
                    </form>
                </div>
                <div class=" flex align-middle justify-center ">
                    <!-- dark mode button -->
                    <button id="theme-toggle" type="button"
                        class=" mt-2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
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

            <!-- / buttom sidebar -->
        </div>
    </div>
    <!-- Aside -->

    <!-- Main -->
    <div class="flex-1 dark:bg-gray-800">
        <div class="flex h-screen w-full bg-gray-200 ">
            <!-- Main -->
            <div class="flex-grow pl-1  overflow-auto bg-gray-200 dark:bg-gray-800">
                <div class="h-full col-span-3 bg-white dark:bg-gray-800 ">
                    <!-- HEADER -->
                    <div class="flex flex-wrap   ">
                        <div class="px-3 mb-6  mx-auto  bg-white rounded-xl dark:bg-gray-600 w-full border-b ">
                            <div class="flex items-stretch justify-end  grow lg:mb-0  py-5 px-5">

                                <div class="flex items-center lg:shrink-0 lg:flex-nowrap justify-end">

                                    <div class="relative flex items-center ml-2 lg:ml-4">
                                        <!-- Dropdown menu  -->
                                        {{-- <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"
                                            type="button"
                                            class="flex  text-sm  rounded-full  focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600  mr-10   items-center justify-center w-10 h-10  font-semibold leading-normal text-center text-white align-middle transition-colors duration-150 ease-in-out shadow-none cursor-pointer   ">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="w-full h-10 rounded-full" src="{{ asset('images/user.jpg') }}"
                                                alt="user photo" />
                                        </button> --}}

                                        <div id="dropdownAvatar"
                                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                                <div>Bonnie Green</div>
                                                <div class="font-medium truncate">
                                                    name@flowbite.com
                                                </div>
                                            </div>
                                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdownUserAvatarButton">
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                                </li>
                                            </ul>
                                            <div class="py-2">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                                    out</a>
                                            </div>
                                        </div>

                                        <!-- Dropdown menu  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /HEADER -->

                    <div class="bg-white dark:bg-gray-800  border-[#D9D9DE] dark:border-gray-700   mb-12 mt-5">
                        <div class="mx-auto w-full px-4 dark:bg-gray-800">
                            <div
                                class="w-full bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden overflow-y-visible ">
                                <section class=" my-6 dark:bg-gray-800 dark:text-gray-100">

                                    <!-- Test  -->


                                    @yield('content')



                                    <!-- Test  -->

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Main -->
        </div>
    </div>
    <!-- Main -->



    <script src="{{ asset('js/darkmode.js') }}"></script>
    <script src="{{ asset('js/localstorage.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</body>

</html>
