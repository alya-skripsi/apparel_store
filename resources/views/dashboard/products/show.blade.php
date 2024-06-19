@extends('dashboard.layouts.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $product->name }}</hjson>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $product->description }}</td>
                </tr>
            </table>
            <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-warning btn-sm">Edit</a>
            <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
@endsection