const slides = document.querySelectorAll("[data-all]");
const btnLeft = document.querySelector('#left');
const btnRight = document.querySelector('#right');

let currSlide = 0;
const maxSlide = slides.length

const goToSlide = function(slide){
  slides.forEach((s,i) => s.style.transform = `translateX(${100 * (i - slide)}%)`)
}

goToSlide(0)

const nextSlide = function(){
  if(currSlide === maxSlide -1){
    currSlide = 0
  } else{
    currSlide++
  }
  
  goToSlide(currSlide)
}

btnRight.addEventListener('click', nextSlide)

const prevSlide = function(){
  if(currSlide === 0){
    currSlide = maxSlide -1
  }else{
   currSlide-- 
  }
  goToSlide(currSlide)
  
}
btnLeft.addEventListener('click', prevSlide)

document.addEventListener('keydown', function (e) {

  if (e.key === 'ArrowLeft') prevSlide();
  e.key === 'ArrowRight' && nextSlide();
});
