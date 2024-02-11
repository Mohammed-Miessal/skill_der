<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <section class="container px-4 mx-auto my-10">

                    <div class="flex  gap-x-3 w-full justify-around  ">
                        <h2 class="text-lg font-medium text-gray-800 dark:text-white flex  items-center justify-center ">
                            Create Role </h2>
                    </div>

                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">

                                <form action="{{ route('admin.roles.store') }}" method="POST">
                                    @csrf
                                    <div class="mt-10">

                                        <label for="name" class="block text-xs font-medium text-gray-400"> Role Name
                                        </label>

                                        <input type="text" id="name" placeholder="new role " name="name"
                                            class="mt-1 w-full rounded-md text-white border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-700" />

                                        @error('name')
                                            <span class="text-red-600"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <button type="submit"
                                        class="mt-5 px-4 py-3 font-semibold border rounded dark:border-gray-100 dark:text-gray-100">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>


                </section>

            </div>
        </div>
    </div>
</x-admin-layout>
