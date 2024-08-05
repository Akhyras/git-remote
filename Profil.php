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
    <title>Profil page</p></title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
    >
    <link href="css/style.css" rel="stylesheet">

    </head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <!-- inclusion de l'entête du site -->
        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1 class="p-3 mb-2 .bg-primary.bg-gradient text-white">Site de passionné LFL</h1>


    <div class="container text-white" style="margin-top: 10px;" >
        <h2>Profil</h2>
            <div id="image-wrapper">
                <img id="image" src="" alt="" />
            </div>
            <div id="header">
                <div id="number"></div>
                <div id="name"></div>
            </div>
    </div>

    <div id="wrapper">
      <div id="image-wrapper">
        <img id="image" src="" alt="" />
      </div>
      <div id="header">
        <div id="number"></div>
        <div id="name"></div>
      </div>
      <div id="button">Get other Pokemon !</div>
    </div>
    <script src="./app.js"></script>
    </div>

    <!-- inclusion du bas de page du site -->
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>