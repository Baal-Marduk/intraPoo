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
                <?php if (isset($_SESSION['user_id'])){
                    echo "<li><a class=\"\" href=\"script/logout.php\"><i
                                class=\"material-icons right deep-orange-text\">cancel</i>Déconnexion</a></li>";
                }else {
                    echo "<li><a class=\"modal-trigger\" href=\"#login_modal\"><i
                                class=\"material-icons right deep-orange-text\">lock</i>Admin</a></li>";
                } ?>

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
<body>



