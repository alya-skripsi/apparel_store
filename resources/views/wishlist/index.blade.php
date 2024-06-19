@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <h1>Wishlist</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wishlist as $w)
                        <tr>
                            <td>{{ $w->product->name }}</td>
                            <td>Rp. {{ number_format($w->product->price) }}</td>
                            <td class="d-flex">
                                <form action="/wishlist/{{ $w->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger me-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection