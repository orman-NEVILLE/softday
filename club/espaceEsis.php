<?php 
    include_once "../include/connection_bdd.php";
    $req = "SELECT * FROM news ORDER BY date_publication DESC LIMIT 3";
    $rep_prep = $connection->prepare($req);
    $rep_prep->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EspacEsis - Codez ensemble, innovez sans limites</title>
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    <div class="hero_espace">
        <div class="hero_description">
            <h2>EspacEsis</h2>
            <h3>Codez ensemble, innovez sans limites</h3>
            <p>Le club de développeurs à l'université Don Bosco de Lubumbashi rassemble des passionnés de technologie pour transformer des idées innovantes en solutions numériques. Ensemble, nous explorons les dernières avancées en programmation et collaborons sur des projets ambitieux qui façonnent l'avenir.</p>
            <button>Nous rejoindre</button>
        </div>
        <div class="img-hero">
            <img src="../assets/img/img-hero_espace.png" alt="">
        </div>
    </div>
    <div class="leaders">
        <h2 class="titre">Decouvrez les dirigeants du Club </h2>
        <p class="description">
            Découvrez leurs parcours, leurs rôles au sein de notre club de programmeurs, des passionnés de technologie et de développement informatique
        </p>
        <div class="espaceLeaders">
            <div class = sublead>
                <img src="../assets/img/subleader_01.svg" alt="">
                <div class="chef_description">
                    <p class="title">SECRETAIRE</p>
                    <p>John MUSANS</p>
                </div>
                
            </div>
            <div class="leader">
                <img src="../assets/img/leader_espace.svg" alt="">
                <div class="chef_description leader-description">
                    <p class="title ">PRESIDENT</p>
                    <p>Chrinovic MUKEBA</p>
                </div>
            </div>
            <div class = "sublead">
                <img src="../assets/img/subleader_02.svg" alt="">
                <div class="chef_description">
                    <p class="title">ADJOINT</p>
                    <p>Jule CESAR</p>
                </div>
            </div>
        </div>
        
    </div>
    <div class="goals">
        <div class="text-description">
            <h2 class="titre">Les objectifs du Club</h2>
            <p class="espaceDescription">
                Notre club de programmeurs a pour mission de créer un environnement propice à l'apprentissage, à l'innovation et à la collaboration. Voici les objectifs clés que nous poursuivons pour atteindre cette mission :
            </p>
        </div>
        
        <div class="details-description details02">
            <div class="box-details">
                <i class="fa-solid fa-briefcase"></i>
                <h3>Encourager l'apprentissage </h3>
                <p>Nous organisons régulièrement des ateliers, des séminaires et des sessions de formation pour aider nos   membres à rester à jour avec les dernières technologies et pratiques de développement.</p>
            </div>
            <div class="box-details">
                <i class="fa-solid fa-lightbulb"></i>
                <h3>Encourager l'apprentissage </h3>
                <p>Nous organisons régulièrement des ateliers, des séminaires et des sessions de formation pour aider nos   membres à rester à jour avec les dernières technologies et pratiques de développement.</p>
            </div>
        </div>
        <div class="details-description">
            <div class="box-details">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Encourager l'apprentissage </h3>
                <p>Nous organisons régulièrement des ateliers, des séminaires et des sessions de formation pour aider nos   membres à rester à jour avec les dernières technologies et pratiques de développement.</p>
            </div>
            <div class="box-details">
                <i class="fa-solid fa-handshake-angle"></i>
                <h3>Encourager l'apprentissage </h3>
                <p>Nous organisons régulièrement des ateliers, des séminaires et des sessions de formation pour aider nos   membres à rester à jour avec les dernières technologies et pratiques de développement.</p>
            </div>
        </div>
    </div>

    <div class="blog">
        <h2 class="titre">Nos derniers articles</h2>
        <div class="articles">
            <?php while ($article = $rep_prep->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="article" data-aos="fade-up">
                    <img src="../assets/img/event.jpeg" alt="Article Image">
                    <div class="details_article">
                        <div class="profil_author"><img src="../assets/img/event.jpeg" alt="Author"></div>
                        <p class="date_article"><span>Date: </span><?php echo date('d M Y', strtotime($article['date_publication'])); ?></p>
                        <p class="titre_article"><?php echo $article['titre']; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- <div class="our-contacts">
        <h2 class="titre">Nous contacter</h2>
        <div class="contact">
            <form action="">
                <label for="nom">Nom: </label>
                <input type="text" id="nom">
                <label for="email">E-mail: </label>
                <input type="text" id="email">
                <label for="message">Message: </label>
                <textarea name="message" id="message"></textarea>
                <input type="submit" name="" id="">
            </form>
        </div>
    </div> -->
    <footer>
        Université Don Bosco de Lubumbashi <br> Copyrigth 2024
     </footer>
  
</body>

</html>