<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?= $title; ?></title>
    
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <link rel="stylesheet" type="text/css" href="css/app.css">

</head>

<body>
    
    <nav role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li class="active"><a href="index.php">Accueil</a></li>
                <li><a href="?p=posts.index">Chapitres</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="?p=posts.index">Chapitres</a></li>
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

    <script type="text/javascript" src="js/libs/ias/jquery-ias.min.js"></script>

    <script src="js/app.js"></script>

</body>
</html>
