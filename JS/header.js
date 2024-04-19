window.onscroll = function() {myFunction()};

var header = document.getElementById("headerfixed");
var scroller = document.getElementById("scroller");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stickyheader");
    scroller.classList.remove("scrollerdisplay");
  } else {
    header.classList.remove("stickyheader");
    scroller.classList.add("scrollerdisplay");
  }
}


$(".headerdropdown").click(function() {
  var is_open = $(this).hasClass("open");
  if (is_open) {
    $(this).removeClass("open");
  } else {
    $(this).addClass("open");
  }
});

$(".headerdropdown li").click(function() {

  var selected_value = $(this).html();
  var first_li = $(".headerdropdown li:first-child").html();

  $(".headerdropdown li:first-child").html(selected_value);
  $(this).html(first_li);

});

$(document).mouseup(function(event) {

  var target = event.target;
  var select = $(".headerdropdown");

  if (!select.is(target) && select.has(target).length === 0) {
    select.removeClass("open");
  }

});