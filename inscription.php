<?php include_once('config/connectuser.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
    <h2 class="login-title">Inscription</h2>

    <form class="login-form" action="config/inscrireuser.php" method="post">
      <div>
        <label for="nom">Nom </label>
        <input
               id="nom"
               type="text"
               placeholder="Nom"
               name="nom"
               required
               />
      </div>

      <div>
        <label for="prenom">Prénom </label>
        <input
               id="prenom"
               type="text"
               placeholder="Prénom"
               name="prenom"
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

      <button class="btn btn--form" type="submit" value="S'inscrire" method="POST" name="submit">
        S'inscrire
      </button>
    </form>
</div>
</body>
</html>
