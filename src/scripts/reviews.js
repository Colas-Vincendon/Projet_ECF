/*------------- affichage des avis clients sur page index.html ---------------------*/

$(document).ready(function () {
  // Charger le contenu du footer
  $("#displayReviews").load("displayReviews.php #reviews");
});
