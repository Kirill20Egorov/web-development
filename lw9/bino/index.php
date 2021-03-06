<!DOCTYPE html>
<html lang = "en" id = "header">
  <head>
    <meta charset="utf-8" />
    <title>HTML5</title>
     <link rel='stylesheet' href="styles/style.css"> 
     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro:300,400&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
     <link rel='stylesheet' href="styles/reset.css"> 
     <script src="js/fetch.js" defer></script>
  </head>
<body>
  <header>
  	<div class = "nav_container">
      <div class="header_inner">
        <div class="header_logo"> 
          <img src="images/Logo.png" alt="logo">
        </div>
        <nav class = "nav_header">
          <a class="nav_link" href="#">HOME</a>
          <a class="nav_link" href="#">ABOUT US</a>
          <a class="nav_link" href="#">PORTFOLIO</a>
          <a class="nav_link" href="#">PRICING</a>
          <a class="nav_link" href="#">TEAM</a>        
          <a class="nav_link" href="#">BLOG</a> 
          <a class="nav_link" href="#">CONTACT</a>           
        </nav>            
      </div>
      <div class = "buttons_slides">
    	  <a id="ch_slide" class = "prev">
      	  <img src="images/back_button.png" alt = "button">
        </a>
        <a id="ch_slide" class = "next">
      	  <img src="images/next_button.png" alt = "button">
        </a>
      </div>
    </div>
  	<div class = "slide" style="display: block;">
  	  <div class = "background_first">
        <div class = "intro">
          <div class ="container">   
            <p class ="intro_suptitle">
              Our Clients Are Our First   Priority
            </p>
            <h1 class ="intro_title">WELCOME TO BINO</h1> 
            <div class="intro_subtitle">
              <div class ="line"></div>
              <img src ="images/red_ellipse.png" class="cir" alt = "circle">
              <div class = "line"></div>    
            </div>     
            <p class = text_subtitle> 
              Lorem Ipsum is simply dummy text of  the printing and typesettin. Lorem lpsum has been the industy's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            </p>
            <div class = "buttons">
              <a href = "*" class = "button">GET STARTED NOW</a>
              <a href = "*" class = "button">LEARN MORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
    <div class = "anchor">
      <img alt="anchor" src = "images/anchor.png">
    </div>
    <div class = "info_block">
      <div class = "element">
        <div class = "border_img"> 
          <img alt="glasses" src = "images/glasses.png" class = "img_elm">
        </div>
        <h2 class = "header_info"> SLEEK DESIGN </h2>         
        <img alt="line" src = "images/line.png" class = "shape_img">
        <p class = "text_info"> 
          Lorem Ipsum is simply dummy text of the printing and typesettin. 
          Lorem lpsum has been the industy
        </p>
      </div>
      <div class = "element">
        <div class = "border_img"> 
          <img alt="heart" src = "images/heart.png" class = "img_elm">
        </div>
        <h2 class = "header_info"> CLEAN CODE </h2>
        <img alt = "line" src = "images/line.png" class = "shape_img">
        <p class = "text_info"> 
          Lorem Ipsum is simply dummy text of the printing and typesettin. 
          Lorem lpsum has been the industy
        </p>    
      </div>
      <div class = "element">
        <div class = "border_img"> 
          <img alt = "lamp" src = "images/lamp.png" class = "img_elm">
        </div>
        <h2 class = "header_info"> CREATIVE IDEAS </h2>
        <img alt = "line" src = "images/line.png" class = "shape_img">
        <p class = "text_info"> 
          Lorem Ipsum is simply dummy text of the printing and typesettin. 
          Lorem lpsum has been the industy
        </p>            
        </div>
      <div class = "element">
        <div class = "border_img">
          <img alt = "chat" src = "images/chat.png" class = "img_elm">
        </div>
        <h2 class = "header_info"> FREE SUPPORT </h2>
        <img alt = "line" src = "images/line.png" class = "shape_img">
        <p class = "text_info"> 
          Lorem Ipsum is simply dummy text of the printing and typesettin. 
          Lorem lpsum has been the industy
        </p>   
      </div>
    </div>
  <article class = "services">
    <div class = "container">
      <div class = "header_services">
        <h2> OUR SERVICES </h2>
        <img alt ="redrectangle" class = "imghead_serv" src = "images/redrect.png"/>    
      </div>
      <div class = "main_services">
      <div class = "info_services">
          <h3 class ="header_form_info"> WEB DESIGN </h3>
          <p class="services_info"> 
            Lorem Ipsum is simply dummy text of the printing and typesettin. 
            Lorem lpsum has been the industy. 
            Lorem lpsum has been the industy's standard dummy. 
          </p>
          <h3 class ="header_form_info"> PRINT DESIGN </h3>
          <p class="services_info">
            Lorem Ipsum is simply dummy text of the printing and typesettin. 
            Lorem lpsum has been the industy. 
            Lorem lpsum has been the industy's standard dummy. 
          </p> 
          <h3 class ="header_form_info"> PHOTOGRAPHY </h3>
          <p class="services_info"> 
            Lorem Ipsum is simply dummy text of the printing and typesettin. 
            Lorem lpsum has been the industy. 
            Lorem lpsum has been the industy's standard dummy.
          </p>
      </div>
      <div class = "images_to_serv">
        <div class = "img_serv">
          <img alt = "monitor" src = "images/monitor.png"/>
        </div>
        <div class = "img_serv">
          <img alt = "lists" src = "images/lists.png"/>
        </div>
        <div class = "img_serv">
          <img alt = "camera" src = "images/camera.png"/>          
        </div>
      </div>
      </div>
    </div>
  </article>
  <?php include "form.php" ?> 
  <footer class = "footer">
    <div class = "footer_bg">
      <div class = "h_footer">
        <h2> Let's Get Started Now. It's FREE! </h2>
      </div>
      <p class = text_f>30 day free trial. 
        Free plan allows up to 2 projects. 
        Pay if you need more. 
        Cancel anytime.No catches.
      </p>
      <a href = "*" class = "button_start">START FREE TRIAL</a>
      <a href = "#top" class = "button_footer">
        <img alt = "button" class = "button_footer" src = "images/up_button.png"/>
      </a> 
      <div class = "down">
        <nav class = "nav_down">
          <a class="log_link" href="#"><img alt="facebook" src = "images/facebook.png"> </a>
          <a class="log_link" href="#"><img alt="twi" src = "images/twitter2.png"></a>
          <a class="log_link" href="#"><img alt="rss" src = "images/rss.png"></a>
          <a class="log_link" href="#"><img alt="google" src = "images/google plus.png"></a>
          <a class="log_link" href="#"><img alt="skype" src = "images/skype.png"></a> 
          <a class="log_link" href="#"><img alt="vimeo" src = "images/vimeo.png"></a> 
          <a class="log_link" href="#"><img alt="tumblr" src = "images/tumblr.png"></a>  
        </nav> 
      </div>
    </div>
  </footer>
</body>
</html>
