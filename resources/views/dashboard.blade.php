<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full ">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('layouts.navigation')
            @role('Apprenant')
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center text-xl text-lora my-3">

                    {{-- Dashboard Content --}}
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white flex  items-center justify-center font-mono  ">
                        My Applied Announcements </h2>
                </div>


                {{-- <div class="flex  gap-x-3 w-full justify-around  ">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white flex  items-center justify-center ">
                     My Applied Announcements  </h2>


                </div> --}}



                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg ">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 ">

                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>

                                            <th scope="col" class="px-4 py-3 text-center ">Image</th>
                                            <th scope="col" class="px-4 py-3 text-center">Title</th>
                                            <th scope="col" class="px-4 py-3 text-center">Description</th>
                                            <th scope="col" class="px-4 py-3  text-gray-400 text-center">
                                                View
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appliedAnnouncements as $announcement)
                                            <tr class="border-b dark:border-gray-700">

                                                <td class="px-4 py-3 text-center">
                                                    @if ($announcement->image)
                                                        <div class="flex flex-col justify-center items-center">
                                                            <img src="{{ asset('storage/announcements_images/' . $announcement->image) }}"
                                                                alt="Company Image" class="w-auto h-16">
                                                        </div>
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>

                                                <td class="px-4 py-3 text-center dark:text-white">
                                                    {{ $announcement->title }}
                                                </td>

                                                <td class="px-4 py-3 text-center dark:text-white">
                                                    {{ $announcement->description }}</td>


                                                <!-- Actions -->
                                                <td
                                                    class="px-4 py-3  text-center flex flex-row flex-wrap justify-center dark:text-white  ">
                                                    <!-- Buttons  -->
                                                    <span
                                                        class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm dark:bg-gray-800 dark:border-gray-500 ">

                                                        <a
                                                            href="{{ route('dashboard.show', $announcement->id) }}">
                                                            <button
                                                                class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                                                title="View">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="h-4 w-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                </svg>
                                                            </button>
                                                        </a>

                                                    </span>
                                                    <!-- / Buttons  -->
                                                </td>
                                                <!-- / Actions -->

                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            @endrole

            @role('Admin')
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-center text-xl text-lora my-3">

                    {{-- Dashboard Content --}}
                    <h2 class="text-xl font-medium text-gray-800 dark:text-white flex  items-center justify-center font-mono  ">
                       Admin View  </h2>
                </div>


                {{-- <div class="flex  gap-x-3 w-full justify-around  ">
                    <h2 class="text-lg font-medium text-gray-800 dark:text-white flex  items-center justify-center ">
                     My Applied Announcements  </h2>


                </div> --}}



                <div class="flex flex-col mt-6">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                            <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg ">
                                {{-- <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 ">

                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>

                                            <th scope="col" class="px-4 py-3 text-center ">Image</th>
                                            <th scope="col" class="px-4 py-3 text-center">Title</th>
                                            <th scope="col" class="px-4 py-3 text-center">Description</th>
                                            <th scope="col" class="px-4 py-3  text-gray-400 text-center">
                                                View
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appliedAnnouncements as $announcement)
                                            <tr class="border-b dark:border-gray-700">

                                                <td class="px-4 py-3 text-center">
                                                    @if ($announcement->image)
                                                        <div class="flex flex-col justify-center items-center">
                                                            <img src="{{ asset('storage/announcements_images/' . $announcement->image) }}"
                                                                alt="Company Image" class="w-auto h-16">
                                                        </div>
                                                    @else
                                                        No Image
                                                    @endif
                                                </td>

                                                <td class="px-4 py-3 text-center dark:text-white">
                                                    {{ $announcement->title }}
                                                </td>

                                                <td class="px-4 py-3 text-center dark:text-white">
                                                    {{ $announcement->description }}</td>


                                                <!-- Actions -->
                                                <td
                                                    class="px-4 py-3  text-center flex flex-row flex-wrap justify-center dark:text-white  ">
                                                    <!-- Buttons  -->
                                                    <span
                                                        class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm dark:bg-gray-800 dark:border-gray-500 ">

                                                        <a
                                                            href="{{ route('dashboard.show', $announcement->id) }}">
                                                            <button
                                                                class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                                                title="View">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="h-4 w-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                </svg>
                                                            </button>
                                                        </a>

                                                    </span>
                                                    <!-- / Buttons  -->
                                                </td>
                                                <!-- / Actions -->

                                            </tr>
                                        @endforeach



                                    </tbody>
                                </table> --}}


{{-- <h1 class="text-white" > Most populated skill : {{$name }}</h1>
<h1 class="text-white" > Most populated skill : {{$compteur }}</h1> --}}


                            </div>
                        </div>
                    </div>
                </div>


            </div>
            @endrole
        </div>
    </div>
</x-admin-layout>
