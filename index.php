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
          <header class="marginHeader paddingHeader">
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
              <div class="collapse navbar-collapse" id="navbarText" style="z-index: 1">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link nav-link-active" href="index.php">ACCUEIL</a>
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
        <!-- ------------------------------ START MAIN ------------------------------- -->
        <div class="container-fluid d-flex justify-content-center px-4">
          <div id="introCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid" src="./src/medias/introCarousel/carousel1.jpg" alt="Image 1" />
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./src/medias/introCarousel/carousel2.jpg" alt="Image 2" />
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./src/medias/introCarousel/carousel3.jpg" alt="Image 3" />
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./src/medias/introCarousel/carousel4.jpg" alt="Image 4" />
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./src/medias/introCarousel/carousel5.jpg" alt="Image 5" />
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./src/medias/introCarousel/carousel7.jpg" alt="Image 6" />
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="./src/medias/introCarousel/carousel8.jpg" alt="Image 7" />
              </div>
              <div class="controlCarousel">
                <a id="previous" class="carousel-control-prev" href="#introCarousel" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a id="next" class="carousel-control-next" href="#introCarousel" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- ------------------------------ FIN CAROUSEL ---------------------------- -->
        <div class="row">
          <div class="container catalogue text-center my-3">
            <p class="my-auto">
              <a class="no-underline text-danger text-p" href="catalogue.php">Consultez notre catalogue jusqu'à 1500
                véhicules
                disponibles</a>
            </p>
          </div>
        </div>
        <!-- -------------------- HORAIRES ET MAP ----------------------- -->
        <div class="row">
          <div class="col-xs-12 col-md-8">

            <h2 class="mx-5">AVIS DE NOS CLIENTS</h2>
            <div class="trait2 mx-5"></div>
            <p class="p-horaires">

              
              <?php
              require_once 'databaseConnexion.php';
              
              // Récupérer les avis approuvés de la table "avis"
              $stmt = $conn->prepare("SELECT * FROM avis WHERE approuve = :approuve");
              $approuve = 1; // Seuls les avis approuvés
              $stmt->bindParam(':approuve', $approuve);
              $stmt->execute();

              if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  $nom = utf8_decode($row['nom']);
                  $commentaire = utf8_decode($row['commentaire']);
                  $note = $row['note'];

                  // Afficher les informations de l'avis
                  echo "<div class='avis mx-5 my-3'>";

                  // Générer les étoiles en fonction de la note
                  for ($i = 1; $i <= $note; $i++) {
                    echo "★";
                  }

                  echo "</p>";
                  echo "<p><i>$commentaire</i></p>";
                  echo "</div>";
                }
              } else {
                echo "Aucun avis approuvé pour le moment.";
              }

              // Fermer la connexion à la base de données
              $conn = null;

              ?>


            </p>
            <div class="comment mx-auto my-5 justify-content-center align-items-center d-flex ">
              <p class="text-center my-auto"><a class="no-underline text-white" href="addComment.html">Donnez nous votre
                  Avis</a></p><br>
            </div>

          </div>
          <div class="col-xs-12 col-md-4 px-0">
            <h2 class="findUsIndex">NOUS TROUVER</h2>
            <div class="trait3 findUsIndex"></div><br>
            <iframe id="G-mapsIndex" class=""
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2807.0408949540347!2d1.4565806397916736!3d43.60043122187372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebc91eee39de5%3A0x65af583ce587c93e!2s1%20Rue%20de%20l&#39;Aqueduc%2C%2031500%20Toulouse!5e0!3m2!1sfr!2sfr!4v1685465874382!5m2!1sfr!2sfr"
              width="280" height="280" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="row"></div>

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
  <script src="src/scripts/scroll.js"></script>
  <script src="src/scripts/schedules.js"></script>
</body>

</html>