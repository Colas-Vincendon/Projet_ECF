<?php

require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

// Récupérer les valeurs du formulaire
$lundiVendredi = $_POST['lundi_vendredi'];
$samedi = $_POST['samedi'];

// Mettre à jour la table "horaires"
$stmt = $conn->prepare("UPDATE horaires SET lundi_vendredi = :lundiVendredi, samedi = :samedi");
$stmt->bindParam(':lundiVendredi', $lundiVendredi);
$stmt->bindParam(':samedi', $samedi);
$stmt->execute();

// Fermer la connexion à la base de données
$conn = null;

// Rediriger vers la page accueil_admin.php ou une autre page de confirmation
header("Location: newHorairesAdded.html");
exit();
?>