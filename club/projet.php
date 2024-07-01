<?php
include_once "../include/connection_bdd.php";

// Requête SQL pour récupérer les informations des actualités
$query = "SELECT * FROM projet";
$stmt = $connection->query($query);
$projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg"  href="assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Portail de Club - Université Don Bosco de Lubumbashi</title>
</head>
<body>
    <header>
        <div class="logo"><img src="../assets/img/logo.svg" alt=""></div>
        <div class="menu">
            <a href="espaceEsis.php">Accueil</a>
            <a href="event.php">Evénement</a>
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
<div>
<h1>Découvrez des Projets Innovants et Révolutionnaires !</h1>
<h3>Bienvenue dans notre espace dédié aux projets, où l'innovation prend vie !</h3>
<p>
 Explorez une sélection de projets
audacieux  qui repoussent les limites de la créativité et de la technologie.
Chaque projet est une manifestation  de la passion de nos talents,visant à transformer des idées visionnaires en réalités tangibles.
Admirez les défis relevés et laissez-vous inspirer par les solutions innovantes proposées.
</p>

<p>Rejoignez-nous
dans cette aventure passionnante et contribuez à la réalisation de projets qui feront la différence.
</p>

</div>
<div class="container mt-5">
<h1 class="text-center mb-4"></h1>
<?php foreach ($projets as $projet): ?> 
        <div class="project-header mb-5">
            <h2 class="project-title"><?php echo htmlspecialchars($projet['nom']); ?></h2>
            <p class="project-date">Date de début : <?php echo htmlspecialchars($projet['date_debut']); ?></p>
            <p class="project-date">Date de fin :<?php echo htmlspecialchars($projet['date_fin']); ?></p>
        </div>
        
        <div class="project-description mb-5">
            <h3>Description</h3>
            <p><?php echo htmlspecialchars($projet['description']); ?></p>
        </div>
        <div class="project-media mb-5">
            <h3>CODE SOURCE</h3>
            <div class="media-grid">
                <a href="<?php echo htmlspecialchars($projet['lien_git']); ?>"><?php echo htmlspecialchars($projet['lien_git']); ?></a>
            </div>
        </div>
        <?php endforeach; ?>          
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <script>
    </script>
</body>