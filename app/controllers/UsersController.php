<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
{
    /**
     * Mostramos todos los usuarios
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));
    }

    /**
     * Guardamos un usuario en la DB
     */
    public function store()
    {
        App::get('database')->insert('users', [
            'username' => $_POST['username']
        ]);

        return redirect('users');
    }
}
