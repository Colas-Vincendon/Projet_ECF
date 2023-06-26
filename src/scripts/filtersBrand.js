/*------------- filtre d'affichage des modèles selon la marque sur page catalogue.php ---------------------*/

$(document).ready(function () {
  // Charger le contenu
  $("#filtersBrand").load("filtersBrand.php #filtersBrandCode");
});
