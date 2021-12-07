// BOX Toggle Function
function toggleDesc(evt) {
  let boxdesc = evt.target.parentElement.nextElementSibling.firstElementChild;
  console.log(boxdesc);
  boxdesc.classList.toggle('sho');
}

// creating card button
var cardname = document.querySelectorAll('.expander');


//NAV Toggle Function
function toggleMenu() {
  let el =
    document.getElementById('navDropdown');
  el.classList.toggle('show');
}

// BOX Rotate Caret Function
function rotateSpan(evt) {
  let boxspan = evt.target.firstElementChild;
  console.log(boxspan);
  boxspan.classList.toggle('rotate');
}

//Rotate Caret Function
function rotateSvg() {
  let es = document.querySelector('.carrot');
  es.classList.toggle('rotate');
}

//creating myBtn
var btn = document.getElementById("myBtn");


//nav event listeners
btn.addEventListener("click", toggleMenu);
btn.addEventListener("click", rotateSvg);

// card event listeners
for (card of cardname) {
  card.addEventListener("click", toggleDesc);
  card.addEventListener("click", rotateSpan);
}

// header hover function


let hov =
    document.querySelector('.hov'),
  hovGhost =
    document.querySelector('.hovGhost'),
  main =
    document.querySelector('main');
// for desktop width variables:
let h1 =
    document.querySelector('h1'),
  h2 =
    document.querySelector('.h2'),
  h3 =
    document.querySelector('.h3');

function changeHeader() {
  hov.classList.toggle('onHoverWhole'),
  hovGhost.classList.toggle('onHoverGhost'),
  main.classList.toggle('onHoverMain'),
  h1.classList.toggle('onHoverHead'),
  h2.classList.toggle('onHoverHead2'),
  h3.classList.toggle('onHoverHead3');
}

function expandHeader() {
  if (hov.classList.contains('onHoverWhole')) {
    hov.classList.remove('onHoverWhole'),
    hovGhost.classList.remove('onHoverGhost'),
    main.classList.remove('onHoverMain'),
    h1.classList.remove('onHoverHead'),
    h2.classList.remove('onHoverHead2'),
    h3.classList.remove('onHoverHead3');
  } else {}
}

//creating header variable
var hd = document.querySelector('.headerWrapper');


//toggling sizes event listeners

hd.addEventListener("mouseenter", changeHeader);
hd.addEventListener("mouseleave", expandHeader);

hd.addEventListener("click", changeHeader);