

<?php
include_once("admin/config.php");
if(isset($_POST['submit'])){

    $username= $_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM customerregister
            where mail='$username' AND password= '$password' ";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['email'] = $username;
        
        header("Location: consoles.php");
        
    }else{
        echo "login failed";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css" >

</head>
<body>
<header>
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="customerregister.php">Sign Up</a>
                    <a href="customerlogin.php">Sign In</a>

                    </div>

        </header>






<div class="flex items-center h-screen w-full bg-gray-400">
  <div class="w-full bg-white rounded  p-8 m-4 md:max-w-sm md:mx-auto">

  <div class="w-full  p-4 ">
  <section class="w-20 h-20 mx-auto ">

  <img src="img/hamlet.jpg" height= "200" class="rounded-full" width="200" alt=" ">

        </section>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method ="post">
<h1 class=" text-xl font-bold">Sign in to your account</h1>
      <div>
        <span class="text-gray-600  text-sm">
          Don't have an account?
        </span>
        
        <a href="customerregister.php" class="text-gray-700 text-sm font-semibold">Register</a>
      </div>
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
        Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker " required id="username" type="email" placeholder="Username" name="email">
    </div>
    
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3 " required id="password" type="password" placeholder="******************" name="password">

    </div>
    

    <div class="flex items-center justify-between">
      
      <input type="submit" name="submit" class="bg-black  text-white font-bold py-2 px-4 rounded" value="Sign In " >
    </div>
</div>
</form>
</body>
</html>
