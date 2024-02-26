<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function show($id, $name)
    {
        return view('user.show', compact('id', 'name'));
    }
}
