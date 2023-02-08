
 <?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:customerlogin.php');
}
?>
<?php 
include_once('admin/config.php');
if(isset($_POST['submit'])){

  $email = $_SESSION['email'];
  $pcname = $_POST['pcname'];
  $time = $_POST['time'];
  $payment = $_POST['payment'];
  $date = $_POST['date'];





  $sql = "INSERT INTO pcbooking(pcname,time,payment,email,date) Values('$pcname','$time','$payment','$email','$date')";
  $result = mysqli_query($conn,$sql);
  // if($result){
  //   // echo "data inserted";
  //       echo '<script type="text/javascript">';
  //   echo ' alert("YOur Booking has been placed!!!")';  //not showing an alert box.
  //   echo '</script>';   
  // }
  echo '<script type="text/javascript">';
    echo ' alert("YOur Booking has been placed!!!")';  //not showing an alert box.
    echo '</script>'; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css" >
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#date" ).datepicker({
	   				minDate: 0
	   			});
	  		});
	  	</script> -->



</head> 
<body>


<header>
                <div class="navbar">
                    <a href="index.php.
                    ">Home</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="logout.php">Logout</a>
                    

                    </div>

        </header>


<!-- Registration Form -->
<section class="text-gray-600   body-font relative  ">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      
    <div class="container px-5 py-24 mx-auto ">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Feel Free to Book your Console</h1>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          
          
          
          
          
          <div class="p-2 w-1/2">
          <div class="p-2 w-1/2">
            <div class="relative">
              <label for="pcname" class="leading-7 text-sm text-gray-600">CHoose your Pc</label> <br> 
              <select name="pcname" id="" required>
                
                <option value="" class="border border-indigo-100">Select Option!!</option>
                
                <option value="PC1">PC1</option>
                <option value="PC2">PC2</option>
                <option value="PC3">PC3</option>
              </select>
            </div>
          </div>
              <div class="relative">
                
                <div class="relative">
                      <label for="" class="leading-7 text-sm text-gray-600">Choose The Time:</label> <br>
                      <input type="radio" name="time"  value="10:00 - 11:00" id=""> 10:00 - 11:00   <br>
                      <input type="radio" name="time"  value="11:00 - 12:00" id=""> 11:00 - 12:00   <br>
                      <input type="radio" name="time"  value="12:00 - 1:00" id=""> 12:00 - 1:00   <br>
                      <input type="radio" name="time"  value="1:00 - 2:00" id=""> 1:00 - 2:00   <br>
                      <input type="radio" name="time"  value="2:00 - 3:00" id=""> 2:00 - 3:00   <br>
                      <input type="radio" name="time"  value="3:00 - 4:00" id=""> 3:00 - 4:00   <br>
                      <input type="radio" name="time"  value="4:00 - 5:00" id=""> 4:00 - 5:00   <br>
                      <input type="radio" name="time"  value="5:00 - 6:00" id=""> 5:00 - 6:00   <br>
                      <input type="radio" name="time"  value="6:00 - 7:00" id=""> 6:00 - 7:00   <br>
                      <input type="radio" name="time"  value="7:00 - 8:00" id=""> 7:00 - 8:00   <br>
                      
                      
                    </div>
                
              </div> 
              <div class="p-2 w-1/2">
            <div class="relative">
              <label for="payment" class="leading-7 text-sm text-gray-600">Date</label> <br> 
              <input type="date" name="date" id="date" min="<?php echo date('Y-m-d');?>" required>
            </div>
          </div>
            </div>
            <div class="p-2 w-1/2">
            <div class="relative">
              <label for="payment" class="leading-7 text-sm text-gray-600">Payment</label> <br> 
              <select name="payment" id="" required> 
                
                <option value="" class="border border-indigo-100">Select Option!!</option>
                <option value="Cash on Hand">Cash On Hand</option>
                <option value="Online Transaction">Online Payment</option>
              </select>
            </div>
          </div>
            
            

            
          
          
          <div class="p-2 w-full">
            <input type="submit"  value="Book" name="submit" class="flex mx-auto text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg"> 
          </div>

        </div>
      </div>
    </div>
</form>
  </section>

    
</body>
</html>