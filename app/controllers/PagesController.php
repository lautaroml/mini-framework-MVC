<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Página "Inicio"
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Página "Nosotros"
     */
    public function about()
    {
        $company = 'Esto es una variable';

        return view('about', ['company' => $company]);
    }

    /**
     * Página "Contáctos"
     */
    public function contact()
    {
        return view('contact');
    }
}
