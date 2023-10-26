$(document).ready(() => {
  $(document).ready(function () {
    // Afficher le contenu au survol de l'élément "Travaux" ou du menu
    $(".menu__works, .menu__works__content").hover(
      function () {
        $(".menu__works__content").css("display", "block");
      },
      function () {
        // Masquer le contenu lorsque le curseur quitte l'élément "Travaux" ou le menu
        $(".menu__works__content").css("display", "none");
      }
    );
  });
});
