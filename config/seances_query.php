<?php
$difficulte_filter = isset($_POST['difficulte']) ? $_POST['difficulte'] : 'Toutes';
$ville_filter = isset($_POST['ville']) ? $_POST['ville'] : 'Toutes';

$query = "SELECT seance.difficulte, seance.jour_seance, seance.heure_seance,
                 lieu.nom_salle, lieu.adresse, sport.nom_sport, lieu.ville, lieu.code_postal
          FROM seance
          INNER JOIN lieu ON seance.numero_salle = lieu.numero_salle
          INNER JOIN sport ON seance.id_sport = sport.id_sport";

// Si une difficulté est sélectionnée, ajouter la clause WHERE
if ($difficulte_filter !== 'Toutes') {
    $query .= " WHERE seance.difficulte = :difficulte";
}

// Si une ville est sélectionnée et qu'il y avait déjà une clause WHERE (à cause du filtre de difficulté), utilisez AND
if ($ville_filter !== 'Toutes') {
    $query .= ($difficulte_filter !== 'Toutes') ? " AND lieu.ville = :ville" : " WHERE lieu.ville = :ville";
}

$query .= " ORDER BY FIELD(seance.jour_seance, 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche')";

$stmt = $pdo->prepare($query);

// Si une difficulté est sélectionnée, bind la valeur
if ($difficulte_filter !== 'Toutes') {
    $stmt->bindParam(':difficulte', $difficulte_filter);
}

// Si une ville est sélectionnée, bind la valeur
if ($ville_filter !== 'Toutes') {
    $stmt->bindParam(':ville', $ville_filter);
}

$stmt->execute();

?>
