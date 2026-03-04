<?php

function index()
{
    require MODELS_PATH.'/Attendance.php';

    $title = 'Prendre les présences';
    $students = all();

    include VIEWS_PATH.'/attendances/index.php';
}
