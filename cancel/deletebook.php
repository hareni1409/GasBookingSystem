<?php

include "../config.php";
$bookingId = $_GET['bookingId'];
  if(isset($_POST['cancel'])){
    $qry = "DELETE FROM `booking` WHERE `bookingId`='$bookingId'";
    $result = $con->query($qry);
    if ($result == TRUE) {
      echo "Booking cancelled!";
      header("Location: cancel.php");
    } else {
      echo $con->error;
    }
  }
?>