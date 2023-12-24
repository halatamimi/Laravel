<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Media Pages')</title>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/image">Image Page</a></li>
            <li><a href="/video">Video Page</a></li>
            <li><a href="/audio">Audio Page</a></li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Laravel Master Page</p>

    </footer>

</body>
</html>
