<div class="w-full bg-yellow-500 max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <section class="pb-10 font-poppins dark:bg-gray-800 rounded-lg">
        <div class="px-4 py-4 mx-auto max-w-7xl lg:py-6 md:px-6">
            <div class="flex flex-wrap mb-24 -mx-3">
                <div class="w-full pr-2 lg:w-1/4 lg:block">
                    <div class="p-4 mb-5 bg-blue-900 text-white border dark:border-gray-900 dark:bg-gray-900">
                        <h2 class="text-2xl font-blueberry dark:text-gray-400"> Categories</h2>
                        <div class="pb-2 mb-6 border-b border-yellow-500 dark:border-gray-400"></div>
                        <ul>
                            @foreach ($categories as $category)
                                <li class="mb-4" wire:key="{{ $category->id }}">
                                    <label for="{{ $category->slug }}" class="flex items-center dark:text-gray-400 ">
                                        <input type="checkbox" wire:model.live="selected_categories"
                                            id="{{ $category->slug }}" value="{{ $category->id }}" class="w-4 h-4 mr-2">
                                        <span class="text-lg">{{ $category->name }}</span>
                                    </label>
                                </li>
                            @endforeach

                        </ul>

                    </div>
                    <div class="p-4 mb-5 bg-blue-900 border text-white dark:bg-gray-900 dark:border-gray-900">
                        <h2 class="text-2xl font-blueberry dark:text-gray-400">Brand</h2>
                        <div class=" pb-2 mb-6 border-b border-yellow-500 dark:border-gray-400"></div>
                        <ul>
                            @foreach ($brands as $brand)
                                <li class="mb-4" wire:key="{{ $brand->id }}">
                                    <label for="{{ $brand->slug }}" class="flex items-center dark:text-gray-300">
                                        <input type="checkbox" wire:model.live="selected_brands"
                                            id="{{ $brand->slug }}" value="{{ $brand->id }}" class="w-4 h-4 mr-2">
                                        <span class="text-lg dark:text-gray-400">{{ $brand->name }}</span>
                                    </label>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="p-4 mb-5 bg-blue-900 text-white border dark:bg-gray-900 dark:border-gray-900">
                        <h2 class="text-2xl font-blueberry dark:text-gray-400">Product Status</h2>
                        <div class="pb-2 mb-6 border-b border-yellow-500 dark:border-gray-400"></div>
                        <ul>
                            <li class="mb-4">
                                <label for="featured" class="flex items-center dark:text-gray-300">
                                    <input id="featured" wire:model.live="featured" value="1" type="checkbox"
                                        class="w-4 h-4 mr-2">
                                    <span class="text-lg dark:text-gray-400">Featured</span>
                                </label>
                            </li>
                            <li class="mb-4">
                                <label for="on_sale" class="flex items-center dark:text-gray-300">
                                    <input id="on_sale" type="checkbox" class="w-4 h-4 mr-2" wire:model.live="on_sale"
                                        value="1">
                                    <span class="text-lg dark:text-gray-400">On Sale</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div
                        class="p-4 mb-5 bg-blue-900 text-white border border-gray-200 dark:bg-gray-900 dark:border-gray-900">
                        <h2 class="text-2xl font-blueberry dark:text-gray-400">Price</h2>
                        <div class="pb-2 mb-6 border-b border-yellow-500 dark:border-gray-400"></div>
                        <div>
                            <div class="font-semibold text-yellow-500">{{ Number::currency($price_range, 'MAD') }}
                            </div>
                            <input type="range" wire:model.live="price_range"
                                class="w-full h-1 mb-4 bg-yellow-500 rounded appearance-none cursor-pointer"
                                max="10000" min="50" value="100000" step="50">
                            <div class="flex justify-between ">
                                <span
                                    class="inline-block text-lg font-bold text-white ">{{ Number::currency(50, 'MAD') }}</span>
                                <span
                                    class="inline-block text-lg font-bold text-white ">{{ Number::currency(10000, 'MAD') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-3 lg:w-3/4">
                    <div class="px-3 mb-4">
                        <div class="items-center justify-between hidden px-3 py-1 md:flex dark:bg-gray-900 ">
                            <div class="flex items-center justify-between">
                                <select wire:model.live="sort"
                                    class="block w-56 h-8 text-base  bg-blue-900 text-white cursor-pointer dark:text-gray-400 dark:bg-gray-900 rounded-md">
                                    <option value="latest">Sort by latest</option>
                                    <option value="price">Sort by Price</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center ">
                        @foreach ($products as $product)
                            <div
                                class="relative mx-10 mb-10 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md">
                                <a class="relative flex my-3 justify-center h-60 overflow-hidden rounded-xl"
                                    href="/products/{{ $product->slug }}">
                                    <img class="object-cover" src="{{ url('storage', $product->images[0]) }}"
                                        alt="{{ $product->name }}" />
                                </a>
                                <div class="mt-4 px-5 pb-5">
                                    <a href="/products/{{ $product->slug }}">
                                        <h5 class="text-xl tracking-tight text-slate-900">{{ $product->name }}
                                        </h5>
                                    </a>
                                    <div class="mt-2 mb-5 flex items-center justify-between">
                                        <p>
                                            <span
                                                class="text-3xl font-bold text-blue-900">{{ Number::currency($product->price, 'MAD') }}</span>
                                        </p>
                                    </div>
                                    <a wire:click.prevent='addToCart({{ $product->id }})' href="#"
                                        class="flex items-center justify-center rounded-md bg-blue-900 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-yellow-600 focus:outline-none focus:ring-4 focus:ring-yellow-300 hover:scale-95 duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <span wire:loading.remove wire:target='addToCart({{ $product->id }})'
                                            class="font-blueberry text-white">Add to
                                            cart</span> <span class="font-blueberry text-white" wire:loading
                                            wire:target='addToCart({{ $product->id }})'>Adding...</span></a>
                                </div>
                            </div>
                        @endforeach



                    </div>
                    <!-- pagination start -->
                    <div class="flex justify-end mt-6">
                        {{ $products->links() }}
                    </div>
                    <!-- pagination end -->
                </div>
            </div>
        </div>
    </section>

</div>
