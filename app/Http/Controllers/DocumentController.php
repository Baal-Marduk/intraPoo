<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;
use App\Models\Categorie;

class DocumentController extends Controller
{
    public function show() {
        $categories = Storage::allDirectories('/');
        $documents = [];
        foreach($categories as $categorie){
            array_push($documents, Storage::allFiles($categorie));
        }
        return view('documents',  array('documents' => $documents, 'categories' => $categories));
}

public function create(Request $request){
    $categorie = Categorie::findOrFail($request->get('categorie_id'));

    $validation = $request->validate([
        'file' => 'required|file|mimes:pdf,xls,docx,txt|max:20048'
    ]);

    $file = $validation['file'];

    // generate a new filename. getClientOriginalExtension() for the file extension
    if ($request->file('rename')!== null){
    $filename = $request->file('rename') . '.' . $file->getClientOriginalExtension();
    }

    // save to storage/app/photos as the new $filename
    $path = $file->storeAs('file', $filename);

    dd($path);

    $path = $request->file('file')->store($categorie->name);

    
}

public function update(){

    $document = Document::findOrFail($request->get('id'));

    $document->title = ucfirst($request->get('title'));
    $document->url = ucfirst($request->get('url'));
    $document->categorie_id = ucfirst($request->get('categorie_id'));
    $document->save();
}

public function delete(){

}

public function createDir(Request $request){
        Storage::makeDirectory($request->get('name'));
    }
}
