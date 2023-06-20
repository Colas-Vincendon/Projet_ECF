<?php
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b3b93f93ef4872";
$password = "21163a70";
$dbname = "heroku_a9b8c2ad4d5e1ab";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>
