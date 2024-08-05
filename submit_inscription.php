<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lfl_fan";

try{
    $bdd = new PDO("mysql:host=$servername;dbname=lfl_fan", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOExeption $e){
    echo "Erreur : ".$e->getMessage();
}

if(isset($_POST['ok'])){
    try {
    $pseudonyme = $_POST['pseudonyme'];
    $nom = $_POST ['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Hachage du mot de passe avant l'insertion
    $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :pseudonyme, :nom, :prenom, :email, :pass)");

// Lie les paramètres avec les valeurs correspondantes
$requete->bindParam(":pseudonyme", $pseudonyme);
$requete->bindParam(":nom", $nom);
$requete->bindParam(":prenom", $prenom);
$requete->bindParam(":email", $email);
$requete->bindParam(":pass", $pass);

// Exécute la requête
$requete->execute();

        $response = $requete->fetchAll(PDO::FETCH_ASSOC);
        var_dump($response);


 // Rediriger vers index.php après inscription réussie
 header("Location: index.php");
 exit;
} catch (PDOException $e) {
 echo 'Erreur : ' . $e->getMessage();
}
}
?>