(function(){
console.log("carrousel.js")
let hero__radio__input = document.querySelectorAll(".hero__radio__input")
let hero__carrousel = document.querySelectorAll(".hero__carrousel")
let hero__animation = document.querySelectorAll(".hero__animation")
// console.log(hero__radio__input = "hero__radio__input.length")
for(hero__radio__input_bouton of hero__radio__input){
  // console.log(hero__radio__input_bouton);
  hero__radio__input_bouton.addEventListener('click', updateCarrousel);
}

function updateCarrousel(event){
  
  let numero = event.target.getAttribute("date-id_radio");
  let backgrounds = document.querySelectorAll(".hero__carrousel");
  console.log(backgrounds);
  backgrounds[numero].classList.add("active");
  // for (let unBackground of backgrounds) {
  //   unBackground.classList.remove("active");
  // }
  parcourir_carrousel()
  parcourir_animation()
   // Active le carrousel et l'animation correspondante
   hero__carrousel[numero].classList.add("active")
   hero__animation[numero].classList.add("active")

}
let currentIndex = 0; // Index initial

setInterval(() => {
  console.log("yes I'm changing");
  let backgrounds=document.querySelectorAll(".hero__carrousel");
  let nextIndex = (currentIndex + 1) % backgrounds.length; // Calcule le prochain index
  changeSlide(nextIndex); // Change la diapositive
  currentIndex = nextIndex; // Met à jour l'index actuel
}, 5000); // 5000ms = 5 secondes


// Définir la fonction changeSlide
function changeSlide(index) {
  let backgrounds=document.querySelectorAll(".hero__carrousel");
  // Supprime la classe "active" de tous les éléments
  //  for (let unBackground of backgrounds) {
  //    unBackground.classList.remove("active");
  //  }
  parcourir_carrousel()
  parcourir_animation()
  hero__carrousel[index].classList.add("active")
  hero__animation[index].classList.add("active")

  // Ajoute la classe "active" à l'élément correspondant
  // backgrounds[index].classList.add("active");
}
function parcourir_carrousel(){
  hero__carrousel.forEach(element => {
      element.classList.remove("active")
  });
}
function parcourir_animation(){
  hero__animation.forEach(element => {
    element.classList.remove("active")
  });
}

})()