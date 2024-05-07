<div class="w-full bg-yellow-500 max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-2xl font-blueberry text-blue-900 dark:text-white mb-4">
        Checkout
    </h1>
    <form wire:submit.prevent='placeOrder'>
        <div class="grid grid-cols-12 gap-4">
            <div class="md:col-span-12 lg:col-span-8 col-span-12">
                <!-- Card -->
                <div class="bg-blue-900 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <!-- Shipping Address -->
                    <div class="mb-6">
                        <h2 class="text-xl font-poppins font-semibold underline text-white dark:text-white mb-2">
                            Shipping Address
                        </h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-yellow-500 font-blueberry dark:text-white mb-1"
                                    for="first_name">
                                    First Name
                                </label>
                                <input wire:model='first_name'
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-white dark:text-white dark:border-none @error('first_name') border-red-500 @enderror"
                                    id="first_name" type="text">
                                </input>
                                @error('first_name')
                                    <div class="text-red-500 text-lg font-bold "> {{ $message }} </div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-yellow-500 font-blueberry dark:text-white mb-1"
                                    for="last_name">
                                    Last Name
                                </label>
                                <input wire:model='last_name'
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-white dark:text-white dark:border-none @error('last_name') border-red-500 @enderror"
                                    id="last_name" type="text">
                                </input>
                                @error('last_name')
                                    <div class="text-red-500 text-lg font-bold "> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-4">
                            <label class="block text-yellow-500 font-blueberry dark:text-white mb-1" for="phone">
                                Phone
                            </label>
                            <input wire:model='phone'
                                class="w-full rounded-lg border py-2 px-3 dark:bg-white dark:text-white dark:border-none @error('phone') border-red-500 @enderror"
                                id="phone" type="text">
                            </input>
                            @error('phone')
                                <div class="text-red-500 text-lg font-bold "> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block text-yellow-500 font-blueberry dark:text-white mb-1" for="address">
                                Address
                            </label>
                            <input wire:model='street_address'
                                class="w-full rounded-lg border py-2 px-3 dark:bg-white dark:text-white dark:border-none @error('street_address') border-red-500 @enderror"
                                id="address" type="text">
                            </input>
                            @error('street_address')
                                <div class="text-red-500 text-lg font-bold "> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <label class="block text-yellow-500 font-blueberry dark:text-white mb-1" for="city">
                                City
                            </label>
                            <input wire:model='city'
                                class="w-full rounded-lg border py-2 px-3 dark:bg-white dark:text-white dark:border-none @error('city') border-red-500 @enderror"
                                id="city" type="text">
                            </input>
                            @error('city')
                                <div class="text-red-500 text-lg font-bold "> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <div>
                                <label class="block text-yellow-500 font-blueberry dark:text-white mb-1" for="state">
                                    State
                                </label>
                                <input wire:model='state'
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-white dark:text-white dark:border-none @error('state') border-red-500 @enderror"
                                    id="state" type="text">
                                </input>
                                @error('state')
                                    <div class="text-red-500 text-lg font-bold "> {{ $message }} </div>
                                @enderror
                            </div>
                            <div>
                                <label class="block text-yellow-500 font-blueberry dark:text-white mb-1" for="zip">
                                    ZIP Code
                                </label>
                                <input wire:model='zip_code'
                                    class="w-full rounded-lg border py-2 px-3 dark:bg-white dark:text-white dark:border-none @error('zip_code') border-red-500 @enderror"
                                    id="zip" type="text">
                                </input>
                                @error('zip_code')
                                    <div class="text-red-500 text-lg font-bold "> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-lg text-yellow-500 font-blueberry mb-4">
                        Select Payment Method
                    </div>
                    <ul class="grid w-full gap-6 md:grid-cols-2">
                        <li>
                            <input wire:model='payment_method' class="hidden peer " id="hosting-small" required=""
                                type="radio" value="cod" />
                            <label
                                class="inline-flex items-center justify-between w-full p-5 text-black bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-white dark:peer-checked:text-blue-500 peer-checked:border-yellow-500 peer-checked:text-yellow-500 hover:scale-95 hover:border-yellow-500 hover:text-yellow-500 duration-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-white"
                                for="hosting-small">
                                <div class="block">
                                    <div class="w-full text-lg font-poppins">
                                        Cash on Delivery
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                    viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                        </li>
                        <li>
                            <input wire:model='payment_method' class="hidden peer" id="hosting-big" type="radio"
                                value="stripe">
                            <label
                                class="inline-flex items-center justify-between w-full p-5 text-black bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-white dark:peer-checked:text-blue-500 peer-checked:border-yellow-500 peer-checked:text-yellow-500  hover:scale-95 hover:border-yellow-500 hover:text-yellow-500 duration-300 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-white"
                                for="hosting-big">
                                <div class="block">
                                    <div class="w-full text-lg font-poppins">
                                        Stripe
                                    </div>
                                </div>
                                <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                    viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2">
                                    </path>
                                </svg>
                            </label>
                            </input>
                        </li>
                    </ul>
                    @error('payment_method')
                        <div class="text-red-500 text-lg font-bold"> {{ $message }} </div>
                    @enderror
                </div>
                <!-- End Card -->
            </div>
            <div class="md:col-span-12 lg:col-span-4 col-span-12">
                <div class="bg-blue-900 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-xl font-poppins underline text-white dark:text-white mb-2">
                        Order Summary
                    </div>
                    <div class="flex justify-between mb-2 font-poppins font-bold text-yellow-500">
                        <span>
                            Subtotal
                        </span>
                        <span>
                            {{ Number::currency($grand_total, 'MAD') }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-poppins font-bold text-yellow-500">
                        <span>
                            Taxes
                        </span>
                        <span>
                            {{ Number::currency(0, 'MAD') }}
                        </span>
                    </div>
                    <div class="flex justify-between mb-2 font-poppins font-bold text-yellow-500">
                        <span>
                            Shipping Cost
                        </span>
                        <span>
                            {{ Number::currency(0, 'MAD') }}
                        </span>
                    </div>
                    <hr class="bg-white my-4 h-1 rounded">
                    <div class="flex justify-between mb-2 font-poppins font-bold text-yellow-500">
                        <span>
                            Grand Total
                        </span>
                        <span>
                            {{ Number::currency($grand_total, 'MAD') }}
                        </span>
                    </div>
                    </hr>
                </div>
                <button type="submit"
                    class="bg-blue-900 mt-4 w-full font-poppins p-3 rounded-lg text-lg text-white hover:scale-95  duration-300">
                    <span wire:loading.remove>Place Order</span>
                    <span wire:loading>Processing...</span>
                </button>
                <div class="bg-blue-900 mt-4 rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
                    <div class="text-xl font-poppins underline text-white dark:text-white mb-2">
                        Basket Summary
                    </div>
                    <ul class="divide-y divide-gray-200 dark:divide-white" role="list">
                        @foreach ($cart_items as $ci)
                            <li class="py-3 sm:py-4" wire:key="{{ $ci['product_id'] }}">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img alt="{{ $ci['name'] }}" class="w-16 h-auto border border-yellow-500 rounded-lg"
                                            src="{{ url('storage', $ci['image']) }}">
                                        </img>
                                    </div>
                                    <div class="flex-1 min-w-0 ms-4">
                                        <p class="text-sm font-poppins text-white truncate dark:text-white">
                                            {{ $ci['name'] }}
                                        </p>
                                        <p class="text-sm font-poppins font-bold text-yellow-500 truncate dark:text-gray-400">
                                            Quantity: <span class="font-blueberry">{{ $ci['quantity'] }}</span>
                                        </p>
                                    </div>
                                    <div
                                        class="inline-flex items-center text-base font-poopins font-semibold text-white dark:text-white">
                                        {{ Number::currency($ci['total_amount'], 'MAD') }}
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </form>
</div>
