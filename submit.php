<?php 

$con = mysqli_connect("localhost","root","","sfps_db");

if(isset($_POST['submit'])){

  $fname = $_POST['name'];
   $email = $_POST['email'];
   $deprt = $_POST['select'];
    $username = $_POST['username'];
     $password = $_POST['password'];

     $name =$_FILES['file']['name'];
      $temp =$_FILES['file']['tmp_name'];

     // echo $name;
     // echo $email;
     //  echo $deprt;
     // echo $username;
     // echo $password;
     //  echo $name;
     //  echo $temp;

     // die();

        $location="upload_file/";
          $image=$location.$name;

          $target_dir="upload_file/";
          $finalImage=$target_dir.$name;

  move_uploaded_file($temp,$finalImage);

   $query = mysqli_query($con,"INSERT INTO `admin`(`your_name`, `your_email`, `Your_Department`, `username`, `pass`, `image`) VALUES ('$fname','$email',$deprt,'$username','$password','$image')");
   
   if(!$query){
     echo mysqli_error($con);
   }  
   else if ($query){
     echo "<script>alert('successfully submit');window.location.href='pages-login.php'</script>";
   }
   else{
    echo "<script>alert('submit')</script>";
   }
}





 ?>