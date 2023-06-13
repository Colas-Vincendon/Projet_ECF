window.addEventListener("scroll", function () {
  var backToTopButton = document.getElementById("backToTheTop");

  if (window.scrollY >= 200) {
    backToTopButton.style.display = "block";
  } else {
    backToTopButton.style.display = "none";
  }
});
