<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type='text/css' href="/resources/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css">
    {{-- {{-- <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'> --}}
</head>

<body>

    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="top-bar-left" style="flex: justify">
            <ul class="menu" style="flex:center">
                <li class="menu-text">My first app</li>
                <li><a href="{{ route('homePage') }}">Home</a></li>
                <li><a href="{{ route('seriesPage') }}">Series</a></li>
                <li><a href="{{ route('contactPage') }}">Contact</a></li>
            </ul>

            <ul class="menu" style="flex:center">
                @auth
                    <li><a href="{{ route('homePage') }}">Ion Velesco</a></li>
                    <li><a href="{{ route('contactPage') }}">Log out</a></li>
                @else
                    <li><a href="{{ route('seriesPage') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
    <!-- End Top Bar -->

    <div class="callout large primary">
        <div class="text-center">
            <h1>Series</h1>
            <h2 class="subheader">Series Master</h2>
        </div>
    </div>

    <article class="grid-container">

        @yield('content')

    </article>



    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();

    </script>
</body>

</html>
