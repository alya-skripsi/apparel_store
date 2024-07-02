@extends('layouts.main')
@section('content')
<h1 class="fw-bold mb-4"> {{ $title }} </h1>
<div class="container pb-5 pt-5">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Data Order</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-condensed">
                        <tr>
                            <td>ID</td>
                            <td><b>#{{ $order->tracking_number }}</b></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><b>Rp {{ number_format($order->subtotal, 2, ',', '.') }}</b></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><b>
                                    @if ($order->payment_status == 1)
                                    Waitting Payment
                                    @elseif ($order->payment_status == 2)
                                    Paid
                                    @else
                                    Expired
                                    @endif
                                </b></td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td><b>{{ $order->created_at->format('d M Y H:i') }}</b></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Payment</h5>
                </div>
                <div class="card-body">
                    @if ($order->payment_status == 1)
                    <button class="btn-pri text-decoration-none" id="pay-button">Pay Now</button>
                    @else
                    This Order Already Paid Successfully
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
</script>
<script>
    const payButton = document.querySelector('#pay-button');
    payButton.addEventListener('click', function(e) {
        e.preventDefault();

        snap.pay('{{ $snapToken }}', {
            // Optional
            onSuccess: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(result)
            },
            // Optional
            onPending: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(result)
            },
            // Optional
            onError: function(result) {
                /* You may add your own js here, this is just example */
                // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                console.log(result)
            }
        });
    });
</script>
@endsection