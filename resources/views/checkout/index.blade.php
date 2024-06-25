@extends('layouts.main')
@section('content')
    <h1 class="fw-bold mb-4">Checkout</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold">Billing Address</h4>
                    <hr>
                    <form action="/place-order" method="post">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address 1</label>
                                <textarea class="form-control" id="address1" name="address1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="address2" class="form-label">Address 2</label>
                                <textarea class="form-control" id="address2" name="address2"></textarea>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="province" class="form-label">Province</label>
                                <input type="text" class="form-control" id="province" name="province">
                            </div>
                            <div class="mb-3">
                                <label for="pay_method" class="form-label">Payment Method</label>
                                <select class="form-select" id="pay_method" name="pay_method">
                                    <option value="bank_transfer">Bank Transfer</option>
                                    <option value="cash_on_delivery">Cash on Delivery</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-pri">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="fw-bold">Order Summary</h4>
                    <hr>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td>{{ $cart->product->name }}</td>
                                        <td>{{ $cart->quantity }}</td>
                                        <td>Rp. {{ number_format($cart->product->price) }}</td>
                                    </tr>
                                @endforeach
                                <tr class="table-dark">
                                    <td colspan="2" class="text-star fw-bold">Subtotal</td>
                                    <td>Rp. {{ number_format($subtotal) }}</td>
                                </tr>
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection