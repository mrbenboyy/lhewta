<div class="w-full bg-yellow-500 max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl text-blue-900 font-blueberry mb-4">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4 font-poppins">
                <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                                <th class="text-left font-semibold">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cart_items as $item)
                                <tr wire:key='{{ $item['product_id'] }}'>
                                    <td class="py-4">
                                        <div class="flex items-center">
                                            <img class="h-16 w-16 mr-4" src="{{ url('storage', $item['image']) }}"
                                                alt="{{ $item['name'] }}">
                                            <span class="font-semibold pr-24">{{ $item['name'] }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4 pr-8">{{ Number::currency($item['unit_amount'], 'MAD') }}</td>
                                    <td class="py-4 pr-8">
                                        <div class="flex items-center">
                                            <button wire:click='decreaseQty({{ $item['product_id'] }})'
                                                class="border bg-blue-900 text-white rounded-md py-1 px-4 mr-2 hover:scale-110 duration-300">-</button>
                                            <span class="text-center w-8">{{ $item['quantity'] }}</span>
                                            <button wire:click='increaseQty({{ $item['product_id'] }})'
                                                class="border bg-blue-900 text-white rounded-md py-1 px-4 ml-2 hover:scale-110 duration-300">+</button>
                                        </div>
                                    </td>
                                    <td class="py-4 pr-8"> {{ Number::currency($item['total_amount'], 'MAD') }} </td>
                                    <td><button wire:click='removeItem({{ $item['product_id'] }})'
                                            class="bg-red-500 text-white rounded-lg px-2 py-2 hover:bg-red-500 hover:scale-90 duration-300"><span
                                                wire:loading.remove
                                                wire:target='removeItem({{ $item['product_id'] }})'>Remove</span><span
                                                wire:loading
                                                wire:target='removeItem({{ $item['product_id'] }})'>Removing...</span></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-4xl font-semibold text-blue-900">No
                                        items available in cart!</td>
                                </tr>
                            @endforelse
                            <!-- More product rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6 font-poppins">
                    <h2 class="text-lg font-semibold text-black mb-4">Summary</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span> {{ Number::currency($grand_total, 'MAD') }} </span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span> {{ Number::currency(0, 'MAD') }} </span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span> {{ Number::currency(0, 'MAD') }} </span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold"> {{ Number::currency($grand_total, 'MAD') }} </span>
                    </div>
                    @if ($cart_items)
                        <a href="/checkout" class="bg-blue-900 block text-center text-white py-2 px-4 rounded-lg mt-4 w-full  hover:scale-110 duration-300">Checkout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
