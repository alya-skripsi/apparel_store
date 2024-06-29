@extends('dashboard.layouts.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Order Detail</h1>
    </div>
    <div class="my-4">
        <a href="/dashboard/orders/" class="btn btn-info">Back to Order</a>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Order Information
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Order ID</th>
                            <td>{{ $orders->id }}</td>
                        </tr>
                        <tr>
                            <th>Tracking Number</th>
                            <td>{{ $orders->tracking_number }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $orders->status }}</td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <td>Rp. {{ number_format($orders->subtotal) }}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{ date('d-M-Y', strtotime($orders->created_at)) }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header">
                    Customer Information
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>{{ $orders->name }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $orders->no_hp }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $orders->address1 }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4">
        <div class="card-header">
            Order Items
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders->orderItems as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td> {{$item->products->name}} </td>
                        <td>Rp. {{ number_format($item->price) }}</td>
                        <td> {{$item->quantity}} </td>
                        <td>Rp. {{ number_format($item->price * $item->quantity) }}</td>
                    </tr>
                    @endforeach
                    <tr class="table-dark">
                        <td colspan="4" class="text-start fw-bold">Subtotal</td>
                        <td>Rp. {{ number_format($orders->subtotal) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    

    <div class="col-lg-4">
        <label for="" class="form-label">Status :</label>
        <form action="/dashboard/update-order/{{$orders->id}}" method="post">
            @csrf
            @method('PUT')
            <select class="form-select" name="status">
                <option {{$orders->status == '0' ? 'selected' : ''}} value="0">Pending</option>
                <option {{$orders->status == '1' ? 'selected' : ''}} value="1">Completed</option>
            </select>
            <button type="submit" class="btn btn-primary mt-4">Update</button>
        </form>
    </div>
@endsection