{{--
     //@extends('components.app')
     --}}

@extends('components.announcements')
@section('content')
    <!-- Main -->




    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-800 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl  ">

                <!-- For test  -->
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                    {{ $announcement->title }}
                </h1>

                <p class="text-justify dark:text-gray-300">
                    <!-- // ! Here will be the announcement  -->
                    {{ $announcement->content }}
                </p>
                <!-- For test  -->




                <h6
                    class="mt-10 text-xl font-extrabold leading-tight text-blue-600 lg:mb-6 lg:text-xl dark:text-white font-lora   ">
                    Skills Required :
                    <span class="font-mulish  text-indigo-600 text-sm ">
                        @foreach ($announcement->skills as $skill)
                            <span
                                class="mr-2 px-2 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 rounded-md ">
                                {{ $skill->name }}
                            </span>
                        @endforeach
                    </span>

                </h6>



                <h6
                    class="mt-10 text-xl font-extrabold leading-tight text-blue-600 lg:mb-6 lg:text-xl dark:text-white font-lora flex flex-row gap-4">
                    Partner Company:
                    <div class="flex items-center  ">
                        <img src="{{ asset('storage/companies_images/' . $announcement->company->image) }}"
                            alt="{{ $announcement->name }}'s Profile Image"
                            class="h-1/5 w-1/6 object-cover rounded-full shadow mr-2" />

                        <span class="font-mulish text-indigo-600">
                            {{ $announcement->company->name }}
                        </span>
                    </div>
                </h6>

                @role('Apprenant')
                    @if (session('success'))
                        <div class="alert alert-success text-green-600 font-bold font-mono">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger text-red-600 font-bold font-mono">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('apply', $announcement->id) }}" method="post">
                        @csrf

                        <button class="group relative inline-block focus:outline-none focus:ring">
                            <span
                                class="absolute inset-0 translate-x-0 translate-y-0 bg-yellow-300 transition-transform group-hover:translate-x-1.5 group-hover:translate-y-1.5"></span>

                            <span
                                class="relative inline-block border-2 border-current px-8 py-3 text-sm font-bold uppercase tracking-widest">
                                Apply to this Offer
                            </span>
                        </button>



                    </form>
                @endrole



            </article>
        </div>
    </main>

    <!-- content -->




    <!-- Main -->
@endsection
