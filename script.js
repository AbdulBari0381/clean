$("#book-online").on("click", function () {
  $("#con-online").addClass("res-online");
  $("#con-online").addClass("res-online");
});
$(".cross").on("click", function () {
  $("#con-online").removeClass("res-online");
});
// --------------------------show-popup
// $(".cross").on("click", function () {
//     $("#con-online").removeClass("res-online");
//   });

$("#popup-cross").on("click", function () {
  $("#popup").addClass("close_pop");
});