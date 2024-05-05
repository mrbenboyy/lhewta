<?php

namespace App\Livewire;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Auth\Access\AuthorizationException;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Order Detail')]
class MyOrderDetailPage extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }
    public function render()
    {
        $order_items = OrderItem::with('product')->where('order_id', $this->order_id)->get();

        $address = Address::where('order_id', $this->order_id)->first();

        $order = Order::where('id', $this->order_id)->where('user_id', auth()->id())->first();

        if (!$order) {
            throw new AuthorizationException('You are not authorized to view this order.');
        }

        return view('livewire.my-order-detail-page', [
            'order_items' => $order_items,
            'address' => $address,
            'order' => $order,
        ]);
    }
}
