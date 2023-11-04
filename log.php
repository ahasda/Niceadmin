<?php 

$con = mysqli_connect('localhost','root','','sfps_db') or die();

if (isset($_REQUEST['login'])) {
	
$username = $_POST['username'];
$pass = $_POST['password'];

$query = mysqli_query($con,"SELECT * FROM `admin` WHERE username = '$username' and pass = '$pass'");

if ($query) {
	
	while ($row = mysqli_fetch_array($query)) {
		
session_start();

$_SESSION['id'] = $row['id'];
$_SESSION['username'] = $row['username'];
$_SESSION['pass'] = $row['pass'];


echo "<script>alert('WelcomeBack User');window.location.href='index.php'</script>";

	}
}else{
	
echo "<script>alert('Something Went Wromg');window.location.href='pages-login.php'</script>"; 

}

}






 ?>