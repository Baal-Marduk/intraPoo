$(document).ready(function (){

    //INIT//
    $('.button-collapse').sideNav();
    $('.parallax').parallax();
  
    //MODALS//
    $('#doc_modal').modal();
    $('#dir_modal').modal();
    $('#annuaire_modal').modal();
    $('#edit_modal').modal();
    $('#delete_modal').modal();
    $('#news_modal').modal();
    $('#quote_modal').modal();
    $('#info_modal').modal();
    $('#login_modal').modal();
    $('#delete_doc_modal').modal();
    $('#delete_dir_modal').modal();



    //Envoie du formulaire lors du clic
    // document.getElementById("delete_submit").onclick = function () {
    //     document.getElementById("delete_form").submit();
    // };


    // recupération de l'id pour supression collaborateur
    $('.delete_user', this).on('click',function () {
        var id = $(this).parents("tr").find("#user_id");
        $(function () {
            $('#input_id').val(id.text());
        });
    });
})