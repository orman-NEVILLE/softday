<?php 
    include_once "../include/connection_bdd.php";
    $currentDate = date('Y-m-d');

    // Query for past events
    $req_past = "SELECT * FROM event WHERE event_date < :currentDate ORDER BY event_date DESC";
    $rep_prep_past = $connection->prepare($req_past);
    $rep_prep_past->bindParam(':currentDate', $currentDate);
    $rep_prep_past->execute();

    // Query for upcoming events
    $req_upcoming = "SELECT * FROM event WHERE event_date >= :currentDate ORDER BY event_date ASC";
    $rep_prep_upcoming = $connection->prepare($req_upcoming);
    $rep_prep_upcoming->bindParam(':currentDate', $currentDate);
    $rep_prep_upcoming->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements - Ressources en ligne</title>
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
            width: 80%;
            margin: 50px auto;
            overflow: hidden;
        }

        .event-section {
            margin-bottom: 50px;
        }

        .event-section h2 {
            font-size: 2em;
            color: #2980b9;
            margin-bottom: 20px;
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
            color: #2980b9;
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

        .intro h3 {
            font-size: 2.5em;
            color: #2980b9;
        }

        .intro p {
            font-size: 1.2em;
            line-height: 1.6em;
            color: #34495e;
            text-align: justify;
            margin: 20px 0;
            padding: 0 20px;
        }

        .intro p span {
            color: #2980b9;
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
    
    <div class="container intro">
        <h3>Bienvenue à nos Événements Inoubliables !</h3>
        <p>
            Chaque événement est une opportunité unique d'acquérir des <span>connaissances inestimables</span>
            et de vivre des <span>expériences mémorables</span>.
            <span>Ne manquez pas cette chance de faire partie d'une communauté dynamique</span> !
        </p>
    </div>

    <div class="container">
        <!-- Upcoming Events Section -->
        <div class="event-section">
            <h2>Événements à venir</h2>
            <div class="event-list">
                <?php while ($event = $rep_prep_upcoming->fetch(PDO::FETCH_ASSOC)): ?>
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

        <!-- Past Events Section -->
        <div class="event-section">
            <h2>Événements passés</h2>
            <div class="event-list">
                <?php while ($event = $rep_prep_past->fetch(PDO::FETCH_ASSOC)): ?>
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
