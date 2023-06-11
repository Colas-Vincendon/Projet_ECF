<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "garageParrot";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des valeurs des filtres
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $carburant = $_POST['carburant'];
    $boite_de_vitesse = $_POST['boite_de_vitesse'];

    // Construction de la requête SQL
    $sql = "SELECT * FROM cars WHERE 1=1";

    $params = array();

    if (!empty($marque)) {
        $sql .= " AND marque = :marque";
        $params['marque'] = $marque;
    }

    if (!empty($modele)) {
        $sql .= " AND modele = :modele";
        $params['modele'] = $modele;
    }

    if (!empty($annee)) {
        $sql .= " AND annee = :annee";
        $params['annee'] = $annee;
    }

    if (!empty($carburant)) {
        $sql .= " AND carburant = :carburant";
        $params['carburant'] = $carburant;
    }

    if (!empty($boite_de_vitesse)) {
        $sql .= " AND boite_de_vitesse = :boite_de_vitesse";
        $params['boite_de_vitesse'] = $boite_de_vitesse;
    }

    // Préparation de la requête SQL
    $stmt = $conn->prepare($sql);

    // Exécution de la requête SQL avec les paramètres
    $stmt->execute($params);

    // Affichage des résultats
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='container-fluid containerCars'><a class='no-underline text-black' href='detailed_car.php?id=" . $row["id"] . "'>";
            // Récupération et décodage des images de la voiture
            $carId = $row["id"];
            $sqlImages = "SELECT image_base64 FROM images WHERE car_id = '$carId' LIMIT 1";
            $resultImages = $conn->query($sqlImages);

            if ($resultImages->rowCount() > 0) {
                echo "<div class=' car-images'>";
                while ($rowImage = $resultImages->fetch(PDO::FETCH_ASSOC)) {
                    $imageData = $rowImage["image_base64"];
                    echo "<img class='img-fluid' id='img-car' style='width: 100%' src='data:image/jpeg;base64," . $imageData . "' alt='Image voiture'>";
                }
                echo "</div>";
            }
            echo "<div class='detailsCar text-start py-2 px-4 fs-6'><p><FONT color='grey'>Marque : </FONT><b> " . $row["marque"] . "</b></p>";
            echo "<p><FONT color='grey'>Modèle : </FONT><b> " . $row["modele"] . "</b></p>";
            echo "<p><FONT color='grey'>Kilomêtrage : </FONT><b> " . $row["kilometres"] .' km'. "</b></p>";
            echo "<p><FONT color='grey'>Année : </FONT><b> " . $row["annee"] . "</b></p>";
            echo "<p><FONT color='grey'>Carburant : </FONT><b> " . $row["carburant"] . "</b></p>";
            echo "<p><FONT color='grey'>Boîte de vitesse : </FONT><b> " . $row["boite_de_vitesse"] . "</b></p>";
            echo "<p><FONT color='grey'>Prix : </FONT><b> " . $row["Prix"] .' €'. "</b></p></div>";

            echo "</a></div>";
        }
    } else {
        echo "<p>Aucun résultat trouvé.</p>";
    }

    // Fermeture de la connexion à la base de données
    $conn = null;
} catch (PDOException $e) {
    die("Échec de la connexion à la base de données : " . $e->getMessage());
}
?>




<style>
    #img-car {
        transition: filter 0.3s;
    }

    #img-car:hover {
        filter: brightness(55%);
    }
</style>
