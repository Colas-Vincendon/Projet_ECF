<?php
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b3b93f93ef4872";
$password = "21163a70";
$dbname = "heroku_a9b8c2ad4d5e1ab";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si l'ID du véhicule à supprimer est présent
    if (isset($_POST['delete_id'])) {
        $deleteId = $_POST['delete_id'];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
        } catch (PDOException $e) {
            die("Échec de la connexion à la base de données : " . $e->getMessage());
        }
    } else {
        echo "ID du véhicule manquant.";
    }
} else {
    echo "Méthode de requête invalide.";
}
?>