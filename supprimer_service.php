<?php

require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

// Récupérer l'identifiant du service à supprimer
$serviceId = $_POST['service_id'];

// Supprimer le service de la table "services"
$sql = "DELETE FROM services WHERE id = :serviceId";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':serviceId', $serviceId);
$stmt->execute();

// Supprimer l'image associée de la table "imageService"
$sql = "DELETE FROM imageService WHERE service_id = :serviceId";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':serviceId', $serviceId);
$stmt->execute();

echo "Le service a été supprimé avec succès.";

// Fermer la connexion à la base de données
$conn = null;

// Rediriger vers la page accueil_admin.php ou une autre page de confirmation
header("Location: accueil_admin.php");
exit();
?>