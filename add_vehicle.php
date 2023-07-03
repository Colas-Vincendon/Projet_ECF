<?php
require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

// Récupération des valeurs du formulaire
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$annee = $_POST['annee'];
$kilometrage = $_POST['kilometres'];
$carburant = $_POST['carburant'];
$boiteDeVitesse = $_POST['boite_de_vitesse'];
$prix = $_POST['prix'];

// Insertion du véhicule dans la table "cars" en utilisant une requête préparée
$stmt = $conn->prepare("INSERT INTO cars (marque, modele, annee, kilometres, carburant, boite_de_vitesse, Prix) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->execute([$marque, $modele, $annee, $kilometrage, $carburant, $boiteDeVitesse, $prix]);

// Récupération de l'identifiant du véhicule inséré
$vehiculeId = $conn->lastInsertId();

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

        // Insertion de l'image en base64 dans la table "images" en utilisant une requête préparée
        $stmt = $conn->prepare("INSERT INTO images (car_id, image_base64) VALUES (?, ?)");
        $stmt->execute([$vehiculeId, $base64Image]);
    }
}

// Fermeture de la connexion à la base de données
$conn = null;

// Redirection vers la page d'accueil de l'employé
header("Location: accueil_employe.php");
exit();
?>