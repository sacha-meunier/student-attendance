<x-layout :title="$title">
    <h1>{{ $title }}</h1>

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
</x-layout>
