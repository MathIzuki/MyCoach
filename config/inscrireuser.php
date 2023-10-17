<?php
include_once('connect.php');

$emailError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les données soumises par le formulaire
    $nom = htmlentities($_POST['nom'], ENT_QUOTES, "UTF-8");
    $prenom = htmlentities($_POST['prenom'], ENT_QUOTES, "UTF-8");
    $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
    $password = $_POST['password'];
    
    // Vérifiez que tous les champs sont remplis
    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        echo "Tous les champs sont obligatoires. Veuillez remplir tous les champs.";
    } else {
        try {
            // Vérifiez si l'e-mail existe déjà dans la base de données
            $query = "SELECT COUNT(*) FROM utilisateurs WHERE email = ?";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $count = $stmt->fetchColumn();

            if ($count > 0) {
                // L'e-mail existe déjà, affichez un message d'erreur
                $emailError = "Cette adresse e-mail est déjà enregistrée.";
            } else {
                // Hasher le mot de passe (meilleures pratiques)
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                // Préparez la requête préparée avec des espaces réservés
                $query = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, date_inscription) VALUES (?, ?, ?, ?, NOW())";
                $stmt = $pdo->prepare($query);

                // Liez les valeurs aux espaces réservés
                $stmt->bindParam(1, $nom);
                $stmt->bindParam(2, $prenom);
                $stmt->bindParam(3, $email);
                $stmt->bindParam(4, $hashedPassword);

                // Exécutez la requête préparée
                if ($stmt->execute()) {
                    // L'inscription a réussi
                    session_start();
                    $_SESSION['MotDePasse'] = $password;
                    header("Location: ../MyCoach/index.php");
                } else {
                    // Une erreur s'est produite lors de l'inscription
                    echo "Erreur lors de l'inscription : " . $stmt->errorInfo()[2];
                }
            }
        } catch (PDOException $e) {
            // Gérez les erreurs de connexion PDO
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }
}

?>
