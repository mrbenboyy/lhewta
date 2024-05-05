<div
    class="max-w-2xl mx-4 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto mt-16 bg-white shadow-xl rounded-lg text-gray-900 mb-14">
    <div class="rounded-t-lg h-32 overflow-hidden">
        <img class="object-cover object-top w-full"
            src='https://www.shutterstock.com/image-vector/shoppers-buying-gadgets-online-discount-260nw-1216923970.jpg'
            alt='ecommerce_cover'>
    </div>
    <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-black rounded-full overflow-hidden">
        <img class="object-cover object-center h-32"
            src='https://static.vecteezy.com/system/resources/thumbnails/005/545/335/small/user-sign-icon-person-symbol-human-avatar-isolated-on-white-backogrund-vector.jpg'
            alt='user_icon_pic'>
    </div>
    <div class="text-center mt-2">
        <h2 class="font-semibold">{{ $user }}</h2>
    </div>
    <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
        <li class="flex flex-col items-center justify-around">
            <p class="text-blue-900">Total Orders</p>
            <div>{{ $total_orders }}</div>
        </li>
        <li class="flex flex-col items-center justify-between">
            <p class="text-blue-900">Total Spent</p>
            <div>{{ Number::currency($total_spent, 'MAD') }}</div>
        </li>
        <li class="flex flex-col items-center justify-between">
            <p class="text-blue-900">Delivered Orders</p>
            <div>{{ $delivered }}</div>
        </li>
    </ul>
    <ul class="py-4 mt-2 text-gray-700 flex items-center justify-around">
        <li class="flex flex-col items-center justify-around">
            <p class="text-blue-900">Paid Orders</p>
            <div>{{ $paid_orders }}</div>
        </li>
        <li class="flex flex-col items-center justify-around">
            <p class="text-blue-900">Pending Orders</p>
            <div>{{ $pending_orders }}</div>
        </li>
        <li class="flex flex-col items-center justify-around">
            <p class="text-blue-900">Failed Orders</p>
            <div>{{ $failed_orders }}</div>
        </li>
    </ul>
    <div class="p-4 border-t mx-8 mt-2">
        <a wire:navigate href="/logout"
            class="w-1/2 inblock flex justify-center mx-auto rounded-full bg-gray-900 hover:bg-red-600 hover:shadow-lg font-semibold text-white px-6 py-2">Logout</a>
    </div>
</div>
