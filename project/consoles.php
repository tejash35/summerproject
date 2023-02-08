<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/console.css">
    <link rel="stylesheet" href="css/home.css" >
    

</head>
<body>

<header>
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="booking.php">Booking</a>
                    <a href="logout.php">Logout</a>
                    

                    </div>

        </header>



    

    <div class="main">
    
      <h2 class="choose-console">Choose Your Console</h2>

      <div class="consoles">
             <div  class="console"><a href="choosePc.php"><img src="img/pc.jpg" alt="">Gaming PC</a></div>
      <div  class="console"><a href="choosePS.php"><img  src="img/ps4.jpg" alt="">Playstation 4</a></div>
</div>


    </div>



</body>
</html>