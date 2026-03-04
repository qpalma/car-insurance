<!DOCTYPE html>
<html>
<head>
    <title>Insurance App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">

        <a class="navbar-brand" href="/">Insurance</a>

        <div class="navbar-nav">

            <a class="nav-link text-white" href="{{ route('owners.index') }}">
                Owners
            </a>

            <a class="nav-link text-white" href="{{ route('cars.index') }}">
                Cars
            </a>

        </div>

    </div>
</nav>

@yield('content')

</body>
</html>
