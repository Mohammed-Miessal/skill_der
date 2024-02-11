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
                            Add Announcement </h2>


                    </div>

                    <form action="{{ route('admin.announcements.store') }}" method="post" id="myForm"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="flex flex-col mt-6">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">
                                    <div class="overflow-hidden  dark:border-gray-700 md:rounded-lg ">

                                        <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="title"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                                Title</label>
                                            <input type="text" name="title" id="title" required
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=" Title " />
                                        </div>
                                    </div>

                                    <div class="overflow-hidden  dark:border-gray-700 md:rounded-lg ">

                                        <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="description"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                                Description</label>
                                            <input type="text" name="description" id="description" required
                                                class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                                placeholder=" Description" />
                                        </div>
                                    </div>

                                    <div class="overflow-hidden  dark:border-gray-700 md:rounded-lg ">

                                        <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                            <label for="description"
                                                class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                                Company</label>
                                            <select id="company_id" name="company_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                <option value="" disabled>Choose a Company</option>

                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <fieldset class="w-full space-y-1 dark:text-gray-100 mb-6 ">
                            <label for="files" class="block text-sm font-medium">Attachments</label>
                            <div class="flex">
                                <input type="file" name="image" id="image" accept="image/*"
                                    class="px-8 py-12 border-2 border-dashed rounded-md dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800">
                            </div>
                        </fieldset>

                        <fieldset class="w-full space-y-1 dark:text-gray-100 mb-6  ">
                            <label for="files" class="block text-sm font-medium">Content</label>
                            <div class="flex">
                                <textarea name="content" id="content"
                                    class="dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800   shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">

                                </textarea>

                            </div>
                        </fieldset>


                        <div class="overflow-hidden  dark:border-gray-700 md:rounded-lg ">

                            <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                <label for="description"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                    Skills</label>


                                <select id="select-skill" name="skills[]" multiple placeholder="Select skills..."
                                    autocomplete="off" class="block w-full rounded-sm cursor-pointer focus:outline-none"
                                    multiple>
                                    @foreach ($skills as $skill)
                                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                    @endforeach
                                </select>


                            </div>
                        </div>



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
