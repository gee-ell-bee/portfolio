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
  
  
  // header hover functions
  
  let hov =
      document.querySelector('.hov'),
    main =
      document.querySelector('main');
      // for desktop width variables:
  let h1 =
      document.querySelector('h1'),
    h2 =
      document.querySelector('h2'),
    h3 =
      document.getElementById('lastName');
  
  function delayClassRemoval() {
    h2.classList.remove('onHoverHead2');
    h2.onanimationend = function(){
      h2.classList.remove('onHoverHead2');
    }
  }
  
  function changeHeader() {
    //if (h2.classList.contains('onHoverHead2') = true) {
    //  setTimeout(delayClassRemoval, 3500);}
    //else {
      hov.classList.toggle('onHoverWhole'),
      main.classList.toggle('onHoverMain'),
      h1.classList.toggle('onHoverHead'),
      h2.classList.toggle('onHoverHead2'),
      h3.classList.toggle('onHoverHead3');
    //}
  }
  
  function expandHeader() {
    if (hov.classList.contains('onHoverWhole')) {
      hov.classList.remove('onHoverWhole'),
      h1.classList.remove('onHoverHead'),
      h2.classList.remove('onHoverHead2'),
      h3.classList.remove('onHoverHead3');
    } else {}
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
  /*
      setTimeout(function(){
      container.classList.remove('show');
      container.ontransitionend = function(){
        container.remove();
      }
    }, 350);
    */