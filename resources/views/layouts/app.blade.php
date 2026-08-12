<!DOCTYPE html>
<html lang="fr" class="no-js scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#141d4a">
    <script>document.documentElement.classList.replace('no-js', 'js')</script>

    <title>@yield('title', 'ClinicSoft — Système d’information hospitalier | DRC Care Medical')</title>
    <meta name="description" content="@yield('description', "ClinicSoft centralise l'accueil, la consultation, les soins, le laboratoire, l'imagerie, la pharmacie, la maternité, la caisse et la direction dans une seule plateforme, éditée par DRC Care Medical.")">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:title" content="@yield('title', 'ClinicSoft — Système d’information hospitalier')">
    <meta property="og:description" content="@yield('description', "La plateforme qui connecte tout votre établissement de santé, de l'accueil du patient jusqu'à l'encaissement.")">
    <meta property="og:image" content="{{ asset('og-image.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white font-sans text-slate-700 antialiased selection:bg-accent-200">
    <a href="#contenu" class="sr-only focus:not-sr-only focus:absolute focus:z-50 focus:m-3 focus:rounded-md focus:bg-primary-800 focus:px-4 focus:py-2 focus:text-white">
        Aller au contenu
    </a>

    @yield('content')

    @livewireScripts
</body>
</html>
