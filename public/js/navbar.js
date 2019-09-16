// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "0px 10px";
    document.getElementById("navbar").style.background = "#f1f1f1";
    document.getElementById("logo").style.width = "70%";
  } else {
    document.getElementById("navbar").style.padding = "4px 10px";
    document.getElementById("navbar").style.background = "#f1f1f1";
    document.getElementById("logo").style.width = "100%";
  }
}
