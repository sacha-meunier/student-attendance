<x-layout :title="$title">
    <h1>{{ $title }}</h1>

    @if (count($students) > 0)
        <ol>
            @foreach ($students as $student)
                <li>
                    <a href="{{ route('students.show',$student) }}">
                        {{ $student->first_name }}&nbsp;{{ $student->last_name }}
                    </a>
                </li>
            @endforeach
        </ol>
    @else
        <p>Mais où sont-ils&nbsp;?</p>
    @endif
    <div>
        <a href="{{ route('students.create') }}" class="action">Ajouter un étudiant</a>
    </div>
</x-layout>
