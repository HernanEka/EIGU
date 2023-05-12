<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">

    <!-- Font Awesome for Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootsrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


    <title>EIGU</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-abu sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('src/img/Logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control round" aria-label="Search">
                        <span class="input-group-text round">
                            <a href="#!" class="text-decoration-none nav-link navbar-link text-dark">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </span>
                    </div>
                </form>
                @if (Request::is('dashboard*'))
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                </ul>
                @else
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item px-3 text-center">
                        <a class="navbar-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                            href="/">
                            <i class="fs-5 bi bi-house"></i><br>Home
                        </a>
                    </li>
                    <li class="nav-item px-3 text-center">
                        <a class="navbar-link {{ Request::is('network*') ? 'active' : '' }}"" aria-current="page"
                            href="/network">
                            <i class="fs-5 bi bi-people"></i><br>Network
                        </a>
                    </li>
                    <li class="nav-item px-3 text-center">
                        <a class="navbar-link {{ Request::is('pekerjaan*') ? 'active' : '' }}"" aria-current="page"
                            href="/pekerjaan">
                            <i class="fs-5 bi bi-bag"></i><br>Job
                        </a>
                    </li>
                    <li class="nav-item px-3 text-center">
                        <a class="navbar-link {{ Request::is('messaging*') ? 'active' : '' }}"" aria-current="page"
                            href="/messaging/admin">
                            <i class="fs-5 bi bi-send"></i><br>Messaging
                        </a>
                    </li>
                </ul>
                @endif
                <div class="dropdown">
                    <button type="button" class="btn round navbar-link-setting" data-bs-toggle="dropdown"
                        data-bs-display="static" aria-expanded="false">
                        <i class=" fs-4 bi bi-gear"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <li><a href="/settings/integration" class="dropdown-item">Setting</a></li>
                        <li><a href="/logout" class="dropdown-item">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    @yield('konten')

    {{-- <nav class="navbar fixed-bottom">
        <div class="w-100 text-end m-5 p-5">
            <img src="{{ asset('src/img/bell.png') }}" alt="" width="20">
        </div>
    </nav> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
