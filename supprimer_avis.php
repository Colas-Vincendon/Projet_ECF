<?php
// Connexion à la base de données
require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

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
?>