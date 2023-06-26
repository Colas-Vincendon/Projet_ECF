<div id="details">

    <?php
                    // Connexion à la base de données
                    $servername = "eu-cdbr-west-03.cleardb.net";
                    $username = "b3b93f93ef4872";
                    $password = "21163a70";
                    $dbname = "heroku_a9b8c2ad4d5e1ab";

                    try {
                        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        // Récupération de l'ID de la voiture depuis l'URL
                        if (isset($_GET['id'])) {
                            $idVoiture = $_GET['id'];

                            // Requête préparée pour récupérer les détails de la voiture spécifique
                            $stmt = $conn->prepare("SELECT * FROM cars WHERE id = :idVoiture");
                            $stmt->bindParam(':idVoiture', $idVoiture);
                            $stmt->execute();
                            
                            // Affichage des détails de la voiture
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    // Récupération des images de la voiture
                                    $carId = $row["id"];
                                    
                                    // Requête préparée pour récupérer les images de la voiture
                                    $stmtImages = $conn->prepare("SELECT image_base64 FROM images WHERE car_id = :carId");
                                    $stmtImages->bindParam(':carId', $carId);
                                    $stmtImages->execute();
                                    
                                    $images = $stmtImages->fetchAll(PDO::FETCH_ASSOC);
                                    
                                    if (!empty($images)) {
                                        echo "<div id='carouselExampleIndicators' class='carousel slide' data-bs-ride='carousel'>";
                                        echo "<ol class='carousel-indicators'>";
                                        $i = 0;
                                        foreach ($images as $index => $image) {
                                            $active = ($index === 0) ? "active" : "";
                                            echo "<li data-bs-target='#carouselExampleIndicators' data-bs-slide-to='$index' class='$active'></li>";
                                        }
                                        echo "</ol>";
                                        
                                        echo "<div class='carousel-inner my-3'>";
                                        foreach ($images as $index => $image) {
                                            $active = ($index === 0) ? "active" : "";
                                            echo "<div class='carousel-item $active'>";
                                            echo "<img src='data:image/jpeg;base64," . $image["image_base64"] . "' class='d-block w-100' alt='Image voiture'>";
                                            echo "</div>";
                                        }
                                        echo "</div>";
                                        
                                        echo "<a class='carousel-control-prev' href='#carouselExampleIndicators' role='button' data-bs-slide='prev'>";
                                        echo "<span class='carousel-control-prev-icon' aria-hidden='true'></span>";
                                        echo "<span class='visually-hidden'>Précédent</span>";
                                        echo "</a>";
                                        echo "<a class='carousel-control-next' href='#carouselExampleIndicators' role='button' data-bs-slide='next'>";
                                        echo "<span class='carousel-control-next-icon' aria-hidden='true'></span>";
                                        echo "<span class='visually-hidden'>Suivant</span>";
                                        echo "</a>";
                                        
                                        echo "</div>";
                                    }

                                    // Affichage des autres détails de la voiture
                                    echo "<div class='container'>";
                                    echo "<div class='row detailsCar my-4'>";
                                    echo "<div class='col-12 col-lg-6 py-3 border border-secondary'>";
                                    echo "<p><span class='text-grey'>Marque : </span>" . $marque = $row["marque"];
                                    echo "</p>";
                                    echo "<p><span class='text-grey'>Modèle : </span>" . $modele = $row["modele"];
                                    echo "</p>";
                                    echo "<p><span class='text-grey'>Année : </span>" . $annee = $row["annee"];
                                    echo "</p>";
                                    echo "</div>";
                                    echo "<div class='col-12 col-lg-6 py-3 border border-secondary'>";
                                    echo "<p><span class='text-grey'>Kilometrage : </span>" . $kilometres = $row["kilometres"] . ' km' ;
                                    echo "</p>";
                                    echo "<p><span class='text-grey'>Carburant : </span>" . $carburant = $row["carburant"];
                                    echo "</p>";
                                    echo "<p><span class='text-grey'>Boîte de vitesse : </span>" . $transmission = $row["boite_de_vitesse"];
                                    echo "</p>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            } else {
                                echo "<p>Aucun résultat trouvé pour cette voiture.</p>";
                            }
                        } else {
                            echo "<p>Identifiant de voiture non spécifié.</p>";
                        }

                        // Fermeture de la connexion à la base de données
                        $conn = null;
                    } catch (PDOException $e) {
                        echo "Échec de la connexion à la base de données : " . $e->getMessage();
                    }
                    ?>
                        </div>