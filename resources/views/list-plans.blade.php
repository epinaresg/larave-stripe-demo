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
            <div class="row">
                <div class=" col-lg-4 col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-3">Bronze plan</h5>

                            <a href="{{ url('simple-charge/checkout/bronze') }}" class="btn btn-primary mb-2">PEN {{ $byMonth['bronze'] }} per month</a>
                            <a href="{{ url('subscription-charge/checkout/bronze') }}" class="btn btn-primary">PEN {{ $bySubscription['bronze'] }} per year</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Silver plan</h5>

                            <a href="{{ url('simple-charge/checkout/silver') }}" class="btn btn-primary mb-2">PEN {{ $byMonth['silver'] }} per month</a>
                            <a href="{{ url('subscription-charge/checkout/silver') }}" class="btn btn-primary">PEN {{ $bySubscription['silver'] }} per year</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Gold plan</h5>

                            <a href="{{ url('simple-charge/checkout/gold') }}" class="btn btn-primary mb-2">PEN {{ $byMonth['gold'] }} per month</a>
                            <a href="{{ url('subscription-charge/checkout/gold') }}" class="btn btn-primary">PEN {{ $bySubscription['gold'] }} per year</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
