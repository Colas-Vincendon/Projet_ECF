<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet ECF: Garage Parrot</title>
    <meta type="description" content="Entretien de votre véhicule et vente de véhicules d'occasion" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./src/styles/style.css" />
</head>

<body>
    <!-- --------------------------- BODY ------------------------- -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-1 col-xxl-2 toHide">
                <br /><br />
                <img class="logoCashback img-fluid" src="./src/medias/logo_partner_cashback.png" alt="logo cashback" />
            </div>
            <div class="col col-12 col-lg-12 col-xl-10 col-xxl-8">
                <!-- ------------------------ TOP-HEADER ----------------------- -->
                <div class="row top-header">
                    <div class="container">
                        <div class="row my-3">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-1">
                                        <i class="logoHeader bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-9 mx-3 px-1">
                                        <label>Nous trouver</label><br />
                                        <strong> 1 rue de l'Aqueduc 31500 TOULOUSE </strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4 px-0">
                                <table class="tableContact">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-2"></div>
                                                    <div class="col-2">
                                                        <i class="logoHeader bi bi-telephone"></i>
                                                    </div>
                                                    <div class="col-8">
                                                        <label>Nous contacter</label><br />
                                                        <strong>01.23.45.67.89</strong>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#">
                                                    <img class="facebook" src="./src/medias/facebook.png"
                                                        alt="logo facebook" />
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------------------------------ HEADER ------------------------------- -->

                <div class="row header">
                    <header class="marginHeader paddingHeader">
                        <a href="index.php"><img class="img-fluid" src="./src/medias/banderole header.jpg"
                                alt="Page d'accueil" /></a>
                    </header>
                </div>
                <!-- --------------------------------- START NAVBAR ------------------------------ -->
                <div class="row">
                    <nav class="container navbar navbar-expand-lg navbar-dark col-sm-11">
                        <div class="container d-flex justify-content-start">
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarText">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php">ACCUEIL</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="catalogue.php">NOS VEHICULES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cashback.php">RACHAT CASH</a>
                                    </li>
                                    <!-- -------------- NAV DROPDOWN SERVICES ----------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pointer" class="navbar-toggler"
                                            data-bs-toggle="collapse" data-bs-target="#services"
                                            aria-label="Toggle navigation">NOS SERVICES<b class="caret"></b></a>
                                        <ul id="services" class="dropdown-menu">
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="allServices.php">TOUS NOS SERVICES</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="boschService.php">ATELIER BOSCH CAR SERVICE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="carRegistration.php">SERVICE CARTE GRISE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="infoConsumer.php">INFORMATIONS CONSOMMATEUR</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- --------- END NAV DROPDOWN SERVICES ----------- -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="whoWeAre.php">QUI SOMMES-NOUS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- ------------------------------ END NAVBAR ------------------------------- -->
                <!-- --------------------------- BUTTON BACK-TO-THE-TOP -------------------------- -->
        <div>
          <button id="backToTheTop"><a class="no-underline text-white" href="#"><img id="upArrow" src="./src/medias/upArrow.png" alt=""></a></button>
        </div>
                <!-- ------------------------------ END HEADER ------------------------------- -->
                <!-- ------------------------------ DEBUT MAIN ------------------------------- -->
                <div class="container-fluid text-center">
                    <div class="row my-5">
                        <?php
                        $servername = "eu-cdbr-west-03.cleardb.net";
                        $username = "bc900b6840b350";
                        $password = "c7c21297";
                        $dbname = "heroku_c7028cd7013430b";

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

                                        echo "<div class='col-6 col-md-3 col-lg-2 connect fs-6'>";
                                        echo "<div class=' car-images'>";
                                        while ($rowImage = $resultImages->fetch(PDO::FETCH_ASSOC)) {
                                            $imageData = $rowImage["image_base64"];
                                            echo "<img class='img-fluid' id='img-car' style='width: 100%' src='data:image/jpeg;base64," . $imageData . "' alt='Image voiture'>";
                                        }
                                        echo "</div>";
                                    }
                                    // Afficher les détails du véhicule
                                    echo "<p class='mb-0'><b>Marque :</b> " . $row['marque'] . "</p>";
                                    echo "<p class='mb-0'><b>Modèle :</b> " . $row['modele'] . "</p>";
                                    echo "<p class='mb-0'><b>Année :</b> " . $row['annee'] . "</p>";
                                    echo "<p class='mb-0'><b>Kilometres :</b> " . $row['kilometres'] . "</p>";
                                    echo "<p class='mb-0'><b>Carburant :</b> " . $row['carburant'] . "</p>";
                                    echo "<p class='mb-0'><b>Boite_de_vitesse :</b> " . $row['boite_de_vitesse'] . "</p>";
                                    echo "<p class='mb-0'><b>Prix :</b> " . $row['prix'] . "</p>";
                                    echo "<form action='deleteVehicle.php' method='POST'>";
                                    echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "' />";
                                    echo "<input class='btn btn-danger' type='submit' onclick='return confirmDeleteCar()' value='Supprimer' />";
                                    echo "</form>";
                                    echo "</div>";
                                }
                            } else {
                                echo "Aucun véhicule trouvé.";
                            }

                            // Fermeture de la connexion à la base de données
                            $conn = null;
                        } catch (PDOException $e) {
                            die("Échec de la connexion à la base de données : " . $e->getMessage());
                        }
                        ?>

                    </div>
                </div>
                <!-- --------------------------- FOOTER --------------------------- -->
                <div class="row">
                    <div class="container footer">
                        <div class="row cols-3">
                            <div class="col-6 col-md-3">
                                <div class="row">
                                    <div class="d-flex justify-content-center my-3">
                                        <label>Nous trouver <br />
                                            <strong>
                                                1 rue de l'Aqueduc <br />
                                                31500 TOULOUSE
                                            </strong></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 px-0">
                                <div class="d-flex justify-content-center my-3">
                                    <label>Nous contacter <br />
                                        <strong>01.23.45.67.89</strong></label>
                                </div>
                                <div class="row">
                                    <div class="d-flex justify-content-center">
                                        <a href="#">
                                            <img class="facebook my-1" src="./src/medias/facebook.png"
                                                alt="logo facebook" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="d-flex justify-content-center text-center my-3">
                                    <p class="horairesFooter">
                                        NOS HORAIRES <br />
                                        <?php
                                        try {
                                            // Connexion à la base de données en utilisant PDO
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                            // Récupérer les horaires à partir de la base de données
                                            $stmt = $conn->query("SELECT * FROM horaires");
                                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                            if ($stmt->rowCount() > 0) {
                                                $lundiVendredi = $row['lundi_vendredi'];
                                                $samedi = $row['samedi'];
                                            } else {
                                                $lundiVendredi = "9h-12h / 14h-19h";
                                                $samedi = "9h à 12h";
                                            }
                                        } catch (PDOException $e) {
                                            die("Échec de la connexion à la base de données : " . $e->getMessage());
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
                            <div class="col-6 col-md-3">
                                <div class="d-flex justify-content-center">
                                    <img class="logo-proxi-cash my-3" src="./src/medias/badge_Proxi_Auto.png"
                                        alt="logo proxi auto cash" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            <div class="text-center text-grey font-14px">
                                <p class="p-footer">
                                    © VINCENT PARROT AUTOMOBILES 2023. Tous droits réservés. -
                                    <a class="no-underline text-grey" href="connexion.php">Administration du site</a>
                                    -
                                    <a class="no-underline text-grey" href="mentions-legales.php">Mentions légales</a>
                                    -
                                    <a class="no-underline text-grey" href="politic.php">Politique de
                                        confidentialité</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-bottom"></div>
            </div>
            <div class="col-xl-1 col-xxl-2 toHide"></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="src/scripts/script.js"></script>
    <script src="src/scripts/scroll.js"></script>
</body>

</html>