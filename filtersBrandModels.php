<div id="filters">

    <?php
        $servername = "eu-cdbr-west-03.cleardb.net";
        $username = "b3b93f93ef4872";
        $password = "21163a70";
        $dbname = "heroku_a9b8c2ad4d5e1ab";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
        } catch (PDOException $e) {
            die("Échec de la connexion à la base de données : " . $e->getMessage());
        }
        ?>
        </div>