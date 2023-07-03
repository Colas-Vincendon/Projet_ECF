<?php

function validateInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoiReview'])) {
    $nom = validateInput($_POST['nom']);
    $commentaire = validateInput($_POST['commentaire']);
    $note = validateInput($_POST['note']);

    if (empty($nom) || empty($commentaire) || empty($note)) {
        echo "Veuillez remplir tous les champs obligatoires.";
        exit;
    }
}

// Connexion à la base de données
require_once 'databaseConnexion.php';
          //SINGLETON
          $database = Database::getInstance();
          $conn = $database->getConnection();

    // Récupérer les valeurs du formulaire
    $nom = utf8_encode($_POST['nom']);
    $commentaire = utf8_encode($_POST['commentaire']);
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
    header("Location: commentSent.html");
    exit();

// Fermer la connexion à la base de données

?>