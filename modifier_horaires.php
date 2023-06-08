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

// Récupérer les valeurs du formulaire
$lundiVendredi = $_POST['lundi_vendredi'];
$samedi = $_POST['samedi'];

// Mettre à jour la table "horaires"
$sql = "UPDATE horaires SET lundi_vendredi = '$lundiVendredi', samedi = '$samedi'";
$conn->query($sql);

// Fermer la connexion à la base de données
$conn->close();

// Rediriger vers la page accueil_admin.php ou une autre page de confirmation
header("Location: accueil_admin.php");
exit();
?>
