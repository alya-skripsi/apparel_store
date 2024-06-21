{{-- Navbar --}}
<nav class="py-2">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <a href="/" class="d-flex align-items-center mb-lg-0 me-lg-auto text-decoration-none fw-bold logo">Apparel<span>Store.</span></a>
        <div class="text-end d-flex align-items-center">
            <a href="/wishlist"><i class="fa-regular fa-heart icon"></i></a>
            <a href="/cart"><i class="fas fa-shopping-cart icon"></i></a>
            @auth
            <div class="dropdown">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end">
                    @can('admin')
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                    @endcan
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
        </div>
    </div>
</nav>
<header class="py-1 bg-sec border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="/about" class="nav-link px-2 text-white">About Us</a></li>
            <li class="nav-item"><a href="/products" class="nav-link px-2 text-white">Products</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Men</a></li>
                    <li><a class="dropdown-item" href="#">Women</a>
                    <li><a class="dropdown-item" href="#">Kids</a>
                    <li><a class="dropdown-item" href="#">Accesories</a>
                    <li><a class="dropdown-item" href="#">Footwear</a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Collection</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Summer</a></li>
                    <li><a class="dropdown-item" href="#">Holiday</a></li>
                    <li><a class="dropdown-item" href="#">Limited Edition</a></li>
                </ul>
            </li>
        </ul>
    </div>
</header>
