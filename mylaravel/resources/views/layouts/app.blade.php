<!DOCTYPE html>
<html lang = "ru">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <meta http-equiv = "X-UA-Compatible" content = "ie = edge">
        <title>@yield('title-of-page')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div>
            @include('inc.messages')
        </div>
        @include('inc.header')
        <div class="px-2 py-3">
            @yield('content')
        </div>
        @include('inc.footer')
    </body>
</html>
