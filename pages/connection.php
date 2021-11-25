<?php


include "phpqueries/db.php";

$fname =  $_POST['fname'];
$lname =  $_POST['lname']; 
$email =  $_POST['email'];
$password =  $_POST['password'];


$params = array($fname,$lname,$email,$password);
$sql="INSERT INTO Person (fname, lname, email, password)
VALUES (?,?,?,?)";

$stmt = sqlsrv_query($conn, $sql, $params);
if ($stmt === false) {  
    echo "Row insertion failed.\n";  
    die(print_r(sqlsrv_errors(), true));  
} else {  
    header('location: sign_up.php');  

} 

?>