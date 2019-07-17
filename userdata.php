<?php

if ($_POST)
{
 $Username = $_POST['Username'];
 $Email = $_POST['Email'];
 $Full_Name = $_POST['fullname'];
 $Insta_id = $_POST['insta_id'];
 $Home_Address = $_POST['Address'];
 $loan_id = $_POST['loan_id'];
 $Country = $_POST['country'];
 $postal_code = $_POST['postalcode'];
 $Aadhar_Number = $_POST['Aadharnum'];



$host = "localhost"; 
$dbUsername="root";
$dbpassword="";
$dbname="signup";
$con = mysqli_connect($host,$dbUsername,$dbpassword,$dbname);
 
if(mysqli_connect_error()) {
    die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
}else {
    $SELECT ="SELECT username from signup Where username='$Username'";
    $data = mysqli_query($con,$SELECT);
    //print_r($data); exit;
    if($data->num_rows!=0){
        echo "username already exist";
        
    }
    else{
        $INSERT = "INSERT into userdata(username,email,fullname,insta_id,Address,loan_id,country,postalcode,Aadhar_num) values ('$Username','$Email','$Full_Name','$Insta_id','$Home_Address','$loan_id','$Country','$postal_code','$Aadhar_Number')";
        $data2 = mysqli_query($con,$INSERT); //print_r($data); exit;
        if($data2){
            echo "<script> alert('Account Created')</script>";
	
	echo '<a href="user.php">Click here to go to Home Page</a>';


        }else{
            echo "some error";
        }
    }
   
    
    
     $con->close();
  
    
}
}

?>