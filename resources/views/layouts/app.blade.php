<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{ config('app.name') }}</title>
        <meta name="description" content="Blog do maluco">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        @include('layouts.partials.styles')
    </head>
<body>
    @include('layouts.partials.navbar')
    @if(request()->is('/') || request()->is('/home'))
        @include('layouts.partials.slide')
    @endif
    <div class="page-content">
        @yield('content')
        @include('layouts.partials.footer')
    </div>
    @include('layouts.partials.scripts')
</body>
</html>
