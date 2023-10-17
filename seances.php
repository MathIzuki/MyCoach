<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCoach - Séances</title>
    <link rel="stylesheet" href="css/seances.css">
    <link rel="stylesheet" href="css/animationpage.css">
    <script src="js/filtre.js"></script>
</head>
<body class="fade-in-out">
    <?php 
    // Inclusion du fichier de connexion à la base de données
    include_once('config/connect.php');
    
    // Vérification de la session utilisateur
    include('config/verifiersession.php'); 
    ?>
    <section class="content">
        <?php 
        // Inclusion de l'en-tête
        include('includes/header.php');
        ?>
        
        <!-- Titre de la page -->
        <div class="titre-seance">
            <h1>NOS SÉANCES</h1>
        </div>
        
        <!-- Filtres -->
        <section class="listederoulantes">
            <form>
                <label for="difficulte">Filtrer par difficulté :</label>
                <select name="difficulte" id="difficulte" onchange="filterSeances()">
                    <option value="Toutes">Toutes</option>
                    <option value="Débutant">Débutant</option>
                    <option value="Amateur">Amateur</option>
                    <option value="Expert">Expert</option>
                </select>
            </form>
            <form>
                <label for="ville">Filtrer par ville :</label>
                <select name="ville" id="ville" onchange="filterSeances()">
                    <option value="Toutes">Toutes</option>
                    <option value="Fonsorbes">Fonsorbes</option>
                    <option value="Toulouse">Toulouse</option>
                    <option value="Blagnac">Blagnac</option>
                    <option value="Albi">Albi</option>
                    <option value="Labèges">Labèges</option>
                    <!-- Ajoutez d'autres options pour les villes disponibles -->
                </select>
            </form>
        </section>
        
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
                // Inclusion de la requête SQL
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
