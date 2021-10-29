//Toggle Function
function toggleMenu() {
    let el =
        document.getElementById('navDropdown');
    el.classList.toggle('show');
 }
 
 //Rotate Carrot Function
 function rotateSvg() {
   let es = document.querySelector('.carrot');
   es.classList.toggle('rotate');
 }
 
 //creating myBtn
 var btn = document.getElementById("myBtn");
 

 //event listeners
 btn.addEventListener("click", toggleMenu);
 btn.addEventListener("click", rotateSvg);
 

// header hover function

 function changeHeader() {
   let hov =
      document.querySelector('.hov');
   let h1 =
      document.querySelector('h1');

   hov.classList.toggle('onHover');
   h1.classList.toggle('onHoverHead');
 }

 function expandHeader() {
  let hov =
   document.querySelector('.hov');
  let h1 =
   document.querySelector('h1');
  
  
  if (hov.classList.contains('onHover')) {
    hov.classList.remove('onHover');
    h1.classList.remove('onHoverHead');
  } else { }
 }

 //creating header variable
 var hd = document.querySelector('header');


 //toggling z-index

// if (size > 799) {
   hd.addEventListener("mouseenter", changeHeader);
   hd.addEventListener("mouseleave", expandHeader);
 //} else {
   hd.addEventListener("click", changeHeader);
 //}
 
 //document.querySelector('a.dropbtn').onclick = toggleMenu();