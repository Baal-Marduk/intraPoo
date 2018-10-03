

</body>
<!-- FOOTER -->
<footer class="page-footer indigo darken-2">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Intranet DS</h5>
                <p class="grey-text text-lighten-4">Cette page d'accueil a pour but de réunir toutes les données et
                    liens nécessaires aux collaborateurs DS.</p>

            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Liens utiles</h5>
                <ul>
                    <li><a class="white-text" href="http://192.168.15.107/" target="_blank">Site DS</a></li>
                    <li><a class="white-text" href="http://192.168.15.22:8080/share/page/" target="_blank">Alfresco</a>
                    </li>
                    <li><a class="white-text" href="http://192.168.15.51:8085/support/index.php" target="_blank">Ticketing</a>
                    </li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Glossaire</h5>
                <ul>
                    <li><a class="white-text" href="index.php" target="_self">Accueil</a></li>
                    <li><a class="white-text" href="?page=documents" target="_self">Documents DS</a></li>
                    <li><a class="white-text" href="?page=annuaire" target="_self">Annuaire</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Créé par Leo Wattier grâce à <a class="indigo-text text-lighten-3" href="http://materializecss.com"
                                            target="_blank">Materialize</a>
        </div>
    </div>
</footer>

<!-- SCRIPTS -->

{!! MaterializeCSS::include_js() !!}
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>