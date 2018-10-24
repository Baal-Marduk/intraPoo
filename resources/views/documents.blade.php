@extends('layouts.template')

@section('content')

<head>
    <div class="parallax-container valign-wrapper annuaire-hero-box">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h2 class="header col s12 light main-title">Documents</h2>
                    <h5 class="light sub-title">Vous trouverez ici tout les documents DS</h5>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Documents</title>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('img/jan-kahanek-184676.jpg')}}" alt="Unsplashed background img 2"></div>
    </div>
</head>
<div class="container">
    <div class="row">
        <ul class="collapsible Accordion" data-collapsible="accordion">
            @foreach($categories as $cat_key=>$categorie)
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{$categorie}}</div>
                <div class="collapsible-body">
                    <ul>
                    @foreach($documents as $doc_key => $document)
                    @if($doc_key == $cat_key)
                        @foreach($document as $file)
                            <li><a href="{{Storage::url($file)}}" download>{{$file}}</a><div class="grey-text right">{{Storage::url($file)}} {{date('Y-m-d H:i:s', (Storage::lastModified($file)))}}</div></li>
                        @endforeach
                    @endif
                    @endforeach
                    </ul>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="section">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-light btn modal-trigger deep-orange pulse" href="#doc_modal">
            <i class="large material-icons">note_add</i>
        </a>
        <a class="btn-floating btn-large waves-light btn modal-trigger indigo" href="#dir_modal"><i
                    class="material-icons">playlist_add</i> </a>
    </div>

    <!----MODAL AJOUT DOCUMENT----->
    <div id="doc_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Ajouter un fichier</h5>
            <div class="row">
                <div class=" col s2 m2 l2 ">
                    <label>Séléctionnez un dossier</label>
                    <select class="browser-default" form="getfile" name="categorie">
                        <option value="" selected disabled>Catégorie</option>
                        @foreach($categories as $categorie)
                        <option value=""></option>
                        @endforeach
                    </select>
                </div>
                <div class="col s2 m2 l2 input-field">
                    <label for="rename">Renommer</label>
                    <input type="text" name="rename">
                </div>
            </div>
            <label>Séléctionnez un fichier (.pdf / 20Mo max.)</label>
            <div class="row">
                <form method="post" action="script/upload.php" enctype="multipart/form-data" id="getfile">

                    <div class=" col s9 m9 l9 file-field input-field">
                        <div class="btn waves-light">
                            <span>Fichier</span>
                            <input type="file" name="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate " type="text">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                        <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                    class="material-icons right">file_upload</i></button>
                                    {{ csrf_field() }}
                    </div>
                </form>


            </div>

        </div>
    </div>
    <!----MODAL AJOUT DOSSIER----->
    <div id="dir_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Ajouter un dossier</h5>
            <div class="row">
                <form method="post" action="/categorieCreate" enctype="multipart/form-data" id="getdir">
                    <div class=" col s5 m5 l5 file-field input-field">
                        <label for="title">Dossier</label>
                        <input type="text" name="title">
                    </div>
                        <div class="modal-footer">
                            <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                            <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
                            <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                        class="material-icons right">file_upload</i></button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>

<!----MODAL SUPPRESSION DOCUMENT----->
<div id="delete_doc_modal" class="modal">
    <div class="modal-content">
        <h4>Suppression d'un document</h4>
        <p>Etes vous sur de vouloir supprimer ce document ?</p>
    </div>
    <div class="modal-footer">
        <form method="post" action="script/doc_delete.php" enctype="multipart/form-data" id="deleteDoc_form"
              class="doc-form-delete">
            <input id="file_path" type="hidden" name="link">
        </form>
        <a href="#" class="btn modal-close waves-effect ">Annuler</a>
        <button type="submit" class=" waves-effect btn red " name="action" id="deleteDoc_submit" form="deleteDoc_form">
            Supprimer<i
                    class="material-icons right">delete</i></button>
    </div>
</div>

<!----MODAL SUPPRESSION D'UNE CATEGORIE----->
<div id="delete_dir_modal" class="modal">
    <div class="modal-content">
        <h4>Suppression d'une catégorie</h4>
        <p>Etes vous sur de vouloir supprimer cette catégorie et tout les dossiers qu'elle contient?</p>
    </div>
    <div class="modal-footer">
        <form method="post" action="script/dir_delete.php" enctype="multipart/form-data" id="deleteDir_form"
              class="dir-form-delete">
            <input id="dir_path" type="hidden" name="link">
        </form>
        <a href="#" class="btn modal-close waves-effect ">Annuler</a>
        <button type="submit" class=" waves-effect btn red " name="action" id="deleteDir_submit" form="deleteDir_form">
            Supprimer<i
                    class="material-icons right">delete</i></button>
    </div>
</div>

@endsection