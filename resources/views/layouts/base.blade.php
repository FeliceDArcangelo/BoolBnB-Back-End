<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('/logos/multicolor-logo.ico') }}" type="image/x-icon">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>BoolBnB</title>
    @vite('resources/js/app.js')
</head>

<body style="background-color: #f5f5f5; margin-bottom: 0;" >

    @include('includes.header')

    <main class="container" style="margin-top: 100px; margin-bottom: 50px; min-height: 63vh;">
        @yield('contents')
    </main>

    @include('includes.footer')

</body>

</html>
