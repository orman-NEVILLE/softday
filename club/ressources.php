<?php
include_once "../include/connection_bdd.php";

// Requête SQL pour récupérer les informations des ressources
$query = "SELECT * FROM ressource";
$stmt = $connection->query($query);
$ressources = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ressources - Apprenez grâce aux formations en ligne</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .intro {
            text-align: center;
            margin-bottom: 50px;
        }
        .intro h1 {
            font-size: 2.5em;
            color: #2980b9;
        }

        .intro p , h3{
            font-size: 1.2em;
            color: #2c3e50;
        }
        .best_courses {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 0px;
        }

        .course {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 10px;
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        .course img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }

        .course_details {
            margin-top: 5px;
            font-size: 1em;
            color: #7f8c8d;
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
    <div class ="intro">
    <h1>Explorez des Ressources de Qualité Supérieure !</h1>
        <h3>Bienvenue dans notre centre de ressources, votre destination ultime pour l'apprentissage.</h3>
        <p>
            Plongez dans un océan de connaissances et laissez-vous guider par notre expertise pour atteindre de nouveaux sommets.
        </p>  
    </div>
    <div class="best_courses">     
        <div class="courses">
            <?php foreach ($ressources as $ressource): ?> 
                <div class="course">
                    <a href="<?php echo htmlspecialchars($ressource['Lien']); ?>"><img src="../assets/img/event.jpeg" alt="Course Image"></a>
                    <p><?php echo htmlspecialchars($ressource['titre']); ?></p>
                    <div class="course_details">
                        <p><?php echo htmlspecialchars($ressource['categorie']); ?></p>
                        <div>&#x2605 &#x2605 &#x2605 &#x2605 &#9734</div>
                    </div>
                </div> 
            <?php endforeach; ?>   
        </div>
    </div>
    <footer>
        Université Don Bosco de Lubumbashi <br> &copy; 2024
    </footer>
</body>
</html>
