<?php
// Connexion à la base de données
$servername = "localhost";
$username = "Colas";
$password = "Vincendon89450";
$dbname = "garageParrot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
    header("Location: newHorairesAdded.php");
    exit();
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>
