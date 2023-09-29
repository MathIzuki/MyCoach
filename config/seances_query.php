<?php
// Requête qui permet aux informations de rentrer dans le tableau

$query = "SELECT seance.difficulte, seance.jour_seance, seance.heure_seance,
                 lieu.nom_salle, lieu.adresse, sport.nom_sport, lieu.ville, lieu.code_postal
          FROM seance
          INNER JOIN lieu ON seance.numero_salle = lieu.numero_salle
          INNER JOIN sport ON seance.id_sport = sport.id_sport
          ORDER BY FIELD(seance.jour_seance, 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche')";

$stmt = $pdo->prepare($query);
$stmt->execute();
?>
