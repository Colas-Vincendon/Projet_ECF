<?php
// Connexion à la base de données
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "bc900b6840b350";
$password = "c7c21297";
$dbname = "heroku_c7028cd7013430b";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['approuver'])) {
        $avisId = $_POST['avis_id'];

        // Mettre à jour le champ 'approuve' de l'avis dans la base de données
        $stmt = $conn->prepare("UPDATE avis SET approuve = 1 WHERE id = :avisId");
        $stmt->bindParam(':avisId', $avisId);
        $stmt->execute();
    }

    // Rediriger vers la page d'interface Employé
    header("Location: accueil_employe.php");
    exit();
} catch (PDOException $e) {
    echo "Échec de la connexion à la base de données : " . $e->getMessage();
}

$conn = null;
?>