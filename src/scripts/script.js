$("li.dropdown").hover(
  function () {
    $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeIn(400);
  },
  function () {
    $(this).find(".dropdown-menu").stop(true, true).delay(100).fadeOut(400);
  }
);
/*---------------------- FILTRES VEHICULES ---------------------*/

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
