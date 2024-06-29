@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4>Order Detail : {{$order->id}} </h4>
                <p>Name : {{$order->name}} </p>
                <p>Phone : {{$order->no_hp}} </p>
                <p>Address : {{$order->address1}} </p>
                <p>Created at: {{$order->created_at}} </p>

                <br>
                <table class="table table-striped">
                    <thead>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems as $item)
                            <tr>
                                <td> {{$item->products->name}} </td>
                                <td>Rp. {{ number_format($item->price) }}</td>
                                <td> {{$item->quantity}} </td>
                                <td>Rp. {{ number_format($item->price * $item->quantity) }}</td>
                            </tr>
                        @endforeach
                            <tr class="table-dark">
                                <td colspan="3" class="text-start fw-bold">Subtotal</td>
                                <td>Rp. {{ number_format($order->subtotal) }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection