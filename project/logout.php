<?php

// session_start();

// session_destroy();

// header('location:customerlogin.php');
session_start();
session_destroy();
setcookie('mail',"",time()-1);
header("location: customerlogin.php");
?>

?>