<?php
include "../config.php";
if (isset($_POST['submit'])) {

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $state = $_POST['state'];
  $address = $_POST['address'];
  $language = $_POST['language'];
  $phone = $_POST['phone'];
  $pincode = $_POST['pincode'];

  $file_name =  $_FILES['file']['name'];
  $file_loc = $_FILES['file']['tmp_name'];
  move_uploaded_file($file_loc,"profiles/".$file_name);

  $q = "insert into `customers`(`firstname`,`lastname`,`email`,`password`,`gender`,`state`,`address`,`language`,`phone`,`pincode`,`file`,`isVerified`) 
  values('$firstname','$lastname','$email','$password','$gender','$state','$address','$language','$phone','$pincode','$file_name',0)";
  $result = $con->query($q);
  if ($result == TRUE) {
    header("Location: ../login/login.php");
  } else {
    echo $con->error;
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
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,800;1,200;1,300;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="styles.css">

  <title>Sign Up</title>
</head>

<body>
   <!-- navbar starts here -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" id="brand-name" href="#">
        <img src="../images/flame.png" alt="" width="60" height="48" class="d-inline-block align-text-top chef">
        Gas Store
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-4 ">
          <li class="nav-item px-2">
            <a class="nav-link  group1" aria-current="page" href="../index.html">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../faq/faqs.html">FAQs</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../login/login.php">Login</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../steps/steps.html">How it works</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../admin/login/login.php">Admin Login</a>
          </li>
          <li class="nav-item px-3">
            <a class="btn btn-grad rounded-pill px-5" href="signup.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here -->
<div class="container py-5 mt-5">
<div class="form-body">
   <div class="row">
    <div class="form-holder">
      <div class="form-content">
        <div class="form-items">
          <h2>Sign Up</h2>
          <form class="requires-validation" id="form" action="signup.php" name="validate" method="POST" enctype="multipart/form-data" novalidate>
          <div class="col-md-12">
            <label for="firstname">Firstname </label>
            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Enter your firstname" required>
            <div class="valid-feedback">Firstname field is valid!</div>
            <div class="invalid-feedback">Firstname field cannot be blank!</div>
            <br>
          </div>
          <div class="col-md-12">
            <label for="lastname">Lastname </label>
            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Enter your lastname" required>
            <div class="valid-feedback">Lastname field is valid!</div>
            <div class="invalid-feedback">Lastname field cannot be blank!</div>
            <br>
          </div>
          <div class="col-md-12">
            <label for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required>
            <div class="valid-feedback">Email field is valid!</div>
            <div class="invalid-feedback">Email field cannot be blank!</div>
            <br>
          </div>
          <div class="col-md-12">
            <label for="password">Password </label>
            <input class="form-control" type="password" id="password" name="password" minlength="8" maxlength="15" placeholder="Enter your password" required>
            <div class="valid-feedback">Password field is valid!</div>
            <div class="invalid-feedback">Password field cannot be blank!</div>
            <br>
          </div>
          <div class="col-md-12">
            <label for="cpassword"> Confirm Password </label>
            <input class="form-control" type="password" id="cpassword" name="cpassword" minlength="8" maxlength="15" placeholder="Confirm your password" required>
            <div class="valid-feedback">Confirm Password field is valid!</div>
            <div class="invalid-feedback">Confirm Password field cannot be blank!</div>
            <br>
          </div>
          <div class="col-md-12 mt-3">
            <label class="mb-3 mr-1" for="radio">Gender</label>
            <input type="radio" class="btn-check" id="male" name="gender" value="male" required>
            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
            <input type="radio" class="btn-check" id="female" name="gender" value="female" required>
            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
            <input type="radio" class="btn-check" id="others" name="gender" value="others" required>
            <label class="btn btn-sm btn-outline-secondary" for="others">Others</label>
            <div class="valid-feedback mv-up">You selected a Gender!</div>
            <div class="invalid-feedback mv-up">Please select a Gender!</div>
            <br>
          </div>
          <div class="col-md-12">
          <label for="state">State</label>
          <select class="form-select mt-3" required name="state" id="state">
            <option value="TN">TamilNadu</option>
            <option value="AP">Andhra Pradhesh</option>
            <option value="Orissa">Orissa</option>
            <option value="WB">West Bengal</option>
            <option value="KL">Kerala</option>
          </select>
          <div class="valid-feedback">You selected a State!</div>
          <div class="invalid-feedback">Please select a State!</div>
          <br>
          </div>
          <div class="col-md-12">
            <label for="address">Address</label>
            <textarea class="form-control" name="address" id="address" cols="25" rows="3" placeholder="Enter your address" required></textarea>
            <div class="valid-feedback">Address field is valid!</div>
            <div class="invalid-feedback">Address field cannot be blank!</div>
            <br>
          </div>
          <div class="form-check">
            <label for="language">Preferred Languages</label>
            <br>
            <input class="form-check-input" type="checkbox" id="tamil" name="language" value="tam">
            <label class="form-check-label" for="tamil"> Tamil </label><br>
            <input class="form-check-input" type="checkbox" id="english" name="language" value="eng" checked>
            <label class="form-check-label" for="english">English</label><br>
            <input class="form-check-input" type="checkbox" id="Hindi" name="language" value="hin">
            <label class="form-check-label" for="Hindi">Hindi</label><br>
            <div class="invalid-feedback">Please select perferred languages!</div>
            <br>
          </div>
          <div class="col-md-12">
            <label for="mobile">Contact Number</label>
            <input class="form-control" type="tel" id="mobile" name="phone" maxlength="10" pattern="[0-9]{3}[0-9]{4}[0-9]{3}" placeholder="Enter only 10 numbers" required>
            <div class="valid-feedback">Contact number field is valid!</div>
            <div class="invalid-feedback">Contact number field cannot be blank!</div>
            <br>
          </div>
          <div class="col-md-12">
            <label for="pincode">Pincode</label>
            <input class="form-control" type="tel" id="pincode" name="pincode" maxlength="6" pattern="[0-9]{3}[0-9]{3}" placeholder="Enter only 6 numbers" required>
            <div class="valid-feedback">Pincode field is valid!</div>
            <div class="invalid-feedback">Pincode field cannot be blank!</div>
            <br>
          </div>
          <div class="col-md-12">
            <label for="file">Verification Proof</label>
            <input class="form-control" type="file" id="file" name="file" required>
            <div class="valid-feedback">Verification proof field is valid!</div>
            <div class="invalid-feedback">Verification proof field cannot be blank!</div>
            <br>
          </div>
          <div class="form-button mt-3">
            <button class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
        </div>
       </div>
      </div>
    </div>
   </div>

  <script src="app.js"></script>
<!-- bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
    integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
    integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
    crossorigin="anonymous"></script>
</body>

</html>