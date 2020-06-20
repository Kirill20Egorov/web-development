<!DOCTYPE html>
<html lang = "en" id = "header">
  <head>
    <meta charset="utf-8" />
    <title>HTML5</title>
     <link rel='stylesheet' href="styles/style.css"> 
     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro:300,400&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro&display=swap" rel="stylesheet">
     <link rel='stylesheet' href="styles/reset.css"> 
  </head>
  <body>
    <form method="POST" action = "action.php">
  	  <div class = "back_form">
        <label for="name" class="form_label">Name</label>
        <input type="text" name="name" value = "<?php echo $name ?>" class = "form_input">
        <label for="email" class="form_label">Email</label>
        <input type="text" name="email" value = "<?php echo $email ?>"  class = "form_input">
        <label for="subject" class="form_label">Subject</label>
        <input type="text" name="subject" class = "form_input" value = "<?php echo $subject ?>" >
        <label for="message" class="form_label">Message</label>
        <textarea name="message" cols="10" rows="6" class = "form_input" ><?php echo $message ?> </textarea>    
      </div>
    </form>
  </body>
</html>