<?php

function index()
{
    require MODELS_PATH.'/Student.php';

    $title = 'Tout les étudiants';
    $students = all();

    include VIEWS_PATH.'/students/index.php';
}
