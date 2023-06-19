<?php
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "bc900b6840b350";
$password = "c7c21297";
$dbname = "heroku_c7028cd7013430b";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>
