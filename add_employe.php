<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $servername = 'localhost';
    $dbname = 'garageParrot';
    $username = 'root';
    $password2 = 'root';

    try {
        // Connexion à la base de données en utilisant PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password2);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Hachage du mot de passe
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Requête d'insertion de l'employé avec des paramètres préparés
        $query = "INSERT INTO employes (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        // Exécuter la requête
        if ($stmt->execute()) {
            // Redirection vers la page d'accueil de l'administrateur
            header('Location: newEmployeAdded.php');
            exit();
        } else {
            echo "Erreur lors de l'ajout à la base de données";
        }
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }

    // Fermer la connexion à la base de données
    $conn = null;
}
?>
