{{--
    <div class="flex items-center justify-center  p-5 border-b rounded-t">
        <h1 class="text-2xl font-bold text-center mb-6 text-gray-900 dark:text-white font-lora">
            Edit <span class="text-gray-500 font-lora"> Company </span>
        </h1>
    </div>

    <div class="p-6 space-y-6">

        <form action="{{ route('admin.companies.update', $company->id) }}" method="post" enctype="multipart/form-data"
            id="myForm">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Name</label>
                    <input type="text" name="name" id="name" value="{{ $company->name }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                        placeholder="Name Max(50 chars)">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="image" class="text-sm font-medium text-gray-900 block mb-2">Image</label>
                    <input type="file" name="image" id="image" accept="image/*"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">

                    @if ($company->image)
                        <p class="mt-2 text-sm text-gray-500">Current Image: {{ $company->image }}</p>
                    @endif
                </div>

            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button
                    class="text-dark bg-gray-100 hover:bg-cyan-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:text-gray-400 dark:focus:ring-gray-700"
                    type="submit">Save</button>
            </div>

        </form>
    </div> --}}


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
                            Add Company </h2>


                    </div>
                    <form action="{{ route('admin.companies.update', $company->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col mt-6">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                                    <div class="overflow-hidden  dark:border-gray-700 md:rounded-lg ">

                                        <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="LastName"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                                Name</label>
                                            <input type="text" name="name" id="name" required
                                                value="{{ $company->name }}"
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=" Company Name " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <fieldset class="w-full space-y-1 dark:text-gray-100">
                            <label for="files" class="block text-sm font-medium">Attachments</label>
                            <div class="flex">
                                <input type="file" name="image" id="image" accept="image/*"
                                    class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">

                            </div>
                            @if ($company->image)
                                <p class="mt-2 text-sm text-gray-500">Current Image: {{ $company->image }}</p>
                            @endif
                        </fieldset>

                        <div class="p-6 mt-3  rounded-b">
                            <button
                                class="text-dark bg-gray-100 hover:bg-cyan-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:text-gray-400 dark:focus:ring-gray-700"
                                type="submit">Save</button>
                        </div>
                    </form>
                </section>

            </div>
        </div>
    </div>


</x-admin-layout>
