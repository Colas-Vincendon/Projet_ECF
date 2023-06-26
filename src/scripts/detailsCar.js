/*------------- affichage des détails de la voiture ---------------------*/

$(document).ready(function () {
  // Charger le contenu
  $("#detailsCar").load("displayDetailsCar.php #details");
});
