<div id="services">
    <div class="row">

        <?php

        require_once 'databaseConnexion.php';
        //SINGLETON
        $database = Database::getInstance();
        $conn = $database->getConnection();

        // Récupérer les services et leurs images associées depuis la base de données
        $sql = "SELECT s.id, s.titre, s.paragraphe, i.image_base64
                            FROM services s
                            LEFT JOIN imageService i ON s.id = i.service_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($services)) {
            foreach ($services as $service) {
                $serviceId = $service['id'];
                $titre = $service['titre'];
                $paragraphe = $service['paragraphe'];
                $imageBase64 = $service['image_base64'];

                // Afficher les informations du service
                echo "<div class='col-12 col-md-6 col-xl-4'><div class='container-fluid containerAllServices border shadow my-5 p-0'>";
                if (!empty($imageBase64)) {
                    echo "<div class='container-fluid p-0'><img class='img-fluid imgServices cover' src='data:image;base64,$imageBase64' alt='image du service'></div>";
                }
                echo "<h3 class='my-4 px-2'>$titre</h3>";
                echo "<div class='allServices-p px-2'><p>$paragraphe</p></div>";

                // Afficher l'image du service s'il y en a une
                echo "</div></div>";
            }
        } else {
            echo "Aucun service n'est disponible.";
        }

        $conn = null;
        ?>

    </div>
</div>