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

                    </div>

                    <fieldset class="w-full space-y-1 dark:text-gray-100 mb-6  ">
                        <label class="block text-sm font-medium">Skills</label>
                        <div class="flex">
                            @foreach ($announcement->skills as $skill)
                                <span
                                    class="mr-2 px-2 py-1 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-300 rounded-md">
                                    {{ $skill->name }}
                                </span>
                            @endforeach
                        </div>
                    </fieldset>

                    <fieldset class="w-full space-y-1 dark:text-gray-100 mb-6  ">
                        <label for="files" class="block text-sm font-medium">Content</label>
                        <div class="flex">
                            <textarea name="content" id="content" disabled
                                class="min-h-48 text-wrap text-justify dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800   shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                                {{ $announcement->content }}
                            </textarea>
                        </div>
                    </fieldset>


                </section>
            </div>
        </div>
    </div>

</x-admin-layout>
