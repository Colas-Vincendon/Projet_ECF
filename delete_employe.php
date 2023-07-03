<?php

require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

// Vérifier si un ID d'employé a été envoyé
if (isset($_POST['delete_id'])) {
    $deleteId = $_POST['delete_id'];

    // Supprimer l'employé avec l'ID $deleteId
    $sql = "DELETE FROM employes WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $deleteId);
    $stmt->execute();


} else {
    echo "Aucun employé à supprimer.";
}

// Fermeture de la connexion à la base de données
$conn = null;

// Redirection vers la page d'accueil de l'employé
header("Location: accueil_admin.php");
exit();
?>