
<x-app-layout>
    <!-- component -->
    <!-- Code block starts -->
    <dh-component>
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

        <form id="login">
            <div class="bg-white dark:bg-gray-800">
                <div class="container mx-auto bg-white dark:bg-gray-800 rounded">
                    <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5 bg-white dark:bg-gray-800">
                        <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                            <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">You<span
                                    class="text-blue-600 ">Code</span> </p>
                            <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                                    <path class="heroicon-ui"
                                        d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <div class="xl:w-9/12 w-11/12 mx-auto xl:mx-0">
                            <div class="rounded relative mt-8 h-48">
                                <img src="https://cdn.tuk.dev/assets/webapp/forms/form_layouts/form1.jpg" alt=""
                                    class="w-full h-full object-cover rounded absolute shadow" />
                                <div class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded"></div>

                                <div
                                    class="w-20 h-20 rounded-full bg-cover bg-center bg-no-repeat absolute bottom-0 -mb-10 ml-12 shadow flex items-center justify-center">

                                    <!-- Add this code where you want to display the profile image -->
                                    @if ($user->image)
                                        {{-- <img src="{{ asset('storage/profile_images/'. $user->image) }}"
                                            alt="{{ $user->name }}'s Profile Image"
                                            class="absolute z-0 h-full w-full object-cover rounded-full shadow top-0 left-0 bottom-0 right-0" /> --}}


                                        <img src="{{ asset('storage/' . $user->image) }}"
                                            alt="{{ $user->name }}'s Profile Image"
                                            class="absolute z-0 h-full w-full object-cover rounded-full shadow top-0 left-0 bottom-0 right-0" />
                                    @endif




                                    <div
                                        class="absolute bg-black opacity-50 top-0 right-0 bottom-0 left-0 rounded-full z-0">
                                    </div>

                                </div>
                            </div>
                            <div class="mt-16 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                                <label for="username"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Name</label>
                                <input tabindex="0" type="text" id="username" name="username" disabled
                                    class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                    placeholder="{{ $user->name }}" />
                            </div>
                            {{-- <div class="mt-8 flex flex-col xl:w-3/5 lg:w-1/2 md:w-1/2 w-full">
                                <label for="about"
                                    class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">About</label>
                                <textarea id="about" name="about" required
                                    class="bg-transparent border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 resize-none placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                    placeholder="Let the world know who you are" rows="5"></textarea>
                                <p class="w-full text-right text-xs pt-1 text-gray-600 dark:text-gray-400">Character
                                    Limit: 200</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="container mx-auto bg-white dark:bg-gray-800 mt-10 rounded px-4">
                    <div class="xl:w-full border-b border-gray-300 dark:border-gray-700 py-5">
                        <div class="flex w-11/12 mx-auto xl:w-full xl:mx-0 items-center">
                            <p class="text-lg text-gray-800 dark:text-gray-100 font-bold">Personal Information</p>
                            <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                    height="16">
                                    <path class="heroicon-ui"
                                        d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto pt-4">
                        <div class="container mx-auto">
                            <form class="my-6 w-11/12 mx-auto xl:w-full xl:mx-0">


                                {{--
                                <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <label for="LastName"
                                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Last
                                        Name</label>
                                    <input tabindex="0" type="text" id="LastName" name="lastName" required
                                        class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                        placeholder="" />
                                </div> --}}
                                <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <label for="Email"
                                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Email</label>
                                    <div class="border border-green-400 shadow-sm rounded flex">
                                        <div tabindex="0"
                                            class="focus:outline-none px-4 py-3 dark:text-gray-100 flex items-center border-r border-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-mail" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                                <polyline points="3 7 12 13 21 7" />
                                            </svg>
                                        </div>
                                        <input tabindex="0" type="text" id="Email" name="email" disabled
                                            class="pl-3 py-3 w-full text-sm focus:outline-none placeholder-gray-500 rounded bg-transparent text-gray-600 dark:text-gray-400"
                                            placeholder="{{ $user->email }}" />
                                    </div>
                                    {{-- <div class="flex justify-between items-center pt-1 text-green-700">
                                        <p class="text-xs">Email submission success!</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                            height="16">
                                            <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0
                                                0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z" stroke="currentColor"
                                                stroke-width="0.25" stroke-linecap="round" stroke-linejoin="round"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div> --}}
                                </div>

                                <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <label for="LastName"
                                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">
                                        Skills
                                    </label>
                                    <div class="flow-root">
                                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                            @forelse($skills as $skill)
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center space-x-4">

                                                    <div class="flex-1 min-w-0">

                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            {{ $skill->name }}
                                                        </p>
                                                    </div>
                                                    {{-- <div
                                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        $320
                                                    </div> --}}
                                                </div>
                                            </li>
                                            {{-- <li class="py-3 sm:py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full"
                                                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                                            alt="Bonnie image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p
                                                            class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            Bonnie Green
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            email@windster.com
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        $3467
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full"
                                                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                            alt="Michael image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p
                                                            class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            Michael Gough
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            email@windster.com
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        $67
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="py-3 sm:py-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full"
                                                            src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                            alt="Lana image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p
                                                            class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            Lana Byrd
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            email@windster.com
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        $367
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="pt-3 pb-0 sm:pt-4">
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        <img class="w-8 h-8 rounded-full"
                                                            src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                            alt="Thomas image">
                                                    </div>
                                                    <div class="flex-1 min-w-0">
                                                        <p
                                                            class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                            Thomes Lean
                                                        </p>
                                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                            email@windster.com
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                                        $2367
                                                    </div>
                                                </div>
                                            </li> --}}
                                            @empty

                                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                No skills yet
                                            </p>
                                        @endforelse
                                        </ul>
                                    </div>
                                </div>







                                {{-- <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <label for="StreetAddress"
                                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Street
                                        Address</label>
                                    <input tabindex="0" type="text" id="StreetAddress" name="streetAddress"
                                        required
                                        class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded bg-transparent text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                        placeholder="" />
                                </div>
                                <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <label for="City"
                                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">City</label>
                                    <div class="border border-gray-300 dark:border-gray-700 shadow-sm rounded flex">
                                        <input tabindex="0" type="text" id="City" name="city" required
                                            class="pl-3 py-3 w-full text-sm focus:outline-none border border-transparent focus:border-indigo-700 bg-transparent rounded placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                            placeholder="Los Angeles" />
                                        <div
                                            class="px-4 flex items-center border-l border-gray-300 dark:border-gray-700 flex-col justify-center text-gray-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-chevron-up" width="16"
                                                height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <polyline points="6 15 12 9 18 15" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-chevron-down" width="16"
                                                height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <polyline points="6 9 12 15 18 9" />
                                            </svg>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <label for="State/Province"
                                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">State/Province</label>
                                    <input tabindex="0" type="text" id="State/Province" name="state" required
                                        class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm bg-transparent rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                        placeholder="California" />
                                </div>
                                <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <label for="Country"
                                        class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Country</label>
                                    <input tabindex="0" type="text" id="Country" name="country" required
                                        class="border bg-transparent border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                        placeholder="United States" />
                                </div>
                                <div class="xl:w-1/4 lg:w-1/2 md:w-1/2 flex flex-col mb-6">
                                    <div class="flex items-center pb-2">
                                        <label for="ZIP"
                                            class="text-sm font-bold text-gray-800 dark:text-gray-100">ZIP/Postal
                                            Code</label>
                                        <div class="ml-2 cursor-pointer text-gray-600 dark:text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                width="16" height="16">
                                                <path class="heroicon-ui"
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm0-9a1 1 0 0 1 1 1v4a1 1 0 0 1-2 0v-4a1 1 0 0 1 1-1zm0-4a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                    </div>
                                    <input tabindex="0" type="text" name="zip" required id="ZIP"
                                        class="bg-transparent border border-red-400 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 placeholder-gray-500 text-gray-600 dark:text-gray-400"
                                        placeholder="86745" />
                                    <div class="flex justify-between items-center pt-1 text-red-700">
                                        <p class="text-xs">Incorrect Zip Code</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x-circle">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="15" y1="9" x2="9" y2="15">
                                            </line>
                                            <line x1="9" y1="9" x2="15" y2="15">
                                            </line>
                                        </svg>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                </div>

                {{-- <div class="container mx-auto w-11/12 xl:w-full">
                    <div class="w-full py-4 sm:px-0 bg-white dark:bg-gray-800 flex justify-end">
                        <button role="button" aria-label="cancel form"
                            class="bg-gray-200 focus:outline-none transition duration-150 ease-in-out hover:bg-gray-300 dark:bg-gray-700 rounded text-indigo-600 dark:text-indigo-600 px-6 py-2 text-xs mr-4 focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">Cancel</button>
                        <button role="button" aria-label="Save form"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 bg-indigo-700 focus:outline-none transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-8 py-2 text-sm"
                            type="submit">Save</button>
                    </div>
                </div> --}}
            </div>
        </form>
        <style>
            .checkbox:checked {
                /* Apply class right-0*/
                right: 0;
            }

            .checkbox:checked+.toggle-label {
                /* Apply class bg-indigo-700 */
                background-color: #4c51bf;
            }
        </style>
        <script>
            let form = document.getElementById("login");
            form.addEventListener(
                "submit",
                function(event) {
                    event.preventDefault();
                    let elements = form.elements;
                    let payload = {};
                    for (let i = 0; i < elements.length; i++) {
                        let item = elements.item(i);
                        switch (item.type) {
                            case "checkbox":
                                payload[item.name] = item.checked;
                                break;
                            case "submit":
                                break;
                            default:
                                payload[item.name] = item.value;
                                break;
                        }
                    }
                    // Place your API call here to submit your payload.
                    console.log("payload", payload);
                },
                true
            );
        </script>



    </dh-component>
    <!-- Code block ends -->


</x-app-layout>
