@extends('layouts.template')

@section('content')

<div id="index-banner" class="parallax-container hero-box">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text white-text light main-title center-align">INTRANET</h1>
                <div class="row center">
                </div>
                <div class="row center">
                    <form method="get" action="http://www.google.com/search" target="_blank">
                        <div class="input-field inline barre-google">
                            <input id="search" type="text" name="q" value="" placeholder="Recherche Google" required>
                            <label class="label-icon " for="search"><i class="material-icons">search</i></label>
                        </div>
                    </form>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="{{asset('img/background1.jpg')}}" alt="Unsplashed background img 1"></div>
    </div>
    <div class="container">
        <div class="section">
            <br>
            <br>
            <!--   Icon Section   -->
            <div class="row message-jour">
                <h2 class="center light sub-main-title">Actualités</h2>
                @foreach ($news as $new)
                <div class="col s3 center offset-s1">
                <div class="row news_data">
                    <a href="#news_modal" class="secondary-content modal-trigger right news_edit_btn" >
                            <i class="material-icons indigo-text">edit</i>
                    </a>
                    <a href="#news_modal_delete" class="secondary-content modal-trigger right delete_news">
                            <i class="material-icons red-text" id=''>delete</i>
                    </a>
                    <h4 class="input_data">{{ $new->title }}</h4>
                    
                    <p class="editable_news input_data" id="news_edit">{{ $new->content }}</p>
                    <p class=" left">{{ date_format(date_create($new->created_at),'d/m/y') }}</p>
                    <div class=" right input_data chip">{{ $new->author }}</div>
                    <p  id="news_id" class="input_data" hidden>{{ $new->id }}</p>
                </div>
                </div>
                @endforeach
            </div>
            <br>
            <br>
        </div>
    </div>

    <!-- <div class="parallax-container valign-wrapper message-jour-box">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h2 class="header col s12 light sub-main-title">Message du jour</h2>
                    <h5 class="light sub-title editable_text" id="quote_edit"><?php //include("script/quote.php"); ?></h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('img/sven-scheuermeier-37377.jpg')}}" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
    <div class="section ">
        <br>
        <br>
        <div class="row">
            <div class="col s12 center">
                <h4 class="sub-main-title">Informations</h4>
                <p class="left-align" id="info_edit"><?php //include("script/infos.php"); ?>
            </div>
            <br>
            <br>
        </div>
    </div>
    </div> -->

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                </div>
            </div>
        </div>
        <div class="parallax modern"><img src="{{ asset('img/connor-limbocker-439338.jpg')}}" alt="Unsplashed background img 3"></div>
    </div>
    <div>
    <div class="fixed-action-btn click-to-toggle horizontal" id="welcome-btn">
        <a class="btn-floating btn-large deep-orange pulse">
            <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
            <li><a class="btn-floating indigo darken-2 tooltipped modal-trigger" data-position="top" data-tooltip="Ajouter une actu"
                   href="#news_modal"><i class="material-icons">add</i></a></li>
            <li><a class="btn-floating indigo darken-2 tooltipped modal-trigger" data-position="top" data-tooltip="Editer les infos"
                   href="#info_modal"><i class="material-icons">info_outline</i></a></li>
        </ul>
    </div>

    <!-- MODAL CREATE ACTU-->
    <div id="news_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Ajouter une actualité</h5>
            <div class="row">
                <form method="post" action="/newsCreate" enctype="multipart/form-data" id="news_add" class="data-form">
                    <div class="row">
                        <div class="input-field col s2">
                            <input id="title" type="text" class="validate news_edit_input" name="title">
                            <label for="title">Titre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s10">
                            <textarea id="content" class="materialize-textarea validate news_edit_input" name="body"></textarea>
                            <label for="content">Corps</label>
                        </div>
                        <div class="input-field col s2">
                            <input id="title" type="text" class="validate news_edit_input" name="author">
                            <label for="author">Auteur</label>
                        </div>
                    </div>
                    <input type="text" name="id" class="news_edit_input" hidden>
                    <div class="modal-footer">
                        <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                        <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                    class="material-icons right">add</i></button>
                    </div>
                    @csrf
                </form>
            </div>

        </div>
    </div>


    <!-- MODAL INFO-->
    <div id="info_modal" class="modal bottom-sheet">
        <div class="modal-content">
            <h5>Editer les infos</h5>
            <form method="post" action="script/info_edit.php" enctype="multipart/form-data" id="info_edit">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="info" class="materialize-textarea validate" name="info"></textarea>
                        <label for="info">Informations:</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn modal-close waves-effect waves-red">Annuler</a>
                    <button type="submit" class="modal-action  waves-effect btn green " name="action">Ajouter<i
                                class="material-icons right">info_outline</i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- SUPPRESSION NEWS -->
    <div id="news_modal_delete" class="modal">
        <div class="modal-content">
            <h4>Suppression d'une actualité</h4>
            <p>Etes vous sur de vouloir supprimer cette entrée ?</p>
            <form method="post" action="/newsDelete" enctype="multipart/form-data" id="delete_form" class="data-form-delete">
                <input id="input_id" type="text" name="id" hidden>
                @csrf
                    <div class="modal-footer">
                    <a href="#" class="btn modal-close waves-effect ">Annuler</a>
                    <button type="submit" class="modal-action  waves-effect btn red " name="action" id="delete_submit">Supprimer<i class="material-icons right">delete</i></button>
                    </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $(".news_edit_btn", this).on("click", function () {
            var data = $(this).parents(".news_data").find(".input_data");
            $.each(data, function (i, v) {
                $($(".data-form .news_edit_input")[i]).val($(v).text());
            });
            Materialize.updateTextFields();
        });
    });
</script>
@endsection