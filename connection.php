<?php include_once('config/connectuser.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/connexioninscription.css">
    <style>
        body {
            animation: fadeInAnimation ease 1s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }
        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="fade-in-out">
<?php include('includes/header.php'); ?>
<div class="container">
    <h2 class="login-title">Connexion</h2>

    <form class="login-form" action="config/connectuser.php" method="post">
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