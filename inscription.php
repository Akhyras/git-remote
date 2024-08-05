<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1 class="p-3 mb-2 .bg-primary.bg-gradient text-white">Inscrivez-vous</h1>
        <form action="submit_inscription.php" method="POST" enctype="multipart/form-data">
            <style> 
                input{
                    margin-bottom:10px;
                }
            </style>
            <div class="mb-3">
            <label for="email" class="form-label text-white" required>Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="Entrez votre Email" required>
            <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div>
            <label for="nom" class="form-label text-white">Votre nom</label><br>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            <br>
            <label for="prenom" class="form-label text-white">Votre prenom</label><br>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom" required>
            <br>
            <div class="mb-3">
                <label for="pass" class="form-label text-white">Votre mot de passe</label><br>
                <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de passe" required>
            </div>
            <div class="mb-3">
                    
            <label for="pseudonyme" class="form-label text-white">Votre pseudonyme :</label><br>
            <input type="text" name="pseudonyme" id="pseudonyme" placeholder="Ex. : KC VITA" required size="30" maxlength="25">
            </div>
            <!-- passer ceci en input -->
            <button type="submit" class="btn btn-primary" name="ok">Créer</button>
        </form>
    </div>

    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>