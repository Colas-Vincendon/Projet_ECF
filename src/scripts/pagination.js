// Fonction pour effectuer une requête AJAX et mettre à jour les résultats de la pagination
function getPaginationResults(
  page,
  marque,
  modele,
  annee,
  carburant,
  boite_de_vitesse,
  kilometres,
  prix,
  tri
) {
  // Afficher l'animation de chargement ici si vous le souhaitez

  // Effectuer la requête AJAX
  $.ajax({
    url: "recherche.php",
    type: "POST",
    data: {
      page: page,
      marque: marque,
      modele: modele,
      annee: annee,
      carburant: carburant,
      boite_de_vitesse: boite_de_vitesse,
      kilometres: kilometres,
      prix: prix,
      tri: tri,
    }, // Envoyer le numéro de la page en paramètre
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

  // Récupérer les valeurs des filtres
  var marque = $("#marque").val();
  var modele = $("#modele").val();
  var annee = $("#annee").val();
  var carburant = $("#carburant").val();
  var boite_de_vitesse = $("#boite_de_vitesse").val();
  var kilometres = $("#kilometres").val();
  var prix = $("#prix").val();
  var tri = $("#tri").val();

  // Appeler la fonction pour effectuer la requête AJAX et mettre à jour les résultats de la pagination
  getPaginationResults(
    page,
    marque,
    modele,
    annee,
    carburant,
    boite_de_vitesse,
    kilometres,
    prix,
    tri
  );
});
