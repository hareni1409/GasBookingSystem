<?php
//database connection code
$con=new mysqli("localhost","root","Healing@5","gas_booking");
if($con->connect_error){
    die("Error in connection:".$con->connect_error);
}
?>