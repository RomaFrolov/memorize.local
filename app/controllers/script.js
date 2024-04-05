let card = document.querySelector('.card__text');
let latin = document.querySelector('.card__title');

alert('test');
console.log('test2');

card.addEventListener('click', (event)=>{
if(card.classList.contains('blur')){
  card.classList.remove('blur');}
});

latin.addEventListener('click', (event)=>{
  if(latin.classList.contains('blur')){
    latin.classList.remove('blur');}
  });