<?php

require_once 'databaseConnexion.php';
          //SINGLETON
          $database = Database::getInstance();
          $conn = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'ID du véhicule à supprimer est présent
    if (isset($_POST['delete_id'])) {
        $deleteId = $_POST['delete_id'];


            // Supprimer le véhicule avec l'ID donné
            $sql = "DELETE FROM cars WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $deleteId);
            $stmt->execute();

            echo "Le véhicule a été supprimé avec succès.";

            // Fermeture de la connexion à la base de données
            $conn = null;

            // Redirection vers la page d'accueil de l'employé
            header("Location: accueil_employe.php");
            exit();
    } else {
        echo "ID du véhicule manquant.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>