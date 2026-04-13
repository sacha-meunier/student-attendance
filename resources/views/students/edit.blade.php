<x-layout :title="$title">
    <x-header
        :title="$title"
        description="Mettez à jour les informations de l’étudiant."
    >
        <section>
            <h2 class="sr-only">Actions relatives à {{ $student->first_name }}</h2>
            <ul>
                <li>
                    <form action="{{ route('students.destroy', $student) }}" method="post">
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
        </section>
    </x-header>

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
</x-layout>
