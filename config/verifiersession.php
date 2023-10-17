<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // Vérifier si la session de l'utilisateur n'est pas définie
    if (!isset($_SESSION['MotDePasse'])) {
        // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
        header("Location: connection.php"); // Remplacez "login.php" par le chemin de votre page de connexion
        exit();
    }
?>