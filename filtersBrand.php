<div id="filtersBrandCode">

    <?php
    require_once 'databaseConnexion.php';

    // Récupération des marques de voitures depuis la base de données
    $sql = "SELECT DISTINCT marque FROM cars";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Création des options du select en utilisant les marques de voitures
    $options = '<option value="">Toutes</option>';
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $marque = $row['marque'];
        $options .= "<option value=\"$marque\">$marque</option>";
    }

    // Fermeture de la connexion à la base de données
    $conn = null;
    ?>
</div>