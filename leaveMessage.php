<?php

function validateInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoimsg'])) {
    $prenom = validateInput($_POST['prenom']);
    $nom = validateInput($_POST['nom']);
    $email = validateInput($_POST['email']);
    $telephone = validateInput($_POST['telephone']);
    $sujet = validateInput($_POST['sujet']);
    $message = validateInput($_POST['message']);

    if (empty($prenom) || empty($nom) || empty($email) || empty($telephone) || empty($message)) {
        echo "Veuillez remplir tous les champs obligatoires.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email non valide.";
        exit;
    }

    require_once 'databaseConnexion.php';
    //SINGLETON
    $database = Database::getInstance();
    $conn = $database->getConnection();

    $stmt = $conn->prepare("INSERT INTO messages (prenom, nom, email, telephone, sujet, message) VALUES (:prenom, :nom, :email, :telephone, :sujet, :message)");
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':sujet', $sujet);
    $stmt->bindParam(':message', $message);
    $stmt->execute();


    $conn = null;
    header("Location: messageSent.html");
    exit();
}

?>