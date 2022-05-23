$(function () {

  $('.dropdown p').hover(function () {
    $("ul:not(:animated)", this).slideDown();
  }, function () {
    $("ul.dropdown_menu", this).slideUp();
  });

});
