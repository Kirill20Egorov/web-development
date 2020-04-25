
var currentSlide = 1;
var slide = document.getElementsByClassName("slide");
var prev = document.getElementById("prev");
var next = document.getElementById("next");
prev.onclick = function(){
  changeSlide(-1);    
} 
next.onclick = function(){
  changeSlide(+1);    
} 
slide[currentSlide-1].style.display = "block";  
function changeSlide(n){  
  currentSlide += n;
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

