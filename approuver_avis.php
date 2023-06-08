
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
if (isset($_POST['approuver'])) {
    $avisId = $_POST['avis_id'];

    // Mettre à jour le champ 'approuve' de l'avis dans la base de données
    $sql = "UPDATE avis SET approuve = 1 WHERE id = $avisId";
    $conn->query($sql);
}

// Rediriger vers la page d'interface Employé
header("Location: accueil_employe.php");
exit();
?>