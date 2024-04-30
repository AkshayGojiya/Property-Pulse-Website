window.onscroll = function() {myFunction()};

var header = document.getElementById("headerfixed");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("stickyheader");
  } else {
    header.classList.remove("stickyheader");
  }
}
