<?php 
    include_once "../include/connection_bdd.php";
    $req = "SELECT * FROM news";
    $rep_prep = $connection->prepare($req);
    $rep_prep->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 10px;
        }
        .intro {
            text-align: center;
            margin-bottom: 50px;
        }
        .intro h1 {
            font-size: 2.5em;
            color: #2980b9;
        }
        .intro p {
            font-size: 1.2em;
            color: #2c3e50;
        }

        .event-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .event-item {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin: 20px;
            padding: 20px;
            width: 45%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .event-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .event-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .event-details h3 {
            font-size: 1.5em;
            color:#2980b9;
        }
        .event-details p {
            padding: 10px 0;
            color: #7f8c8d;
            font-size: 1.1em;
        }
        .event-details .date span {
            color: #8e44ad;
            font-weight: bold;
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
    <div class="intro">
            <h1>Bienvenue sur notre Blog</h1>
            <p>Découvrez des articles passionnants, des conseils d'experts et des mises à jour sur les dernières tendances et technologies.</p>
            <p>Plongez-vous dans le monde de l'innovation et de la créativité avec nos contenus variés et enrichissants.</p>
        </div>
    <div class="container">
        <div class="event-list">
            <?php while ($article = $rep_prep->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="event-item" data-aos="fade-up">
                    <img src="../assets/img/event.jpeg" alt="Event Image">
                    <div class="event-details">
                        <h3><?php echo $article['titre']; ?></h3>
                        <p><?php echo $article['description']; ?></p>
                        <p class="date"><span>Date_publication: </span><?php echo $article['date_publication']; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <footer>
        Université Don Bosco de Lubumbashi <br> &copy; 2024
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.event-item');
            items.forEach(item => {
                item.addEventListener('mouseover', () => {
                    item.classList.add('hovered');
                });
                item.addEventListener('mouseout', () => {
                    item.classList.remove('hovered');
                });
            });
        });
    </script>
</body>
</html>
