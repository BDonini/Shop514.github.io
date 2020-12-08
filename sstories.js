var slideIndex = 0;
showSlides();

function showSlides()
{
  var i;
  var stories = document.getElementsByClassName("story");
  var dots = document.getElementsByClassName("dot");

  for(i = 0; i < stories.length; i++)
  {
    stories[i].style.display = "none";
  }
  slideIndex++;
  if(slideIndex > stories.length)
  {
    slideIndex=1;
  }
  for(i = 0; i < dots.length; i++)
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  stories[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); //change image every 3 seconds
}