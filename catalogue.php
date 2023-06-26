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
                    <a class="nav-link nav-link-active" href="catalogue.php">NOS VEHICULES</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="cashback.html">RACHAT CASH</a>
                  </li>
                  <!-- -------------- NAV DROPDOWN SERVICES ----------------- -->
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pointer" class="navbar-toggler" data-bs-toggle="collapse"
                      data-bs-target="#services" aria-label="Toggle navigation">NOS SERVICES<b class="caret"></b></a>
                    <ul id="services" class="dropdown-menu">
                      <li>
                        <a class="nav-link no-underline text-li-services" href="allServices.html">TOUS NOS SERVICES</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a class="nav-link no-underline text-li-services" href="boschService.html">ATELIER BOSCH CAR
                          SERVICE</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a class="nav-link no-underline text-li-services" href="carRegistration.html">SERVICE CARTE
                          GRISE</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a class="nav-link no-underline text-li-services" href="infoConsumer.html">INFORMATIONS
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
        <!-- ----------- connexion à la base de données filtres par marque ------------------ -->
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

        <!-- ------------------------------ DEBUT MAIN ------------------------------- -->

        <div class="row">
          <div class="container catalogue text-center">
            <p class="my-auto">
              <a class="no-underline text-danger text-p" href="catalogue.php">Consultez notre catalogue jusqu'à 1500
                véhicules disponibles</a>
            </p>
          </div>
        </div>
        <div class="container-fluid">
          <div class="filtres my-3 px-2 text-center">
            <p>
            <div class="row my-3">
              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="marque" name="marque" style="width: 200px;" class="mx-auto">
                  <option value="">Marque</option>
                  <?php echo $options; ?>
                </select>
              </div>

              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="modele" style="width: 200px;" class="mx-auto">
                  <option value="">Modèle</option>

                </select>
              </div>

              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="prix" style="width: 200px;" class="mx-auto">
                  <option value="">Prix</option>
                  <option value="de 0 à 10.000 €">de 0 à 10.000 €</option>
                  <option value="de 10.000 à 20.000 €">de 10.000 à 20.000 €</option>
                  <option value="de 20.000 à 30.000 €">de 20.000 à 30.000 €</option>
                  <option value="de 30.000 à 40.000 €">de 30.000 à 40.000 €</option>
                  <option value="de 40.000 à 50.000 €">de 40.000 à 50.000 €</option>
                  <option value="de 50.000 à 75.000 €">de 50.000 à 75.000 €</option>
                  <option value="de 75.000 à 100.000 €">de 75.000 à 100.000 €</option>
                  <option value="+ de 100.000 €">+ de 100.000 €</option>
                </select>
              </div>

              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="kilometres" style="width: 200px;" class="mx-auto">
                  <option value="">Kilométrage</option>
                  <option value="de 0 à 50.000km">0-50.000km</option>
                  <option value="de 50.000 à 100.000 km">50.000-100.000km</option>
                  <option value="de 100.000 à 150.000 km">100.000-150.000km</option>
                  <option value="de 150.000 à 200.000 km">150.000-200.000km</option>
                  <option value="+ de 200.000 km">+ de 200.000km</option>
                </select>
              </div>

              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="annee" name="annee" style="width: 200px;" class="mx-auto">
                  <option value="">Année</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                </select>
              </div>

              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="carburant" name="carburant" style="width: 200px;" class="mx-auto">
                  <option value="">Carburant</option>
                  <option value="Essence">Essence</option>
                  <option value="Diesel">Diesel</option>
                  <option value="Electrique">Electrique</option>
                  <option value="Hybride">Hybride</option>
                  <option value="GPL">GPL</option>

                </select>
              </div>

              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="boite_de_vitesse" name="boite_de_vitesse" style="width: 200px;" class="mx-auto">
                  <option value="">Transmission</option>
                  <option value="Manuelle">Manuelle</option>
                  <option value="Automatique">Automatique</option>
                </select>
              </div>

              <div class="col-12 col-md-6 col-lg-3 d-flex flex-column my-1">
                <select id="tri" style="width: 200px;" class="mx-auto">
                  <option value="">Trier par</option>
                  <option value="prix_asc">Prix croissant</option>
                  <option value="prix_desc">Prix décroissant</option>
                  <option value="kilometres_asc">KM croissant</option>
                  <option value="kilometres_desc">KM décroissant</option>
                </select>
              </div>
            </div>

            <div class="row justify-content-center my-3">
              <button id="rechercher" onclick="performSearch()" class="btn btn-danger">Rechercher</button>
            </div>

            <div class="row justify-content-center my-3">
              <button id="reinitialiserLesFiltres" class="btn btn-outline-danger">Réinitialiser les filtres</button>
            </div>

            <div id="loading" class="loading">
              <div class="loading-animation"></div>
              <span>CHARGEMENT DES VEHICULES</span>
            </div>

            <div id="resultat"></div>
            </p>
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
                  <a class="no-underline text-grey" href="politic.html">Politique de confidentialité</a>
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