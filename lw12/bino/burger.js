
var currentMenu = false;
var lineBurger = document.getElementsByClassName("line_burger");
var menuBurger = document.getElementById("header_inner");
var buttonBurger = document.getElementById("button_burger");
var lineBurger = document.getElementsByClassName("line_burger");
buttonBurger.onclick = function(){
  showMenu(false);    
}  
function showMenu(state)
{  
  console.log(currentMenu);
  if(currentMenu == false)
  {
    menuBurger.style.display = "flex";
    currentMenu = true;
    for (var j = 0; j < lineBurger.length; j++)
    {
      if (j == 0)
      {
          lineBurger[j].style.transform = `rotate(${45}deg)`;
      }
      if (j == 1)
      {
          lineBurger[j].style.display = "none";
      }
      if (j == 2)
      {
          lineBurger[j].style.marginTop = '-10.9px';
          lineBurger[j].style.transform = `rotate(${-45}deg)`;           
      }
      lineBurger[j].style.backgroundColor = "#e74c3c"; 
    }
  }
  else
  {
    menuBurger.style.display = "none";
    currentMenu = false;
    for (var j = 0; j < lineBurger.length; j++)
    {
      lineBurger[j].style.backgroundColor = "#fff"; 
      if (j == 0)
      {
          lineBurger[j].style.transform = `rotate(${0}deg)`;
      }
      if (j == 1)
      {
          lineBurger[j].style.display = "block";
      }
      if (j == 2)
      {
          lineBurger[j].style.transform = `rotate(${0}deg)`;
          lineBurger[j].style.marginTop = '3.5px';           
      }
      lineBurger[j].style.backgroundColor = "#fff"; 
    }
  }
}

