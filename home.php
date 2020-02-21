<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>



<html>

<head>
    
    <title> HomePage</title>
      <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel ="stylesheet" type = "text/css"
      href= "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    </head>
    
    <body>
    <div class="container">
        
    <a class ="float-right" href="logout.php"> LOG OUT</a>
       
 
             </div>
 
           <h3>Welcome <?php echo $_SESSION['username']; ?>,</h3>
        <div id ="buttons">
      <button type="button home-button" id="button1" >Add</button>
      <button type="button contact-button" id="button2">Delete</button>
        </div>
        <div class = "gift-box">
        </div>
    </body>
</html>