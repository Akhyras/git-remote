<?php
session_start();
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');


// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['LOGGED_USER'])) {
    // Redirigez l'utilisateur vers une page de connexion ou affichez un message d'erreur
    header('HTTP/1.1 301 Moved Permanently', true, 301);
    header('Location: http://localhost/tests/index.php');
    exit();
}

// Vérifiez si le formulaire de vote a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous que les données du formulaire sont sécurisées avant de les utiliser
    $match_1 = $_POST['match_1'];
    $match_2 = $_POST['match_2'];
    $match_3 = $_POST['match_3'];
    $match_4 = $_POST['match_4'];
    $match_5 = $_POST['match_5'];    
    $team_1 = $_POST['team_1'];
    $team_2 = $_POST['team_2'];
    $team_3 = $_POST['team_3'];
    $team_4 = $_POST['team_4'];
    $team_5 = $_POST['team_5'];
    
    // Connexion à la base de données
    require_once(__DIR__ . '/config/mysql.php');
    $pdo = new PDO("mysql:host=localhost;dbname=lfl_fan", 'root', '');

    // Préparez et exécutez la requête pour insérer le vote dans la base de données
    $stmt = $pdo->prepare("INSERT INTO votes (user_id, match_1, match_2, match_3, match_4, match_5, team_1, team_2, team_3, team_4, team_5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$_SESSION['LOGGED_USER']['id'], $match_1, $match_2, $match_3, $match_4, $match_5, $team_1, $team_2, $team_3, $team_4, $team_5]);


    // Redirigez l'utilisateur vers la page précédente ou une autre page après le traitement du vote
    header("Location: team_lfl_create.php");
    exit();
}
?>
