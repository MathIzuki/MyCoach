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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCoach - Seances</title>
    <link rel="stylesheet" href="css/seances.css" />
</head>
<body>
    <?php include_once('config/connect.php'); ?>
    <section class="content">
        <?php include('includes/header.php'); ?>
        
        <!-- Titre de la page -->
        <div class="titre-seance">
            <h1>NOS SÉANCES</h1>
        </div>
        
        <!-- Tableau des séances -->
        <table class="table-fill">
            <thead>
                <tr>
                    <th class="text-center">Jour</th>
                    <th class="text-center">Sports</th>
                    <th class="text-center">Difficultés</th>
                    <th class="text-center">Horaire</th>
                    <th class="text-center">Salle</th>
                    <th class="text-center">Lieu</th>
                    <th class="text-center">Ville</th>
                    <th class="text-center">Code Postal</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <?php
                //Inclure la requête SQL -->
                include('config/seances_query.php');
                
                // Parcourir les résultats et les insérer dans le tableau
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td class='text-center'>" . $row['jour_seance'] . "</td>";
                    echo "<td class='text-center'>" . $row['nom_sport'] . "</td>";
                    echo "<td class='text-center'>" . $row['difficulte'] . "</td>";
                    echo "<td class='text-center'>" . $row['heure_seance'] . "</td>";
                    echo "<td class='text-center'>" . $row['nom_salle'] . "</td>";
                    echo "<td class='text-center'>" . $row['adresse'] . "</td>";
                    echo "<td class='text-center'>" . $row['ville'] . "</td>";
                    echo "<td class='text-center'>" . $row['code_postal'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>