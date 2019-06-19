// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("navbaradmin").style.padding = "10px 0px";
    document.getElementById("logo").style.fontSize = "35px";
  } else {
    document.getElementById("navbaradmin").style.padding = "50px 10px";
    document.getElementById("logo").style.fontSize = "50px";
  }
}