<?php 
// Inclusion du fichier de connexion utilisateur
include_once('config/connectuser.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCoach - Connexion</title>
    <link rel="stylesheet" href="css/connexioninscription.css">
    <link rel="stylesheet" href="css/animationpage.css" />
</head>
<body class="fade-in-out">
    <?php include('includes/header.php'); ?>
    <div class="container">
        <h2 class="login-title">Connexion</h2>

        <form class="login-form" method="post">
            <section>
                <label for="email">Email </label>
                <input
                    id="email"
                    type="email"
                    placeholder="exemple@gmail.com"
                    name="email"
                    required
                />
                <p style="color:#ff5959;"><?php echo $emailError; ?></p>
            </section>

            <section>
                <label for="password">Mot de passe </label>
                <input
                    id="password"
                    type="password"
                    placeholder="Mot de passe"
                    name="password"
                    required
                />
                <p style="color:#ff5959;"><?php echo $passwordError; ?></p>
            </section>
            <div class="message-form">
                <p>Pas de compte ? <a href="inscription.php">Inscrivez-vous</a></p>
            </div>
            <button class="btn btn--form" type="submit" name="submit">
                Se connecter
            </button>
        </form>
    </div>
</body>
</html>
