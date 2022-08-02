<!-- Modal toggle -->
<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" class="inset-0 bg-gray-500 bg-opacity-75 backdrop-blur-xl bg-white/30 transition-opacity h-auto overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex " aria-modal="true" role="dialog" >
  <div class="relative p-4 w-full max-w-md h-full md:h-auto">
    <!-- Modal content -->
    <div class="relative bg-white rounded-md shadow dark:bg-gray-700">
      <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-red-500 hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
      <div class="py-3 px-3 lg:px-4">
        <div class="py-4 -px-2 rounded-t border-b dark:border-gray-600">
          <h3 class="text-xl font-medium text-gray-900 lg:text-md dark:text-white">
           Publish a Product
          </h3>
        </div>
        <div class="my-4 space-y-3">
        </div>
        <form class="space-y-6" wire:submit="save">
            @csrf
          <div>
            <label for="product" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Product Name</label>
            <input wire:model.lazy="product_name" type="text" name="product" id="product" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Black T-shirt" required />
            @error('product_name')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                 {{ $message }}
            </p>
            @enderror
        </div>
          <div>
            <div>
              <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
              <div class="mt-1 relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <span class="text-gray-500 sm:text-sm"> $ </span>
                </div>
                <input wire:model.lazy="price" type="text" name="price" id="price" class="bg-gray-50 border text-gray-900 text-sm  dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white focus:ring-indigo-500 focus:border-indigo-500 block p-2.5 w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" required />
                <div class="absolute inset-y-0 right-0 flex items-center">
                  <label for="currency" class="sr-only">Currency</label>
                  <select wire:model.lazy="currency_symbol" id="currency_symbol" name="currency_symbol" class="focus:ring-indigo-500 focus:border-indigo-500 h-full py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md" required >
                    <option value="$">USD</option>
                    <option>CAD</option>
                    <option>EUR</option>
                  </select>

                </div>
            </div>
                @error('price')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                </p>
                @enderror
            </div>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700">
              Product Image
            </label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-7 w-7 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="flex justify-center text-sm text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <span class="text-center items-center">Upload a file</span>
                    <input wire:model.lazy="photo" id="file-upload" name="file-upload" type="file" class="sr-only" required />
                  </label>
                  <div wire:loading wire:target="photo">Uploading...</div>
                </div>
                @if (@$photo)
                <img class="ml-[5rem] mr-[5rem] flex-none w-[0.0625rem] h-[12rem] overflow-hidden md:w-auto" src="{{ $photo->temporaryUrl() }}" alt="product image preview">
                @endif
                <div class="w-full">
                    <p class="text-gray-500 text-xs">customer are likely to buy a product with sample image</p>
                  </div>
                <p class="text-xs text-gray-500">
                  PNG, JPG, GIF up to 5MB
                </p>
                @error('photo')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                     {{ $message }}
                </p>
                @enderror
              </div>
            </div>
          </div>
          <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">publish your product</button>
          <div class="text-sm font-medium text-gray-500 dark:text-gray-300">

          </div>
        </form>
      </div>
    </div>
  </div>
</div>

