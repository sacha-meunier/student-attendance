<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(): Factory|View
    {
        $title = 'Page d’accueil';
        return view('home', compact('title'));
    }
}
