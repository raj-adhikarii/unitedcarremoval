// nav
$(function(){
  $btnToggle = $('.btn--toggle');
  $submenuTrigger = $('.submenu--trigger');
  $thirdSubmenuTrigger = $('.third-submenu--trigger');
  
  $btnToggle.on('click', function(e) {
    // e.preventDefault();
    let $target = $( $(e.currentTarget).attr('data-target') );
    $target.toggleClass('showing');
  });
  
  
  // $submenuTrigger.on('click', function(e) {
  //   e.preventDefault();
  //   $(this).toggleClass('active');
  // });
  
});

var myNav = document.getElementById('mynav');
window.onscroll = function () { 
   if (document.body.scrollTop >= 200 || document.documentElement.scrollTop >= 200  ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove("nav-transparent");
    } 
    else {
        myNav.classList.add("nav-transparent");
        myNav.classList.remove("nav-colored");
    }
};

// According
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


