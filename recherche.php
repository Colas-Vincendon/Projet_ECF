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
?>
<style>
   
</style>
<?php
// Affichage des résultats
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='container-fluid containerCars'><a class='no-underline text-black' href='detailed_car.php?id=" . $row["id"] . "'>";
        // Récupération et décodage des images de la voiture
        $carId = $row["id"];
        $sqlImages = "SELECT image_base64 FROM images WHERE car_id = '$carId' LIMIT 1";
        $resultImages = $conn->query($sqlImages);

        if ($resultImages->num_rows > 0) {
            echo "<div class=' car-images'>";
            while ($rowImage = $resultImages->fetch_assoc()) {
                $imageData = $rowImage["image_base64"];
                echo "<img class='img-fluid' id='img-car' style='width: 100%' src='data:image/jpeg;base64," . $imageData . "' alt='Image voiture'>";
            }
            echo "</div>";
        }
        echo "<div class='detailsCar text-start py-2 px-4 fs-6'><p><FONT color='grey'>Marque : </FONT><b> " . $row["marque"] . "</b></p>";
        echo "<p><FONT color='grey'>Modèle : </FONT><b> " . $row["modele"] . "</b></p>";
        echo "<p><FONT color='grey'>Kilomêtrage : </FONT><b> " . $row["kilometres"] .' km'. "</b></p>";
        echo "<p><FONT color='grey'>Année : </FONT><b> " . $row["annee"] . "</b></p>";
        echo "<p><FONT color='grey'>Prix : </FONT><b> " . $row["Prix"] . "</b></p></div>";


        echo "</a></div>";
    }
} else {
    echo "<p>Aucun résultat trouvé.</p>";
}
// Fermeture de la connexion à la base de données
$conn->close();
?>


<style>
    #img-car {
        transition: filter 0.3s;
    }

    #img-car:hover {
        filter: brightness(55%);
    }
</style>


<!-- 
Créer une table images avec sql system primary et foreign key pour lier la tabke cars.
Mettre dans chaque image l'id de la voiture plutôt, pour mettre plusieurs images par voiture -->