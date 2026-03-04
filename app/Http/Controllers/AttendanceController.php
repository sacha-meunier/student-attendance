<?php

function index()
{
    require MODELS_PATH.'/Attendance.php';

    $title = 'Prendre les présences';
    $students = all();

    view('attendances.index', compact('title', 'students'));
}
