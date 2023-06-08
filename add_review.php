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
$nom = $_POST['nom'];
$commentaire = $_POST['commentaire'];
$note = $_POST['note'];

// Préparer la requête SQL
$sql = "INSERT INTO avis (nom, commentaire, note) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $nom, $commentaire, $note);

// Exécuter la requête
$stmt->execute();

// Fermer la connexion à la base de données
$stmt->close();
$conn->close();

// Rediriger vers la page index.php ou une autre page de confirmation
header("Location: index.php");
exit();
?>
