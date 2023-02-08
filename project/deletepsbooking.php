<?php
include("admin/config.php");
$id=$_REQUEST['ps_id'];
$query = "DELETE FROM psbooking WHERE ps_id=$id";
$result=mysqli_query($conn,$query);
header ("Location: booking.php");   
?>