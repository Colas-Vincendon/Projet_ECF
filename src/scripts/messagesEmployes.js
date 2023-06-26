/*------------- affichage des messages clients sur page messagesPlace.html ---------------------*/

$(document).ready(function () {
  // Charger le contenu
  $("#displayMessagesEmployes").load(
    "displayMessagesForEmployes.php #messagesEmployes"
  );
});
