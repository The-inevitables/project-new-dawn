<?php

include "phpqueries/db.php";

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$bloodgroup = $_POST['bloodgroup'];
$dob =  $_POST['dob'];
$hometown =  $_POST['hometown'];


$params = array($dob,$gender,$country,$state,$hometown);
$sql="INSERT INTO volunteer (fullname, email, phone, bloodgroup, dob, hometown)
VALUES (?,?,?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else {  
    header('location: volunteer.php');  

} 

?>