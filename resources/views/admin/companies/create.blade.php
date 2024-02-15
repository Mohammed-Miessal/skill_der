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
                        <h2 class="text-xl  mb-5 text-gray-800 dark:text-white flex  items-center justify-center font-semibold ">
                            Add Company </h2>


                    </div>
                    <form action="{{ route('admin.companies.store') }}" method="post" id="myForm" enctype="multipart/form-data">
                        @csrf
                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                                <div class="overflow-hidden  dark:border-gray-700 md:rounded-lg ">

                                    <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                        <label for="LastName"
                                            class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                            Name</label>
                                        <input  type="text"  name="name" id="name" required
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

