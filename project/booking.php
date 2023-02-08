<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:customerlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css" >
    <link rel="stylesheet" href="css/home.css" >

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    

    <title>Document</title>
</head>
<body>

<header>
                <div class="navbar">
                    <a href="index.php">Home</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="consoles.php">Consoles</a>
                    <a href="logout.php">Logout</a>
                    

                    </div>

        </header>
<div>
        <div class="sidebar">
        <a href="">PC Bookings</a>
        <a href="">Playstation Bookings</a>
      </div>
</div>

<div>
<div class="info " >
        <div class="rounded-lg  p-1  m-1 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <p class="text-4xl text-left font-bold m-3">Booking Details <a href="" class="text-right"></a></p>
      </div>

      


        <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Console Name</th>
                <th class="px-4 py-3 text-center">Time</th>
                <th class="px-4 py-3 text-center">Date</th>
                <th class="px-4 py-3 text-center">Payment</th>
                <th class="px-4 py-3 text-center">Action</th>

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("admin/config.php");
                  // create a query
                  //$sql="SELECT pc_id,pcname,time,payment,email,date FROM record";
                  $sql="SELECT * FROM pcbooking WHERE email='{$_SESSION['email']}'";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300 ">
                  <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>

                    <td class="px-4 py-3 text-center"><?php echo $row["pcname"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["time"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["date"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["payment"]; ?></td>
                    <td  class="px-4 py-3 text-center "><a href="deletepcbooking.php?pc_id=<?php echo $row["pc_id"]; ?>"><i class="fas fa-trash"></i></a></td>



                  
                </tr>
                <?php $count++;?>
                    <?php
                    }
                  }
                  ?>
                  </tr>
            </tbody>
          </table>

          <table class="rounded-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
            <thead>
            <tr class="text-left border-b-4 border-gray-900">
                <th class="px-4 py-3 text-center">S.N</th>
                <th class="px-4 py-3 text-center">Console Name</th>
                <th class="px-4 py-3 text-center">Time</th>
                <th class="px-4 py-3 text-center">Date</th>
                <th class="px-4 py-3 text-center">Payment</th>
                <th class="px-4 py-3 text-center">Action</th>

              </tr>
            </thead>
            <tbody>
              <tr>
            <?php
                  include_once("admin/config.php");
                  // create a query
                  //$sql="SELECT ps_id,psname,time,payment,email,date FROM record";
                  $sql="SELECT * FROM psbooking WHERE email='{$_SESSION['email']}'";
                  //execute query
                  $result=mysqli_query($conn,$sql);
                    $count=1;
                  if($result){                 
                  while($row=mysqli_fetch_assoc($result)){?>
                  <tr class=" hover:bg-gray-300 ">
                  <td  class="px-4 py-3 text-center" ><?php echo $count; ?></td>

                    <td class="px-4 py-3 text-center"><?php echo $row["psname"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["time"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["date"]; ?></td>
                    <td class="px-4 py-3 text-center"><?php echo $row["payment"]; ?></td>
                    <td  class="px-4 py-3 text-center "><a href="deletepsbooking.php?ps_id=<?php echo $row["ps_id"]; ?>"><i class="fas fa-trash"></i></a></td>



                  
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
</body>
</html>