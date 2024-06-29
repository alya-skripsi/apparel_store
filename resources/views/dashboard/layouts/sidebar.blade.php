<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Apparel_store.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <i class="fa-solid fa-house me-2"></i>Dashboard
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                            <li><a href="/dashboard" class="link-body-emphasis d-inline-flex text-decoration-none rounded {{ Request::is('dashboard') ? 'active' : '' }}" >Overview</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#product-collapse" aria-expanded="false">
                        <i class="fa-solid fa-cart-shopping me-2"></i>Product
                    </button>
                    <div class="collapse" id="product-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                            <li><a href="/dashboard/products" class="link-body-emphasis d-inline-flex text-decoration-none rounded {{ Request::is('dashboard/products') ? 'active' : '' }}">All Products</a></li>
                            <li><a href="/dashboard/categories" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Categories</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Tags</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#order-collapse" aria-expanded="false">
                        <i class="fa-solid fa-file me-2"></i>Orders
                    </button>
                    <div class="collapse" id="order-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                            <li><a href="/dashboard/orders" class="link-body-emphasis d-inline-flex text-decoration-none rounded {{ Request::is('dashboard/orders') ? 'active' : '' }}">All Orders</a></li>
                            <li><a href="/dashboard/orders/history" class="link-body-emphasis d-inline-flex text-decoration-none rounded {{ Request::is('dashboard/orders/history') ? 'active' : '' }}">Order History</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#customer-collapse" aria-expanded="false">
                        <i class="fa-solid fa-user me-2"></i>Users
                    </button>
                    <div class="collapse" id="customer-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                            <li><a href="/dashboard/users" class="link-body-emphasis d-inline-flex text-decoration-none rounded {{ Request::is('dashboard/users') ? 'active' : '' }}">All Users</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Groups</a></li>   
                        </ul>
                    </div>
                </li>
                <li class="nav-item mb-2">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#report-collapse" aria-expanded="false">
                        <i class="fa-solid fa-chart-bar me-2"></i>Reports
                    </button>
                    <div class="collapse" id="report-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 ps-4 small">
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sales</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Stock</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="fa-solid fa-gear"></i>
                        Settings
                    </a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link px-3">
                            <i class="fa-solid fa-door-open"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>