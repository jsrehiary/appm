<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'APPM')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        svg {
            width: 1em;
            height: 1em;
            /* Adjust the size as needed */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-center">
            <a class="navbar-brand" href="#">APPM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('/')) active @endif"
                            href="{{ route('user.home') }}"
                            @if (Request::is('/')) aria-current="page" @endif>Home</a>
                    </li>
                    <div class="bg-secondary" style="width: 1.3px;"></div>
                    <li class="nav-item">
                        <a class="nav-link @if (Request::is('/gallery')) active @endif"
                            href="{{ route('gallery') }}"
                            @if (Request::is('/gallery')) aria-current="page" @endif>Galeri</a>
                    </li>
                </ul>
                <div class="sign-in">
                    <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    @yield('script')

</body>

</html>
