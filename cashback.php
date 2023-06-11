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
                          <img class="facebook" src="./src/medias/facebook.png" alt="logo facebook" />
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
          <header class="my-3 px-3">
            <a href="index.php"><img class="img-fluid" src="./src/medias/banderole header.jpg"
                alt="Page d'accueil" /></a>
          </header>
        </div>
        <!-- --------------------------------- START NAVBAR ------------------------------ -->
        <div class="row">
          <nav class="container navbar navbar-expand-lg navbar-dark col-sm-11 my-3">
            <div class="container d-flex justify-content-start">
              <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link nav-link-active" href="cashback.php">RACHAT CASH</a>
                  </li>
                  <!-- -------------- NAV DROPDOWN SERVICES ----------------- -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pointer" class="navbar-toggler" data-bs-toggle="collapse"
                      data-bs-target="#services" aria-label="Toggle navigation">NOS SERVICES<b class="caret"></b></a>
                    <ul id="services" class="dropdown-menu">
                      <li>
                        <a class="nav-link no-underline text-li-services" href="allServices.php">TOUS NOS SERVICES</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a class="nav-link no-underline text-li-services" href="boschService.php">ATELIER BOSCH CAR
                          SERVICE</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a class="nav-link no-underline text-li-services" href="carRegistration.php">SERVICE CARTE
                          GRISE</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a class="nav-link no-underline text-li-services" href="infoConsumer.php">INFORMATIONS
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
        <!-- ------------------------------ END HEADER ------------------------------- -->
        <!-- ------------------------------ DEBUT MAIN ------------------------------- -->
        <h1 class="text-center my-3">NOTRE CONCEPT DE REPRISE</h1>
        <div class="container">
          <div class="row cols-2">
            <div class="col-12 col-md-5">
              <img class="img-fluid" src="./src/medias/carte_notre_concept.png" alt="" />
            </div>
            <div class="col-12 col-md-7 text-center my-3">
              <h2>PROXI AUTO CASH : Un concept innovant</h2>
              <p class="text-start text-grey my-3">
                Notre garage, depuis sa création en 2021, est partenaire du
                réseau PROXI AUTO CASH, la marque de Rachat Cash présente
                partout en France qui compte plus de 250 partenaires, tous
                professionnels de l’automobile.
                <br /><br />
                PROXI AUTO CASH c’est : <br />
                <span class="text-red-bold">L'accompagnement : </span> une
                équipe de conseillers experts vous accompagne dans votre
                démarche de reprise de véhicule <br />
                <span class="text-red-bold">La transparence : </span> un prix
                de rachat juste, fiable et en adéquation avec les prix du
                marché actuel <br />
                <span class="text-red-bold">La proximité et le professionnalisme :
                </span>
                faire reprendre votre véhicule par un partenaire Proxi Auto
                Cash c'est faire travailler votre garage de proximité, celui
                en qui vous avez confiance, qui répare et entretient votre
                véhicule depuis toujours, gage de confiance et de qualité.
              </p>
            </div>
          </div>
          <div class="container text-center my-5">
            <div class="row">
              <div class="col-2"></div>
              <div class="col-12 col-md-8">
                <h1><b> VINCENT PARROT AUTOMOBILES S'OCCUPE DE TOUT </b></h1>
                <p class="text-grey">
                  Vendre sa voiture n'est pas toujours facile. Vous ne voulez
                  pas perdre de temps à ajouter votre véhicule sur des sites
                  d'annonces, recevoir des quantités de mails, appels,
                  visites, qui ne se concrétisent pas par la vente de votre
                  véhicule...
                </p>
                <p class="text-red-bold">
                  Offre de reprise ferme et fiable | Sans obligation d'achat |
                  Sans contraintes administratives
                </p>
              </div>
              <div class="col-2"></div>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-12 col-md-4 d-flex justify-content-center">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <img class="img-fluid logo-cachback" src="./src/medias/icone_presdechezvous.png"
                    alt="logo près de chez vous" />
                </div>
                <p class="text-center my-3">
                  Vendre votre véhicule <br />
                  <span class="text-red-bold">Près de chez vous</span>
                </p>
              </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <img class="img-fluid logo-cachback" src="./src/medias/icone_reprise.png" alt="logo reprise" />
                </div>
                <p class="text-center my-3">
                  Prix de reprise
                  <span class="text-red-bold">ferme, sans obligation d'achat</span>
                </p>
              </div>
            </div>
            <div class="col-12 col-md-4 d-flex justify-content-center">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <img class="img-fluid logo-cachback" src="./src/medias/icone_paiement.png" alt="logo paiement" />
                </div>
                <p class="text-center my-3">
                  Paiement
                  <span class="text-red-bold">
                    immédiat, garanti et sécurisé</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center my-5">
          <a target="_blank" href="https://proxiautocash.com/" class="a_sans_surlignage"><button
              class="btn btn-lg btn-danger rounded margin_top_30 margin_bottom_20">
              Obtenir mon prix de reprise
            </button></a>
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
                      <img class="facebook my-1" src="./src/medias/facebook.png" alt="logo facebook" />
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="d-flex justify-content-center text-center my-3">
                  <p class="horairesFooter">
                    NOS HORAIRES <br />
                    <?php
                    // Connexion à la base de données
                    $servername = "localhost";
                    $username = "Colas";
                    $password = "Vincendon89450";
                    $dbname = "garageParrot";

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
                  <a class="no-underline text-grey" href="politic.php">Politique de confidentialité</a>
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
</body>

</html>