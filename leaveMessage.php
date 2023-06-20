<?php
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

    $servername = "eu-cdbr-west-03.cleardb.net";
    $username = "b3b93f93ef4872";
    $password = "21163a70";
    $dbname = "heroku_a9b8c2ad4d5e1ab";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO messages (prenom, nom, email, telephone, sujet, message) VALUES (:prenom, :nom, :email, :telephone, :sujet, :message)");
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
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