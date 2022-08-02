<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="">
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
                    @if(($products->isEmpty()))
                            <span class="mt-5 w-full bg-white text-green-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">No product available</span>
                    @endif
                    @foreach ($products as $product)
                        @if(!$product->is_paid_for)
                    <div class="">
                        <div
                            class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="{{ Storage::url($product->photo) }}" alt="Front of men's Basic Tee in black."
                                class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            card
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    {{ $product->product_name }}
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $product->variant }}</p>
                            </div>
                            <p class="text-xl font-semibold text-gray-900">{{ $product->currency_symbol . '' . number_format($product->price)}}</p>
                        </div>

                        @include('partials.e_commerce_btn',
                            [
                                'product_id' => $product->id,
                        ])
                    </div>
                     @endif
                    @endforeach
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
