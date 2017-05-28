<?php
require __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OGSteam.fr</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .jumbotron {
            background-image: url(./img/fond_3.jpg);
            background-size: cover;
            height: 100%;
        }

        body {
            padding-top: 0;
        }

        .bs-callout {
            padding: 20px;
            margin: 20px 0;
            border: 1px solid #eee;
            border-left-width: 5px;
            border-radius: 3px;
            border-left-color: #5bc0de;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">OGSteam</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Présentation</a></li>
                <li><a href="https://forum.ogsteam.fr">Forum</a></li>
                <li><a href="#downloads">Téléchargements</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">A propos</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
    <div class="container">
        <div class="jumbotron">

            <h1 style="color:#eeeeee;">Bienvenue !</h1>
            <p style="color:#eeeeee;">Nous allons ici vos présenter les outils réalisés par l'OGSteam</p>
            <p style="color:#eeeeee;">Pour accéder rapidement à ce que vous cherchez vous pouvez utiliser les raccourcis
                ci dessous :</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Forum</a>
                <a class="btn btn-primary btn-lg" href="#" role="button">Documentation</a>
                <a class="btn btn-primary btn-lg" href="#" role="button">Téléchargements</a></p>

        </div>
    </div>
    <div class="container">
        <div class="page-header">
            <h1>OGSpy
                <small>Tout savoir, mais avant les autres...</small>
            </h1>
        </div>
        <div class="bs-callout bs-callout-info">
            <h4 id="callout-progress-csp">Objectif d'OGSpy</h4>
            <p>OGSpy est un logiciel de cartographie qui centralise aussi toutes les données d'une alliance. Les données
                sont récupérées dans le jeu grâce à un module nommé Xtense (Qui s'installe sur les navigateurs les plus
                courants) et enregistrées dans la base de données de votre alliance. Ces informations restent donc
                privées et ne sont pas exposées au public. Cet outil collecte les planètes des joueurs avec leurs
                bâtiments défenses et technologies, les galaxies, les classements, les rapport de combats et
                d’expéditions, les rapports d'espionnage, …</p>
            <p>Ces données peuvent ensuite être utilisées par OGSpy et ses modules pour effectuer des recherches, des
                statistiques ou simplement des classements interne à l'alliance. (Pour voir par exemple qui fait les
                meilleurs rentabilités sur les raids, pour savoir qui a la meilleure production de l'alliance, qui a la
                plus grosse mine de métal etc)</p>
            <p>Place maintenant à quelques exemples d'utilisation en images. (N'hésitez pas à agrandir les images
                inclues dans les spoilers pour voir plus de détails)</p>

        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="./img/ogspy/Galaxie.png" alt="...">
                    <div class="caption">
                        <h3>Vue Galaxie</h3>
                        <p>Mise à jour en temps réél par les utilisateurs, la vue galaxie permet de consulter les
                            données et rapports de chaque joueur.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="./img/ogspy/Statistiques.png" alt="...">
                    <div class="caption">
                        <h3>Vue Statistiques</h3>
                        <p>La vue statistiques permet de suivre l'évolution de chaque joueur.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="./img/ogspy/Cdr.png" alt="...">
                    <div class="caption">
                        <h3>Modules</h3>
                        <p>Vous pouvez personaliser votre OGSpy en téléchargeant des modules complémentaires. Il en
                            existe un vingtaine qui ajoutent beacup de fonctionnalités à votre OGSpy comme la recherche
                            de Champs de ruines, un calculateur de ressources, un HoF d'alliance et plein d'autres !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-header">
            <h1>Téléchargements<small> ou hébergement...</small>
            </h1>
        </div>
        <div class="bs-callout bs-callout-info">
            <h4 id="callout-progress-csp">Hébergement</h4>
            <p>Vous pouvez faire une demande d'hébergement sur OGSpy.fr et ainsi obtenir un OGSpy clé en mains.
            </p>
        </div>
        <div class="bs-callout bs-callout-info">
            <h4 id="callout-progress-csp">Fichiers d'installation</h4>
            <p>Si vous avez un serveur Web à disposition, vous pouvez installer OGSpy sans soucis.
            </p>
        </div>
    </div>
    <div id="about" class="container">
        <div class="page-header">
            <h1>A Propos<small> Tu peux nous aider !</small></h1>
            <p><script data-gratipay-username="OGSteam" src="//grtp.co/v1.js"></script></p>
        </div>
    </div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
