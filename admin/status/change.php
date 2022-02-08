<?php
include "../../config.php";
$bookingId = $_GET['bookingId'];
echo $bookingId;

if (isset($_POST['change'])) {
  $deliveryStatus = $_POST['deliveryStatus'];
  $q = "UPDATE `booking` SET deliveryStatus = '$deliveryStatus' where bookingId = '$bookingId'";
  $result = $con->query($q);
  if ($result == true) {
    header("Location: list.php");
  } else {
    echo "Error";
  }
}
?>