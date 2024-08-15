@extends('dashboard.layouts.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                        <td>Rp. {{ number_format($order->subtotal, 0, ',', '.') }}</td>
                        <td>
                            @if ($order->payment_status == 1)
                                <span class="badge text-bg-warning">Waiting for Payment</span>
                            @elseif ($order->payment_status == 2)
                                <span class="badge text-bg-success">Paid</span>
                            @else
                                <span class="badge bg-dark ">Expired</span>
                            @endif
                        </td>
                        <td>
                            <a href="/dashboard/orders/{{ $order->id }}" class="btn btn-info btn-sm">Detail</a>
                            <form action="/dashboard/orders/{{ $order->id }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection