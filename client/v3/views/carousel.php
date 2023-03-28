<html>
  <head>
    
    <style>
      .carousel {
  overflow: hidden;
  max-width: 600px;
  position: relative;
}

.carousel .carousel__item,
.carousel .carousel__item--hidden {
  display: none;
}

.carousel .carousel__item img {
  width: 100%;
  max-width: 600px;
  height: auto;
}

.carousel .carousel__item--visible {
  display: block;
  animation: fadeVisibility 0.5s;
}

.carousel .carousel__actions {
  display: flex;
  width: 100%;
  justify-content: space-between;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

.carousel .carousel__actions button {
  border-radius: 50px;
  border: 0;
  font-weight: bold;
  cursor: pointer;
  width: 40px;
  height: 40px;
}

.carousel .carousel__actions button#carousel__button--prev {
  margin-left: 20px;
}

.carousel .carousel__actions button#carousel__button--next {
  margin-right: 20px;
}

@keyframes fadeVisibility {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
    transform: opacity linear;
  }
}

    </style>
  </head>

  <body> 
    <!-- this is the html for the carousel -->
    <div class="carousel">
      <div class="carousel__item carousel__item--visible">
        <img src="../img/banner.jpg">
      </div>
      <div class="carousel__item">
        <img src="../img/banner2.jpg">
      </div>
      <div class="carousel__item">
        <img src="../img/banner3.jpg">
      </div>
      <div class="carousel__item">
        <img src="../img/banner4.jpg">
      </div>
      <div class="carousel__item">
        <img src="../img/banner5.jpg">
      </div>

      <div class="carousel__actions">
        <button id="carousel__button--prev" aria-label="Previous slide"></button>
        <button id="carousel__button--next" aria-label="Next slide">></button>
      </div>
    </div>

    <script>
      let slidePosition = 0;
       const slides = document.getElementsByClassName('carousel__item');
       const totalSlides = slides.length;
// these two .documents create the functionality of the buttons going to the next and previous slide
document.
  getElementById('carousel__button--next')
  .addEventListener("click", function() {
    moveToNextSlide();
  });
document.
  getElementById('carousel__button--prev')
  .addEventListener("click", function() {
    moveToPrevSlide();
  });
// this function updates the slide position and removes the hidden class from the slide and adds the visible class
function updateSlidePosition() {
  for (let slide of slides) {
    slide.classList.remove('carousel__item--visible');
    slide.classList.add('carousel__item--hidden');
  }

  slides[slidePosition].classList.add('carousel__item--visible');
}
// this function moves to the next slide and updates the slide position
function moveToNextSlide() {
  if (slidePosition === totalSlides - 1) {
    slidePosition = 0;
  } else {
    slidePosition++;
  }

  updateSlidePosition();
}
// this function moves to the previous slide and updates the slide position
function moveToPrevSlide() {
  if (slidePosition === 0) {
    slidePosition = totalSlides - 1;
  } else {
    slidePosition--;
  }

  updateSlidePosition();
}

    </script>
  </body>
</html>
