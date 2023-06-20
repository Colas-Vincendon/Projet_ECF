<?php
// Connexion à la base de données
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b3b93f93ef4872";
$password = "21163a70";
$dbname = "heroku_a9b8c2ad4d5e1ab";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['supprimer'])) {
        $avisId = $_POST['avis_id'];

        // Supprimer l'avis de la base de données
        $sql = "DELETE FROM avis WHERE id = :avisId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':avisId', $avisId);
        $stmt->execute();
    }

    // Fermeture de la connexion à la base de données
    $conn = null;

    // Rediriger vers la page d'interface Employé
    header("Location: accueil_employe.php");
    exit();
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>
