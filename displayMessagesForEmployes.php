<div id="messagesEmployes">
    <?php

    require_once 'databaseConnexion.php';

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
                            echo "<form action='supprimer_message.php' method='POST'>";
                            echo "<input type='hidden' name='message_id' value='$messageId'>
                                                </div>";
                            ?>
                            <div class='col-12 col-md-2 connect justify-content-center d-flex align-items-center'>
                                <button class='btn btn-danger my-4' type='submit'>Supprimer</button>
                            </div>
                            </form>

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