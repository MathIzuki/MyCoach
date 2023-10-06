<?php
session_start();
// Détruire la session
session_destroy();

// Rediriger l'utilisateur vers la page précédente (ou une autre page de votre choix)
header("Location: ".$_SERVER['HTTP_REFERER']);
exit();
?>
