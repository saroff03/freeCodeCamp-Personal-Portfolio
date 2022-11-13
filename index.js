function close_offcanvas() {
  let element1 = document.getElementById("btn1");
  element1.classList.remove("collapsed");
  let element2 = document.getElementById("navmenu");
  element2.classList.remove("show");
  document.getElementById("btn1").setAttribute('aria-expanded', 'false');
};

function changeBg() {
  let navbar = document.getElementById("navbar");
  let scrollValue = window.scrollY;
  if(scrollValue > 510){
    navbar.classList.add("bgColor");
  } else {
    navbar.classList.remove("bgColor")
  }
}

window.addEventListener("scroll", changeBg);