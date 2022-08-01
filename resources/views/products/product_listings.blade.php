<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased font-sans bg-gray-500 overflow-hidden  text-gray-600 min-h-full flex flex-col">
    <div class="" style="">
        <div class="bg-white">
           @include('partials.alert')
            <div class="max-w-6xl h-full mx-auto py-6 px-4 sm:py-4 sm:px-6 lg:max-w-8xl lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="flex min-w-0 items-center">
                        <h2 class=" truncate leading-7 text-2xl font-extrabold tracking-tight text-gray-500">Trending Products
                        </h2>
                    </div>
                    <a class="inline-flex justify-center rounded-lg  py-1.5 px-4 bg-transparent  hover:bg-blue-500 -my-2.5 ml-6 mr-6 whitespace-nowrap text-sm font-semibold text-sky-500 hover:text-white translate-x-5 ease-in"
                        href="{{ url('/') }}">Go home
                        <span aria-hidden="true" class="pl-1"> →</span>
                    </a>
                </div>
                <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <div class="group relative">
                        <div
                            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="{{ asset('images/product-01.jpg') }}" alt="Front of men's Basic Tee in black."
                                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            card
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-2xl font-semibold text-gray-900">$35</p>
                        </div>
                        @include('partials.e_commerce_btn')
                    </div>

                    <div class="group relative">
                        <div
                            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="{{ asset('images/product-02.jpg') }}" alt="Front of men's Basic Tee in white."
                                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Aspen White</p>
                            </div>
                            <p class="text-2xl font-semibold text-gray-900">$45</p>
                        </div>
                        @include('partials.e_commerce_btn')
                    </div>

                    <div class="group relative">
                        <div
                            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="{{ asset('images/product-03.jpg') }}" alt="Front of men's Basic Tee in dark gray."
                                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Charcoal</p>
                            </div>
                            <p class="text-2xl font-semibold text-gray-900">$70</p>
                        </div>
                        @include('partials.e_commerce_btn')
                    </div>

                    <div class="group relative">
                        <div
                            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="{{ asset('images/product-04.jpg') }}"
                                alt="Front of men's Artwork Tee in peach with white and brown dots forming an isometric cube."
                                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Artwork Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Iso Dots</p>
                            </div>
                            <p class="text-2xl font-semibold text-gray-900">$155</p>
                        </div>
                        @include('partials.e_commerce_btn')
                    </div>

                </div>
            </div>
        </div>

    </div>
    <script>
        document.querySelector("#close-alert-button").addEventListener("click", ()=> {
        document.querySelector("#alert-3").remove()
    })
    </script>
</body>
</html>
