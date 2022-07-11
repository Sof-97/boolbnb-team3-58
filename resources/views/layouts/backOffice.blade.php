<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>
        @yield('title')
    </title>
</head>

<body style="min-height: 100vh;">
    <header>
        @include('layouts.nav-title')
    </header>
    <main style="min-height: 100%">
        <div class="nav-flex">
            @include('layouts.navbar-side')
            @yield('content')
        </div>
    </main>
    @yield('script')
</body>

</html>
