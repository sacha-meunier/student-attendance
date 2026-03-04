<?php

namespace Attendances\Controllers;

class AttendanceController
{
    public static function index()
    {
        require MODELS_PATH.'/Attendance.php';

        $title = 'Prendre les présences';
        $students = all();
        // TODO : $students = Attendance\Models\Student::all();

        view('attendances.index', compact('title', 'students'));
    }
}
