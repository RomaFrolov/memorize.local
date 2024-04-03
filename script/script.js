
let card = document.querySelector('.card__title');
let latin = document.querySelector('.card__title-latin');

card.addEventListener('click', (event)=>{

if(card.classList.contains('blur')){
  card.classList.remove('blur');

}
});

latin.addEventListener('click', (event)=>{

  if(latin.classList.contains('blur')){
    latin.classList.remove('blur');}
  

  });