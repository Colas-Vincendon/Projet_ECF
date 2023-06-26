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
                                        <a class="nav-link" href="cashback.html">RACHAT CASH</a>
                                    </li>
                                    <!-- -------------- NAV DROPDOWN SERVICES ----------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle pointer" class="navbar-toggler"
                                            data-bs-toggle="collapse" data-bs-target="#services"
                                            aria-label="Toggle navigation">NOS SERVICES<b class="caret"></b></a>
                                        <ul id="services" class="dropdown-menu">
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="allServices.html">TOUS NOS SERVICES</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="boschService.html">ATELIER BOSCH CAR SERVICE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="carRegistration.html">SERVICE CARTE GRISE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="infoConsumer.html">INFORMATIONS CONSOMMATEUR</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- --------- END NAV DROPDOWN SERVICES ----------- -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="whoWeAre.html">QUI SOMMES-NOUS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">CONTACT</a>
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
                <div class="container-fluid text-center">
                    <div class="row">
                        <?php
                        // Connexion à la base de données
                        $servername = "eu-cdbr-west-03.cleardb.net";
                        $username = "b3b93f93ef4872";
                        $password = "21163a70";
                        $dbname = "heroku_a9b8c2ad4d5e1ab";

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Récupérer tous les messages de la table "messages"
                            $sql = "SELECT * FROM messages";
                            $stmt = $conn->query($sql);

                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $messageId = $row['id'];
                                    $prenom = $row['prenom'];
                                    $nom = $row['nom'];
                                    $email = $row['email'];
                                    $telephone = $row['telephone'];
                                    $sujet = $row['sujet'];
                                    $message = $row['message'];
                                    $date_creation = $row['date_creation'];

                                    $formatted_date = date("d/m/Y H:i:s", strtotime($date_creation));
                                    ?>
                                    <div class='container my-2 connect'>
                                        <div class='row'>
                                            <div class='col-12 col-md-5 connect'>";
                                                <?php
                                                echo "<h6><strong>Date : </strong>$formatted_date</h6>";
                                                echo "<h6><strong>Sujet : </strong>$sujet</h6>";
                                                echo "<h6><strong>De :</strong> $prenom $nom</h6>";
                                                echo "<h6><strong>Email :</strong> $email</h6>";
                                                echo "<h6><strong>Telephone :</strong> $telephone</h6>
                                                </div>";
                                                ?>
                                                <div class='col-12 col-md-5 connect d-flex align-items-center'>";
                                                    <?php
                                                    echo "<p class='my-auto'>$message</p>";
                                                    echo "<form action='supprimer_message.php' method='POST'>";
                                                    echo "<input type='hidden' name='message_id' value='$messageId'>
                                                </div>";
                                                    ?>
                                                    <div
                                                        class='col-12 col-md-2 connect justify-content-center d-flex align-items-center'>
                                                        <button class='btn btn-danger my-4' type='submit'>Supprimer</button>
                                                    </div>
                                                    </form>

                                                </div>
                                            </div>";
                                            <?php
                                }
                            } else {
                                echo "<div class='col-12 text-center my-5'>Aucun message trouvé.</div>";
                            }

                            $conn = null;
                        } catch (PDOException $e) {
                            echo "Échec de la connexion à la base de données : " . $e->getMessage();
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
                                        <!-------- chargement des horaires du footer ------->
                                        <div id="footerSchedules">

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
                                            <a class="no-underline text-grey" href="connexion.php">Administration du
                                                site</a>
                                            -
                                            <a class="no-underline text-grey" href="mentions-legales.html">Mentions
                                                légales</a>
                                            -
                                            <a class="no-underline text-grey" href="politic.html">Politique de
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
            <script src="src/scripts/schedules.js"></script>
</body>

</html>