<?php

include "phpqueries/db.php";

$dob =  $_POST['dob'];
$gender =  $_POST['gender']; 
$country =  $_POST['country'];
$state =  $_POST['state'];
$hometown =  $_POST['hometown'];


$params = array($dob,$gender,$country,$state,$hometown);
$sql="INSERT INTO PersonDetails (dob, gender, country, state, hometown)
VALUES (?,?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else {  
    header('location: dashboard.php');  

} 

?>