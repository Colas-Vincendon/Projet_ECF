<?php
// Connexion à la base de données
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "bc900b6840b350";
$password = "c7c21297";
$dbname = "heroku_c7028cd7013430b";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message_id'])) {
    $messageId = $_POST['message_id'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Supprimer le message correspondant à l'ID spécifié
        $sql = "DELETE FROM messages WHERE id = :messageId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':messageId', $messageId);
        $stmt->execute();

        // Rediriger vers la page messagePlace.php ou une autre page de confirmation
        header("Location: messagesPlace.php");
        exit();
    } catch (PDOException $e) {
        echo "Échec de la connexion à la base de données : " . $e->getMessage();
    }

    $conn = null;
}
?>
