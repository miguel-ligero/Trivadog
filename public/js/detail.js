$(document).ready(function () {

  function changeimg(sourceimg) {
    $(".active img:first-child").attr("src", sourceimg);
  }

  $(".back-img").click(function () {
    var source = $(this).attr("src");
    changeimg(source);
  });
});
