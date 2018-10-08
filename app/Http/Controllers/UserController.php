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

    public function create(Request $request)
    {
        $user = new User();
        
        $user->prenom = ucfirst($request->get('prenom'));
        $user->nom = mb_strtoupper($request->get('nom'));
        $user->telephone = $request->get('telephone');
        $user->interne = $request->get('interne');
        $user->email = $request->get('email');
        $user->site = $request->get('site');
        $user->service = $request->get('service');
        $user->save();

        return redirect('annuaire')->with('success', 'Utilisateur ajouté');
    }


    public function update(Request $request)
    {
        $user = User::findOrFail($request->get('id'));
        
        $user->prenom = ucfirst($request->get('prenom'));
        $user->nom = mb_strtoupper($request->get('nom'));
        $user->telephone = $request->get('telephone');
        $user->interne = $request->get('interne');
        $user->email = $request->get('email');
        $user->site = $request->get('site');
        $user->service = $request->get('service');
        $user->save();

    }

    public function delete(Request $request)
    {
        $user = User::find($request->get('id'));
        $user->delete();
        return redirect('annuaire');
    }
}
