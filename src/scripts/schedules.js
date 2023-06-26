/*------------- chargement des horaires du footer ---------------------*/

$(document).ready(function () {
  // Charger le contenu du footer
  $("#footerSchedules").load("schedules.php #Schedules");
});
