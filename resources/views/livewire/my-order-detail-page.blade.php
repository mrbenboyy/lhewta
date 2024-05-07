<div class="w-full bg-yellow-500 max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-blueberry text-blue-900">Order Details</h1>

    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mt-5">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div
                    class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-900 rounded-lg dark:bg-gray-800">
                    <svg class="flex-shrink-0 size-5 text-white dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-black font-poppins">
                            Customer
                        </p>
                    </div>
                    <div class="mt-1 flex items-center font-poppins font-semibold gap-x-2">
                        <div>{{ $address->full_name }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div
                    class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-900 rounded-lg dark:bg-gray-800">
                    <svg class="flex-shrink-0 size-5 text-white dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 22h14" />
                        <path d="M5 2h14" />
                        <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                        <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-black font-poppins">
                            Order Date
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl font-semibold font-poppins text-gray-800 dark:text-gray-200">
                            {{ $order_items[0]->created_at->format('d-m-Y') }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div
                    class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-900 rounded-lg dark:bg-gray-800">
                    <svg class="flex-shrink-0 size-5 text-white dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
                        <path d="m12 12 4 10 1.7-4.3L22 16Z" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        @php
                            $status = '';

                            if ($order->status == 'new') {
                                $status = '<span class="bg-blue-500 py-1 px-3 rounded text-white shadow">New</span>';
                            }

                            if ($order->status == 'processing') {
                                $status =
                                    '<span class="bg-yellow-500 py-1 px-3 rounded text-white shadow">Processing</span>';
                            }

                            if ($order->status == 'shipped') {
                                $status =
                                    '<span class="bg-green-500 py-1 px-3 rounded text-white shadow">Shipped</span>';
                            }

                            if ($order->status == 'delivered') {
                                $status =
                                    '<span class="bg-green-700 py-1 px-3 rounded text-white shadow">Delivered</span>';
                            }

                            if ($order->status == 'cancelled') {
                                $status =
                                    '<span class="bg-red-500 py-1 px-3 rounded text-white shadow">Cancelled</span>';
                            }

                            $payment_status = '';

                            if ($order->payment_status == 'pending') {
                                $payment_status = '<span
                            class="bg-blue-500 py-1 px-3 rounded text-white shadow">Pending</span>';
                            }

                            if ($order->payment_status == 'paid') {
                                $payment_status = '<span
                            class="bg-green-500 py-1 px-3 rounded text-white shadow">Paid</span>';
                            }

                            if ($order->payment_status == 'failed') {
                                $payment_status = '<span
                            class="bg-red-500 py-1 px-3 rounded text-white shadow">Failed</span>';
                            }

                        @endphp
                        <p class="text-xs uppercase tracking-wide text-black font-poppins">
                            Order Status
                        </p>
                    </div>
                    <div class="mt-1 flex items-center font-poppins gap-x-2">
                        {!! $status !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
            <div class="p-4 md:p-5 flex gap-x-4">
                <div
                    class="flex-shrink-0 flex justify-center items-center size-[46px] bg-blue-900 rounded-lg dark:bg-gray-800">
                    <svg class="flex-shrink-0 size-5 text-white dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                        <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                        <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="text-xs uppercase tracking-wide text-black font-poppins">
                            Payment Status
                        </p>
                    </div>
                    <div class="mt-1 flex items-center font-poppins gap-x-2">
                        {!! $payment_status !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Grid -->

    <div class="flex flex-col md:flex-row gap-4 mt-4">
        <div class="md:w-3/4">
            <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
                <table class="w-full font-poppins">
                    <thead>
                        <tr>
                            <th class="text-left font-semibold">Product</th>
                            <th class="text-left font-semibold">Price</th>
                            <th class="text-left font-semibold">Quantity</th>
                            <th class="text-left font-semibold pl-4">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order_items as $item)
                            <tr wire:key="{{ $item->id }}">
                                <td class="py-4">
                                    <div class="flex items-center mr-28">
                                        <img class="h-auto w-20 pr-4"
                                            src="{{ url('storage', $item->product->images[0]) }}"
                                            alt="{{ $item->product->name }}">
                                        <span class="font-semibold">{{ $item->product->name }}</span>
                                    </div>
                                </td>
                                <td class="py-4 pr-11">{{ Number::currency($item->unit_amount, 'MAD') }}</td>
                                <td class="py-4 px-11">
                                    <span class="text-center w-8">{{ $item->quantity }}</span>
                                </td>
                                <td class="py-4 pl-4">{{ Number::currency($item->total_amount, 'MAD') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="bg-white overflow-x-auto rounded-lg shadow-md font-poppins p-6 mb-4">
                <h1 class="font-3xl font-bold text-black mb-3">Shipping Address</h1>
                <div class="flex justify-between items-center">
                    <div>
                        <p class="text-black">{{ $address->street_address }}, {{ $address->city }},
                            {{ $address->state }},
                            {{ $address->zip_code }}</p><br>
                        <p class="font-semibold text-black">Phone Number</p>
                        <p class="text-black">{{ $address->phone }}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="md:w-1/4">
            <div class="bg-white rounded-lg shadow-md p-6 font-poppins">
                <h2 class="text-lg font-semibold mb-4 text-black">Summary</h2>
                <div class="flex justify-between mb-2">
                    <span>Subtotal</span>
                    <span class="text-blue-600">{{ Number::currency($order->grand_total, 'MAD') }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Taxes</span>
                    <span class="text-blue-600">{{ Number::currency(0, 'MAD') }}</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Shipping</span>
                    <span class="text-blue-600">{{ Number::currency(0, 'MAD') }}</span>
                </div>
                <hr class="my-2">
                <div class="flex justify-between mb-2">
                    <span class="font-semibold">Grand Total</span>
                    <span
                        class="font-semibold text-blue-600">{{ Number::currency($order->grand_total, 'MAD') }}</span>
                </div>

            </div>
        </div>
    </div>
</div>
