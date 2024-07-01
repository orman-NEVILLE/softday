<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenges - Portail</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            color: #333;
        }
        header {
            background-color: #1abc9c;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header .menu a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .challenge {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .challenge:hover {
            transform: scale(1.02);
        }
        .challenge h3 {
            color: #1abc9c;
            margin: 0;
            padding: 20px;
        }
        .challenge p {
            padding: 0 20px 20px;
            color: #666;
        }
        .challenge span {
            color: #e74c3c;
            font-weight: bold;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #1abc9c;
            color: #fff;
            position: absolute;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"><img src="../assets/img/logo.svg" alt="Logo"></div>
        <div class="menu">
            <a href="espaceEsis.php">Accueil</a>
            <a href="event.php">Événements</a>
            <a href="blog.php">Blog</a>
            <a href="ressources.php">Ressources</a>
            <a href="forum.php">Forum</a>
            <a href="challenge.php">Challenges</a>
            <a href="projet.php">Projets</a>
        </div>
        <div class="connexion">
            <button class="signup">S'inscrire</button>
            <button class="login">Se connecter</button>
        </div>
    </header>

    <div class="container">
        <div class="challenge">
            <h3>Relevez les Défis et Montrez Votre Ingéniosité !</h3>
            <p>Bienvenue sur la page des <span>Challenges</span> de notre portail !</p>
            <p>Plongez-vous dans des défis passionnants qui mettront à l'épreuve vos compétences,
                votre créativité et votre esprit d'innovation.
                Chaque challenge est conçu pour vous pousser à penser différemment,
                à explorer de nouvelles idées et à vous surpasser.</p>
            <p><span>Pourquoi participer ?</span></p>
            <ul>
                <li><span>Développez vos Compétences</span> : En relevant des défis variés, vous acquerrez de nouvelles compétences et perfectionnerez celles que vous possédez déjà.</li>
                <li><span>Collaborez et Échangez</span> : Travaillez en équipe, partagez vos idées et apprenez des autres participants.</li>
                <li><span>Gagnez des Récompenses</span> : Des prix attractifs et des reconnaissances sont en jeu pour les meilleurs projets.</li>
                <li><span>Rencontrez des Experts</span> : Bénéficiez des conseils et de l'expertise de professionnels chevronnés dans divers domaines.</li>
            </ul>
            <p><span>Comment participer ?</span></p>
            <ol>
                <li><span>Choisissez un Challenge</span> : Parcourez notre liste de défis et sélectionnez celui qui vous inspire le plus.</li>
                <li><span>Inscrivez-vous</span> : Remplissez le formulaire d'inscription et rejoignez la compétition.</li>
                <li><span>Créez et Soumettez</span> : Mettez en œuvre vos idées, réalisez votre projet et soumettez-le avant la date limite.</li>
                <li><span>Recevez des Feedbacks</span> : Obtenez des commentaires constructifs de la part de notre jury d'experts.</li>
            </ol>
            <p>Préparez-vous à innover, à créer et à réussir ! Nous sommes impatients de voir ce que vous allez accomplir.</p>
        </div>
    </div>

    <footer>
        Université Don Bosco de Lubumbashi <br> Copyright 2024
    </footer>
</body>
</html>
