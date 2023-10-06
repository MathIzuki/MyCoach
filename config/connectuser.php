<?php

session_start();

// Si le bouton "Submit" est cliqué
if(isset($_POST['submit'])){
    // On vérifie que le champ "Email" n'est pas vide
    if(empty($_POST['email'])){
        echo "Le champ Email est vide.";
    } else {
        // On vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])){
            echo "Le champ Mot de passe est vide.";
        } else {
            // Les champs email & mdp sont bien postés et pas vides, on sécurise les données entrées par l'utilisateur
            // Le htmlentities() passera les guillemets en entités HTML, ce qui empêchera en partie les injections SQL
            $Email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
            $MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

            // Inclure le fichier de connexion à la base de données
            include('connect.php');

            // Les données de l'utilisateur entrées par le formulaire
            $Email = $_POST['email'];
            $MotDePasse = $_POST['password'];

            // Requête SQL pour rechercher l'utilisateur dans la base de données en utilisant l'email et le mot de passe
            $query = "SELECT * FROM utilisateurs WHERE email = :Email AND mot_de_passe = :MotDePasse";

            // Préparation de la requête    
            $stmt = $pdo->prepare($query);

            // Liaison des paramètres
            $stmt->bindParam(':Email', $Email, PDO::PARAM_STR);
            $stmt->bindParam(':MotDePasse', $MotDePasse, PDO::PARAM_STR);

            // Exécution de la requête
            $stmt->execute();

            // Vérifier si l'utilisateur existe dans la base de données
            if ($stmt->rowCount() == 1) {
                // L'utilisateur est connecté avec succès
                // Vous pouvez maintenant gérer la session de l'utilisateur et le rediriger vers la page de bienvenue, par exemple
                session_start();
                $_SESSION['MotDePasse'] = $MotDePasse;
                // Rediriger vers la page de bienvenue (ou toute autre page appropriée)
                header("Location: ../index.php");
                exit();
            } else {
                // L'utilisateur n'a pas pu être authentifié
                echo "Identifiants incorrects. Veuillez réessayer.";
            }
        }
    }
}
?>
