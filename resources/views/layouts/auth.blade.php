<!DOCTYPE html>
<html lang="de" class="h-full bg-gray-900">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'YourCardCollection' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center justify-center">
    @yield('content')
</body>
</html>
