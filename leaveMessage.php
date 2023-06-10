<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoimsg'])) {
    $prenom = validateInput($_POST['prenom']);
    $nom = validateInput($_POST['nom']);
    $email = validateInput($_POST['email']);
    $sujet = validateInput($_POST['sujet']);
    $message = validateInput($_POST['message']);

    if (empty($prenom) || empty($nom) || empty($email) || empty($message)) {
        echo "Veuillez remplir tous les champs obligatoires.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email non valide.";
        exit;
    }

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "garageParrot";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO messages (prenom, nom, email, sujet, message) VALUES (:prenom, :nom, :email, :sujet, :message)");
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':sujet', $sujet);
        $stmt->bindParam(':message', $message);
        $stmt->execute();


        $conn = null;
        header("Location: messageSent.php");
        exit();
    } catch (PDOException $e) {
        echo "Échec de la connexion à la base de données : " . $e->getMessage();
    }
}

function validateInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>