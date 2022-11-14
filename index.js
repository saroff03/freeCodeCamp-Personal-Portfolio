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
  if(scrollValue > vh(35)){
    navbar.classList.add("bgColor");
  } else {
    navbar.classList.remove("bgColor")
  }
}


function vh(percent) {
  var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
  return (percent * h) / 100;
}

window.addEventListener("scroll", changeBg);