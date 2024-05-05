<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('My Account')]

class MyAccountPage extends Component
{
    public function render()
    {
        $user = auth()->user()->name;

        $order_count = Order::where('user_id', auth()->id())->count();

        $total_spent = Order::where('user_id', auth()->id())->sum('grand_total');

        $delivered = Order::where('user_id', auth()->id())->where('status', 'delivered')->count();

        $paid_orders = Order::where('user_id', auth()->id())->where('payment_status', 'paid')->count();

        $pending_orders = Order::where('user_id', auth()->id())->where('payment_status', 'pending')->count();

        $failed_orders = Order::where('user_id', auth()->id())->where('payment_status', 'failed')->count();

        return view('livewire.my-account-page', [
            'user' => $user,
            'total_orders' => $order_count,
            'total_spent' => $total_spent,
            'delivered' => $delivered,
            'paid_orders' => $paid_orders,
            'pending_orders' => $pending_orders,
            'failed_orders' => $failed_orders,
        ]);
    }
}
