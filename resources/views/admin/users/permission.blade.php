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
                            Add Permission to User </h2>
                    </div>

                    <div class="flex flex-col mt-6">


                        <h2 class="dark:text-white text-lg "> Permissions</h2>
                        <div class="my-5">
                            @if ($user->permissions)
                                @foreach ($user->permissions as $user_permission)
                                    <button
                                        class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">

                                        <form
                                            action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}"
                                            method="post" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                {{ $user_permission->name }}
                                            </button>
                                        </form>


                                    </button>
                                @endforeach
                            @endif
                        </div>

                        <form action="{{ route('admin.users.permissions', $user->id) }}" method="POST">
                            @csrf


                            <div>
                                <label for="permission" class="block text-sm font-medium text-gray-900 dark:text-white">
                                    Permission </label>

                                <select name="permission" id="permission"
                                    class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit"
                                class="mt-5 px-4 py-3 font-semibold border rounded dark:border-gray-100 dark:text-gray-100">
                                Assign
                            </button>
                        </form>

                    </div>


                </section>

            </div>
        </div>
    </div>
</x-admin-layout>
