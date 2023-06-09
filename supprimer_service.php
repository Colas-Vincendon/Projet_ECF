<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garageParrot";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer l'identifiant du service à supprimer
$serviceId = $_POST['service_id'];

// Supprimer le service de la table "services"
$sql = "DELETE FROM services WHERE id = '$serviceId'";
$conn->query($sql);

// Supprimer l'image associée de la table "imageService"
$sql = "DELETE FROM imageService WHERE service_id = '$serviceId'";
$conn->query($sql);

echo "Le service a été supprimé avec succès.";

// Fermer la connexion à la base de données
$conn->close();


header("Location: accueil_admin.php");
exit();

?>
