<?php
session_start();

// Vérifier si l'utilisateur est connecté et s'il est administrateur, sinon le rediriger vers la page de connexion
if (!isset($_SESSION['email']) || $_SESSION['isAdmin'] != 1) {
    header('Location: connexion.php');
    exit();
}

// if (!isset($_COOKIE['connexion_time'])) {
//     // Le cookie n'existe pas, procédez à l'authentification
// } else {
//     // Le cookie existe, vérifiez s'il est expiré
//     $currentTime = time();
//     $cookieTime = $_COOKIE['connexion_time'];
//     $expirationTime = $cookieTime + 30; // 30 secondes d'expiration

//     if ($currentTime >= $expirationTime) {
//         // Le cookie est expiré, procédez à l'authentification
//         header('Location: connexion.php');
//         exit;
//     }
// }

// setcookie('connexion_time', time(), time() + 30);

if (isset($_POST['logout'])) {
    // Déconnexion : Supprimer les informations de session et le cookie
    session_unset();
    session_destroy();

    // Redirection vers la page de connexion
    header('Location: connexion.php');
    exit();
}
?>


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
                        <a href="index.html"><img class="img-fluid" src="./src/medias/banderole header.jpg"
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
                                        <a class="nav-link" href="index.html">ACCUEIL</a>
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
                                                    href="allServices.php">TOUS NOS SERVICES</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="boschService.html">ATELIER BOSCH CAR
                                                    SERVICE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="carRegistration.html">SERVICE CARTE
                                                    GRISE</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a class="nav-link no-underline text-li-services"
                                                    href="infoConsumer.html">INFORMATIONS
                                                    CONSOMMATEUR</a>
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
                <div class="container d-flex align-items-center justify-content-center connect my-2">

                    <h1 class="my-3 mx-3"><b></b>Espace Administrateur</b></h1><br>
                    <br>
                    <form method="post">
                        <button class="btn btn-danger my-3 mx-3" type="submit" name="logout">Se déconnecter</button>
                    </form>
                </div>
                <div class="container text-center connect my-2">
                    <h1 class="ml-0 text-grey my-3">Supprimer un compte employé</h1>
                    <div class="row">


                        <?php
                        $servername = "eu-cdbr-west-03.cleardb.net";
                        $username = "b3b93f93ef4872";
                        $password = "21163a70";
                        $dbname = "heroku_a9b8c2ad4d5e1ab";

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            // Sélectionner tous les employés sauf l'admin
                            $sql = "SELECT * FROM employes WHERE email != 'Vparrot@gmail.com'";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();

                            // Afficher les employés
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    // Afficher les détails de l'employé
                        
                                    echo "<div class='col-12 col-md- col-xl-4 connect'>";
                                    echo "<p><b>Email : </b></br>" . $row['email'] . "</p>";
                                    echo "<form action='delete_employe.php' method='POST'>";
                                    echo "<input type='hidden' name='delete_id' value='" . $row['id'] . "' />";
                                    echo "<input class='btn btn-danger mb-3' type='submit' onclick='return confirmDeleteEmploye()'  value='Supprimer' />";
                                    echo "</form></div>";
                                }
                            } else {
                                echo "Aucun employé trouvé.";
                            }
                            // Fermeture de la connexion à la base de données
                            $conn = null;
                        } catch (PDOException $e) {
                            die("Échec de la connexion à la base de données : " . $e->getMessage());
                        }

                        ?>

                    </div>
                </div>
                <div class="container text-center connect my-2">
                    <h1 class="ml-0 text-grey my-3">Ajouter un compte employé</h1>
                    <form method="POST" action="add_employe.php">
                        <div class="my-3">
                            <label for="email">Email :</label> <br />
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="my-3">
                            <label for="password">Mot de passe :</label><br />
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-success my-4" style="width: 200px">Ajouter un
                                employé</button>
                        </div>
                    </form>
                </div>
                <div class="container text-center connect my-2">
                    <h1 class="ml-0 text-grey my-3">Modifier les horaires d'ouverture</h1>
                    <form action="modifier_horaires.php" method="POST">
                        <div class="my-3">
                            <label for="lundi_vendredi">Lundi au vendredi :</label><br>
                            <input type="text" id="lundi_vendredi" name="lundi_vendredi">
                        </div>
                        <div class="my-3">
                            <label for="samedi">Samedi :</label><br>
                            <input type="text" id="samedi" name="samedi">
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-success my-4">Enregistrer les nouveaux
                                horaires</button>
                        </div>
                    </form>
                </div>
                <div class="container text-center connect my-2">
                    <h1 class="ml-0 text-grey my-3">Supprimer un service existant</h1>
                    <div class="row">

                        <?php

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
                                    echo "<div class='col-12 col-md-6 col-xl-4 col-xxl-3 connect'><div class='container-fluid containerAllServices my-3 p-0'>";
                                    if (!empty($imageBase64)) {
                                        echo "<div class='container-fluid p-0'><img style='width: 100%; height: 200px;' class='img-fluid cover' src='data:image;base64,$imageBase64' alt='image du service'></div>";
                                    }
                                    echo "<h3>$titre</h3>";
                                    echo "<p>$paragraphe</p>";
                                    echo "<form action='supprimer_service.php' method='POST'>";
                                    echo "<input type='hidden' name='service_id' value='$serviceId'>";
                                    echo "<button class='btn btn-danger my-1' type='submit' onclick='return confirmDelete()'>Supprimer</button>";
                                    echo "</form>";
                                    echo "</div></div>";
                                }
                            } else {
                                echo "Aucun service existant.";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="container text-center connect my-2">
                        <h1 class='ml-0 text-grey my-3'>Ajouter un nouveau service</h1>
                        <form action='ajouter_service.php' method='POST' enctype='multipart/form-data'>
                            <div>
                                <label class="my-2" for='titre'>Titre :</label></br>
                                <input type='text' id='titre' name='titre' required>
                            </div>
                            <div class='my-3'>
                                <label class="my-2" for='paragraphe'>Paragraphe :</label></br>
                                <textarea style="width: 50vw; height: 20vh; resize: none" id='paragraphe' name='paragraphe'
                                    required></textarea>
                            </div>
                            <div class='my-3'>
                                <label class="my-2" for='image'>Image :</label></br>
                                <input class="btn btn-primary" type='file' id='image' name='image' required>
                            </div>
                            <button class="btn btn-success my-5" type='submit'>Ajouter</button>
                        </form>

                        <?php
                        $conn = null;
                        } catch (PDOException $e) {
                            die("Échec de la connexion à la base de données : " . $e->getMessage());
                        }
                        ?>

                </div>
                <div class="container d-flex align-items-center justify-content-center connect my-2">

                    <h1 class="ml-0 text-grey my-3"><b></b>Documents création application</b></h1><br>
                    <br>
                    <form method="post">
                        <button class="btn btn-success my-3 mx-3" type="submit" name="documents"><a class="no-underline text-white" href="./documents.php">Consulter</a></button>
                    </form>
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
                                    <a class="no-underline text-grey" href="connexion.php">Administration du site</a>
                                    -
                                    <a class="no-underline text-grey" href="mentions-legales.html">Mentions légales</a>
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
    <script src="./src/scripts/script.js"></script>
    <script src="src/scripts/scroll.js"></script>
    <script src="src/scripts/schedules.js"></script>
</body>

</html>