<?php

session_start();

// Initialisez les messages d'erreur à vide
$emailError = "";
$passwordError = "";

// Si le bouton "Submit" est cliqué
if (isset($_POST['submit'])) {
    // On vérifie que le champ "Email" n'est pas vide
    if (empty($_POST['email'])) {
        $emailError = "Le champ Email est vide.";
    } else {
        // On vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if (empty($_POST['password'])) {
            $passwordError = "Le champ Mot de passe est vide.";
        } else {
            // Les champs email & mdp sont bien postés et pas vides, on sécurise les données entrées par l'utilisateur
            $Email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
            $MotDePasse = $_POST['password'];

            // Inclure le fichier de connexion à la base de données
            include('connect.php');

            // Requête SQL pour rechercher l'utilisateur dans la base de données en utilisant l'email
            $query = "SELECT * FROM utilisateurs WHERE email = :Email";

            // Préparation de la requête    
            $stmt = $pdo->prepare($query);

            // Liaison du paramètre
            $stmt->bindParam(':Email', $Email, PDO::PARAM_STR);

            // Exécution de la requête
            $stmt->execute();

            // Vérifier si l'utilisateur existe dans la base de données
            if ($stmt->rowCount() == 1) {
                // L'utilisateur existe, vérifiez le mot de passe
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if (password_verify($MotDePasse, $row['mot_de_passe'])) {
                    // Mot de passe correct, connectez l'utilisateur
                    session_start();
                    $_SESSION['MotDePasse'] = $MotDePasse;
                    // Rediriger vers la page de bienvenue (ou toute autre page appropriée)
                    header("Location: ../MyCoach/index.php");
                    exit();
                } else {
                    // Mot de passe incorrect
                    $passwordError = "Mot de passe incorrect. ";
                }
            } else {
                // L'utilisateur n'existe pas
                $emailError = "Utilisateur non trouvé.";
            }
        }
    }
}

?>
