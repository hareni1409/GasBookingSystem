<?php
session_start();
include "../../config.php";
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $q = "SELECT `adminId` from `admin` where `email`='$email' AND `password`='$password'";
	$result = $con->query($q);
  $check = mysqli_fetch_array($result);
  if (isset($check)) {
    $_SESSION["adminId"] = $check['adminId'];
    header("Location: ../dashboard/index.php");
    //echo "correct email and pass";
  } else {
    echo $con->error;
    echo "Enter correct email and pass";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,800;1,200;1,300;1,400&display=swap" rel="stylesheet">
  <!--font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <!-- favicon -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- stylesheet -->
  <link rel="stylesheet" href="styles.css">
  <title>Login</title>
</head>

<body>
  <!-- navbar starts here -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" id="brand-name" href="#">
        <img src="../../images/flame.png" alt="" width="60" height="48" class="d-inline-block align-text-top chef">
        Gas Store
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <!-- <li class="nav-item px-2">
            <a class="nav-link group1" href="#">Login</a>
          </li> -->
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../steps/steps.html">How it works</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link group1" href="../admin/login/login.php">Admin Login</a>
          </li>
          <li class="nav-item px-3">
            <a class="btn btn-grad rounded-pill px-5" href="../signup/signup.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar ends here -->
  <div id="liveAlertPlaceholder"></div>
  <div class="container py-5 mt-5" id="container">
    <div class="form-container sign-in-container">
      <form action="login.php"  method="POST">
        <h1>Admin Log in</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fas fa-key fa-lg"></i></a>
          <a style="color: #25D366; " href="#" class="social"><i class="fas fa-handshake fa-lg"></i></a>
          <a style="color: #C13584" href="#" class="social"><i class="fas fa-fingerprint fa-lg"></i></i></a>
        </div>
        <span>To start your journey with us</span>
        <input type="email" name="email" id="email" placeholder="Email" />
        <input type="password" name="password" id="password" placeholder="Password" />

        <button name="login" class="btn btn-grad rounded-pill px-5  mt-3">Log in</button>
      </form>
    </div>
    <div class="overlay-container defcont">
      <div class="overlay">
        <div class="overlay-panel overlay-right">
          <img class="img" style="height: 418px; width:365px" src="../../images/login.png">
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="container py-5 mt-5">
    <h1>USER LOGIN</h1>
    <form action="login.php" method="POST">
      <label for="email">Enter your email id: </label>
      <input type="text" name="email" id="email" placeholder="Your email id goes here.." required>
      <br>
      <label for="password">Enter your password: </label>
      <input type="password" name="password" id="password" placeholder="Your secret password..." required>
      <button name="login">Login</button>
    </form>
  </div> -->

  <!-- bootstrap scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>