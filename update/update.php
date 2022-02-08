<?php
session_start();
include "../config.php";
$userId = $_SESSION['userId'];
if (isset($_POST['update'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $state = $_POST['state'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $pincode = $_POST['pincode'];
  $q = "UPDATE `customers` SET firstname='$firstname', lastname='$lastname', email='$email', password='$password', gender='$gender', state = '$state', address='$address', phone='$phone', pincode='$pincode' WHERE userId='$userId'";
  $result = $con->query($q);
  if ($result == true) {
    echo "Details Updated!";
  } else {
    echo "Error";
  }
}

$q = "SELECT * from `customers` where `userId`='$userId'";
$result = $con->query($q);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $userId = $row['userId'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $password  = $row['password'];
    $gender = $row['gender'];
    $state = $row['state'];
    $address = $row['address'];
    $phone = $row['phone'];
    $pincode = $row['pincode'];
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

    <link rel="stylesheet" href="../delete/styles.css">
    <link rel="stylesheet" href="update.css">
    <title>Update User Details</title>
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
                      <form action="../delete/delete.php" method="post">
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
    <div class="container-fluid h-100 py-5 mt-3">
      <div class="form-body">
        <div class="row">
          <div class="form-holder">
            <div class="form-content">
              <div class="form-items">
                <h1>Update User Details</h1>
                <form action="update.php" name="validate" method="POST" enctype="multipart/form-data">
                  <label for="firstname">Firstname: </label>
                  <input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" placeholder="Enter your firstname..." required>
                  <br>
                  <label for="lastname">Lastname: </label>
                  <input class="form=control" type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" placeholder="Enter your lastname..." required>
                  <br>
                  <label for="email">Email</label>
                  <input class="form-control" type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email" required>
                  <br>
                  <label for="password">Password </label>
                  <input class="form-control" type="password" id="password" name="password" minlength="8" maxlength="15" value="<?php echo $password; ?>" placeholder="Enter your password" required>
                  <br>
                  <label for="cpassword"> Confirm Password </label>
                  <input class="form-control" type="password" id="cpassword" name="cpassword" minlength="8" maxlength="15" value="<?php echo $password; ?>" placeholder="confirm your password" required>
                  <br>
                  <div class="col-md-12 mt-3">

                    <label class="mb-3 mr-1" for="radio">Gender</label>
                    <input class="btn-check" type="radio" id="male" autocomplete="off" name="gender" <?php if ($gender == 'male') {
                                                                                                        echo "checked";
                                                                                                      } ?> value="male" required>
                    <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
                    <input class="btn-check" type="radio" id="female" name="gender" <?php if ($gender == 'female') {
                                                                                      echo "checked";
                                                                                    } ?> value="female" required>
                    <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
                    <input class="btn-check" type="radio" id="others" name="gender" <?php if ($gender == 'others') {
                                                                                      echo "checked";
                                                                                    } ?> value="others" required>
                    <label class="btn btn-sm btn-outline-secondary" for="others">Others</label>
                    <br>
                  </div>
                  <label for="state">State</label>
                  <select class="btn-select" name="state" id="state">
                    <option <?php if ($state == 'TN') {
                              echo "selected";
                            } ?> value="TN">TamilNadu</option>
                    <option <?php if ($state == 'AP') {
                              echo "selected";
                            } ?> value="AP">Andhra Pradhesh</option>
                    <option <?php if ($state == 'Orissa') {
                              echo "selected";
                            } ?> value="Orissa">Orissa</option>
                    <option <?php if ($state == 'WB') {
                              echo "selected";
                            } ?> value="WB">West Bengal</option>
                    <option <?php if ($state == 'KL') {
                              echo "selected";
                            } ?> value="KL">Kerala</option>
                  </select>
                  <br>
                  <label for="address">Address</label>
                  <textarea class="form-control" name="address" id="address" cols="25" rows="3" placeholder="Enter your address" required><?php echo $address; ?></textarea>

                  <br>

                  <div class="col-md-12">
                    <label for="mobile">Contact Number</label>
                    <input class="form-control" type="tel" id="mobile" name="phone" maxlength="10" pattern="[0-9]{3}[0-9]{4}[0-9]{3}" value="<?php echo $phone; ?>" placeholder="Enter only 10 numbers" required>
                    <br>
                  </div>
                  <div class="col-md-12">
                    <label for="pincode">Pincode</label>
                    <input class="form-control" type="tel" id="pincode" name="pincode" maxlength="6" pattern="[0-9]{3}[0-9]{3}" value="<?php echo $pincode; ?>" placeholder="Enter only 6 numbers" required>
                    <br>
                  </div>
                  <button class="btn btn-primary" name="update">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- bootstrap scripts -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </body>

  </html>
<?php
}
?>