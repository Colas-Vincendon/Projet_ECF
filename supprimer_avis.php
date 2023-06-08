
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garageParrot";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['supprimer'])) {
    $avisId = $_POST['avis_id'];

    // Supprimer l'avis de la base de données
    $sql = "DELETE FROM avis WHERE id = $avisId";
    $conn->query($sql);
}

// Rediriger vers la page d'interface Employé
header("Location: accueil_employe.php");
exit();
?>
