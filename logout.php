<?php 

session_start();

session_unset();

session_destroy();


echo "<script>alert('See You Agarin User');window.location.href='pages-login.php'</script>";


 ?>