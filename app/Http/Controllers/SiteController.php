<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Yuri';
        $habits =['Ler', 'Estudar', 'Dormir'];

        return view('home',[
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
