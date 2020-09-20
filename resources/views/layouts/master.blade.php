<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    </head>
    <body id="app">
        <header>
            Header goes here
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            <a href="https://github.com/RVxLab/project-skeleton" target="blank" rel="noopener noreferrer">Open source on Github</a>
        </footer>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
