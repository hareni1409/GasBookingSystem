<?php
session_start();
include "../config.php";
$userId = $_SESSION['userId'];
if (isset($_POST['book'])) {
    $q = "SELECT *from `customers` where `userId` = '$userId'";
    $result = $con->query($q);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $isVerified  = $row['isVerified'];
            if ($isVerified==1) {
                $distributor = $_POST['distributor'];
                $qty = $_POST['qty'];
                $dpId = rand(1,10);
                $date = date("Y-m-d");
                $q = "INSERT INTO `booking` (`userId`,`distributor`,`qty`,`dpId`,`deliveryStatus`,`date`) VALUES ('$userId', '$distributor','$qty', '$dpId','Request pending','$date')";
                $result = $con->query($q);
                if ($result == TRUE) {  echo '<script>alert("booked successfully"); window.location.href = "../delete/delete.php";</script>';?>
                 
                  <?php  
                  header("Location: https://rzp.io/l/1V1HFFen");
                } else {
                  echo $con->error;
                }
            }else{
                echo "Sorry!! You are not verified";?>
                <script>alert("Sorry You cannot book gas cylinder. You're not a verified user");</script>
            <?php }
        }
    }
  $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
         <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,800;1,200;1,300;1,400&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Book now</title>
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
  <div class="main"> 
      <div class="card">
          <h1>Book Your Cylinder</h1>
          <form action="book.php" method="POST">
        <div class="select">
            <label for="distributor" style="padding-left: 50px;padding-right: 30px;padding-top: 10px;">Select your Distributor:</label>
            <select name="distributor" id="dist" required>
                <option id="d1" value="Indane">Indane</option>
                <option id="d2" value="HP">HP</option>
                <option id="d3" value="BharatGas">Bharat Gas</option>
            </select>
        </div>
            <br>
        <div class="select">
            <label for="qty" style="padding-left: 50px;padding-right: 40px;padding-top: 10px;">Number of Cylinders:</label>
            <select name="qty" id="qty" required>
                <option id="q1" value="1">1</option>
                <option id="q2" value="2">2</option>
                <option id="q3" value="3">3</option>
            </select>
        </div>
            <br>
            <button class="buttonbook" name="book" onclick="fun();">Book now</button>
        </form>
        
      </div>
  </div>
</body>
<script src="booking.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
      integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
      crossorigin="anonymous"></script>
</html>









































<!-- <!DOCTYPE HTML>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
        <title>Gas Booking</title>
        
    </head>
        <body>
                <div class="container">
                    <form action="#">
                    <h2 class="form-heading">BOOK NOW</h2>
                    <div class="form-field">
                        <h1>Select your distributor
                            <div class="form-data">
                                <select name="distibutor" id="dist" required>
                                    <option id="d1" value="1"> Indane </option>
                                    <option id="d2" value="2"> HP </option>
                                    <option id="d3" value="3"> Bharat Gas  </option>
                                </select>
                            </div>
                        </h1>
                    </div>
                    <div class="form-field">
                        <h1>Select your quantity
                            <div class="form-data">
                                <select name="qty" id="qty" required>
                                    <option id="q1" value="1"> 1 </option>
                                    <option id="q2" value="2"> 2 </option>
                                    <option id="q3" value="3"> 3  </option>
                                </select>
                            </div>
                        </h1>
                    </div>
                    <hr>
                    <div class="note"> 
                        Please note that you can't book more than the quantity alloted by your distributor.
                    </div>
                    <hr>
                    <br>
                    <input type="button" class="b1" value="Clear" onclick="refresh()"/>
                    <input type="button" class="b2" value="Submit" onclick="booking()"/>
                    </form>
                </div>
        </body>
</html> -->