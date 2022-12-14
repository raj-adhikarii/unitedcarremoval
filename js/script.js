// nav
window.onscroll= ()=>{
  scrollFunction()
}

function scrollFunction(){
  if(document.body.scrollTop>1 || document.documentElement.scrollTop>1){
    document.getElementById("navbar").style.position = "fixed";
    document.getElementById("navbar").style.background = "#f5f5f5";
    document.getElementById("navbar").style.left = "0";
    document.getElementById("navbar").style.top = "0";
    document.getElementById("navbar").style.width = "100%";
  } else {
    document.getElementById("navbar").style.position = "relative";
    // document.getElementById("navbar").style.top = "38";
  }
}
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}