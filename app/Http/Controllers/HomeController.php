<?php

namespace Attendances\Controllers;

class HomeController
{
    public static function index(): void
    {
        $title = 'Page d’accueil';

        view('home', compact('title'));
    }
}
