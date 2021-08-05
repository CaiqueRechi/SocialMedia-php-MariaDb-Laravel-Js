<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head >
    <!-- JQUERY -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>

    <!-- ÍCONES -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">



    <link rel='icon' href="/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Home') - {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class='bg-dark'>
    <div class='container p-3'>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <nav class="menuLateral"></nav>
        <div class="text-white title">Options</div>
        <ul>
                <li><a href="#">Drunk</a>
                    <ul>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Favorites</a></li>
                    </ul>
                </li>
                <li><a href="#">Travel</a>
                    <ul>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Favorites</a></li>
                    </ul>
                </li>
                <li><a href="#">Love</a>
                    <ul>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Favorites</a></li>
                    </ul>
                </li>
                <li><a href="#">Horror</a>
                    <ul>
                        <li><a href="#">Discover</a></li>
                        <li><a href="#">Favorites</a></li>
                    </ul>
                </li>
        </ul>
</body>

</html>
