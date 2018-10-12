<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class WelcomeController extends Controller
{
    public function show() {
        $news = News::orderBy('created_at', 'desc')
        ->take(3)
        ->get();
        return view('welcome',  array('news' => $news));
    }

    public function createNews(Request $request) {
        //MODIFICATION
        if($request->get('id') ==! null){
            $news = News::findOrFail($request->get('id'));
        
            $news->title = ucfirst($request->get('title'));
            $news->content = ucfirst($request->get('content'));
            $news->author = $request->get('author');
            $news->save();
            return redirect('/')->with('success', 'Utilisateur ajouté');
        //CREATION
        } else {
        $news = new News();
        
        $news->title = ucfirst($request->get('title'));
        $news->content = ucfirst($request->get('content'));
        $news->author = $request->get('author');
        $news->save();

        return redirect('/')->with('success', 'Utilisateur ajouté');
        }
    }
    //SUPPRESSION
    public function deleteNews(Request $request) {
        $news = News::find($request->get('id'));
        $news->delete();
        return redirect('/');
    }

}
