<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web-Journal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        <header class="">
                <nav class="">
                </nav>
        </header>
        <div class="content">
            <form action="{{ route('logout') }}" method="POST">
                @csrf

                {{Auth::user()->name}} {{Auth::user()->email}}
                <button type="submit">Logout</button>

                <table>

                </table>
            </form>
        </div>
    </body>
</html>
