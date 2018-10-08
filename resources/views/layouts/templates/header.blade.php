<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="UTF-8">
    <meta title="Intranet DS">
    <title>Intranet DS</title>

    {!! MaterializeCSS::include_css() !!}

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>

   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>



</head>
<body><!-- HEADER -->
<?php
//include('modules/toast_alert.php'); // Includes Login Script
?>


<div class="navbar-fixed">
    <nav class="nav-extended white">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index" class="brand-logo"><img class="logo responsive-image" src="{{ asset('img/logoDS.png') }}"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="http://192.168.15.22:8080/share/page/" target="_blank">Alfresco</a></li>
                <li><a href="http://192.168.15.51:8085/support/index.php" target="_blank">Ticketing</a></li>
                <li><a href="http://192.168.15.107/" target="_blank">Site DS</a></li>
                <li><a class="modal-trigger" href="#login_modal"><i class="material-icons right deep-orange-text">lock</i>Admin</a></li>
               

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="http://192.168.15.22:8080/share/page/" target="_blank">Alfresco</a></li>
                <li><a href="http://192.168.15.51:8085/support/index.php" target="_blank">Ticketing</a></li>
                <li><a href="http://192.168.15.107/" target="_blank">Site DS</a></li>
            </ul>
        </div>
        <div class="nav-content indigo">
            <ul class="tabs tabs-transparent container">
                <li class="tab"><a href="/" target="_self"
                                   class="{{ Request::path() == '/' ? 'active' : '' }}">Accueil</a></li>
                <li class="tab"><a href="documents" target="_self"
                                   class="{{ Request::path() == 'documents' ? 'active' : '' }}">Documents
                        DS</a></li>
                <li class="tab"><a href="annuaire" target="_self"
                                   class="{{ Request::path() == 'annuaire' ? 'active' : '' }}">Annuaire</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div id="login_modal" class="modal">
<script src="js/scripts.js"></script>
    <div class="container modal-content">
        <h4>ADMINISTRATION</h4>
        <p>Entrez vos identifiants de connexion</p>
        <form action="" method="post" id="login_form">
            <div class=" input-field row">
                <i class="material-icons prefix">person</i>
                <input id="username" type="text" class="" name="username" required>
                <label for="username" >Utilisateur</label>
            </div>
            <div class="input-field row">
                <i class="material-icons prefix">lock</i>
                <input id="password" type="password" class="" name="password" required>
                <label for="password">Mot de passe</label>
            </div>
            <div class="modal-footer">
                <a href="" class="btn modal-close waves-effect waves-blue indigo" >Annuler</a>
                <a href="" target="_self" name="submit" class="btn modal-close waves-effect waves-orange deep-orange" type="submit"  id="login_submit" >Connexion</a>
            </div>
            <input type='hidden' name='token' value="" />
    </form>
    </div>
</div>
<body>



