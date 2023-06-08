<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoimsg'])) {
    $nom = validateInput($_POST['nom']);
    $email = validateInput($_POST['email']);
    $sujet = validateInput($_POST['sujet']);
    $message = validateInput($_POST['message']);

    if (empty($nom) || empty($email) || empty($message)) {
        echo "Veuillez remplir tous les champs obligatoires.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email non valide.";
        exit;
    }

    $to = "colasvincendon@gmail.com";
    $subject = "Nouveau message de contact - $sujet";
    $messageContent = "Nom: $nom\n";
    $messageContent .= "Email: $email\n";
    $messageContent .= "Message:\n$message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $messageContent, $headers)) {
        echo "Merci pour votre message. Nous vous contacterons bientôt.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer.";
    }
}

function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>
