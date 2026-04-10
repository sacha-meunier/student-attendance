<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class StudentController extends Controller
{
    public function index(): View|Factory
    {
        $title = 'Tous les étudiants';
        $students = Student::all();

        return view(
            'students.index',
            compact('title', 'students')
        );
    }

    public function create(): View|Factory
    {
        $title = 'Ajouter un étudiant';

        return view(
            'students.create',
            compact('title')
        );
    }

    public function store(): RedirectResponse
    {
        // Stocker un étudiant en DB
        $student = new Student;

        $student->first_name = $_POST['first_name'];
        $student->last_name = $_POST['last_name'];
        $student->email = $_POST['email'];
        $student->matricule = $_POST['matricule'];
        $student->birth_date = empty($_POST['birth_date']) ? null : $_POST['birth_date'];

        $student->save();

        // Demander au navigateur de se rediriger vers la page de résultat souhaitée
        return redirect()->route('students.show', $student);
    }

    public function show(Student $student): View|Factory
    {
        $title = 'La fiche de '.$student->first_name;

        return view('students.show',
            compact(
                'title',
                'student'
            )
        );

    }

    public function edit(Student $student): View|Factory
    {
        $title = 'La fiche de '.$student->first_name;

        return view('students.edit',
            compact(
                'title',
                'student'
            )
        );
    }

    public function update(Student $student): RedirectResponse
    {

        // Validation des données qui bloque si les données sont invalides

        $student->first_name = $_POST['first_name'];
        $student->last_name = $_POST['last_name'];
        $student->email = $_POST['email'];
        $student->matricule = $_POST['matricule'];
        $student->birth_date = empty($_POST['birth_date']) ? null : $_POST['birth_date'];

        $student->save();

        return redirect()->route('students.show', $student);

    }

    public function destroy(Student $student): RedirectResponse
    {
        $student->delete();

        return redirect()->route('students.index');
    }
}
