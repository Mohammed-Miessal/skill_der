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
                            Assign role to  User </h2>
                    </div>

                    <div class="flex flex-col mt-6">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">


                            {{-- Permissions to a role --}}
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8 ">


                                <div class="mt-10">

                                    <h2 class="dark:text-white text-lg ">Role assigned : </h2>
                                    <div class="my-5">
                                        @if ($user->roles)

                                            @foreach ($user->roles as $role)
                                                <button
                                                    class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                    <form
                                                        action="{{ route('admin.users.roles.remove', [$user->id, $role->id]) }}"
                                                        method="post" onsubmit="return confirm('Are you sure?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                            {{ $role->name }}
                                                        </button>
                                                    </form>
                                                </button>
                                            @endforeach

                                        @endif
                                    </div>


                                    <form action="{{ route('admin.users.roles', $user->id) }}" method="POST">
                                        @csrf

                                        <div>
                                            <label for="role"
                                                class="block text-sm font-medium text-gray-900 dark:text-white">
                                                Roles </label>

                                            <select name="role" id="role"
                                                class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}">{{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        @error('role')
                                            <span class="text-red-600"> {{ $message }} </span>
                                        @enderror
                                        <button type="submit"
                                            class="mt-5 px-4 py-3 font-semibold border rounded dark:border-gray-100 dark:text-gray-100">
                                            Assign
                                        </button>
                                    </form>
                                </div>


                            </div>


                        </div>



                    </div>


                </section>

            </div>
        </div>
    </div>
</x-admin-layout>
