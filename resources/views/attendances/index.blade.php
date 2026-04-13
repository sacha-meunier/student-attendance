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
    @if($students)
    <form action="" method="POST">
        <ol class="student-list">
            @foreach($students as $student)
            <li>
                <input id="student-{{ $student->id }}"
                       type="checkbox"
                       name="students[]"
                       value="{{ $student->id }}">
                <label for="student-{{ $student->id }}">
                    {{$student->first_name}} &nbsp;{{ $student->last_name }}
                </label>
            </li>
            @endforeach
        </ol>
        <button type="submit">Enregistrer les présences</button>
    </form>
    @endif
    <button class="randomStudentBtn hidden">Choisir un·e étudiant·e</button>
    <p class="currentStudent hidden"></p>
</main>


<nav class="page-nav" aria-labelledby="main-nav-id">
    <h2 class="hidden" id="main-nav-id">navigation principale</h2>
    <ul>
        <li><a class=""
               href="{{ route('pages.home') }}">Accueil</a></li>
        <li><a class="active"
               href="{{ route('attendances.index') }}">Présences</a>
        </li>
        <li><a class=""
               href="{{ route('students.index') }}">Étudiants</a></li>
    </ul>
</nav>
<script defer src="{{ asset('build/assets/js/app.js') }}"></script>

<footer class="page-footer">
    <p>
        <time datetime="2025">2025</time>
        - <abbr title="Système de gestion de contenus">SGC</abbr>
    </p>
</footer>
</body>
</html>
