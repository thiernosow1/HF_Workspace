<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HF-Workspace</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <link href="{{ URL::asset('css/app.css') }}" type="text/css" rel="stylesheet" />


    <!-- Styles -->

</head>

<body class="antialiased">
<header>
    <div class="header">

        <div class="logo">
           <a class="logoA" href= {{Session::has('isAdmin') ? "/admin" : "/sites"}}> HF_Worskpace</a>
        </div>
        <label class="toggle" for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle" />
    <ul class="navbar">

        @if (!Session::has('isAdmin'))
            <li class="nav-item">
                <a class="nav-link" href="/login"> Connexion </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/signup"> Inscription </a>
            </li>

        @elseif (Session::get('isAdmin') === 1)
            {{-- Il est admin --}}
            <li class="nav-item">
                <a class="nav-link" href="/admin/users/"><span class="iconify iconify_nav" data-icon="akar-icons:person"></span>Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/reservations/"><span class="iconify iconify_nav" data-icon="akar-icons:calendar"></span>Reservations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/places/"><span class="iconify iconify_nav" data-icon="akar-icons:person"></span>Places</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout"> <span class="iconify iconify_nav" data-icon="icomoon-free:switch"></span>Déconnexion</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="/users/{{Session::get('id')}}"><span class="iconify iconify_nav" data-icon="akar-icons:person"></span>Compte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><span class="iconify iconify_nav" data-icon="akar-icons:calendar"></span>Réservations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout"> <span class="iconify iconify_nav" data-icon="icomoon-free:switch"></span>Déconnexion</a>
            </li>

        @endif


    </ul>

    </div>

</header>
<main class="main">


    @yield('content')

</main>
</body>

</html>
