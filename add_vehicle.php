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

// Insertion du véhicule dans la table "cars"
$sql2 = "INSERT INTO cars (marque, modele, annee) VALUES ('$marque', '$modele', '$annee')";
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
        $imagePath = "./src/imagesCars/" . $imageFile;

        // Déplacement du fichier vers le dossier des images
        move_uploaded_file($tmpName, $imagePath);

        // Insertion de l'image dans la table "images"
        $sql = "INSERT INTO images (car_id, image_url) VALUES ('$vehiculeId', '$imagePath')";
        $conn->query($sql);
    }
}

// Exécuter la requête
if (mysqli_query($conn, $sql)) {
    // Redirection vers la page d'accueil de l'employe
    header('Location: accueil_employe.php');
    exit();
} else {
    echo "Erreur lors de l'ajout à la base de données";
}

// Fermeture de la connexion à la base de données
$conn->close();

?>
