@extends('layouts.main')
@section('content')
    {{-- Checkout --}}
    <section class="checkout">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body card-bg-sec p-5 rounded">
                            <h2 class="fw-bold">Checkout</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-semibold">Customer Information</h5>
                            <form id="checkout-form" action="{{ route('orders.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                            @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                                            @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
                                            @error('phone')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea name="address" id="address" class="form-control">{{ old('address') }}</textarea>
                                            @error('address')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="province" class="form-label">Province</label>
                                            <input type="text" name="province" id="province" class="form-control" value="{{ old('province') }}">
                                            <ul id="province-list" class="list-group"></ul>
                                            @error('province')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <select id="city" name="city" class="form-control" disabled>
                                                <option value="">Select City</option>
                                            </select>
                                            @error('city')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="courier" class="form-label">Courier</label>
                                            <select id="courier" name="courier" class="form-control" disabled>
                                                <option value="jne">JNE</option>
                                                <option value="tiki">TIKI</option>
                                                <option value="pos">POS</option>
                                            </select>
                                            @error('courier')
                                            <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div id="cost" class="mt-4"></div>
                                    @error('costoption')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
            
                                    <div class="mb-3">
                                        <label for="total_price" class="form-label">Total</label>
                                        <input type="text" name="total_price_show" id="total_price_show" class="form-control" value="Rp. {{ number_format($subtotal) }}" disabled>
                                        <input type="hidden" name="total_price" id="total_price" class="form-control" value="{{ $subtotal }}">
                                        @error('total_price')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
            
                                    <div class="col-lg-12">
                                        <button type="submit" class="border-0 btn-pri text-decoration-none" id="payment-button">Proceed to Payment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-semibold">Cart Summary</h5>
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    @foreach ($carts as $cart)
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="me-auto">
                                            <span>{{ $cart->product->name }}</span>
                                        </div>
                                        <div class="mx-auto">
                                            <span class="text-center">{{ $cart->quantity }}</span>
                                        </div>
                                        <div>
                                            <span>Rp. {{ number_format($cart->product->price * $cart->quantity) }}</span>
                                        </div>
                                    </li>
                                    @endforeach
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="me-auto">
                                            <span class="fw-bold">Subtotal</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold">Rp. {{ number_format($subtotal) }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Checkout --}}
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updateTotalPrice() {
        let selectedCost = $('.costoption:checked').val();
        let subtotal = parseFloat('{{ $subtotal }}');
        let total = subtotal + parseFloat(selectedCost);
        $('#total_price').val(total);
        $('#total_price_show').val("Rp. " + total.toLocaleString());
    }

    $(document).ready(function() {
        $('#province').on('keyup', function() {
            let query = $(this).val();
            if (query.length > 2) {
                $.ajax({
                    url: `/provinces`,
                    type: 'GET',
                    success: function(data) {
                        let provinces = data;
                        let list = '';
                        provinces.forEach(province => {
                            if (province.province.toLowerCase().includes(query.toLowerCase())) {
                                list += `<li class="list-group-item">`;
                                list += `<div class="province-item" data-id="${province.province_id}">${province.province}</div>`;
                                list += `</li>`;
                            }
                        });
                        $('#province-list').html(list);
                    }
                });
            }
        });

        $(document).on('click', '.province-item', function() {
            let provinceId = $(this).data('id');
            $('#province').val($(this).text());
            $('#province-list').html('');
            resetFields(['city', 'courier', 'cost']);
            $.ajax({
                url: `/cities/${provinceId}`,
                type: 'GET',
                success: function(data) {
                    let cities = data;
                    let options = '<option value="">Select City</option>';
                    cities.forEach(city => {
                        options += `<option value="${city.city_id}">${city.city_name}</option>`;
                    });
                    $('#city').html(options).prop('disabled', false);
                }
            });
        });

        $('#city').on('change', function() {
            resetFields(['courier', 'cost']);
            $('#courier').prop('disabled', !$(this).val());
        });

        $('#courier').on('change', function() {
            if ($(this).val()) {
                let city = $('#city').val();
                let courier = $(this).val();
                $.ajax({
                    url: `/cost`,
                    type: 'POST',
                    data: {
                        city: city,
                        courier: courier,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        let costs = data;
                        let result = `
                                <div class="col-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sel</th>
                                                <th>Service</th>
                                                <th>Cost</th>
                                                <th>Estimate (day)</th>
                                            </tr>
                                        </thead>
                                        <tbody id="costlist">
                                        </tbody>
                                    </table>
                                </div>`;
                        $('#cost').html(result);

                        costs.forEach((cost, index) => {
                            cost.costs.forEach((c, i) => {
                                $('#costlist').append(`
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input onchange="updateTotalPrice()" class="costoption form-check-input" type="radio" name="costoption" id="costoption" value="${c.cost[0].value}" ${index === 0 && i === 0 ? 'checked' : ''}>
                                                </div>
                                            </td>
                                            <td>${c.service}</td>
                                            <td>Rp. ${c.cost[0].value}</td>
                                            <td>${c.cost[0].etd}</td>
                                        </tr>
                                    `);
                            });
                        });
                    }
                });
            }
        });

        function resetFields(fields) {
            fields.forEach(field => {
                if (field === 'city') {
                    $('#city').html('<option value="">Select City</option>').prop('disabled', true);
                } else if (field === 'courier') {
                    $('#courier').val('').prop('disabled', true);
                } else if (field === 'cost') {
                    $('#cost').html('');
                }
            });
        }
    });
</script>
@endsection