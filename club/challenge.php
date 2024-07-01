<?php
include_once "../include/connection_bdd.php";

// Traitement de l'envoi du lien du repository
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $repository = $_POST['repository'];
    $query = "INSERT INTO result_atelier (resultat) VALUES (:resultat)";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':resultat', $repository);
    header('Location: challenge.php');
    exit;
}


$query = "SELECT * FROM atelier";
$stmt = $connection->query($query);
$ateliers = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Portail de Club - Université Don Bosco de Lubumbashi</title>
</head>
<style>
        .intro {
            text-align: center;
            margin-bottom: 50px;
        }
        .intro h1 {
            font-size: 2.5em;
            color: #2980b9;
        }
        .intro h2 {
            font-size: 1.2em;
            color: #2c3e50;
        }
</style>
<body>
    <header>
        <div class="logo"><img src="../assets/img/logo.svg" alt=""></div>
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
        <h1>Bienvenue sur la page des <span>Challenges</span> !</h1>
        <h2>Relevez les Défis et Montrez Votre Ingéniosité !</h2>
    </div>
    <div class="container mt-5">
    <?php //if ($stmt->execute()):?>
        <?php foreach ($ateliers as $atelier): ?>
            <div class="project-header mb-5">
                <h2 class="project-title"><?php echo htmlspecialchars($atelier['nom']); ?></h2>
                <p class="project-date">Date de début : <?php echo htmlspecialchars($atelier['date_debut']); ?></p>
                <p class="project-date">Date de fin : <?php echo htmlspecialchars($atelier['date_fin']); ?></p>
            </div>
            
            <div class="project-description mb-5">
                <h3>Description</h3>
                <p><?php echo htmlspecialchars($atelier['description']); ?></p>
            </div>

            <div class="project-goals mb-5">
                <h3>Objectifs</h3>
                <p><?php echo htmlspecialchars($atelier['objectif']); ?></p>
            </div>
<?php //endif; ?>
            <div class="project-media mb-5">
                <h3>Résultat</h3>
                <div class="media-grid">
                    <form action="" method="post">
                        <label for="git"> <strong>Lien du Repository :</strong></label>
                        <input type="text" id="git" name="repository" >
                        <button type="submit" class="btn btn-dark mt-3">Envoyer</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
</body>
</html>
