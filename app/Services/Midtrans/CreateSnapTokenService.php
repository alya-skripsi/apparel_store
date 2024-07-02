<?php

namespace App\Services\Midtrans;

use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    protected $order;
    protected $carts;

    public function __construct($order, $carts)
    {
        parent::__construct();

        $this->order = $order;
        $this->carts = $carts;
    }

    public function getSnapToken()
    {         
        $item_details = [];
        foreach ($this->carts as $cart) {
            $item_details[] = [
                'id' => $cart->product->id,
                'price' => $cart->product->price,
                'quantity' => $cart->quantity,
                'name' => $cart->product->name
            ];
        }
        $item_details[] = [
            'id' => 'ongkir-123',
            'price' => $this->order->cost_delivery,
            'quantity' => 1,
            'name' => 'Ongkir ' . $this->order->courier
        ];

        $params = [
            'transaction_details' => [
                'order_id' => $this->order->tracking_number,
                'gross_amount' => $this->order->subtotal,
            ],
            'item_details' => $item_details,
            'customer_details' => [
                'first_name' => $this->order->name,
                'email' => $this->order->email,
                'phone' => $this->order->no_hp,
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return $snapToken;
    }
}