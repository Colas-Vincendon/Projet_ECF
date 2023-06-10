<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garageParrot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>