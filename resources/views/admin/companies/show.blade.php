@extends('components.dash')
@section('content')
    <div class="flex justify-end items-center w-full md:w-full">
        <!-- Search -->
        <div class="w-full"></div>
        <!-- / Search -->
        <!-- Div avec le bouton aligné à droite -->

    </div>


    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                Name :
                <h1>{{ $company->name }}</h1>
                Image :
                @if ($company->image)
                    <img src="{{ asset('storage/company_images/' . $company->image) }}" alt="Company Image" class="w-16 h-16">
                @else
                    <p>No image available</p>
                @endif


            </article>
        </div>
    </main>
@endsection
