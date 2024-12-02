<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Sistema de seguridad</title>
    @vite(['resources/css/user-layout.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.bunny.net">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <!-- Styles -->
    @livewireStyles
    @yield('content')
    @livewireScripts
</head>

<body>

    <header></header>
    <div></div>
    <footer></footer>


    {{ $slot }}


</body>
</html>