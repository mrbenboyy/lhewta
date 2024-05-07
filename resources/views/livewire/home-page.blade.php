<div>
    <section class="bg-yellow-500 dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 mx-auto py-5 lg:gap-8 xl:gap-0 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-blue-900 text-4xl tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white font-blueberry">
                    SPECIAL SALE FOR THIS WEEK</h1>
                <p
                    class="max-w-2xl mb-6 text-2xl font-semibold text-white lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 font-poppins">
                    Iphone 12 mini 50% discount. What are you waiting for,go grab it fast!</p>
                <a wire:navigate href="/products/iphone-12-mini"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-900 border border-blue-900 hover:border-white focus:ring-4 active:text-yellow-500 dark:focus:ring-blue-900 hover:scale-110 duration-300 font-poppins">
                    Explore Offer
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a wire:navigate href="/products?on_sale=true"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-blue-900 border bg-white rounded-lg hover:border-blue-900 focus:ring-4 active:text-yellow-500 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 hover:scale-110 duration-300 font-poppins">
                    Show Other Sale Offers!
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('img/hero.png') }}" alt="mockup">
            </div>
        </div>
    </section>

    {{-- Brand Section --}}
    <section class="py-20 bg-blue-900">
        <div class="max-w-xl mx-auto">
            <div class="text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-blueberry text-white dark:text-gray-200"> Browse Popular<span
                            class="text-yellow-500">
                            Brands
                        </span> </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-yellow-100">
                        </div>
                        <div class="flex-1 h-2 bg-yellow-300">
                        </div>
                        <div class="flex-1 h-2 bg-yellow-500">
                        </div>
                    </div>
                </div>
                <p class="mb-12 text-base font-poppins text-center text-white">
                    Discover our curated collection of best-selling brands, known for their quality, style, and
                    innovation.
                </p>
            </div>
        </div>
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">

                @foreach ($brands as $brand)
                    <div class="bg-white  hover:bg-yellow-500 duration-300 hover:scale-110 rounded-lg shadow-md dark:bg-gray-800"
                        wire:key={{ "$brand->id" }}>
                        <a href="products?selected_brands[0]={{ $brand->id }}" class="">
                            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}"
                                class="object-contain h-52 mx-auto mt-5 rounded-t-lg">
                        </a>
                        <div class="p-5 text-center">
                            <a href=""
                                class="text-2xl font-blueberry tracking-tight text-blue-900 dark:text-gray-300">
                                {{ $brand->name }}
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Category Section Start --}}
    <div class="bg-yellow-500 py-20">
        <div class="max-w-xl mx-auto">
            <div class="text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-blueberry text-white dark:text-gray-200"> Browse <span
                            class="text-blue-900">
                            Categories
                        </span> </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-blue-500">
                        </div>
                        <div class="flex-1 h-2 bg-blue-700">
                        </div>
                        <div class="flex-1 h-2 bg-blue-900">
                        </div>
                    </div>
                </div>
                <p class="mb-10 text-base font-poppins text-center text-white">
                    Explore our wide range of categories to find the perfect products for every need and occasion.
                </p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <div
                class="min-w-[375px] md:min-w-[700px] xl:min-w-[800px] mt-3 grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-3 3xl:grid-cols-6">

                @foreach ($categories as $category)
                    <a wire:navigate href="products?selected_categories[0]={{ $category->id }}"
                        class="hover:scale-110 duration-300">
                        <div wire:key='{{ $category->id }}'
                            class="relative flex flex-grow !flex-row  items-center justify-center rounded-[10px] border-[1px] border-white bg-white bg-clip-border shadow-md shadow-[#1e3a8a] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none bg-cover bg-center  hover:border-blue-900"
                            style="background-image: url('{{ url('storage', $category->image) }}')">
                            <!-- Semi-transparent overlay to reduce background image visibility -->
                            <div class="absolute inset-0 bg-black opacity-50 rounded-[10px]"></div>
                            <div class="ml-[18px] z-10 flex h-[90px] w-auto flex-row items-center">
                                <div class="h-50 mx-auto px-5 flex w-auto flex-col">
                                    <p class="font-blueberry text-xl text-white active:text-yellow-500">
                                        {{ $category->name }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Category Section End --}}

    {{-- Customer Review Section Start --}}
    <section class="py-14 bg-white font-poppins dark:bg-gray-800">
        <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
            <div class="max-w-xl mx-auto">
                <div class="text-center ">
                    <div class="relative flex flex-col items-center">
                        <h1 class="text-5xl font-blueberry text-blue-900 dark:text-gray-200"> Customer <span
                                class="text-yellow-500">
                                Reviews
                            </span> </h1>
                        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                            <div class="flex-1 h-2 bg-blue-200">
                            </div>
                            <div class="flex-1 h-2 bg-blue-400">
                            </div>
                            <div class="flex-1 h-2 bg-yellow-500">
                            </div>
                        </div>
                    </div>
                    <p class="mb-12 font-poppins text-base text-center text-black">
                        Hear what our customers are saying about their experiences with our products and services. We
                        take pride in delivering exceptional quality and unparalleled customer satisfaction. Here are
                        some of their thoughts :
                    </p>
                </div>
            </div>

            <section class="text-neutral-700 dark:text-neutral-300">
                <div class="grid gap-6 text-center md:grid-cols-3">
                    <div>
                        <div class="block rounded-lg bg-blue-900 shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                            <div class="h-28 overflow-hidden rounded-t-lg bg-yellow-500"></div>
                            <div
                                class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
                            </div>
                            <div class="p-6">
                                <h4 class="mb-4 text-2xl font-blueberry text-white">Maria Smantha</h4>
                                <hr />
                                <p class="mt-4 text-white">
                                    <span class="inline-block pe-2 [&>svg]:w-5"><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                                        </svg>
                                    </span>
                                    I received my order earlier than expected, and it was packaged securely. A+ service.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg bg-blue-900 shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                            <div class="h-28 overflow-hidden rounded-t-lg bg-yellow-500"></div>
                            <div
                                class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" />
                            </div>
                            <div class="p-6">
                                <h4 class="mb-4 text-2xl font-blueberry text-white">Lisa Cudrow</h4>
                                <hr />
                                <p class="mt-4 text-white">
                                    <span class="inline-block pe-2 [&>svg]:w-5"><svg xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                                        </svg>
                                    </span>
                                    The support team was quick to respond and incredibly helpful throughout my purchase
                                    process.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg bg-blue-900 shadow-lg dark:bg-neutral-700 dark:shadow-black/30">
                            <div class="h-28 overflow-hidden rounded-t-lg bg-yellow-500"></div>
                            <div
                                class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
                            </div>
                            <div class="p-6">
                                <h4 class="mb-4 text-2xl font-blueberry text-white">John Smith</h4>
                                <hr />
                                <p class="mt-4 text-white">
                                    <span class="inline-block pe-2 [&>svg]:w-5"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
                                        </svg>
                                    </span>
                                    Not only do I love the product, but the price is unbeatable for the quality you get.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
    {{-- Customer Review Section End --}}
</div>
