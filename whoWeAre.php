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
          <nav class="container navbar navbar-expand-lg navbar-dark col-sm-11">
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
                    <a class="nav-link" href="cashback.php">RACHAT CASH</a>
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
                    <a class="nav-link nav-link-active" href="whoWeAre.php">QUI SOMMES-NOUS</a>
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
        <div class="container my-5 whoWeAre">
          <div class="row mb-xl">
            <div class="col-md-12 text-center">
              <div>
                <p>La passion de l’automobile et du sport mécanique sont les
                  leitmotivs de <strong>Vincent et Carole PARROT</strong>, qui ont ouvert leur société de
                  vente d’automobiles, <strong>neuf et occasion</strong>, <strong>toutes
                    marques</strong>, en mars 2021. <br /><br />
                  Vincent, fort de ses années d’expérience dans la vente de
                  véhicule en concession, a été pilote de rallye et pilote
                  d’essai pour la compétition dans différentes marques
                  automobile. Son intérêt est d’acquérir votre <strong>confiance </strong>pour la
                  recherche de votre futur véhicule neuf ou
                  d’occasion toutes marques conventionnelles, sportives ou
                  bien vintage.</p>
              </div>
              <div class="my-5">
                <img class="img-fluid" alt="commercial" src="./src/medias/photoCustomer.jpg" style="
                      width: 45%;
                    " />
                <img class="img-fluid" alt="mécanicien" src="./src/medias/photoMecanic.jpg" style="width: 20%" />
              </div>
              <div class="my-5">
                <p>
                  Chaque voiture vendue profite d’un suivi au sein de
                  l’établissement grâce à un atelier pour l’entretien
                  des véhicules client ou de la vérification minutieuse
                  des véhicules en attente de trouver leur propriétaire.
                  <br />
                  L’entreprise choisit soigneusement ses véhicules
                  d’occasion toutes marques, tous sont révisés et
                  profitent d’une garantie de 3 à 60 mois, avec la
                  possibilité de reprise de votre ancien véhicules et
                  l'élaboration de votre carte grise, même si vous
                  n’êtes pas client chez eux, ou encore étudier pour
                  vous un plan de financement...
                </p>
              </div>
              <div>
                <h2 style="text-align: center">
                  <p><strong><em>"Le
                        meilleur service et un conseil performant pour
                        votre satisfaction."</em></strong></p>
                </h2>
              </div>
              <div>
                <p>
                  Pour la recherche de votre prochain véhicule, consultez
                  Vincent PARROT Automobiles, ils mettront tout en œuvre
                  pour trouver le véhicule en adéquation avec vos
                  attentes, sans limite de budget ou d’ancienneté.</p>
              </div>
              <div class="my-5">
                <img alt="showroom" src="./src/medias/showroom.jpg" style="width: 50%" />
              </div>
              <div>
                <p>
                  —-------------------------------------------</p>
              </div>
              <div>
                <h1 class="my-5">
                  <span style="color: #ed2024"><strong>Votre
                      GARAGE VINCENT PARROT AUTOMOBILES</strong></span>
                </h1>
              </div>
              <div>
                <p><em>à
                    <strong>TOULOUSE </strong>(31)</em></p>
              </div>
              <div>
                <p><em>Votre garage
                    <strong>VINCENT PARROT AUTOMOBILES</strong>à Toulouse
                    (31) vous propose tout au long de l’année un
                  </em></p>
                <p><em><a href="catalogue.php" target="_blank" title="Catalogue de véhicules"><span
                        style="color: #ed2024">large catalogue de véhicules
                        multimarques
                        d'occasions</span></a></em></p>
                <p><em>, ainsi qu’un large panel de services
                    automobiles
                    : Expertise Bosch- Entretien multimarques -
                    Contrôle complet…</em></p>
              </div>

              <div class="my-5">
                <img alt="showroom" src="./src/medias/showroom2.jpg" style="width: 50%" />
              </div>
              <div>
                <p>
                  —-------------------------------------------</p>
                <h2>
                  <p class="my-3" style="font-size: 24px; color: #ed2024"><strong>Votre
                      garage est membre du réseau
                      PROXI AUTO
                      CASH</strong></p>
                </h2>
                <div>
                  <span>Le plus grand
                    réseau de
                  </span>
                  <span style="color: #ed2024">rachat cash</span>
                  <span>
                    de France</span>
                </div>

                <div>
                  <img class="img-fluid" src="./src/medias/Icône  carte de france rouge PAC.png" />
                </div>
                <div class="text-center" style="margin-left: 0pt">
                  <h4>
                    <p style="font-size: 22px"><strong>PROXI AUTO CASH : un concept
                        innovant</strong></p>
                  </h4><br>
                  <p>PROXI AUTO CASH la marque de
                    <strong>Rachat Cash </strong>présente
                    partout en France compte
                    <strong>250 partenaires</strong>, tous
                    professionnels de
                    l’automobile.
                  </p>
                  <p>
                    <strong>PROXI AUTO CASH </strong>c’est :
                  </p>
                  <p>
                    <span><strong>La proximité</strong> : il y a forcément un garage partenaire Proxi Auto Cash
                      <strong>près de chez vous</strong></span>
                  </p>
                  <p>
                    <span><strong>L’accompagnement </strong> : nos équipes vous accompagnent pour que vous
                      obteniez un <strong>prix de rachat juste et fiable</strong></span>
                  </p>
                  <p>
                    <span><strong>Le professionnalisme</strong>
                      : faire reprendre votre véhicule par un
                      partenaire Proxi Auto Cash c'est faire
                      travailler votre garage de proximité,
                      celui en qui vous avez confiance, qui
                      répare et entretient votre véhicule
                      depuis toujours,<strong>
                        gage de confiance et de
                        qualité.</strong></span>
                  </p>
                </div>
                <br>
                <p>
                  <span class="my-3" style="font-size: 11pt;
                              ">—-------------------------------------------</span>
                </p>
                <div>
                  <h2>
                    <span style="font-size: 24px; color: #ed2024"><strong>Contacter notre équipe</strong></span>
                  </h2>
                  <p class="my-4">VINCENT
                    PARROT AUTOMOBILES continue à vous servir
                    en toute sécurité. Votre santé, celles de notre
                    équipe et votre satisfaction sont nos priorités.
                    Nous sommes pleinement mobilisés pour poursuivre
                    notre activité avec le plus grand
                    professionnalisme. Toute l'équipe reste à votre
                    disposition. N'hésitez pas à nous contacter pour
                    toutes vos demandes.
                  </p>
                  <p>
                    <span class="fs-5"><strong>Vincent Parrot
                        Automobiles</strong></span>
                  </p>
                  <div class="container fw-bold fs-6">
                    <div class="col-12">
                      <img class="my-3" src="./src/medias/logoPhone.png" style="
                                height: 26px;
                                margin-left: 0px;
                                margin-top: 0px;
                                width: 26px;
                              " />
                      <p>01 23 45 67 89 - 06 12 34 56 78</p>
                      <img src="./src/medias/facebook.png" style="
                                height: 28px;
                                margin-left: 0px;
                                margin-top: 0px;
                                width: 28px;
                              " />

                      <p>Facebook : @Garage Parrot Automobiles</p>
                      <img class="my-3" src="./src/medias/logoGoogleMaps.png" style="
                                height: 31px;
                                margin-left: 0px;
                                margin-top: 0px;
                                width: 30px;
                              " />
                      <p>
                        Créez votre itinéraire Google
                        <a href="https://goo.gl/maps/tKcQdGJdXdauig368?coh=178572&entry=tt" target="_blank"
                          title="Itinéraire"><span style="color: #ed2024"><strong>ici</strong></span></a>
                        vers le 1 rue de l'Aqueduc, 31500, Toulouse
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                    $username = "root";
                    $password = "root";
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