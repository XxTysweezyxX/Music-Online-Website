<!DOCTYPE html>

<?
require 'loginProcess.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Music Online</title>
        <meta name="description" content="Flexbox page layout, MusicOnline">
    <meta name="keywords" content="Flexbox, Responsive, R&B, Rap, Afrobeats, Home, Buy, Sell, Vinyls, Account">
    <meta name="author" content="Timi Odedairo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Css/register.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>



    <body>
     <!--HTML for the frosted menu box-->
     <div class="box">
        <!--This is the html for the yellow side of the frosted box-->
        <div class="yellow-box"></div>
        <img src="img/Electric guitar aesthetic.jpg" class="left-img-box">
        <!--Start here foe whatever u want in the white part-->
        

        
        <h1 class="register-heading cinzel-decorative-bold">Login</h1>
        <!--Link to google foe the fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">


        <form action="loginProcess.php" method="POST">
        <!-- Username input -->
        <div class="username-input">
          <input type="text" id="username" name="username" placeholder=" ">
          <label for="username" class="username-label" >Username</label>
        </div>

        <!--HTML FOR THE PASSWORD PART-->
        <div class="password-input">
          <input type="password" id="password" name="password" placeholder=" ">
        <label for="username" class="password-label">Password</label>
        </div>

        <!--HTML FOR THE ENTER BUTTON-->
        <div class="enter-button"> <!--Moving the button-->
        <button class="enter-btn">Enter</button> <!--Styling the button-->
        </div>

      </form> 

     </div>
    </body>








    <!--This is the code for the animated background-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <!-- Background & animion & navbar & title -->
      <div class="container-fluid">
    <!-- Background animtion-->
        <div class="background">
          <div class="cube"></div>
           <div class="cube"></div>
           <div class="cube"></div>
           <div class="cube"></div>
           <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>
          <div class="cube"></div>

        </div>


    <script src="register.js"></script>    
</html>
