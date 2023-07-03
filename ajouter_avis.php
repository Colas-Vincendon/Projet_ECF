<?php

require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

/*-------------- Récupérer les valeurs du formulaire ---------------*/
$nom = $_POST['nom'];
$commentaire = $_POST['commentaire'];
$note = $_POST['note'];

/*-------------- Insertion du témoignage dans la table "avis" en utilisant une requête préparée --------------*/
$stmt = $conn->prepare("INSERT INTO avis (nom, commentaire, note) VALUES (?, ?, ?)");
$stmt->execute([$nom, $commentaire, $note]);

/*-------------- Fermer la connexion à la base de données ----------------*/
$conn = null;

/*-------------- Redirection vers la page index.php ou une autre page de confirmation ----------------*/
header("Location: index.php");
exit();
?>