        <!-- http://localhost/tests -->
        <!-- https://lol.fandom.com/wiki/Help:Leaguepedia_API -->
        
        <?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 flex-grow-1">
    <div class="container flex-grow-1">
        <!-- inclusion de l'entête du site -->
        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1 class="p-3 mb-2 bg-primary bg-gradient text-white">Site de passionné LFL</h1>
        
        <!-- Formulaire de connexion -->
        <?php require_once(__DIR__ . '/login.php'); ?>

        <?php foreach (getTeam_lfl($team_lfl) as $team_lfl) : ?>
            <article>
                <h3><a href="team_lfl_read.php?id=<?php echo($team_lfl['team_lfl_id']); ?>"><?php echo($team_lfl['title']); ?></a></h3>
                <div><?php echo $team_lfl['team_lfl']; ?></div>
                <i><?php echo displayAuthor($team_lfl['author'], $users); ?></i>
                <?php if (isset($_SESSION['LOGGED_USER']) && $team_lfl['author'] === $_SESSION['LOGGED_USER']['email']) : ?>
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item"><a class="link-warning" href="team_lfl_update.php?id=<?php echo($team_lfl['team_lfl_id']); ?>">Editer l'article</a></li>
                        <li class="list-group-item"><a class="link-danger" href="team_lfl_delete.php?id=<?php echo($team_lfl['team_lfl_id']); ?>">Supprimer l'article</a></li>
                    </ul>
                <?php endif; ?>
            </article>
        <?php endforeach ?>
    

        <div class="container text-white" style="margin-top: 10px;" >
            <h2>Actualité</h2>
        
            <div class="dicoBar">
                <div id="searchBar">
                    <input type="text" id="text" placeholder="Rechercher">
                    <button onclick="search()">search</button>
                </div>

                <div id="resultat"></div> 
            </div>
        </div>
        <div class="container text-white" style="margin-top: 10px;" >
            <h2>Planning</h2>
        </div>    
    </div>   
    <script src="script.js"></script>
    
    <!-- inclusion du bas de page du site -->
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>