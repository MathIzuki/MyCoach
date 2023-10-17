<?php 
// Inclusion du fichier d'inscription utilisateur
include_once('config/inscrireuser.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCoach - Inscription</title>
    <link rel="stylesheet" href="css/connexioninscription.css">
    <link rel="stylesheet" href="css/animationpage.css" />
</head>
<body class="fade-in-out">
    <?php include('includes/header.php'); ?>
    <div class="container">
        <h2 class="login-title">Inscription</h2>
        <form class="login-form" method="post">
            <section>
                <label for="nom">Nom</label>
                <input
                    id="nom"
                    type="text"
                    placeholder="Nom"
                    name="nom"
                    required
                />
            </section>

            <section>
                <label for="prenom">Prénom</label>
                <input
                    id="prenom"
                    type="text"
                    placeholder="Prénom"
                    name="prenom"
                    required
                />
            </section>

            <section>
                <label for="email">Email</label>
                <input
                    id="email"
                    type="email"
                    placeholder="exemple@gmail.com"
                    name="email"
                    required
                />
                <p style="color:#ff5959;"><?php echo $emailError; ?> </p>
            </section>

            <section>
                <label for="password">Mot de passe</label>
                <input
                    id="password"
                    type="password"
                    placeholder="Mot de passe"
                    name="password"
                    required
                />
            </section>
            <div class="message-form">
                <p>Vous avez un compte ? <a href="connection.php">Connectez-vous</a></p>
            </div>
            <button class="btn btn--form" type="submit" name="submit">
                S'inscrire
            </button>
        </form>
    </div>
</body>
</html>
