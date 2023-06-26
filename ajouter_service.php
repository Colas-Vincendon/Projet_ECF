<?php
// Connexion à la base de données
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b3b93f93ef4872";
$password = "21163a70";
$dbname = "heroku_a9b8c2ad4d5e1ab";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les valeurs du formulaire
    $titre = $_POST['titre'];
    $paragraphe = $_POST['paragraphe'];

    // Vérifier si un fichier a été téléchargé
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileType = $_FILES['image']['type'];
        $fileSize = $_FILES['image']['size'];

        // Vérifier si le fichier est une image
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($fileType, $allowedTypes)) {
            // Lire le contenu du fichier
            $imageData = file_get_contents($fileTmpPath);

            // Convertir l'image en format Base64
            $imageBase64 = base64_encode($imageData);

            // Insérer le nouveau service dans la table "services" en utilisant une requête préparée
            $stmt = $conn->prepare("INSERT INTO services (titre, paragraphe) VALUES (:titre, :paragraphe)");
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':paragraphe', $paragraphe);
            $stmt->execute();

            // Récupérer l'identifiant du dernier service inséré
            $serviceId = $conn->lastInsertId();

            // Insérer l'image dans la table "imageService" en utilisant une requête préparée
            $stmt = $conn->prepare("INSERT INTO imageService (service_id, image_base64) VALUES (:serviceId, :imageBase64)");
            $stmt->bindParam(':serviceId', $serviceId);
            $stmt->bindParam(':imageBase64', $imageBase64);
            $stmt->execute();

            echo "Le service a été ajouté avec succès.";
        } else {
            echo "Le fichier doit être une image de type JPEG, PNG ou GIF.";
        }
    } else {
        echo "Une erreur s'est produite lors du téléchargement du fichier.";
    }
} catch (PDOException $e) {
    echo "Échec de la connexion à la base de données : " . $e->getMessage();
}

$conn = null;

header("Location: newServiceAdded.html");
exit();
?>
