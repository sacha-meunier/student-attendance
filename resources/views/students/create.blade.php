<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('build/assets/css/app.css') }}">
    <title>{{ $title }} | {{ config('app.name') }}</title>
</head>
<body class="layout">
<main class="page-main">
    <h1>{{ $title }}</h1>
    <form action="{{ route('students.store') }}"
          method="post"
          enctype="multipart/form-data"
    >
        @csrf
        <div>
            <label for="first-name">Prénom <sup>*</sup></label>
            <input id="first-name" name="first_name" type="text" placeholder="Jean" required>
        </div>
        <div>
            <label for="family-name">Nom de famille <sup>*</sup></label>
            <input id="family-name" name="last_name" type="text" placeholder="Valjean" required>
        </div>
        <div>
            <label for="email">Email <sup>*</sup></label>
            <input id="email" name="email" type="email" placeholder="jean.valjean@miserables.fr" required>
        </div>
        <div>
            <label for="matricule">Matricule <sup>*</sup></label>
            <input id="matricule" name="matricule" type="text" placeholder="tecg01234" required>
        </div>
        <div>
            <label for="birth-date">Date de naissance</label>
            <input id="birth-date" name="birth_date" type="date"    >
        </div>
        <div>
            <label for="profile-photo">Photo</label>
            <input id="profile-photo" name="profile_photo" type="file">
        </div>
        <div>
            <button type="submit">Enregistrer l’étudiant</button>
        </div>
    </form>
</main>


<nav class="page-nav" aria-labelledby="main-nav-id">
    <h2 class="hidden" id="main-nav-id">navigation principale</h2>
    <ul>
        <li><a class=""
               href="{{ route('pages.home') }}">Accueil</a></li>
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
