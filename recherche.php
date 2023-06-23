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
                    <button id="backToTheTop"><a class="no-underline text-white" href="#"><img id="upArrow"
                                src="./src/medias/upArrow.png" alt=""></a></button>
                </div>
                <!-- ------------------------------ END HEADER ------------------------------- -->
                <!-- ------------------------------ DEBUT MAIN ------------------------------- -->

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
                    $resultsPerPage = 12;
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

                    // Affichage de la pagination
                    echo "<div class='pagination'>";

                    if ($totalPages > 1) {
                        if ($currentPage > 1) {
                            echo "<a href='recherche.php?page=" . ($currentPage - 1) . "'>&laquo; Précédent</a>";
                        }

                        for ($i = 1; $i <= $totalPages; $i++) {
                            if ($i == $currentPage) {
                                echo "<span class='current-page'>" . $i . "</span>";
                            } else {
                                echo "<a href='recherche.php?page=" . $i . "'>" . $i . "</a>";
                            }
                        }

                        if ($currentPage < $totalPages) {
                            echo "<a href='recherche.php?page=" . ($currentPage + 1) . "'>Suivant &raquo;</a>";
                        }
                    }

                    echo "</div>";

                    // Fermeture de la connexion à la base de données
                    $conn = null;
                } catch (PDOException $e) {
                    die("Échec de la connexion à la base de données : " . $e->getMessage());
                }
                ?>
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