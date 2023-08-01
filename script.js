var navLinks = document.getElementById("navLinks");


function showMenu(){
    navLinks.style.right = "0";
}

function hideMenu(){
    navLinks.style.right = "-200";
}


function topFunction() {
    window.scrollTo({top: 0, behavior: 'smooth'});
  }