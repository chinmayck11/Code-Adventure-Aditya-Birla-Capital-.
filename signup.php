<?php
 $name = $_POST['name'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];

$host = "localhost"; 
$dbUsername="root";
$dbpassword="";
$dbname="signup";
$con = mysqli_connect($host,$dbUsername,$dbpassword,$dbname);
 
if(mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
}else {
    $SELECT ="SELECT username from signup Where username='$name'";
    $data = mysqli_query($con,$SELECT);
    //print_r($data); exit;
    if($data->num_rows!=0){
        echo "usename already exist";
        
    }
    else{
        $INSERT = "INSERT into signup(username,password,confirm_password) values ('$name','$password','$cpassword')";
        $data2 = mysqli_query($con,$INSERT); print_r($data); exit;
        if($data2){
            echo "User registered";
	echo ' ';
	echo '<a href="signup.html">Click here to Login</a>';


        }else{
            echo "some error";
        }
    }
   
    
    
     $con->close();
  
    
}

?>