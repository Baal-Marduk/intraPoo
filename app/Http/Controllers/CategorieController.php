<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;


class CategorieController extends Controller
{

    public function create(Request $request){
        if(Storage::makeDirectory($request->get('name'))){
            $_SESSION['toast'] = "Dossier ajouté !";
        } else {
            $_SESSION['toast'] = "Erreur lors de l'ajout";
    }
}
    
    public function update(){
    
    }
    
    public function delete(){
        
    }
}
