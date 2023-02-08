<?php
$errUsername = $errPassword = $errnumber=$errmail= " ";
if(isset($_POST['submit'])){
    $username= $_POST['uname'];
    $number = $_POST['phonenumber'];

    $mail = $_POST['mail'];

    $password = $_POST['password'];
    

    if(empty($username) && empty($password)){
        $errUsername ="Enter Your Name";
        $errPassword = " Enter  Your password";
        $errnumber = " Enter  Your phone number";
        $errmail = " Enter  Your mail";
    }else{
        include_once("admin/config.php");
        $sql = "INSERT INTO customerregister(name,mail,password,number)
        Values('$username','$mail','$password','$number')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: customerlogin.php");
        }else{
            "Record not uploaded".mysqli_error($conn);
        }
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
<h1 class=" text-xl font-bold"> Customer Register Account</h1>
      
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2"  for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username" required name="uname">
    </div>

    <div class="mb-5">

    <label class="block text-grey-darker text-sm font-bold mb-2"  for="email">
      Email
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" type="email" placeholder="Email" required name="mail">
  </div>


  <div class="mb-6">
  <label class="block text-grey-darker text-sm font-bold mb-2"  for="contact number">
    Contact Number
  </label>
  <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="contact" type="number" placeholder="Contact" required name="phonenumber">
</div>
    
    <div class="mb-7">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" required  placeholder="******************" name="password">

    </div>
    

    <div class="p-2 w-full">
            <input type="submit"  value="Register" name="submit" class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"> 
          </div>
</div>
</form>
</body>
</html>