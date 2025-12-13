<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Optional: reuse app styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Admin Navigation --}}
    @include('admin.partials.nav')

    <main style="padding: 20px;">
        @yield('content')
    </main>

</body>
</html>