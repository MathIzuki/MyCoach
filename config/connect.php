<?php
$host = 'localhost';
$dbname = 'mycoach';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Activer les erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $errorMessage = "Erreur de connexion à la base de données : " . $e->getMessage();
    // Rediriger vers la page d'accueil avec le message d'erreur en paramètre
    header("Location: index.php");
    exit; // Arrêter l'exécution du script
}
?>
