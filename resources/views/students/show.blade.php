<x-layout :title="$title">
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
</x-layout>
