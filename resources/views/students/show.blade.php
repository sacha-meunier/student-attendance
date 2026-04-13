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
    <section class="resource-actions">
        <h2 class="sr-only">Actions relatives à {{ $student->first_name }}</h2>
        <ul>
            <li>
                <a href="{{ route('students.edit', $student) }}">Modifier {{ $student->first_name }}</a>
            </li>
            <li>
                <form action="{{ route('students.destroy', $student) }}"
                      method="post"
                >
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer {{ $student->first_name }}</button>
                </form>
            </li>
        </ul>
    </section>
    <dl>
        <div>
            <dt>Prénom</dt>
            <dd>{{ $student->first_name }}</dd>
        </div>
        <div>
            <dt>Nom de famille</dt>
            <dd>{{ $student->last_name }}</dd>
        </div>
        <div>
            <dt>Matricule</dt>
            <dd>{{ $student->matricule }}</dd>
        </div>
        <div>
            <dt>Email</dt>
            <dd><a href="mailto: {{ $student->email }}">{{ $student->email }}</a></dd>
        </div>
    </dl>


    <div>
        <a href="{{ route('students.index') }}" class="action">Voir tous les étudiants</a>
    </div>
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
