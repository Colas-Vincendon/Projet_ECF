<div id="reviews">
    <?php
    require_once 'databaseConnexion.php';
    //SINGLETON
    $database = Database::getInstance();
    $conn = $database->getConnection();

    // Récupérer les avis approuvés de la table "avis"
    $stmt = $conn->prepare("SELECT * FROM avis WHERE approuve = :approuve");
    $approuve = 1; // Seuls les avis approuvés
    $stmt->bindParam(':approuve', $approuve);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nom = utf8_decode($row['nom']);
            $commentaire = utf8_decode($row['commentaire']);
            $note = $row['note'];

            // Afficher les informations de l'avis
            echo "<div class='avis mx-5 my-3'>";

            // Générer les étoiles en fonction de la note
            for ($i = 1; $i <= $note; $i++) {
                echo "★";
            }

            echo "</p>";
            echo "<p><i>$commentaire</i></p>";
            echo "</div>";
        }
    } else {
        echo "Aucun avis approuvé pour le moment.";
    }
    // Fermer la connexion à la base de données
    $conn = null;
    ?>
</div>