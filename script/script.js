
let card = document.querySelector('.card__title');
let latin = document.querySelector('.card__title-latin');
document.querySelector(".minimenu").onchange = function(){
  location.assign(this.value);
}
card.addEventListener('click', (event)=>{

if(card.classList.contains('blur')){
  card.classList.remove('blur');

}
});

latin.addEventListener('click', (event)=>{

  if(latin.classList.contains('blur')){
    latin.classList.remove('blur');}
  

  });