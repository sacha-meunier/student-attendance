<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }} | {{ config('app.name') }}</title>
</head>
<body class="layout">
<main class="page-main">
    <h1>{{ $title }}</h1>
</main>


<nav class="page-nav" aria-labelledby="main-nav-id">
    <h2 class="hidden" id="main-nav-id">navigation principale</h2>
    <ul>
        <li><a class="active"
               href="{{ route('pages.home') }}">Accueils</a></li>
        <li><a class=""
               href="{{ route('attendances.index') }}">Présences</a>
        </li>
        <li><a class=""
               href="{{ route('students.index') }}">Étudiants</a></li>
    </ul>
</nav>

<footer class="page-footer">
    <p>
        <time datetime="2025">2025</time>
        - <abbr title="Système de gestion de contenus">SGC</abbr>
    </p>
</footer>
</body>
</html>
