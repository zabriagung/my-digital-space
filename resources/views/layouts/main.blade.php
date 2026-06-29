<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyDigitalSpace - @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body{
            background:#f8f9fa;
            font-family:'Poppins',sans-serif;
        }

        .navbar{
            box-shadow:0 2px 10px rgba(0,0,0,.05);
        }

        .navbar-brand{
            font-weight:600;
            color:#FF2D20 !important;
        }

        .nav-link{
            transition:.3s;
        }

        .nav-link:hover{
            color:#FF2D20 !important;
        }

        .nav-link.active{
            color:#FF2D20 !important;
            font-weight:600;
        }

        .fade-in{
            animation:fadeIn .8s ease-in;
        }

        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(10px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        .card{
            border-radius:12px;
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            height:200px;
            object-fit:cover;
        }

        footer{
            font-size:14px;
        }

        .accordion-button{
            font-weight:600;
        }

        .accordion-button:not(.collapsed){
            background:#FF2D20;
            color:#fff;
        }

        .accordion-button:focus{
            box-shadow:none;
        }

        .accordion-item{
            border-radius:10px;
            overflow:hidden;
            margin-bottom:10px;
        }

        .btn-danger{
            background:#FF2D20;
            border:none;
        }

        .btn-danger:hover{
            background:#e0261b;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            MyDigitalSpace
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Menu Kiri -->
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                       href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                       href="/about">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('mahasiswa/create') ? 'active' : '' }}"
                       href="/mahasiswa/create">
                        + Mahasiswa
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('buku/create') ? 'active' : '' }}"
                       href="/buku/create">
                        + Buku
                    </a>
                </li>

            </ul>

            <!-- Menu Kanan -->
            <ul class="navbar-nav ms-auto">

                @auth

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button type="submit"
                                    class="btn btn-link nav-link text-decoration-none">
                                Logout
                            </button>
                        </form>
                    </li>

                @else

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('login') }}">
                            Login
                        </a>
                    </li>

                @endauth

            </ul>

        </div>

    </div>
</nav>

<!-- CONTENT -->
<main class="container py-4 fade-in">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}

            <button class="btn-close"
                    data-bs-dismiss="alert">
            </button>
        </div>
    @endif

    @yield('content')

</main>

<!-- FOOTER -->
<footer class="text-center mt-5 py-4 text-muted">
    <hr>
    <p class="mb-0">
        &copy; {{ date('Y') }} MyDigitalSpace • Dibuat dengan Laravel 🚀
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>