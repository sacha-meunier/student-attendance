<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;

return [
    // Affichage page home
    [
        'url' => '/',
        'method' => 'get',
        'action' => [
            PageController::class,
            'home',
        ],
    ],

    // Affichage liste des présences
    [
        'url' => '/presences',
        'method' => 'get',
        'action' => [
            AttendanceController::class,
            'index',
        ],
    ],

    [
        'url' => '/etudiants',
        'method' => 'get',
        'action' => [
            StudentController::class,
            'index',
        ],
    ],

    [
        'url' => '/etudiants',
        'method' => 'post',
        'action' => [
            StudentController::class,
            'store',
        ],
    ],

    [
        'url' => '/etudiants/create',
        'method' => 'get',
        'action' => [
            StudentController::class,
            'create',
        ],
    ],

    [
        'url' => '/etudiant',
        'method' => 'get',
        'action' => [
            StudentController::class,
            'show',
        ],
    ],

    [
        'url' => '/etudiant/edit',
        'method' => 'get',
        'action' => [
            StudentController::class,
            'edit',
        ],
    ],

    [
        'url' => '/etudiant',
        'method' => 'put',
        'action' => [
            StudentController::class,
            'update',
        ],
    ],

    [
        'url' => '/etudiant',
        'method' => 'delete',
        'action' => [
            StudentController::class,
            'destroy',
        ],
    ],
];
