let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].classList.remove("zoom-in");
  }
  slides[slideIndex-1].style.display = "block";
  slides[slideIndex-1].classList.add("zoom-in");
}

setInterval(() => {
  plusSlides(1);
}, 9000);

// end of slide show