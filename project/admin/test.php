<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/sidebar.css" >
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
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
</style>
<body>
    <div class="sidebar">
        <a href="#content">Customer's Details</a>
        <a href="">Pc Booking Details</a>
        <a href="">PlayStation Booking Details</a>
        <a href="">Customer FeedBack</a>
      </div>
      <div class="content" id="content">
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
</body>
</html>