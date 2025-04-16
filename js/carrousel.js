(function(){
console.log("carrousel.js")
let hero__radio__input = document.querySelectorAll(".hero__radio__input")
// console.log(hero__radio__input = "hero__radio__input.length")
for(hero__radio__input_bouton of hero__radio__input){
  // console.log(hero__radio__input_bouton);
  hero__radio__input_bouton.addEventListener('click', updateCarrousel);
}
function updateCarrousel(event){
  let numero = event.target.getAttribute("date-id_radio");
  let backgrounds=document.querySelectorAll(".hero__carrousel");
  console.log(backgrounds);
  for (unBackground of backgrounds){
    console.log(unBackground);
    unBackground.classList.remove("active");
  }
  backgrounds[numero].classList.add("active");
  
}
})()