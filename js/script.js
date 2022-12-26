// Sticky nav
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

// Animination
const observer = new IntersectionObserver((entries) =>{
  entries.forEach((entry)=> {
    if(entry.isIntersecting){
        entry.target.classList.add('show'); 
    } else {
      entry.target.classList.remove('show')
    }
  });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el)=> observer.observe(el));
