<!DOCTYPE html>
<html lang="de" class="h-full bg-gray-900">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Willkommen')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center justify-center relative">

    <!-- Hintergrundanimation -->


    <!-- Seiteninhalt -->
    <div class="relative z-10 w-full max-w-sm p-8 bg-gray-800 bg-opacity-90 rounded-xl shadow-xl text-white">
        @yield('content')
    </div>

</body>
</html>
