<?php
include 'connection.php';
if(isset($_POST['submitt'])){
  $fname=mysqli_real_escape_string($con,$_POST['funame']);
  $lname=mysqli_real_escape_string($con,$_POST['luname']);
  $Eemail=mysqli_real_escape_string($con,$_POST['Email']);
  $password=mysqli_real_escape_string($con,$_POST['pass']);
  $cpassword=mysqli_real_escape_string($con,$_POST['cpass']);
  $gender=mysqli_real_escape_string($con,$_POST['gender']);
  $phno=mysqli_real_escape_string($con,$_POST['phno']);
  $pass=password_hash($password,PASSWORD_BCRYPT);
  $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
  $equery="SELECT * FROM `signin` WHERE Email_id='$Eemail'";
  $query=mysqli_query($con,$equery);
  $ecount=mysqli_num_rows($query);
  if($ecount>0){
    echo"already exsist";
  }else{
    if($password==$cpassword){
      $ins="INSERT INTO `signin`(`FName`, `LName`, `Email_id`, `Password`, `CPassword`, `Gender`, `Phno`) VALUES ('$fname','$lname','$Eemail','$pass','$cpass','$gender','$phno')";
      $iquery=mysqli_query($con,$ins);
      if($con){
        echo"success";
      }
      else{
        echo "not connected";
      }
    }
    else{
      echo "password not correct";
    }
  }
}
if(isset($_POST['submit'])){
  $email=$_POST['em'];
  $password=$_POST['passw'];
  $esearch="SELECT * FROM `signin` WHERE Email_id='$email'";
  $query=mysqli_query($con,$esearch);
  $ecount=mysqli_num_rows($query);
  if($ecount){
    $epass=mysqli_fetch_assoc($query);
    $dbpass=$epass['Password'];
    $pass_decode=password_verify($password, $dbpass);
    if($pass_decode){
      echo"logged in";
      include 'welcome.php'; 
    }else{
      echo "<script type='text/javascript'> 
 alert('incorrect') 
 </script>";
     
    }
    }else{
    echo "<script type='text/javascript'> 
    alert('Email doesnt exsist') 
    </script>";
    
  }
}

?>