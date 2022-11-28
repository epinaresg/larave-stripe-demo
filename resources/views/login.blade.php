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
                    <div class=" col-lg-3 col-12">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title mb-2 mt-1">Login</h5>

                                <div class="card-body text-center">
                                    <form action="{{ url('login') }}" method="POST">
                                        <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                                        <input value="Join" type="submit" class="btn form-control btn-primary full-width mt-1">
                                    </form>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
