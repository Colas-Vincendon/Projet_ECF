<div id="displayVehicleListEmployes">
    <?php
    require_once 'databaseConnexion.php';

    // Sélectionner tous les véhicules
    $sql = "SELECT * FROM cars";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Afficher les véhicules
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $carId = $row["id"];
            $sqlImages = "SELECT image_base64 FROM images WHERE car_id = '$carId' LIMIT 1";
            $resultImages = $conn->query($sqlImages);

            if ($resultImages->rowCount() > 0) {
                ?>
                <div class='col-6 col-md-3 col-lg-2 my-2 connect fs-6'>
                    <div class=' car-images'>
                        <?php
                        while ($rowImage = $resultImages->fetch(PDO::FETCH_ASSOC)) {
                            $imageData = $rowImage["image_base64"];
                            echo "<img class='img-fluid' id='img-car' style='width: 100%' src='data:image/jpeg;base64," . $imageData . "' alt='Image voiture'>";
                        } ?>
                    </div>
                    <?php
            }
                        // Afficher les détails du véhicule
                        echo "<p class='mb-0'><b>Marque :</b> " . $row['marque'] . "</p>";
                        echo "<p class='mb-0'><b>Modèle :</b> " . $row['modele'] . "</p>";
                        echo "<p class='mb-0'><b>Année :</b> " . $row['annee'] . "</p>";
                        echo "<p class='mb-0'><b>Kilometres :</b> " . $row['kilometres'] . "</p>";
                        echo "<p class='mb-0'><b>Carburant :</b> " . $row['carburant'] . "</p>";
                        echo "<p class='mb-0'><b>Boite_de_vitesse :</b> " . $row['boite_de_vitesse'] . "</p>";
                        echo "<p class='mb-0'><b>Prix :</b> " . $row['prix'] . "</p>";
                        ?>
                    <form action='deleteVehicle.php' method='POST'>
                        <?php
                        echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "' />";
                        echo "<input class='btn btn-danger my-3' type='submit' onclick='return confirmDeleteCar()' value='Supprimer' />";
                        ?>
                    </form>
                </div>
    <?php
        }
    } else {
        echo "Aucun véhicule trouvé.";
    }

    // Fermeture de la connexion à la base de données
    $conn = null;
    ?>
</div>