<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404 - Page non trouvée</title>
    <style>
        body {
            font-family: 'Roboto Condensed', Arial, sans-serif;
            text-align: center;
            background-color: rgb(26,26,26);
        }
        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .error-title {
            color: #3675da;
            font-weight: 500;
            font-size: 4.8rem;
            text-shadow: 4px 4px 10px #3675da;
            margin-bottom: 70px;
        }
        .error-text {
            font-size: 1.9rem;
            color: #fff;
            margin-bottom: 50px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3675da;
            color: #fff;
            font-size: 1.6rem;
            text-decoration: none;
            border-radius: 5px;
            text-shadow: 2px 2px 5px #0056b3;
            transition: transform 0.2s ease-in-out;
        }
        .button:hover {
            background-color: #0056b3;
            transform: scale(1.05); /* Augmente légèrement la taille du bouton au survol */
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1 class="error-title">Erreur 404 - Page non trouvée</h1>
        <p class="error-text">Désolé, la page que vous recherchez semble introuvable.</p>
        <a href="/" class="button">Retour à la page d'accueil</a>
    </div>
</body>
</html>
