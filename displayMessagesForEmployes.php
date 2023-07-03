<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet ECF: Garage Parrot</title>
    <meta
      type="description"
      content="Entretien de votre véhicule et vente de véhicules d'occasion"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./src/styles/style.css" />
  </head>
  <body>



  <div id="messagesEmployes">
    <?php

    require_once 'databaseConnexion.php';
    //SINGLETON
    $database = Database::getInstance();
    $conn = $database->getConnection();

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
                    <div class='col-12 col-md-5 connect'>
                        <?php
                        echo "<h6><strong>Date : </strong>$formatted_date</h6>";
                        echo "<h6><strong>Sujet : </strong>$sujet</h6>";
                        echo "<h6><strong>De :</strong> $prenom $nom</h6>";
                        echo "<h6><strong>Email :</strong> $email</h6>";
                        echo "<h6><strong>Telephone :</strong> $telephone</h6>
                                                </div>";
                                                ?>
                        <div class='col-12 col-md-5 connect d-flex align-items-center'>
                            <?php
                            echo "<p class='my-auto'>$message</p>";
                            ?>
                        </div>

                        <div class='col-12 col-md-2 connect justify-content-center d-flex align-items-center'>
                            <form action='supprimer_message.php' method='POST'>
                                <input type='hidden' name='message_id' value='<?php echo $messageId; ?>'>
                                <input class='btn btn-danger my-4' type='submit' onclick='return confirmDeleteMessage()' value="Supprimer"></input>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <?php
        }
    } else {
        echo "<div class='col-12 text-center my-5'>Aucun message trouvé.</div>";
    }

    $conn = null;
    ?>
    </div>
    <script src="src/scripts/script.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
      integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
      crossorigin="anonymous"
    ></script>
    <script src="src/scripts/script.js"></script>
  </body>
</html>