<?php

require_once 'databaseConnexion.php';
//SINGLETON
$database = Database::getInstance();
$conn = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message_id'])) {
    $messageId = $_POST['message_id'];

    // Supprimer le message correspondant à l'ID spécifié
    $sql = "DELETE FROM messages WHERE id = :messageId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':messageId', $messageId);
    $stmt->execute();

    $conn = null;
    // Rediriger vers la page messagePlace.php ou une autre page de confirmation
    header("Location: messagesPlace.php");
    exit();

}
?>