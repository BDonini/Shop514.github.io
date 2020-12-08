var slideIndex = 0;
showSlides();

function showSlides()
{
  var i;
  var spotlights = document.getElementsByClassName("spotlight");
  var dots = document.getElementsByClassName("dot2");

  for(i = 0; i < spotlights.length; i++)
  {
    spotlights[i].style.display = "none";
  }
  slideIndex++;
  if(slideIndex > spotlights.length)
  {
    slideIndex=1;
  }
  for(i = 0; i < dots.length; i++)
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  spotlights[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); //change image every 3 seconds
}
