<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @include('layouts.navigation')
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <section class="container px-4 mx-auto my-10">

                    <div class="flex  gap-x-3 w-full justify-around  ">
                        <h2 class="text-lg font-medium text-gray-800 dark:text-white flex  items-center justify-center ">
                            Announcements </h2>

                        <a class="  group flex items-center justify-between gap-3 rounded-lg border border-indigo-600 bg-indigo-600 px-5 py-3 transition-colors hover:bg-transparent focus:outline-none focus:ring"
                            href="{{ route('admin.announcements.create') }}">
                            <span
                                class="font-medium text-white transition-colors group-hover:text-indigo-600 group-active:text-indigo-500">
                                Create
                            </span>

                            <span
                                class="shrink-0 rounded-full border border-current bg-white p-2 text-indigo-600 group-active:text-indigo-500">
                                <svg class="h-4 w-4 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </span>
                        </a>
                    </div>

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
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($announcements as $announcement)
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
                                                                href="{{ route('admin.announcements.edit', $announcement) }}">
                                                                <button
                                                                    class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                                                    title="Edit ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="h-4 w-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                                    </svg>
                                                                </button>
                                                            </a>
                                                            <a
                                                                href="{{ route('admin.announcements.show', $announcement->id) }}">
                                                                <button
                                                                    class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                                                    title="View">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="h-4 w-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                                    </svg>
                                                                </button>
                                                            </a>


                                                            <form
                                                                action="{{ route('admin.announcements.delete', $announcement->id) }}"
                                                                method="post"
                                                                onsubmit="return confirm('Are you sure you want to delete this announcement?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button
                                                                    class="inline-block p-3 text-gray-700 hover:bg-gray-50 focus:relative dark:text-white dark:hover:bg-gray-500"
                                                                    title="Delete ">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="h-4 w-4">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                    </svg>
                                                                </button>
                                                            </form>
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


                </section>

            </div>
        </div>
    </div>
</x-admin-layout>






{{--  --}}
