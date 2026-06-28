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
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar */
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 600;
            color: #FF2D20 !important;
        }

        .nav-link {
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #FF2D20 !important;
        }

        /* ACTIVE MENU */
        .nav-link.active {
            color: #FF2D20 !important;
            font-weight: 600;
        }

        /* ANIMASI FADE IN */
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card {
            border-radius: 12px;
        }

        footer {
            font-size: 14px;
        }

        /* ACCORDION STYLE */
        .accordion-button {
            font-weight: 600;
        }

        .accordion-button:not(.collapsed) {
            background-color: #FF2D20;
            color: white;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion-item {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 10px;
            transition: 0.3s;
        }

        .accordion-item:hover {
            transform: scale(1.01);
        }

        /* HOVER EFFECT ACCORDION */
        .accordion-button {
            transition: 0.3s;
        }

        .accordion-button:hover {
            background-color: #ffe5e3;
            color: #FF2D20;
        }

        /* HERO TEXT */
        h1 {
            letter-spacing: 1px;
        }

        /* BUTTON */
        .btn-danger {
            background-color: #FF2D20;
            border: none;
        }

        .btn-danger:hover {
            background-color: #e0261b;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        .card {
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">MyDigitalSpace</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
               <div class="navbar-nav ms-auto">

    <a class="nav-link {{ request()->is('beranda') ? 'active' : '' }}" href="/beranda">
        Home
    </a>

    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">
        About
    </a>

    <a class="nav-link {{ request()->is('mahasiswa/create') ? 'active' : '' }}" href="/mahasiswa/create">
        + Mahasiswa
    </a>

    <a class="nav-link {{ request()->is('buku/create') ? 'active' : '' }}" href="/buku/create">
        + Buku
    </a>

</div>
            </div>
        </div>
    </nav>

    <!-- CONTENT + ANIMASI -->
    <main class="container py-4 fade-in">

        {{-- PESAN SUKSES (Langkah 6) --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>