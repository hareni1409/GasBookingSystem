<?php
session_start();
include "../config.php";
$userId = $_SESSION['userId'];
$q = "SELECT * FROM `booking` where userId='$userId' AND deliveryStatus='Request pending'";
$result = $con->query($q);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,800;1,200;1,300;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../delete/styles.css">
  <!-- <link rel="stylesheet" href="../delete/styles.css"> -->

  <title>Cancel Booking</title>
</head>

<body>
  <!-- navbar starts here -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" id="brand-name" href="#">
        <img src="../images/flame.png" alt="" width="60" height="48" class="d-inline-block align-text-top chef">
        Gas Store
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse pt-0" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4 ">
          <li class="nav-item px-2">
            <a class="nav-link  group1" aria-current="page" href="../delete/delete.php">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../guidelines/guidelines.html">Guidelines</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../stepsAL/steps.html">How it works</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../pricing/pricing.html">Pricing</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../contact/contact.html">Help</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../contact/feedback.html">Feedback</a>
          </li>
          <li class="nav-item px-2 dropdown">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navdrop pt-0" id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle group1" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../images/profileGirl.png" width="40" height="40" style="border-radius:50%">
                  </a>
                  <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="../update/update.php">Update</a></li>
                    <li><a class="dropdown-item" href="../index.html">Logout</a></li>
                    <li>
                      <form action="delete.php" method="post">
                        <button class="dropdown-item" name="delete">Delete account</button>
                      </form>
                    </li>
                  </ul>
                </li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here -->

  <div class="container  py-5 mt-5">
    <h2 class="text-center">Recent Bookings</h2>

    <br>
    <table class="table table-striped">
        <?php
        if ($result->num_rows > 0) { ?>
            <thead>
              <tr>
                <th>Booking ID</th>
                <th>Booking Date</th>
                <th>Distributor</th>
                <th>Quantity</th>
                <th>Delivery Status</th>
                <th>Action</th>
              </tr>
            </thead>
          <?php while ($row = $result->fetch_assoc()) {
        ?>
      <tbody>
        <!-- fetch the data from the database -->

            <tr>
              <td><?php echo $row['bookingId']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['distributor']; ?></td>
              <td><?php echo $row['qty']; ?></td>
              <td><?php echo $row['deliveryStatus']; ?></td>
              <td>
                <form action="deletebook.php?bookingId=<?php echo $row['bookingId']; ?>" method="POST">
                  <button class="btn btn-danger" name="cancel">Cancel Booking</button>
                </form>
              </td>

            </tr>

        <?php
        
          }
        } else {
          echo "<h4 class='text-center'>No recent bookings found :(</h4>";
        }
        ?>

      </tbody>
    </table>


  </div>
</body>

</html>