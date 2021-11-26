<?php

$category =  $_POST['category'];

if ($category == 'Electrician') {  
    header('location: electrician.php'); 
} else if ($category == 'Plumber') {  
    header('location: plumber.php');  
} else{
    header('location: notfound.php');    
}

?>