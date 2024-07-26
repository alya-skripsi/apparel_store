{{-- Navbar --}}
<nav class="navbar py-2 border-bottom py-2">
    <div class="container d-flex flex-wrap justify-content-between">
        <a href="/" class="d-flex align-items-center mb-lg-0 me-lg-auto navbar-brand text-decoration-none fs-1 fw-bold">
            Apparel<span>Store.</span>
        </a>
        <ul class="nav d-flex align-items-center">
            <li class="nav-item"><a class="nav-link-1" href="/wishlist"><i class="fa-solid fa-heart"></i></a></li>
            <li class="nav-item"><a class="nav-link-1 mx-4" href="/cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
            @auth
            <div class="dropdown">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    @if (auth()->user()->avatar)
                        <img src="{{ asset('storage/' . auth()->user()->avatar)}}" class="rounded-circle" width="40" height="40" alt="{{ auth()->user()->name }}">
                        
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="rounded-circle" width="40" height="40" alt="{{ auth()->user()->name }}">
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                    @can('admin')
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    @endcan
                    <li><a class="dropdown-item" href="/orders">My Order</a></li>
                    <li><a class="dropdown-item" href="/setting">Setting</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
            @else
            <a href="/login" class="border-0 text-decoration-none btn-pri">Sign In</a>
            @endauth
        </ul>
    </div>
</nav>
<header class="py-2 mb-4 bg-nav-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <form action="/products" class="col-12 col-lg-auto mb-3 mb-lg-0 input-group" role="search">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <input type="text" class="form-control" placeholder="Search product..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="col-12 col-lg-6">
                <ul class="nav col-12 col-lg-auto ms-lg-auto justify-content-between mb-md-0">
                    <li><a href="/about" class="nav-link px-2 text-white">About Us</a></li>
                    <li><a href="/products" class="nav-link px-2 text-white">Products</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">New Arrival</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Best Seller</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{-- Navbar --}}
