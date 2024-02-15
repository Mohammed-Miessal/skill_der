@extends('components.announcements')
@section('content')
    <!-- Main -->
    <div
        class="flex flex-col items-center justify-center px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="mb-10  divide-y">

            <section>

                <div class="relative  ">
                    <img class="object-cover w-full h-56 sm:h-96"
                        src="https://images.pexels.com/photos/3184419/pexels-photo-3184419.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260"
                        alt="" />
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
                </div>


                <div class="space-y-8 lg:divide-y lg:divide-gray-100">
                    <div class="mt-12 text-center">
                        <h2 class=" my-3.5 text-2xl font-bold  font-nunito md:text-4xl   ">
                            All Announcements
                        </h2>

                    </div>
                    <span class="flex items-center">
                        <span class="h-px flex-1 bg-black"></span>
                        <span class="shrink-0 px-6 font-mulish  text-blue-600"> Take the chance </span>
                        <span class="h-px flex-1 bg-black"></span>
                    </span>

                    @if ($announcements->isEmpty())
                        <h2 class=" my-3.5 text-xl font-bold  font-nunito md:text-xl text-red-600   ">
                            {{ ' **     No  Announcements  available ' }}
                        </h2>
                    @else
                        @foreach ($announcements as $announcement)
                            <div class="pt-8 sm:flex lg:items-end group">
                                <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                                    <img class="w-full rounded-md h-32 lg:w-32 object-cover"
                                        src="{{ asset('storage/announcements_images/' . $announcement->image) }}"
                                        alt="text">
                                </div>
                                <div>
                                    <span class="text-sm text-gray-500">
                                        <span class="text-gray-600  ">
                                            {{ \Carbon\Carbon::parse($announcement->created_at)->format('F d. m. y') }}
                                        </span>
                                    </span>
                                    <br>
                                    <span class="text-sm text-gray-600 font-bold ">
                                        Company name : <span
                                            class="text-blue-600 underline  ">{{ $announcement->company->name }}</span>
                                    </span>
                                    <p class="mt-3 text-lg font-medium leading-6">
                                        <a href="{{ route('showannouncements.show', $announcement->id) }}"
                                            class="text-xl text-gray-800 group-hover:text-gray-500 lg:text-2xl">
                                            {{ $announcement->title }}
                                        </a>
                                    </p>
                                    <p class="mt-2 text-lg text-gray-500">
                                        {{ $announcement->description }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @endif




                </div>





            </section>

        </div>

    </div>
    <!-- Main -->
@endsection
