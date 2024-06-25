@extends('layouts.main')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="/products?category={{ $product->category->slug }}"> {{ $product->category->name }} </a></li>
    <li class="breadcrumb-item active"> {{ $product->name}} </li>
    </ol>
</nav>

<div class="row">
    <div class="col-lg-4">
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="width: 500px;">
    </div>
    <div class="col-lg-8">
        <h2> {{ $product->name }} </h2>
        <p class="lead">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
        {!! $product->description !!}
        <hr>
        <h5>Stock : {{ $product->stock }}</h5>
        <form action="/cart/add/{{ $product->slug }}" method="post">
            @csrf
            <div class="my-3">
                <label for="size">Size :</label>
                <select name="size" id="size" class="form-select" style="width: 100px;">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                </select>
            </div>
            <div class="mt-3">
                <label for="qty">Quantity :</label>
                <div class="input-group text-center mb-3" style="width: 130px;">
                    <button class="btn btn-dark decre-btn" type="button">-</button>
                    <input type="text" name="qty" id="qty" class="form-control qty-input text-center" value="1">
                    <button class="btn btn-dark incre-btn" type="button">+</button>
                </div>
            </div>
            @if ($product->stock > 0)
                <button class="btn-pri text-decoration-none" id="addtoCart" type="submit"><i class="fas fa-shopping-cart me-1"></i> Add to Cart</button>
            @else
                <button class="btn btn-secondary disabled" id="addtoCart" type="submit" disabled><i class="fas fa-shopping-cart me-1"></i>Out Of Stock</button>
            @endif
        </form>
        <form action="/wishlist/add/{{ $product->slug }}" method="post">
            @csrf
            <button type="submit" class="btn-wishlist text-decoration-none mt-3">
                <i class="fa-regular fa-heart me-1"></i> Add to Wishlist
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    const decreBtn = document.querySelector('.decre-btn');
    const increBtn = document.querySelector('.incre-btn');
    const qtyInput = document.querySelector('.qty-input');

    decreBtn.addEventListener('click', function(){
        const currentValue = parseInt(qtyInput.value);
        if(currentValue > 1){
            qtyInput.value = currentValue - 1;
        }
    });

    increBtn.addEventListener('click', function(){
        const currentValue = parseInt(qtyInput.value);
        qtyInput.value = currentValue + 1;
    });
</script>
@endsection