<?php
/*-------------- Connexion à la base de données -----------------*/
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b3b93f93ef4872";
$password = "21163a70";
$dbname = "heroku_a9b8c2ad4d5e1ab";

try {
    /*-------------- Connexion à la base de données en utilisant PDO ---------------*/
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>