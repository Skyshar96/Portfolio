<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home', [
            'pageTitle' => 'Accueil — Portfolio BTS SIO'
        ]);
    }

    public function veille()
    {
        return view('veille', [
            'pageTitle' => 'Veille technologique — Portfolio BTS SIO'
        ]);
    }

    public function stages()
    {
        return view('stages', [
            'pageTitle' => 'Stages — Portfolio BTS SIO'
        ]);
    }

    public function codeConduite()
    {
        return view('code-conduite', [
            'pageTitle' => 'Code de conduite — Portfolio BTS SIO'
        ]);
    }
}
