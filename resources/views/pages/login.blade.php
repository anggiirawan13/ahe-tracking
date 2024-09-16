<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ticketing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #343a40;
            /* Bootstrap bg-dark color */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            background: #f8f9fa;
            /* Light background for the card */
            border: 1px solid #dee2e6;
            /* Slight border to separate from background */
        }

        .card-title {
            color: #212529;
            /* Dark color for the title for better readability */
            font-weight: 600;
        }

        .form-control {
            background-color: #ffffff;
            /* Light background for input fields */
            color: #212529;
            /* Dark text for inputs */
            border: 1px solid #ced4da;
            /* Light border for inputs */
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            /* Blue shadow */
            border-color: #007bff;
            /* Blue border on focus */
        }

        .btn-primary {
            background-color: #007bff;
            /* Primary color for button */
            border-color: #007bff;
            /* Match border color */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
            border-color: #004085;
            /* Darker border on hover */
        }

        .btn-primary:focus,
        .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
            /* Blue shadow */
        }
    </style>
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-4">
                        <h3 class="card-title text-center mb-4 text-dark">Login</h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label text-dark">Email</label>
                                <input type="email" class="form-control border-0 bg-light text-dark rounded-pill shadow-sm" id="email" name="email" placeholder="Enter your email" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-dark">Password</label>
                                <input type="password" class="form-control border-0 bg-light text-dark rounded-pill shadow-sm" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 rounded-pill shadow-sm">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.4/dist/chart.umd.min.js"></script>
</body>

</html>