@extends('layouts.template')

@section('content')

<div class="parallax-container valign-wrapper annuaire-hero-box">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h2 class="header col s12 light main-title">Annuaire</h2>
                    <h5 class="light sub-title">Vous trouverez ici toutes les données relatives aux collaborateurs DS.
                        <!doctype html>
                        <html lang="fr">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Document</title>
                        </head>
                        <body>

                        </body>
                        </html>
                    </h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('img/kari-shea-199320-unsplash.jpg') }}" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
        <div class="section">
            <div class="row">
                <table class="highlight data-table" id="annuaire">
                    <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Téléphone</th>
                        <th>Interne</th>
                        <th>Email</th>
                        <th>Site</th>
                        <th>Service</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                    <tr >
                        <td>{{ $user->prenom }}</td>
                        <td>{{ $user->nom }}</td>
                        <td>{{ $user->telephone }}</td>
                        <td>{{ $user->interne }}</td>
                        <td><a  href='#' class='indigo-text'>{{ $user->email }}"</a></td>
                        <td style='display: none' id='user_id' class='user_id'>{{ $user->id }}</td>
                        <td>{{ $user->site }}</td>
                        <td>{{ $user->service }}</td>
                        <td><a href="" class="secondary-content modal-trigger">
                            <i class="material-icons indigo-text " id='' style='visibility: hidden;'>edit</i>
                            </a>
                        </td>
                        <td><a href="#delete_modal" class="secondary-content modal-trigger">
                            <i class="material-icons red-text delete_user" id=''>delete</i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                <!-- <tr >
                    <td>"prenom"</td>
                    <td>"nom"</td>
                    <td>" telephone "</td>
                    <td>" interne"</td>
                    <td><a  href='#' class='indigo-text'>"email"</a></td>
                    <td style='display: none' id='user_id' class='user_id'>"id"</td>
                    <td>" site "</td>
                    <td>" service"</td>
                    <td><a href="" class="secondary-content modal-trigger">
                        <i class="material-icons indigo-text " id='' style='visibility: hidden;'>edit</i>
                        </a>
                    </td>
                    <td><a href="#delete_modal" class="secondary-content modal-trigger">
                        <i class="material-icons red-text delete_user" id=''>delete</i>
                        </a>
                    </td>
                </tr> -->
                
                    
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="section">
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-light btn modal-trigger deep-orange pulse" href="#annuaire_modal">
            <i class="large material-icons">person_add</i>
        </a>
    </div>
    <!-- SUPPRESSION ANNUAIRE -->
    <div id="delete_modal" class="modal">
        <div class="modal-content">
            <h4>Suppression d'un collaborateur</h4>
            <p>Etes vous sur de vouloir supprimer cette entrée ?</p>
        </div>
        <div class="modal-footer">
            <form method="post" action="script/user_delete.php" enctype="multipart/form-data" id="delete_form"
                  class="data-form-delete">
                <input id="user_id" type="text" name="id" hidden>
            </form>
            <a href="#" class="btn modal-close waves-effect ">Annuler</a>
            <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
            <button type="submit" class="modal-action  waves-effect btn red " name="action" id="delete_submit">Supprimer<i
                        class="material-icons right">delete</i></button>
        </div>
    </div>
    <!-- AJOUT ANNUAIRE -->
    <div id="annuaire_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Ajouter un collaborateur</h5>
            <div class="row">
                <form method="post" action="script/user_add.php" enctype="multipart/form-data" id="useradd">
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s2">
                                <input id="prenom" type="text" class="validate" name="prenom">
                                <label for="prenom">Prénom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="nom" type="text" class="validate" name="nom">
                                <label for="nom">Nom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="telephone" type="tel" class="validate" name="telephone">
                                <label for="telephone">Téléphone</label>
                            </div>
                            <div class="input-field col s1">
                                <input id="interne" type="text" class="validate" name="interne">
                                <label for="interne">Interne</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="col s2">
                                <label>Site</label>
                                <select class="browser-default" id="site" name="site">
                                    <option value="Sarcelles">Sarcelles</option>
                                    <option value="Moussages">Moussages</option>
                                </select>
                            </div>
                            <div class="col s2">
                                <label>Service</label>
                                <select class="browser-default" id="service" name="service">
                                    <option value="Programmation">Programmation</option>
                                    <option value="Comptabilité">Comptabilité</option>
                                    <option value="Direction">Direction</option>
                                    <option value="Informatique">Informatique</option>
                                    <option value="Numérique">Numérique</option>
                                    <option value="Vérification">Vérification</option>
                                    <option value="Transport">Transport</option>
                                    <option value="Stock">Stock</option>
                                </select>
                            </div>

                        </div>

                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                        <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                    class="material-icons right">person_add</i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- EDITION ANNUAIRE -->
    <div id="edit_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Editer un collaborateur</h5>
            <div class="row">
                <form method="post" action="script/user_edit.php" enctype="multipart/form-data" id="useredit"
                      class="data-form">
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s2">
                                <input id="prenom" type="text" class="validate" name="prenom">
                                <label for="prenom" class="active">Prénom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="nom" type="text" class="validate" name="nom">
                                <label for="nom" class="active">Nom</label>
                            </div>
                            <div class="input-field col s2">
                                <input id="telephone" type="tel" class="validate" name="telephone">
                                <label for="telephone" class="active">Téléphone</label>
                            </div>
                            <div class="input-field col s1">
                                <input id="interne" type="text" class="validate" name="interne">
                                <label for="interne" class="active">Interne</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email" class="active">E-mail</label>
                            </div>

                            <div class="col s2">
                                <label class="active">Site</label>
                                <select class="browser-default" id="site" name="site">
                                    <option value="Sarcelles">Sarcelles</option>
                                    <option value="Moussages">Moussages</option>
                                </select>
                            </div>
                            <div class="col s2">
                                <label class="active">Service</label>
                                <select class="browser-default" id="service" name="service">
                                    <option value="Programmation">Programmation</option>
                                    <option value="Comptabilité">Comptabilité</option>
                                    <option value="Direction">Direction</option>
                                    <option value="Informatique">Informatique</option>
                                    <option value="Numérique">Numérique</option>
                                    <option value="Vérification">Vérification</option>
                                    <option value="Transport">Transport</option>
                                    <option value="Stock">Stock</option>
                                </select>
                            </div>
                            <div class="input-field col s4">
                                <input id="user_id" name="id" type="hidden" class="validate ">
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                        <!--<button class="modal-close waves-effect btn red">Annuler<i class="material-icons right bottom-sheet">cancel</i></button>-->
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Editer<i
                                    class="material-icons right">edit</i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>


    @endsection 