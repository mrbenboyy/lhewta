<div class="w-full bg-yellow-500 max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 sm:gap-6">

            @foreach ($categories as $category)
                <a wire:navigate href="products?selected_categories[0]={{ $category->id }}"
                    class="hover:scale-105 duration-300">
                    <div wire:key='{{ $category->id }}'
                        class="relative flex flex-grow !flex-row  items-center justify-center rounded-[10px] border-[1px] border-white bg-white bg-clip-border shadow-md shadow-[#1e3a8a] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none bg-cover bg-center hover:border-blue-900"
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
