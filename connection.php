<?php
include_once('config/connect.php');

session_start();
$password = $_POST["password"];
$email = $_POST["email"];
$name = $_POST["name"];

if(isset($_POST[""]))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
<div class="container">
    <h2 class="login-title">Connexion</h2>

    <form class="login-form">
      <div>
        <label for="name">Nom </label>
        <input
               id="name"
               type="text"
               placeholder="Durand"
               name="name"
               required
               />
      </div>

      <div>
        <label for="email">Email </label>
        <input
               id="email"
               type="email"
               placeholder="exemple@gmail.com"
               name="email"
               required
               />
      </div>

      <div>
        <label for="password">Mot de passe </label>
        <input
               id="password"
               type="password"
               placeholder="Mot de passe"
               name="password"
               required
               />
      </div>

      <button class="btn btn--form" type="submit" value="Log in" method="POST" name="submit" action="config/requeteutilisateur.php">
        Se connecter
      </button>
    </form>
</div>
</body>
</html>