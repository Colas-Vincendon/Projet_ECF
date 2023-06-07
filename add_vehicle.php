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

// Récupération des valeurs du formulaire
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$annee = $_POST['annee'];
$kilometrage = $_POST['kilometres'];

// Insertion du véhicule dans la table "cars"
$sql2 = "INSERT INTO cars (marque, modele, annee, kilometres) VALUES ('$marque', '$modele', '$annee', '$kilometrage')";
$conn->query($sql2);

// Récupération de l'identifiant du véhicule inséré
$vehiculeId = $conn->insert_id;

// Traitement des images
$images = $_FILES['images'];

// Vérification si des images ont été sélectionnées
if (!empty($images['name'][0])) {
    $totalImages = count($images['name']);

    for ($i = 0; $i < $totalImages; $i++) {
        $tmpName = $images['tmp_name'][$i];
        $imageFile = $images['name'][$i];

        // Conversion de l'image en base64
        $base64Image = base64_encode(file_get_contents($tmpName));

        // Insertion de l'image en base64 dans la table "images"
        $sql = "INSERT INTO images (car_id, image_base64) VALUES ('$vehiculeId', '$base64Image')";
        $conn->query($sql);
    }
}

// Fermeture de la connexion à la base de données
$conn->close();

// Redirection vers la page d'accueil de l'employé
header("Location: accueil_employe.php");
exit();
?>