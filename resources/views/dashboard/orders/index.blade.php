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
        @if ($orders->isEmpty())
            <p class="text-center">There is no order.</p>
        @else
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Tracking Number</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date('d-M-Y'), strtotime($item->created_at) }}</td>
                        <td>{{ $item->tracking_number }}</td>
                        <td>Rp. {{ number_format($item->subtotal) }}</td>
                        <td>{{$item->status == '0' ? 'pending':'completed'}}</td>
                        <td>
                            <a href="/dashboard/orders/{{ $item->id}}" class="btn btn-primary">View Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
@endsection