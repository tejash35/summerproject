
<html>
    <head>
        <title>Home Page</title>

        <link rel="stylesheet" href="css/home.css" >
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


    </head>
    <body>
        <!--Home Page-->
        <div class="home_page">
            <header>
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="#contact">Contact Us</a>
                    <a href="customerregister.php">Sign Up</a>
                    <a href="customerlogin.php">Sign In</a>
                    <!--<div class="dropdown">
                      <button class="dropbtn">Admin 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <a href="admin/register.php">Register</a>
                        <a href="admin/login.php">Login</a>
                      </div>
                    </div>--> 
                  </div>

        </header>
            <!--<div class="button">
                <a href="customerregister.php" class="btn">Sign Up</a>
                <a href="customerlogin.php" class="btn">Sign In</a>
            </div>-->

            

        </div> 
        <?php
            include('contact.php')
            ?>
    </body>
</html>

