$(document).ready(function () {
  
  $('#btn-new').click(function(){
    accommodationMenu();
  });
  
  function accommodationMenu() {
    if ($("#collapse-alojamiento").hasClass("collapse show")) {
      $("#collapse-alojamiento").removeClass("show");
    }
  }

  $('#btn-accommodation').click(function(){
    newMenu();
  });
  
  function newMenu() {
    if ($("#collapse-nuevo").hasClass("collapse show")) {
      $("#collapse-nuevo").removeClass("show");
    }
  }

});