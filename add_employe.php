<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs des champs
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connexion à la base de données
    $servername = 'localhost';
    $dbname = 'garageParrot';

    // Créer la connexion à la base de données
    $conn = mysqli_connect($servername, 'root', 'root', $dbname);

    // Vérifier la connexion
    if (!$conn) {
        die("Erreur de connexion : " . mysqli_connect_error());
    }

    // Requête d'insertion de l'employé
    $query = "INSERT INTO employes (email, password) VALUE ('$email', '$password')";

    // Exécuter la requête
    if (mysqli_query($conn, $query)) {
        // Redirection vers la page d'accueil de l'administrateur
        header('Location: accueil_admin.php');
        exit();
    } else {
        echo "Erreur lors de l'ajout à la base de données";
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
}
?>