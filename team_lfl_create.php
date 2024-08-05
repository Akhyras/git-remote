<?php
session_start();

require_once(__DIR__ . '/isConnect.php');
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>passionné LFL</title>
    <link href="css/style.css" rel="stylesheet">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
    

    </head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <!-- inclusion de l'entête du site -->
        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1 class="p-3 mb-2 .bg-primary.bg-gradient text-white">Site de passionné LFL</h1>
</div>
    <style>
    .team {
        height : center, 100px;
        background: none;
        border: none; /* Supprimer la bordure du bouton */
        padding: 5px; /* Ajouter un peu d'espace autour de l'image */
        margin: 5px; /* Ajouter un peu d'espace entre les boutons */

    }

    .team img {
        width: auto; /* Largeur de l'image */
        height: 100px; /* Hauteur automatique pour conserver les proportions de l'image */
        display: block; /* Pour résoudre l'espace supplémentaire en bas de l'image */
        margin: 0 auto; /* Centrer l'image dans le bouton */
    }

    .match {
        display: flex;
        justify-content: center;
    }

    h3 {
        font-family : Impact;
        font-weight: bold;
        color: black;
        text-align: center;
    }

    #toggle-698.form-check-input {
    width: 100px;
    height: 50px;
    display: block;
    margin: 0 auto;
}

input[type="checkbox"].form-check-input.fr-toggle__input {
    background-color: #2ebf91; /* Couleur de fond par défaut */
}

input[type="checkbox"].form-check-input.fr-toggle__input:checked {
    background-color: #0f0e0f; /* Couleur de fond lorsque le bouton est coché */
}

.match-label {
    margin: 0; /* Réinitialiser les marges */
}

.form-switch {
    padding-left: 0;
}

.form-check .form-check-input {
    width: 100px; /* Largeur du bouton */
    height: 50px; /* Hauteur du bouton */
    display: block; /* Affichage en bloc */
    margin: 0 auto; /* Centrer horizontalement */
}

/* Style de base du bouton */
.form-check .form-check-input.fr-toggle__input {
    background-color: #2ebf91; /* Couleur de fond par défaut */
}

/* Style lorsque le bouton est coché */
.form-check .form-check-input.fr-toggle__input:checked {
    background-color: #0f0e0f; /* Couleur de fond lorsque le bouton est coché */
}

.match-label {
    text-align: center;
}
</style>
    <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
<div class="text-center">     
<form action="vote.php" method="post">
    <div class="match match_1">
        <div class="team">
            <img src="../img/Karmine_Corp_logo.png" alt="KCORP" class="KCB">
            <h3>KCB</h3>
        </div>   
            <input type="hidden" name="match_1" value="1">
            <input type="hidden" name="team_1" value="KCB"> <!-- Valeur par défaut -->
            <label class="form-check form-switch">
                <p class="fr-hint-text text-white match-label" id="toggle-698-hint-text">Match 1</p>
                    <input type="checkbox" name="team_1" value="VITB" class="form-check-input fr-toggle__input">
                    <span class="form-check-label fr-toggle__label" data-fr-checked-label="Activé" data-fr-unchecked-label="Désactivé"></span>
            </label>
        <div class="team">
            <img src="../img/Team_Vitality_logo_2023.png" alt="VITALITY" class="VITB">
            <h3>VITB</h3>
        </div>
    </div>
    <div class="match match_2">
        <div class="team">
            <img src="../img/GamersOrigin_2020_lightmode.png" alt="GO" class="GO">
            <h3>GO</h3>
        </div>   
            <input type="hidden" name="match_2" value="2">
            <input type="hidden" name="team_2" value="GO"> <!-- Valeur par défaut -->
            <label class="form-check form-switch">
                <p class="fr-hint-text text-white match-label" id="toggle-698-hint-text">Match 2</p>
                    <input type="checkbox" name="team_2" value="M8" class="form-check-input fr-toggle__input">
                    <span class="form-check-label fr-toggle__label" data-fr-checked-label="Activé" data-fr-unchecked-label="Désactivé"></span>
            </label>
        <div class="team">
                <img src="../img/gentle-mates.png" alt="M8" class="M8">
                <h3>M8</h3>
        </div>
    </div>
    <div class="match match_3">
        <div class="team">
                <img src="../img/AEGIS_logo.png" alt="AEGIS" class="AEGIS">
                <h3>AEGIS</h3>
        </div>   
            <input type="hidden" name="match_3" value="3">
            <input type="hidden" name="team_3" value="AEGIS"> <!-- Valeur par défaut -->
            <label class="form-check form-switch">
                <p class="fr-hint-text text-white match-label" id="toggle-698-hint-text">Match 3</p>
                    <input type="checkbox" name="team_3" value="GW" class="form-check-input fr-toggle__input">
                    <span class="form-check-label fr-toggle__label" data-fr-checked-label="Activé" data-fr-unchecked-label="Désactivé"></span>
            </label>
        <div class="team">
                 <img src="../img/GameWardlogo_square.png" alt="GW" class="GW">
                <h3>GW</h3>
        </div>
    </div>

    <div class="match match_4">
        <div class="team">
                <img src="../img/Team_Du_Sudlogo_square.png" alt="TDS" class="TDS">
                <h3>TDS</h3>
        </div>   
            <input type="hidden" name="match_4" value="4">
            <input type="hidden" name="team_4" value="TDS"> <!-- Valeur par défaut -->
            <label class="form-check form-switch">
                <p class="fr-hint-text text-white match-label" id="toggle-698-hint-text">Match 4</p>
                    <input type="checkbox" name="team_4" value="SLY" class="form-check-input fr-toggle__input">
                    <span class="form-check-label fr-toggle__label" data-fr-checked-label="Activé" data-fr-unchecked-label="Désactivé"></span>
            </label>
        <div class="team">
                <img src="../img/Logo_Solary.png" alt="SOLARY" class="SLY">
                <h3>SLY</h3>
        </div>
    </div>
    
    <div class="match match_5">
        <div class="team">
                    <img src="../img/logo_bds.png" alt="BDS" class="BDS">
                    <h3>BDS</h3>
        </div>   
            <input type="hidden" name="match_5" value="5">
            <input type="hidden" name="team_5" value="BDS"> <!-- Valeur par défaut -->
            <label class="form-check form-switch">
                <p class="fr-hint-text text-white match-label" id="toggle-698-hint-text">Match 5</p>
                    <input type="checkbox" name="team_5" value="BK ROG" class="form-check-input fr-toggle__input">
                    <span class="form-check-label fr-toggle__label" data-fr-checked-label="Activé" data-fr-unchecked-label="Désactivé"></span>
            </label>
        <div class="team">
                    <img src="../img/600px-BK_ROG_Esports_allmode.png" alt="BK ROG" class="BK ROG">
                    <h3>BK ROG</h3>
        </div>
    </div>
        <button type="submit" class="btn btn-primary custom-btn" style="text-center; margin-bottom: 20px;">Vote</button>
    </form>
</div>

    <?php endif; ?>
    <!-- inclusion du bas de page du site -->
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>