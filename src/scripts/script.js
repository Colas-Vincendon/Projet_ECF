$("li.dropdown").hover(
  function () {
    $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeIn(400);
  },
  function () {
    $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeOut(400);
  }
);
/*---------------------- Filtres vehicules ---------------------*/

document.getElementById("rechercher").addEventListener("click", function () {
  var marque = document.getElementById("marque").value;
  var modele = document.getElementById("modele").value;
  var annee = document.getElementById("annee").value;
  var carburant = document.getElementById("carburant").value;
  var boite_de_vitesse = document.getElementById("boite_de_vitesse").value;
  var kilometres = document.getElementById("kilometres").value;
  var prix = document.getElementById("prix").value; // Ajout de la variable prix

  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("resultat").innerHTML = xhr.responseText;
    }
  };

  var data =
    "marque=" +
    encodeURIComponent(marque) +
    "&modele=" +
    encodeURIComponent(modele) +
    "&annee=" +
    encodeURIComponent(annee) +
    "&carburant=" +
    encodeURIComponent(carburant) +
    "&boite_de_vitesse=" +
    encodeURIComponent(boite_de_vitesse) +
    "&kilometres=" +
    encodeURIComponent(kilometres) +
    "&prix=" +
    encodeURIComponent(prix);

  xhr.open("POST", "recherche.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(data);
});

/*----------------------filtres les modèles de la marque sélectionnéeé ----------*/

document.getElementById("marque").addEventListener("change", function () {
  var marque = this.value;
  var modeleSelect = document.getElementById("modele");

  // Supprimer toutes les options actuelles du select du modèle
  modeleSelect.innerHTML = "<option value=''>Tous</option>";

  // Si une marque est sélectionnée, récupérer les modèles correspondants depuis la base de données
  if (marque !== "") {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        var modeles = JSON.parse(xhr.responseText);
        // Ajouter les options des modèles
        modeles.forEach(function (modele) {
          var option = document.createElement("option");
          option.value = modele;
          option.text = modele;
          modeleSelect.appendChild(option);
        });
      }
    };

    xhr.open(
      "GET",
      "getModeles.php?marque=" + encodeURIComponent(marque),
      true
    );
    xhr.send();
  }
});

/*-------------------- simulation d'un click pour lancer la recherche-----------*/

window.addEventListener("DOMContentLoaded", function () {
  // Simuler un clic sur le bouton "Rechercher"
  var boutonRechercher = document.getElementById("rechercher");
  boutonRechercher.click();
});

$(document).ready(function () {
  $(".carousel").carousel({
    interval: 2000, // Réglez ici la vitesse souhaitée en millisecondes
  });
});

/*----------- boutojn pour réinitialiser les filtres ---------------*/

document
  .getElementById("reinitialiserLesFiltres")
  .addEventListener("click", function () {
    location.reload();
  });
