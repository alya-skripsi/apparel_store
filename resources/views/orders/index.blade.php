@extends('layouts.main')
@section('content')
<h1 class="fw-bold"> {{ $title }} </h1>
<div class="container pb-5 pt-3">
    <div class="row">
        <div class="col-12">

            @if ($orders->isEmpty())
                <div class="alert alert-danger" role="alert">
                    There are no orders.
                </div>
            @else
            <div class="card shadow">
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead class="thead-light">
                            <th scope="col">#</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @foreach ($orders  as $order)
                            <tr>
                                <td>#{{ $order->tracking_number }}</td>
                                <td> {{$order->name}} </td>
                                <td>Rp. {{ number_format($order->subtotal, 2, ',', '.') }}</td>
                                <td>
                                    @if ($order->payment_status == 1)
                                        <span class="badge text-bg-danger">Unpaid</span>
                                    @elseif ($order->payment_status == 2)
                                        <span class="badge text-bg-success">Paid</span>
                                    @else
                                        <span class="badge text-bg-dark">Expired</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('orders.show', $order->id) }}">
                                        Show
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection