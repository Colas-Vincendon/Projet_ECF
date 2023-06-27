// Fonction pour effectuer une requête AJAX et mettre à jour les résultats de la pagination
function getPaginationResults(page) {
  // Afficher l'animation de chargement ici si vous le souhaitez

  // Effectuer la requête AJAX
  $.ajax({
    url: "recherche.php",
    type: "POST",
    data: { page: page }, // Envoyer le numéro de la page en paramètre
    success: function (response) {
      // Mettre à jour les résultats de la pagination
      $("#vehicules").html(response);

      // Masquer l'animation de chargement ici si vous l'avez affichée
    },
    error: function () {
      // Gérer les erreurs de la requête
      // Masquer l'animation de chargement ici si vous l'avez affichée
    },
  });
}

// Ajouter un écouteur d'événement sur les liens de pagination
$(document).on("click", ".page-item", function (e) {
  e.preventDefault(); // Empêcher le comportement par défaut des liens

  // Récupérer le numéro de la page à partir de l'attribut href du lien
  var page = $(this).attr("id");

  // Appeler la fonction pour effectuer la requête AJAX et mettre à jour les résultats de la pagination
  getPaginationResults(page);
});
