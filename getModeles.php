<?php

require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

// Récupération de la marque sélectionnée
$marque = $_GET['marque'];

// Récupération des modèles correspondant à la marque
$sql = "SELECT DISTINCT modele FROM cars WHERE marque = :marque";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':marque', $marque, PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_COLUMN);

// Fermeture de la connexion à la base de données
$conn = null;

// Renvoyer les modèles au format JSON
header('Content-Type: application/json');
echo json_encode($result);
?>