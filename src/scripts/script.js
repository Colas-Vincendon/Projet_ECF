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
    encodeURIComponent(annee);
  xhr.open("POST", "recherche.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(data);
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
