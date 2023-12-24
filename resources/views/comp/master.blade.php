<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    @include('nav')
    @yield('con')
    @include('footer')

</body>
@yield('js')
</html>