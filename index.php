<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>My Coach - Accueil</title>
    
</head>
<body>
    <!-- Contenu du site -->
    <section class="content">
        <!-- En-tête de la page -->
        <?php include('includes/header.php'); 
        ?>
        
        <!-- Contenu principal -->
        <div class="coach-container">
            <div class="description-container">
                <img src="img/photocoach.png" alt="Coach de Sport" class="coach-image">
                <div class="description-container-text">
                    <h1 class="titre-1">DONNEZ LE MEILLEUR DE VOUS-MÊME</h1>
                    <h1>ENSEMBLE, ATTEIGNONS VOS OBJECTIFS.</h1>
                    <h1 class="titre-2">BENJAMIN - COACH SPORTIF DEPUIS 15 ANNÉES CONSÉCUTIVES</h1>
                </div>
            </div>
        </div>
        
        <!-- Présentation du coach -->
        <section class="presentation">
            <h1 style="color: #b7cef3;">A PROPOS DE MOI</h1>
            <p>Salut, je suis <span class="blue-color">Benjamin Mitchell</span>, coach de vie et de carrière originaire de Londres, en Angleterre. 
                J'ai consacré plus de 15 ans de ma vie à aider les gens à atteindre leurs <span class="blue-color">objectifs personnels et professionnels.</span><br><br>
    
                Mon parcours a commencé lorsque j'ai décroché mon diplôme en psychologie à <span class="blue-color">l'Université d'Oxford.</span>.
                Cette expérience m'a donné une solide base pour comprendre <span class="blue-color">les motivations et les défis des individus. </span>
                J'ai ensuite choisi de <span class="blue-color">me spécialiser dans le coaching, suivant une formation complète à la London School of Coaching, </span>
                où j'ai perfectionné mes compétences pour aider les autres à surmonter les obstacles qui se dressent sur leur chemin.
                Ma clientèle est variée, allant de cadres supérieurs à des étudiants en quête de direction. <br><br>
                Ce que j'apprécie le plus dans le coaching, c'est la possibilité de travailler de manière holistique avec mes clients. 
                J'accorde une grande importance à l'équilibre entre vie professionnelle et vie personnelle, et je m'efforce de les aider à exploiter tout leur potentiel.
                J'aime motiver les autres à réaliser leurs rêves et à les guider vers le succès. 
                Pour moi, le coaching va au-delà d'un simple métier, c'est une passion qui me permet d'inspirer et de transformer la vie de nombreuses personnes.</p>
        </section>
        
        <!-- Activités -->
        <section class="activite">
            <h1 style="color: #b7cef3;">ACTIVITÉS</h1>
            <h3>Bienvenue à <span class="blue-color">"FitLife Oasis"</span>, le lieu ultime pour atteindre vos objectifs de remise en forme et de bien-être. 
                Notre salle de sport offre une variété d'activités passionnantes 
                pour tous les niveaux de condition physique. <br><br>Voici un aperçu de ce que vous pouvez attendre lorsque vous franchissez nos portes :</h3>
                <br><br>
            <p><span class="blue-color">Entraînement en groupe :</span> Rejoignez nos cours de fitness en groupe dynamiques, allant du yoga apaisant au HIIT intense. 
                Nos instructeurs certifiés vous guideront tout au long de chaque séance pour garantir des résultats optimaux.</p>
                <br><br>
            <p><span class="blue-color">Entraînement cardiovasculaire : </span>Que vous préfériez les tapis de course, les vélos elliptiques ou les rameurs, 
                notre salle de sport est équipée de machines cardio de pointe pour améliorer votre endurance et brûler des calories.</p>
                <br><br>
            <p><span class="blue-color">Entraînement en force : </span>Développez votre musculature dans notre espace de musculation bien équipé. 
                Nos coachs personnels sont là pour vous aider à concevoir un programme d'entraînement adapté à vos objectifs.</p>
                <br><br>
            <p><span class="blue-color">Boxe et arts martiaux : </span>Améliorez votre force, votre agilité et votre confiance en vous grâce à nos cours de boxe, de kickboxing et d'arts martiaux.</p>
            <br><br>
            <h3>Chez "FitLife Oasis", notre objectif est de vous offrir bien plus qu'une simple salle de sport. C'est un lieu où vous pouvez vous entraîner, vous ressourcer et vous surpasser, le tout dans une ambiance chaleureuse et accueillante. 
                Rejoignez notre communauté aujourd'hui pour commencer votre voyage vers une vie plus saine et plus active.</h3>
        </section>
    </section>
</body>
</html>
