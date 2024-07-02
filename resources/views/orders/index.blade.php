@extends('layouts.main')
@section('content')
<h1 class="fw-bold mb-4"> {{ $title }} </h1>
<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <thead class="thead-light">
                            <th scope="col">#</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>#{{ $order->tracking_number }}</td>
                                <td>{{ number_format($order->subtotal, 2, ',', '.') }}</td>
                                <td>
                                    @if ($order->payment_status == 1)
                                    Waitting Payment
                                    @elseif ($order->payment_status == 2)
                                    Paid
                                    @else
                                    Expired
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
        </div>
    </div>
</div>
@endsection