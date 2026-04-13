<x-layout :title="$title">
    <x-header :title="$title">
        <a href="{{ route('students.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Ajouter un étudiant
        </a>
    </x-header>

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
