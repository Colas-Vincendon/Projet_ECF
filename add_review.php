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
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b3b93f93ef4872";
$password = "21163a70";
$dbname = "heroku_a9b8c2ad4d5e1ab";

try {
    // Connexion à la base de données en utilisant PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
    header("Location: commentSent.php");
    exit();
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Fermer la connexion à la base de données


?>