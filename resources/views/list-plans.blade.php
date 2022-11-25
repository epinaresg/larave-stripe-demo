<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/js/app.js'])

</head>
<body>
    <div id="app">

        <div class="container mt-5">


            <div class="row mb-4">

                <div class="col-12">
                    <a class="btn btn-outline-secondary" href="{{ url('save-card') }}">
                        Add Card
                    </a>
                </div>

            </div>


            <div class="row">
                <div class=" col-lg-4 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Bronze plan</h5>

                            <a href="{{ url('simple-payment/checkout/bronze') }}" class="btn btn-primary mb-2">PEN {{ $byMonth['bronze'] }} / One Payment</a>
                            <a href="{{ url('subscription-charge/checkout/bronze') }}" class="btn btn-primary">PEN {{ $bySubscription['bronze'] }} / Subscription</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Silver plan</h5>

                            <a href="{{ url('simple-payment/checkout/silver') }}" class="btn btn-primary mb-2">PEN {{ $byMonth['silver'] }} / One Payment</a>
                            <a href="{{ url('subscription-charge/checkout/silver') }}" class="btn btn-primary">PEN {{ $bySubscription['silver'] }} / Subscription</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Gold plan</h5>

                            <a href="{{ url('simple-payment/checkout/gold') }}" class="btn btn-primary mb-2">PEN {{ $byMonth['gold'] }} / One Payment</a>
                            <a href="{{ url('subscription-charge/checkout/gold') }}" class="btn btn-primary">PEN {{ $bySubscription['gold'] }} / Subscription</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
