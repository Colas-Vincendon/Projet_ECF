<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garageParrot";

try {
    // Connexion à la base de données en utilisant PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les valeurs du formulaire
    $nom = $_POST['nom'];
    $commentaire = $_POST['commentaire'];
    $note = $_POST['note'];

    // Préparer la requête SQL avec des paramètres préparés
    $sql = "INSERT INTO avis (nom, commentaire, note) VALUES (:nom, :commentaire, :note)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':commentaire', $commentaire);
    $stmt->bindParam(':note', $note);

    // Exécuter la requête
    $stmt->execute();

    $conn = null;
    // Rediriger vers la page index.php ou une autre page de confirmation
    header("Location: index.php");
    exit();
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Fermer la connexion à la base de données


?>