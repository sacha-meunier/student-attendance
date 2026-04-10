<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AttendanceController extends Controller
{
    public function index(): Factory|View
    {
        $title = 'Prendre les présences';
        $students = Student::all();

        return view(
            'attendances.index',
            compact('title', 'students')
        );
    }
}
