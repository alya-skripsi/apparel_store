@extends('layouts.main')
@section('content')
<h1 class="fw-bold mb-4">My Orders</h4>
<div class="row">
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Tracking Number</th>
                        <th>Total</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                            <tr>
                                <td> {{$item->tracking_number}} </td>
                                <td>Rp. {{ number_format($item->subtotal) }}</td>
                                <td> {{$item->status == '0' ? 'pending':'completed'}} </td>
                                <td>
                                    <a href="/view-order/1" class="btn btn-primary">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection