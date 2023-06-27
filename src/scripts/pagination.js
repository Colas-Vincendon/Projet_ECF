function getPaginationResults(page) {
  // ...

  // Récupérer les valeurs des filtres de recherche
  var marque = document.getElementById("marque").value;
  var modele = document.getElementById("modele").value;
  var annee = document.getElementById("annee").value;
  var carburant = document.getElementById("carburant").value;
  var boiteDeVitesse = document.getElementById("boite_de_vitesse").value;
  var kilometres = document.getElementById("kilometres").value;
  var prix = document.getElementById("prix").value;
  var tri = document.getElementById("tri").value;

  // Construction de l'URL avec les valeurs des filtres de recherche
  var url = "recherche.php?page=" + page;

  if (marque !== "") {
    url += "&marque=" + encodeURIComponent(marque);
  }

  if (modele !== "") {
    url += "&modele=" + encodeURIComponent(modele);
  }

  if (annee !== "") {
    url += "&annee=" + encodeURIComponent(annee);
  }

  if (carburant !== "") {
    url += "&carburant=" + encodeURIComponent(carburant);
  }

  if (boiteDeVitesse !== "") {
    url += "&boite_de_vitesse=" + encodeURIComponent(boiteDeVitesse);
  }

  if (kilometres !== "") {
    url += "&kilometres=" + encodeURIComponent(kilometres);
  }

  if (prix !== "") {
    url += "&prix=" + encodeURIComponent(prix);
  }

  if (tri !== "") {
    url += "&tri=" + encodeURIComponent(tri);
  }

  // Effectuer la requête AJAX
  $.ajax({
    url: url,
    type: "POST",
    success: function (response) {
      // ...
    },
    error: function () {
      // ...
    },
  });
}
