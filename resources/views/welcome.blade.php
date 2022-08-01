<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="{{ asset('favicon/favicon.svg') }}favicon.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon.png') }}">
    <style>
        [x-cloak] {
            display: none;
        }
    </style>
    @livewireStyles
</head>

<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>

                <div>
                    <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
                        <nav class="px-2 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
                            <div class="container flex flex-wrap justify-between items-center mx-auto">
                                <a href="#" class="flex items-center">
                                    <img alt="Workflow" class="mr-3 flex-none w-[2.0625rem] overflow-hidden md:w-auto"
                                        src="{{ asset('images/Mobile.svg') }}">
                                </a>
                                <button data-collapse-toggle="mobile-menu" type="button"
                                    class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-500"
                                    aria-controls="mobile-menu-2" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                                    <ul
                                        class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                                        <li>
                                            <a href="{{ route('products.index') }}"
                                                class="block py-2 pr-4 pl-3 text-white bg-orange-700 rounded md:bg-transparent md:text-orange-900 md:p-0 md:dark:text-white dark:bg-orange-600 md:dark:bg-transparent"
                                                aria-current="page">Product Lists</a>
                                        </li>
                                        <li>
                                            <button id="open-modal" data-modal-toggle="authentication-modal"
                                                class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-zinc-500 md:hover:bg-transparent md:border-0 md:hover:text-orange-900 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                                                Create Product
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                    </div>
                </div>

                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-700 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Secure and Easy</span>
                            <span class="block text-orange-700 sm:inline">Online Shopping</span>
                        </h1>
                        <p
                            class="mt-3 text-base text-gray-500 0 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Moolre helps manage your money directly in-app while shopping with your card no matter where
                            you are. </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('products.index') }}"
                                    class="w-full flex items-center justify-center px-8 py-1 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-800 md:py-1 md:text-lg md:px-10">
                                    <svg aria-hidden="true" class="animate-bounce text-orange-300 w-6 h-6 mr-2"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    Go Shopping </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="{{ asset('images/4092982.jpg') }}" alt="">
        </div>
    </div>
    @livewire('upload-product')
    @livewireScripts
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>



</body>

</html>
