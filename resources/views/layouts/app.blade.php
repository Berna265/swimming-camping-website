<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">Swimming and Camping Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="mx-auto p-2">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/information') }}">Information</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/available') }}">Available</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/reviews') }}">Reviews</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/features') }}">Features</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ url('/attractions') }}">Attractions</a>
                    </li>
                    <li class="nav-item mr--5">
                        <a class="nav-link" href="{{ url('/places') }}">Places</a>
                    </li>
                </ul>
            </div>
</div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
