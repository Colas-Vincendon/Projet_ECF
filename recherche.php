<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garageParrot";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupération des valeurs des filtres
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$annee = $_POST['annee'];

// Construction de la requête SQL
$sql = "SELECT * FROM cars WHERE 1=1";

if (!empty($marque)) {
    $sql .= " AND marque = '$marque'";
}

if (!empty($modele)) {
    $sql .= " AND modele = '$modele'";
}

if (!empty($annee)) {
    $sql .= " AND annee = '$annee'";
}

// Exécution de la requête SQL
$result = $conn->query($sql);

// Affichage des résultats
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>ID : " . $row["id"] . "</p>";
        echo "<p>Marque : " . $row["marque"] . "</p>";
        echo "<p>Modèle : " . $row["modele"] . "</p>";
        echo "<p>Année : " . $row["annee"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>Aucun résultat trouvé.</p>";
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
