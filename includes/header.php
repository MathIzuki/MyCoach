<header>
  <div class="preview">
    <div class="nav-bar">
      <div class="nav-links">
        <a href="index.php" class="nav">ACCUEIL</a>
        <a href="seances.php" class="nav">SÉANCES</a>
      </div>
      <a href="index.php">
        <h1 class="logo-mycoach">My<span class="logo-mycoach-color">Coach</span></h1>
      </a>
      <div class="nav-links">
        <?php
        if (isset($_SESSION['MotDePasse'])){
          echo '';
        } else{
          echo '<a href="inscription.php" class="nav">INSCRIPTION</a>';
        }
        
        ?>
        <?php
        // Vous n'avez pas besoin de démarrer la session ici, car vous l'avez déjà fait dans "seances.php"
        if (isset($_SESSION['MotDePasse'])) {
            echo '<a href="config/deconnection.php" class="nav">DÉCONNEXION</a>';
        } else {
            echo '<a href="connection.php" class="nav">CONNEXION</a>';
        }
        ?>
      </div>
    </div>
  </div>
</header>

<link rel="stylesheet" href="css/navbar.css" />
