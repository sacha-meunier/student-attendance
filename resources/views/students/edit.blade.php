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
    <h1>La fiche de {{ $student->first_name }}</h1>
    <section class="resource-actions">
        <h2 class="sr-only">Actions relatives à {{ $student->first_name }}</h2>
        <ul>
            <li>
                <form action="{{ route('students.destroy', $student) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer {{ $student->first_name }}</button>
                </form>
            </li>
        </ul>
    </section>

    <form action="{{ route('students.update', $student) }}" method="post">
        @method('PUT')
        @csrf
        <div>
            <label for="first_name">Prénom <sup>*</sup></label>
            <input type="text" id="first_name" name="first_name" value="{{ $student->first_name }}"
                   placeholder="{{ $student->first_name }}" required>
        </div>
        <div>
            <label for="last_name">Nom de famille <sup>*</sup></label>
            <input type="text" id="last_name" name="last_name" value="{{ $student->last_name }}"
                   placeholder="{{ $student->last_name }}" required>
        </div>
        <div>
            <label for="matricule">Matricule <sup>*</sup></label>
            <input type="text" id="matricule" name="matricule" value="{{ $student->matricule }}"
                   placeholder="{{ $student->matricule }}" required>
        </div>
        <div>
            <label for="email">Email <sup>*</sup></label>
            <input type="email" id="email" name="email" value="{{ $student->email }}"
                   placeholder="{{ $student->email }}" required>
        </div>
        <div>
            <label for="profile_photo">Photo de profil</label>
            <input type="file" id="profile_photo" name="profile_photo">
        </div>
        <div>
            <button type="submit">Enregistrer ces informations</button>
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
