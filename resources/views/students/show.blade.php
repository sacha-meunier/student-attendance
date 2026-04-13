<x-layout :title="$title">
    <x-header :title="$title">
        <nav aria-labelledby="actions-title">
            <h2 id="actions-title" class="sr-only">Actions relatives à {{ $student->first_name }}</h2>

            <ul class="flex flex-wrap gap-3 items-center">
                <li>
                    <a href="{{ route('students.edit', $student) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                        </svg>
                        Modifier <span class="sr-only">{{ $student->first_name }}</span>
                    </a>
                </li>
                <li>
                    <form action="{{ route('students.destroy', $student) }}" method="post" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition-colors shadow-sm">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Supprimer <span class="sr-only">{{ $student->first_name }}</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </x-header>

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
