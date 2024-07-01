<?php
// Informations de connexion à la base de données
$serveur = 'localhost';
$utilisateur = 'root';
$mot_de_passe = '';
$base_de_donnees = 'portail';
try {
    // Connexion à la base de données
    $connection= new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $utilisateur, $mot_de_passe);
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
