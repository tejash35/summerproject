<?php
include("admin/config.php");
$id=$_REQUEST['pc_id'];
$query = "DELETE FROM pcbooking WHERE pc_id=$id";
$result=mysqli_query($conn,$query);
header ("Location: booking.php");   
?>