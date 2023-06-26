/*------------- affichage des vehicules sur page vehicleList.html ---------------------*/

$(document).ready(function () {
  // Charger le contenu
  $("#vehicleList").load("vehicleListEmployes.php #displayVehicleListEmployes");
});
