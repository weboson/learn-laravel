<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="bg-slate-100 text-slate-900">
<header class="bg-slate-800 shadow-lg">
    <nav>
        <a href="{{ route('home') }}" class="nav-link">Home</a>

        <div class="flex items-center gap-4">
            <a href="#" class="nav-link">Login</a>
            <a href="{{ route('register') }}" class="nav-link">Register</a>
        </div>
    </nav>
</header>
<main class="py-8 px-4 mx-auto max-w-screen-lg">
    {{--  $slot - это содержимое в, которое указывается - при подключении этого компонента (почти как children в react) --}}
    {{ $slot }}
</main>
</body>
</html>

