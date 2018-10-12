<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        session_start();
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $_SESSION['toast'] = 'Vous êtes connecté!';
            return redirect("/annuaire");
        } else {
            $_SESSION['toast'] = 'Identifiant ou mot de passe incorrect!';
        }
    }
}