@extends('dashboard.layouts.main')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Order Detail</h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Order Detail
                </div>
                <div class="card-body">
                    <h5 class="card-title">Customer: {{ $order->name }}</h5>
                    <p class="card-text">Email : {{ $order->email }}</p>
                    <p class="card-text">Phone : {{ $order->phone }}</p>
                    <p class="card-text">Address : {{ $order->address }}</p>
                    <p class="card-text">Total Price : Rp. {{ number_format($order->subtotal, 0, ',', '.') }}</p> 
                    <p class="card-text">Status : 
                        @if ($order->payment_status == 1)
                        <span class="badge text-bg-warning">Waiting for Payment</span>
                        @elseif ($order->payment_status == 2)
                        <span class="badge text-bg-success">Paid</span>
                        @else
                        <span class="badge bg-dark ">Expired</span>
                        @endif
                    </p>
                    <a href="/dashboard/orders" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection