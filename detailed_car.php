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
                    <nav class="container navbar navbar-expand-lg navbar-dark col-sm-11 my-3">
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
                                        <a class="nav-link nav-link-active" href="catalogue.php">NOS VEHICULES</a>
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
                                                    href="boschService.php">ATELIER BOSCH CAR
                                                    SERVICE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="carRegistration.php">SERVICE CARTE
                                                    GRISE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="infoConsumer.php">INFORMATIONS
                                                    CONSOMMATEUR</a>
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
                <div class="container text-center connect my-4">
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
                    <div class="row">
                        <div class=" col col-md-2 col-xl-3"></div>
                        <div class="col-12 col-md-8 col-xl-6">
                            <h2 class="my-4">Une question ? Envoyer-nous un message</h2>
                            <form class="text-grey fs-6" id="contactForm" action="leaveMessage.php" method="POST">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <label>Nom *</label>
                                                <input value="" data-msg-required="Votre nom" maxlength="100"
                                                    class="form-control" name="nom" id="nom" required="required"
                                                    aria-required="true" type="text" />
                                            </div>
                                            <div class="col-md-6">
                                                <label>Prénom *</label>
                                                <input value="" data-msg-required="Votre prénom" maxlength="100"
                                                    class="form-control" name="prenom" id="prenom" required="required"
                                                    aria-required="true" type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label>Email *</label>
                                            <input value="" data-msg-required="Votre email"
                                                data-msg-email="Adresse email non valide" maxlength="100"
                                                class="form-control" name="email" id="email" required="required"
                                                aria-required="true" type="email" />
                                        </div>
                                        <div class="col-md-12">
                                            <label>Téléphone *</label>
                                            <input value="" data-msg-required="Votre telephone" maxlength="100"
                                                class="form-control" name="telephone" id="telephone" required="required"
                                                aria-required="true" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Sujet</label>
                                            <input value="<?php echo $marque .' '.$modele .' '. $annee . ' ' . $kilometres . ' ' . $carburant . ' ' . $transmission; ?>"
                                                data-msg-required="Sujet" maxlength="100" class="form-control"
                                                name="sujet" id="sujet" required="required" aria-required="true"
                                                type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Message *</label>
                                            <textarea maxlength="5000" data-msg-required="Please enter your message."
                                                rows="10" class="form-control" name="message" id="message"
                                                required="required" aria-required="true"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row margin_bottom_20">
                                    <div class="col-md-12">
                                        <input value="1" name="rgpd" type="checkbox" required="required" />
                                        <span class="small">En soumettant ce formulaire, j'accepte que les
                                            informations saisies soient exploitées dans le cadre
                                            de la relation commerciale qui peut en découler.
                                            <a href="politic.php" target="_blank">En savoir
                                                plus</a></span>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <input value="Envoyer" name="envoimsg" class="btn btn-form btn-lg mb-xlg"
                                            data-loading-text="Loading..." type="submit" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col col-md-2 col-xl-3"></div>
                    </div>
                </div>
                <!-- --------------------------------- FOOTER --------------------------- -->
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
    <script src="./src/scripts/script.js"></script>
    <script src="src/scripts/scroll.js"></script>
</body>

</html>