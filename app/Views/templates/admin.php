<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="img/favicon.jpg">
    <title><?= $title; ?></title>
    <base href="http://localhost/projet4_oc/" >
    
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="js/libs/dropify/dropify.min.css">

    <link rel="stylesheet" type="text/css" href="css/app.css">

</head>

<body class="admin-template">
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    
    <nav class="blue lighten-2">
        <div class="nav-wrapper container"><a id="logo-container" href="cockpit" title="Retourner à la page d'accueil" class="brand-logo">J~Forteroche</a>
            <ul class="right hide-on-med-and-down">
                <li class="active"><a href="cockpit" title="Retourner à la page d'accueil">Accueil</a></li>
                <li><a href="administrer-mes-chapitres" title="Administrer mes chapitres">Chapitres</a></li>
                <li><a href="administrer-mes-commentaires" title="Administrer mes commentaires">Commentaires</a></li>
                <li><a href="accueil" title="Retourner sur le site">Site</a></li>
                <li><a href="deconnexion" title="Se déconnecter">Déconnexion</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="cockpit" title="Retourner à la page d'accueil">Accueil</a></li>
                <li><a href="administrer-mes-chapitres" title="Administrer mes chapitres">Chapitres</a></li>
                <li><a href="administrer-mes-commentaires" title="Administrer mes commentaires">Commentaires</a></li>
                <li><a href="accueil" title="Retourner sur le site">Site</a></li>
                <li><a href="deconnexion" title="Se déconnecter">Déconnexion</a></li>
            </ul>

            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <?= $content; ?>
 
    <a id="back-to-top" href="#" class="btn-floating btn-large waves-effect waves-light tooltipped" title="retourner en haut de page" data-position="right" data-delay=".5" data-tooltip="Retour"><i class="material-icons">arrow_upward</i></a>

    <footer class="page-footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        © 2018 JackPWeb
                    </div>
                </div>
            </div>       
        </div>
    </footer>
    
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="js/libs/dropify/dropify.min.js"></script>

    <script src="js/app.js"></script>

</body>
</html>
