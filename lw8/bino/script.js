
var currentSlide = 1;
var slide = document.getElementsByClassName("slide");
function changeSlide(n){
  currentSlide += n;
  console.log(currentSlide);
  if(currentSlide > slide.length){
  	currentSlide = 1;
  }
  if(currentSlide < 1){
  	currentSlide = slide.length;
  }	
  for (i = 0; i < slide.length; i++) {
    slide[i].style.display = "none";
  }
  slide[currentSlide-1].style.display = "block";  
}

