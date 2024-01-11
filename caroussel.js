const caroussel = document.querySelector(".caroussel");
const arrowBtns = document.querySelectorAll(".wrpper i");
const firstCardWidth= caroussel.querySelector(".card").offsetWidth;

let isDragging = false , startX, startScrollLeft; 

let cardPerView= Math.round(-caroussel.offsetWidth/firstCardWidth);
carousselChildren.slice(-cardPerView).reverse().forEach( crd=>{
  caroussel.insertAdjacentHTML("afterbeign", card.outerHTML);
});

carousselChildren.slice(0, cardPerView).reverse().forEach( crd=>{
  caroussel.insertAdjacentHTML("beforend", card.outerHTML);
})

arrowBtns.forEach(btn =>{
  btn.addEventListener("click",() =>{
    caroussel.scrollLeft +=  btn.id === "left"? -firstCardWidth :offsetWidth;
  })
 
})
const dragStart = () => {
    isDragging = true;
    caroussel.classList.add("dragging");
    startX =  e.pageX; 
    startScrollLeft = caroussel.scrollLeft;
}
const dragging = (e) => {
    if(!isDragging) return;
  caroussel.scrollLeft =startScrollLeft -( e.pageX - startX) ;
}
const dragStop = () => {
  isDragging = false ;
  caroussel.classList.remove("dragging");
}
const autoPlay =()=>{
  if(window.innerWidth<800) return ;
}
  
const infiniteScroll=()=>{
  if(caroussel.scrollLeft === 0){
    caroussel.classList.add("pas-de-transition");
    caroussel.scrollLeft === caroussel.scrollWidth - (2*caroussel - offsetWidth);
    caroussel.classList.remove("pas-de-transition");

  } else if(caroussel.scrollLeft === caroussel.scrollWidth -caroussel.offsetWidth) {
    caroussel.classList.add("pas-de-transition");
    caroussel.scrollLeft === caroussel.offsetWidth;
    caroussel.classList.remove("pas-de-transition");
  }
}

caroussel.addEventListener("mousedown", dragStart);
caroussel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
caroussel.addEventListener("scroll", infiniteScroll)
