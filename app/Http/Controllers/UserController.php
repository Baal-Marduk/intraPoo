<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
//use App\Http\Controllers\Controller;

class UserController extends Controller
{
    
    protected function show()
    {
        $users = User::all();
        //return view("annuaire", compact("users"));
        //return View::make('annuaire')->with('users', $users);
        return view('annuaire',  array('users' => $users));
    }
}
