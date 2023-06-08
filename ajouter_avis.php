<?php
/*-------------- Connexion à la base de données -----------------*/
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garageParrot";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

/*--------------- Récupérer les valeurs du formulaire ---------------*/
$nom = $_POST['nom'];
$commentaire = $_POST['commentaire'];
$note = $_POST['note'];

/*-------------- Insertion du témoignage dans la table "avis" --------------*/
$sql = "INSERT INTO avis (nom, commentaire, note) VALUES ('$nom', '$commentaire', '$note')";
$conn->query($sql);

/*---------------- Fermer la connexion à la base de données ----------------*/
$conn->close();

header("Location: index.php");
exit();
?>
