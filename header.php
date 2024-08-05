<link href="css/style.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid bg-primary">
        <img src="img/LFL-Logo-2020-black.png" width=5% height=5% alt="logo lfl"/>
        <a class="navbar-brand" href="index.php">LFL BET</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profil.php">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="list_users.php">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="inscription.php">Inscription</a>
                    </li>
                <?php endif; ?>
    
                <?php if (isset($_SESSION['LOGGED_USER'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="team_lfl_create.php">Faites vos jeux !</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Déconnexion</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>