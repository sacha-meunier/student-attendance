<?php

namespace Attendances\Controllers;

class StudentController
{
    public static function index()
    {
        require MODELS_PATH.'/Student.php';

        $title = 'Tout les étudiants';
        $students = all();

        view('students.index', compact('title', 'students'));
    }
}
