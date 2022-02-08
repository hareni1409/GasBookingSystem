<?php
include "../../config.php";
if (isset($_GET['userId'])) {
	$userId = $_GET['userId'];
	$q = "select *from customers where userId ='$userId'";
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
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,800;1,200;1,300;1,400&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!--css-->
  	<link rel="stylesheet" href="../dashboard/adminfp.css">
		<link rel="stylesheet" href="card.css">
		<title>Verify</title>
	</head>

	<body>
		<div class="container-fluid row">
			<!-- sidebar starts here   -->

      <div class="sidebar open">
        <div class="logo-details">
          <i class='bx bxs-flame ' id="flame"></i>
          <div class="logo_name" style="color: #0d6efd;">Gas Store</div>

        </div>
        <ul class="nav-list">
          <li>
            <a href="../dashboard/index.php">
              <i class='bx bx-home'></i></i>
              <span class="links_name">Home</span>
            </a>
            <span class="tooltip">Home</span>
          </li>
          <li>
            <a href="../verified/verified.php">
              <i class='bx bx-check-circle'></i>
              <span class="links_name">Verified User</span>
            </a>
            <span class="tooltip">Verified User</span>
          </li>
          <li>
            <a href="../nonverified/view.php">
              <i class='bx bx-user-x'></i>
              <span class="links_name">Unverified user</span>
            </a>
            <span class="tooltip">Unverified user</span>
          </li>
          <li>
            <a href="../status/list.php">
              <i class='bx bx-pie-chart-alt-2'></i>
              <span class="links_name">Bookings</span>
            </a>
            <span class="tooltip">Bookings</span>
          </li>
          <li>

          <li>
            <a href="../../index.html">
              <i class='bx bx-log-out-circle bx-rotate-180'></i>
              <span class="links_name">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
          </li>
          <li class="profile">
            <div class="profile-details">
              <i class='bx bx-user-circle'></i>
              <div class="name_job">
                <div class="name">Admin</div>
                <div class="job">Daniel Mathews</div>
              </div>
            </div>
            <i class='bx bx-bookmarks' id="log_out"></i>
            <span class="tooltip">You're an admin</span>
          </li>
        </ul>
      </div>
    </section>
    <!-- sidebar ends here  -->

		</div>
		<section style="width:83%;margin-left:240px;">
		<?php
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
		?>
				<div class="container mt-5">
					<div class="card" style="width: 60%;margin-left: 20%;">
						<img src="../../profiles/<?php echo $row['file']; ?>" class="card-img-top img-fluid" alt="...">
						<div class="card-body">
							<h5 class="card-title">Personal Details</h5>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item group1"><b style="font-weight: 700; padding-right: 10px;">First Name: </b><?php echo $row['firstname']; ?></li>
							<li class="list-group-item group2"><b style="font-weight: 700; padding-right: 10px;">Last Name: </b><?php echo $row['lastname']; ?></li>
							<li class="list-group-item group1"><b style="font-weight: 700; padding-right: 10px;">Email: </b><?php echo $row['email']; ?></li>
							<li class="list-group-item group2"><b style="font-weight: 700; padding-right: 10px;">Gender: </b><?php echo $row['gender']; ?></li>
							<li class="list-group-item group1"><b style="font-weight: 700; padding-right: 10px;">Address: </b><?php echo $row['address']; ?>, <?php echo $row['state']; ?>, <?php echo $row['pincode']; ?></li>
							<li class="list-group-item group2"><b style="font-weight: 700; padding-right: 10px;">Phone Number: </b><?php echo $row['phone']; ?></li>
						</ul>
						<div class="card-body">
							<form action="accept.php?userId=<?php echo $row['userId']; ?>" method="post">
								<button name="verify"  class="card-approve">Approve</button>
							</form>
							<form action="reject.php?userId=<?php echo $row['userId']; ?>" method="post">
								<button name="reject"  class="card-reject">Reject</button>
							</form>
						</div>
					</div>
				</div>
		</section>
			</div>



				<!-- <div>
					<img width="20%" height="20%" class="btn btn-primary" src="../../profiles/<?php echo $row['file']; ?>">
					<form action="verify.php" method="post">
						<button name="verify">Accept</button>
					</form>
					<a href="../nonverified/view.php">Reject User</a>
				</div> -->
		<?php		}
		}
		?>
	<?php	}
	

	?>
	<!-- Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
	</body>

	</html>