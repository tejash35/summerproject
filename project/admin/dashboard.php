
<?php
session_start();
if(!isset($_SESSION['mail'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamlet Gaming Zone</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/sidebar.css" >
    <link rel="stylesheet" href="../css/home.css" >
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <style>
    body{background:white!important;}

    #image {
            width: 150px;
            height: 150px;
            overflow: hidden;
            margin: 0 auto;
        }
      
        #image img {
            width: 80%;
            transition: 0.5s all ease-in-out;
        }
      
        #image:hover img {
            transform: scale(1.5);
        }
</style>
<!--<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  height: 100%;
  overflow: auto;
  position: fixed;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>-->
</head>

<body>

<header>
                <div class="navbar">
                    <a href="adminlogout.php">Logout</a>
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
<div class="sidebar">
  <a href="#customer">Customer's Details</a>
  <a href="#pc">Pc Booking Details</a>
  <a href="#ps">PlayStation Booking Details</a>
  <a href="#customerfeedback">Customer FeedBack</a>
</div>

      
    <div class="content">
    
    <div id="customer">
    <div class="info " >
        <div class="rounded-lg  p-1  m-1 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <p class="text-4xl text-left font-bold m-3">Customer's Details <a href="" class="text-right"></a></p>
      </div>

        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Name</th>
                <th class="px-4 py-3 text-center">Email</th>
                <th class="px-4 py-3 text-center">Number</th>

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT pc_id,pcname,time,payment,email,date FROM record";
                  $sql="SELECT * FROM customerregister ORDER BY register_id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300 ">
                  <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>

                    <td class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["mail"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["number"]; ?></td> 
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
            </tbody>
          </table>
    </div>



          <div id="pc">
          <div class="info " >
        <div class="rounded-lg  p-1  m-1 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <p class="text-4xl text-left font-bold m-3"> Pc Booking Details <a href="" class="text-right"></a></p>
      </div>
        </div>
        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">PC Name</th>
                <th class="px-4 py-3 text-center">Time</th>
                <th class="px-4 py-3 text-center">Payment</th>
                <th class="px-4 py-3 text-center">Email</th>
                <th class="px-4 py-3 text-center">Date</th>
                  

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT pc_id,pcname,time,payment,email,date FROM record";
                  $sql="SELECT * FROM pcbooking ORDER BY pc_id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300 ">
                  <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>

                    <td class="px-4 py-3 text-center"><?php echo $row["pcname"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["time"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["payment"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["email"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["date"]; ?></td>


                  
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
            </tbody>
          </table>
          </div>

          <div id="ps">
          <div class="info " >
        <div class="rounded-lg  p-1  m-1 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <p class="text-4xl text-left font-bold m-3"> PlayStation Booking Details <a href="" class="text-right"></a></p>
      </div>
        </div>
        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">PC Name</th>
                <th class="px-4 py-3 text-center">Time</th>
                <th class="px-4 py-3 text-center">Payment</th>
                <th class="px-4 py-3 text-center">Email</th>
                <th class="px-4 py-3 text-center">Date</th>
                  

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT pc_id,pcname,time,payment,email,date FROM record";
                  $sql="SELECT * FROM psbooking ORDER BY ps_id desc";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300 ">
                  <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>

                    <td class="px-4 py-3 text-center"><?php echo $row["psname"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["time"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["payment"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["email"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["date"]; ?></td>


                  
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
            </tbody>
          </table>
          </div>
          <div id="customerfeedback">
          <div class="info " >
        <div class="rounded-lg  p-1  m-1 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <p class="text-4xl text-left font-bold m-3"> Customer FeedBack <a href="" class="text-right"></a></p>
      </div>
        </div>
        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Full Name</th>
                <th class="px-4 py-3 text-center">Email</th>
                <th class="px-4 py-3 text-center">FeedBack</th>

                  

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("config.php");
                  // create a query
                  //$sql="SELECT pc_id,pcname,time,payment,email,date FROM record";
                  $sql="SELECT * FROM contact";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300 ">
                  <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>

                    <td class="px-4 py-3 text-center"><?php echo $row["name"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["email"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["message"]; ?></td>



                  
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
            </tbody>
          </table>
          </div>
    </div>
</body>
</html>