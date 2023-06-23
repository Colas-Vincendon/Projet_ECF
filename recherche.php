<link rel="stylesheet" href="./src/styles/style.css">
<?php
// Connexion à la base de données
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b3b93f93ef4872";
$password = "21163a70";
$dbname = "heroku_a9b8c2ad4d5e1ab";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des valeurs des filtres
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $carburant = $_POST['carburant'];
    $boite_de_vitesse = $_POST['boite_de_vitesse'];
    $kilometres = $_POST['kilometres'];
    $prix = $_POST['prix'];
    $tri = $_POST['tri'];

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

    if (!empty($kilometres)) {
        switch ($kilometres) {
            case 'de 0 à 50.000km':
                $sql .= " AND kilometres BETWEEN 0 AND 50000";
                break;
            case 'de 50.000 à 100.000 km':
                $sql .= " AND kilometres BETWEEN 50000 AND 100000";
                break;
            case 'de 100.000 à 150.000 km':
                $sql .= " AND kilometres BETWEEN 100000 AND 150000";
                break;
            case 'de 150.000 à 200.000 km':
                $sql .= " AND kilometres BETWEEN 150000 AND 200000";
                break;
            case '+ de 200.000 km':
                $sql .= " AND kilometres > 200000";
                break;
        }
    }

    if (!empty($prix)) {
        switch ($prix) {
            case 'de 0 à 10.000 €':
                $sql .= " AND prix BETWEEN 0 AND 10000";
                break;
            case 'de 10.000 à 20.000 €':
                $sql .= " AND prix BETWEEN 10000 AND 20000";
                break;
            case 'de 20.000 à 30.000 €':
                $sql .= " AND prix BETWEEN 20000 AND 30000";
                break;
            case 'de 30.000 à 40.000 €':
                $sql .= " AND prix BETWEEN 30000 AND 40000";
                break;
            case 'de 40.000 à 50.000 €':
                $sql .= " AND prix BETWEEN 40000 AND 50000";
                break;
            case 'de 50.000 à 75.000 €':
                $sql .= " AND prix BETWEEN 50000 AND 75000";
                break;
            case 'de 75.000 à 100.000 €':
                $sql .= " AND prix BETWEEN 75000 AND 100000";
                break;
            case '+ de 100.000 €':
                $sql .= " AND prix > 100000";
                break;
        }
    }

    // Construire la requête SQL en fonction du tri sélectionné
    if ($tri === "kilometres_asc") {
        $sql .= " ORDER BY kilometres ASC";
    } elseif ($tri === "kilometres_desc") {
        $sql .= " ORDER BY kilometres DESC";
    } elseif ($tri === "prix_asc") {
        $sql .= " ORDER BY prix ASC";
    } elseif ($tri === "prix_desc") {
        $sql .= " ORDER BY prix DESC";
    }

    // Compter le nombre total de résultats
    $stmtCount = $conn->prepare($sql);
    $stmtCount->execute($params);
    $totalResults = $stmtCount->rowCount();

    // Pagination
    $resultsPerPage = 20;
    $totalPages = ceil($totalResults / $resultsPerPage);
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($currentPage - 1) * $resultsPerPage;

    // Ajouter la limitation et l'offset à la requête SQL
    $sql .= " LIMIT $offset, $resultsPerPage";


    // Préparation de la requête SQL
    $stmt = $conn->prepare($sql);

    // Exécution de la requête SQL avec les paramètres
    $stmt->execute($params);

    // Affichage des résultats
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div style=' border-radius: 20px 20px 20px 20px' class='container-fluid p-0 shadow containerCars'><a class='no-underline text-black' href='detailed_car.php?id=" . $row["id"] . "'>";
            // Récupération et décodage des images de la voiture
            $carId = $row["id"];
            $sqlImages = "SELECT image_base64 FROM images WHERE car_id = '$carId' LIMIT 1";
            $resultImages = $conn->query($sqlImages);

            if ($resultImages->rowCount() > 0) {
                echo "<div>";
                while ($rowImage = $resultImages->fetch(PDO::FETCH_ASSOC)) {
                    $imageData = $rowImage["image_base64"];
                    echo "<img class='img-fluid border-bottom' id='img-car' style='max-height: 200px; width: 348px; object-fit: cover; border-radius: 20px 20px 0 0' src='data:image/jpeg;base64," . $imageData . "' alt='Image voiture'>";
                }
                echo "</div>";
            }
            echo "<div style=' border-radius: 0 0 20px 20px' class='detailsCar border-0 text-start py-2 px-4 fs-6'><p class='text-center text-black fs-5'><b> " . $row["marque"] . ' ' . $row["modele"] . "</b></p>";
            echo "<p class='text-secondary m-0'>KM : <b> " . $row["kilometres"] . ' km' . "</b></p>";
            echo "<div class='my-2' style='border: 1px solid lightgrey'>   </div>";
            echo "<p class='text-secondary m-0'>Année : <b> " . $row["annee"] . "</b></p>";
            echo "<div class='my-2' style='border: 1px solid lightgrey'>   </div>";
            echo "<p class='text-secondary m-0'>Carburant : <b> " . $row["carburant"] . "</b></p>";
            echo "<div class='my-2' style='border: 1px solid lightgrey'>   </div>";
            echo "<p class='text-secondary m-0'>Boîte de vitesse : <b> " . $row["boite_de_vitesse"] . "</b></p>";
            echo "<div class='my-2' style='border: 1px solid lightgrey'>   </div>";
            echo "<p class='text-black text-center fs-5 m-0'><b> " . $row["prix"] . ' €' . "</b></p></div>";

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