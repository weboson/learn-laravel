<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <h1 class="text-4xl">Navigation</h1>
    </nav>
</header>
<main>
{{--  директива для полкючения  --}}
    @yield('main')
</main>
</body>
</html>

