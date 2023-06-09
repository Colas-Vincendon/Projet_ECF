<?php

require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

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

$conn = null;
?>