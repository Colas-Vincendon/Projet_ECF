<div id="Schedules">
    <div class="d-flex justify-content-center text-center my-3">
        <p class="horairesFooter">
            NOS HORAIRES <br />
            <?php

            require_once 'databaseConnexion.php';
            //SINGLETON
            $database = Database::getInstance();
            $conn = $database->getConnection();

            // Récupérer les horaires à partir de la base de données
            $stmt = $conn->query("SELECT * FROM horaires");
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                $lundiVendredi = $row['lundi_vendredi'];
                $samedi = $row['samedi'];
            } else {
                $lundiVendredi = "les horaires";
                $samedi = "les horaires";
            }

            // Fermer la connexion à la base de données
            $conn = null;
            ?>

            Lundi au vendredi:
            <?php echo $lundiVendredi; ?> <br />
            le samedi de
            <?php echo $samedi; ?>

        </p>
    </div>
</div>