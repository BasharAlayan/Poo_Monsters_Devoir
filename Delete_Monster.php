<?php
require __DIR__ . '/functions.php';


$MonsterId = isset($_POST['Delet_Monster_id']) ? $_POST['Delet_Monster_id'] : null;

/**
 * On redirige l'utilisateur vers la page d'accueil dans le cas où le formulaire est vide
 */
if (is_null($MonsterId)) {
   // header('Location: /index.php?error=missing_data');
    die;
}

/**
 * On redirige l'utilisateur vers la page d'accueil si les monstres n'existent pas dans notre tableau
 */
        $DeleteMonster = getMonster($MonsterId);
        $Delete = DeleteMonster($DeleteMonster);
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Monsters League</title>

        <!-- CSS files -->
        <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Monsters League</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">You Deleted the Monster successfully</h1>
                    <hr class="my-4">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="index.php"><p class="text-center"><i class="fa fa-undo"></i> Delete another Monster</p></a>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <p>Copyright © 2019 Monsters League</p>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    </body>
</html>