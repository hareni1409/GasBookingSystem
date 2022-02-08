<?php
include "../../config.php";
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $f=1;
		$q = "UPDATE `customers` SET isVerified='$f' where userId='$userId'";
		$result = $con->query($q);
		if ($result == true) {
      echo '<script>alert("User has been verified successfully!"); window.location.href = "../nonverified/view.php";</script>';
		} else {
			echo "Error";
		}
}
?>