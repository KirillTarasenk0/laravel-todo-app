<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel To-Do App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .welcome-section {
            margin-top: 50px;
        }
        .btn-custom {
            margin: 10px;
        }
    </style>
</head>
<body>
<div class="container welcome-section">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4">Welcome to Laravel To-Do App</h1>
            <p class="lead">
                This is your new favorite tool for managing daily tasks efficiently and effectively. Add, track, and complete your to-dos with ease.
            </p>
            <div class="mt-4">
                @if (Route::has('login'))
                    <div class="d-flex justify-content-center">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg btn-custom">Go to Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-custom">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-secondary btn-lg btn-custom">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
