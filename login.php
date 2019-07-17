<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($con,$_POST['name']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT username,password FROM signup WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($con,$sql);
        //print_r($result); exit;

     while( $row = mysqli_fetch_assoc($result)) { echo $row['username'];
     $active = $row['username'];
       $active = $row['password'];
     }
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
//         session_register("username");
         $_SESSION['name'] = $username;
         
         header("location: dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
        //print_r($data); exit;
?>


