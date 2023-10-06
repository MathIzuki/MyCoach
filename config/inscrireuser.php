<?php
include_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérez les données soumises par le formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifiez que tous les champs sont remplis
    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        echo "Tous les champs sont obligatoires. Veuillez remplir tous les champs.";
    } else {
        try {
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
                header("Location: ../index.php");
            } else {
                // Une erreur s'est produite lors de l'inscription
                echo "Erreur lors de l'inscription : " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            // Gérez les erreurs de connexion PDO
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    }
}
?>
