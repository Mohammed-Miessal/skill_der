<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}"> --}}
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf


        <!-- Profile Image -->

        <div>
            <x-input-label for="image" :value="__('Profile Image')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>



        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class=" flex flex-col mt-4">
            <label for="skill" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                Skills</label>
            <div class="relative flex w-full">

                <select id="select-skill" name="skills[]" multiple placeholder="Select skills..." autocomplete="off"
                    class="block w-full rounded-sm cursor-pointer focus:outline-none" multiple>
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                </select>

            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
