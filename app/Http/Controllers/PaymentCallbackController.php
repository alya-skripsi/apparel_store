<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Services\Midtrans\CallbackService;

class PaymentCallbackController extends Controller
{
    public function receive()
    {
        $callback = new CallbackService;
        $order = $callback->getOrder();

        if ($callback->isSuccess()) {
            Order::where('tracking_number', $order->tracking_number)->update([
                'payment_status' => 2,
            ]);
        }

        if ($callback->isExpire()) {
            Order::where('tracking_number', $order->tracking_number)->update([
                'payment_status' => 3,
            ]);
        }

        if ($callback->isCancelled()) {
            Order::where('tracking_number', $order->tracking_number)->update([
                'payment_status' => 4,
            ]);
        }

        return response()
            ->json([
                'success' => true,
                'message' => 'Notification successfully processed',
            ]);
    }
}
