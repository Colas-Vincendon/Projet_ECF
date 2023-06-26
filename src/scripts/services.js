/*------------- affichage des services sur page allServices.html ---------------------*/

$(document).ready(function () {
  // Charger le contenu
  $("#displayServices").load("displayServices.php #services");
});
