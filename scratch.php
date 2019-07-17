<?php
// echo $_POST['body'];
$data = json_decode(file_get_contents('php://input'),true);
// echo json_encode($data);
 $name = $data['username'];
 $credit = $data['credit'];
 $debit = $data['debit'];
 $balance = $data['balance'];

$host = "localhost"; 
$dbUsername="root";
$dbpassword="";
$dbname="signup";
$con = mysqli_connect($host,$dbUsername,$dbpassword,$dbname);
 

    
        $INSERT = "INSERT into points(username,credit,debit,balance) values ('$name','$credit','$debit','$balance')";
        $data2 = mysqli_query($con,$INSERT); 
        if($data2){
            echo json_encode(true);
   
    
    
     $con->close();
  
    
}

?>