<?php
            $serveur = 'localhost';
            $utilisateur = 'root';
            $mot_de_passe = '';
            $base_de_donnees = 'portail';
            try {
                // Connexion à la base de données
                $connection= new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
                $query = "SELECT titre, description,lien, date_publication FROM news";
                $stmt = $connection->query($query);
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch(PDOException $e) {
                echo "Erreur : " . $e->getMessage();
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Blog</h1>
        </header>
        <div class="container">
        <div class="event-list">
            <?php while ($event = $rep_prep->fetch(PDO::FETCH_ASSOC)): ?>
                <div class="event-item" data-aos="fade-up">
                    <img src="../assets/img/event.jpeg" alt="Event Image">
                    <div class="event-details">
                        <h3><?php echo $event['titre']; ?></h3>
                        <p><?php echo $event['description']; ?></p>
                        <p class="date"><span>Date: </span><?php echo $event['event_date']; ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
$(document).ready(function() {
    // Animate on scroll
    function animateOnScroll() {
        $('.blog-post').each(function() {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height() - 100) {
                $(this).addClass('visible');
            }
        });
    }

    // Initial call
    animateOnScroll();

    // On scroll
    $(window).on('scroll', function() {
        animateOnScroll();
    });
});

    </script>
</body>
</html>
