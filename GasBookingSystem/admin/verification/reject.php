<?php
include "../../config.php";
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $f=2;
		$q = "UPDATE `customers` SET isVerified='$f' where userId='$userId'";
		$result = $con->query($q);
		if ($result == true) {
      echo '<script>alert("User has been rejected!"); window.location.href = "../nonverified/view.php";</script>';
		} else {
			echo "Error";
		}
}
?>