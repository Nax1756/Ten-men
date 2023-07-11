const burgerButton = document.getElementsByClassName('burger-menu')[0];
const burgerMenu = document.getElementsByClassName('menu__burger')[0];
const burgerInput = document.getElementsByClassName('burger-menu__label')[0];
const body = document.body;

const frSliderButton = document.getElementById('slider-fr-button');
const scSliderButton = document.getElementById('slider-sc-button');
const thSliderButton = document.getElementById('slider-th-button');

const frSlide = document.getElementById('slide-fr');
const scSlide = document.getElementById('slide-sc');
const thSlide = document.getElementById('slide-th');

const frSlideClass = frSlide.className;
const scSlideClass = scSlide.className;
const thSlideClass = thSlide.className;

function scrollToTop() {
  function scrollStep(currentPosition) {
    currentPosition -= 65; // Скорость прокрутки
    window.scrollTo(10, currentPosition);

    if (currentPosition > 0) {
      window.requestAnimationFrame(() => scrollStep(currentPosition));
    }
  }

  var currentPosition = document.documentElement.scrollTop || document.body.scrollTop;
  window.requestAnimationFrame(() => scrollStep(currentPosition));
}

frSliderButton.addEventListener('click', () => {
  if(frSlide.className != 'shop__products-grid-fr active'){
    frSlide.classList.add('active');
    scSlide.classList.remove('active');
    thSlide.classList.remove('active');

    frSliderButton.classList.add('active');
    scSliderButton.classList.remove('active');
    thSliderButton.classList.remove('active');
    scrollToTop();
  }
});

scSliderButton.addEventListener('click', () => {
    if(scSlide.className != 'shop__products-grid-sc active'){
    frSlide.classList.remove('active');
    scSlide.classList.add('active');
    thSlide.classList.remove('active');

    frSliderButton.classList.remove('active');
    scSliderButton.classList.add('active');
    thSliderButton.classList.remove('active');
    scrollToTop();
    }
});

thSliderButton.addEventListener('click', () => {
    if(thSlide.className != 'shop__products-grid-th active'){
    frSlide.classList.remove('active');
    scSlide.classList.remove('active');
    thSlide.classList.add('active');

    frSliderButton.classList.remove('active');
    scSliderButton.classList.remove('active');
    thSliderButton.classList.add('active');
    scrollToTop();
    }
});