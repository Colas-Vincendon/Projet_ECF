<?php
session_start();

// Vérifier si l'utilisateur est connecté et s'il n'est pas administrateur, sinon le rediriger vers la page de connexion
if (!isset($_SESSION['email']) || $_SESSION['isAdmin'] != 0) {
  header('Location: connexion.php');
  exit();
}

// if (!isset($_COOKIE['connexion_time'])) {
//   // Le cookie n'existe pas, procédez à l'authentification
// } else {
//   // Le cookie existe, vérifiez s'il est expiré
//   $currentTime = time();
//   $cookieTime = $_COOKIE['connexion_time'];
//   $expirationTime = $cookieTime + 30; // 30 secondes d'expiration

//   if ($currentTime >= $expirationTime) {
//       // Le cookie est expiré, procédez à l'authentification
//       header('Location: connexion.php');
//       exit;
//   }
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
                    <a class="nav-link" href="catalogue.php">NOS VEHICULES</a>
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
        <!-- ------------------------------ DEBUT MAIN ------------------------------- -->
        <div class="container d-flex align-items-center justify-content-center connect my-2">
          <h1 class="titleAdmin my-3 mx-3"><b>Espace Employés</b></h1> <br>
          <br>
          <form method="post">
            <button class="btn btn-danger my-3 mx-3" type="submit" name="logout">Se déconnecter</button>
          </form>
        </div>
        <div class="container text-center connect my-2">
          <h1 class="text-grey my-4">Les messages clients</h1>
          <div class="mx-auto my-3 justify-content-center align-items-center d-flex  ">
            <p class="text-center btn btn-success my-3"><a class="no-underline text-white"
                href="messagesPlace.html">Consulter</a></p><br>
          </div>
        </div>
        <div class="container text-center connect my-2">

          <h1 class="text-grey my-4">Ajouter un nouveau véhicule</h1>

          <form action="add_vehicle.php" method="POST" enctype="multipart/form-data">
            <label for="marque">Marque :</label>
            <input type="text" name="marque" required><br><br>

            <label for="modele">Modèle :</label>
            <input type="text" name="modele" required><br><br>

            <label for="annee">Année :</label>
            <input type="text" name="annee" required><br><br>

            <label for="kilometres">Kilometres :</label>
            <input type="text" name="kilometres" required><br><br>

            <label for="carburant">Carburant :</label>
            <select name="carburant" required>
              <option value="Essence">Essence</option>
              <option value="Diesel">Diesel</option>
              <option value="Electrique">Électrique</option>
              <option value="GPL">GPL</option>
              <option value="Hybride">Hybride</option>
            </select><br><br>

            <label for="boite_de_vitesse">Boîte de vitesse :</label>
            <select name="boite_de_vitesse" required>
              <option value="Manuelle">Manuelle</option>
              <option value="Automatique">Automatique</option>
            </select><br><br>

            <label for="prix">Prix :</label>
            <input type="text" name="prix" required><br><br>

            <label for="images">Images :</label>
            <input class="btn btn-primary" type="file" name="images[]" multiple><br><br>

            <input class="btn btn-success my-5" type="submit" value="Ajouter le véhicule">
          </form>
        </div>
        <div class="container text-center connect my-2">
          <h1 class="text-grey my-4">Supprimer un véhicule</h1>
          <div class="mx-auto my-3 justify-content-center align-items-center d-flex  ">
            <p class="text-center btn btn-success my-3"><a class="no-underline text-white" href="vehicleList.php">Liste
                des véhicules</a></p><br>
          </div>
        </div>
        <div class="container text-center connect my-2">
          <h1 class="text-grey my-4">Valider les témoignages clients</h1>
          <?php
          // Connexion à la base de données
          require_once 'databaseConnexion.php';

            // Récupérer tous les nouveaux avis non approuvés de la table "avis"
            $stmt = $conn->prepare("SELECT * FROM avis WHERE approuve = 0");
            $stmt->execute();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
          ?>

          <h2>Nouveaux Avis</h2>
          
          <?php
          if ($stmt->rowCount() > 0) {
            foreach ($rows as $row) {
              $avisId = $row['id'];
              $nom = $row['nom'];
              $commentaire = $row['commentaire'];
              $note = $row['note'];
              ?>
                <hr>
              <div>
                <p><strong>Nom:</strong>
                  <?php echo $nom; ?>
                </p>
                <p><strong>Commentaire:</strong>
                  <?php echo $commentaire; ?>
                </p>
                <p><strong>Note:</strong>
                  <?php echo $note; ?>/5
                </p>
                <div class="row">
                  <div class="col-6">

                    <form action="approuver_avis.php" method="POST">
                      <input type="hidden" name="avis_id" value="<?php echo $avisId; ?>">
                      <button class="btn btn-success my-4" type="submit" name="approuver">Approuver</button>
                    </form>
                  </div>
                  <div class="col-6">
                    <form action="supprimer_avis.php" method="POST">
                      <input type="hidden" name="avis_id" value="<?php echo $avisId; ?>">
                      <button class="btn btn-danger my-4" type="submit" name="supprimer">Supprimer</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php
            }
          } else {
            echo "<p>Aucun nouvel avis.</p>";
          }

          // Fermer la connexion à la base de données
          $conn = null;
          ?>
        </div>
        <div class="container text-center connect my-2">
          <h1 class="text-grey my-4">Ajouter un témoignage client</h1>
          <form action="add_review.php" method="POST">
            <div class="my-3">
              <label for="nom">Nom du client :</label>
              <input type="text" class="mx-auto my-3 form-control" id="nomAddComment" name="nom" required>
            </div>
            <div class="my-3">
              <label for="commentaire">Commentaire du client :</label>
              <textarea class="my-3 form-control" id="commentaireAddComment" name="commentaire" required></textarea>
            </div>
            <div class="my-3">
              <label for="note">Note du client :</label>
              <select class="my-3" id="noteAddComment" name="note" required>
                <option value="1">1 étoile</option>
                <option value="2">2 étoiles</option>
                <option value="3">3 étoiles</option>
                <option value="4">4 étoiles</option>
                <option value="5">5 étoiles</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class=" my-5 btn btn-success">Ajouter un avis</button>
            </div>
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