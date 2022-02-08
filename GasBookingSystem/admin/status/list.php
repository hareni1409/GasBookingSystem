<?php
session_start();
include "../../config.php";
$q = "SELECT *from booking INNER JOIN `delivery` ON `booking`.dpId = `delivery`.dpId where deliveryStatus <> 'Delivered'";
$result = $con->query($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
	<link rel="stylesheet" href="../dashboard/adminfp.css">
  <title>Orders</title>
</head>
<body>
<div class="container-fluid row">
		<section style="width: 18%;">
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
						<a href="#">
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
    <section style="width:83%;margin-left:240px;">
  <h1>Orders received</h1>
  <table class="table table-striped">
				<thead>
					<tr>
						<th>Booking Id</th>
						<th>Booking Date</th>
						<th>User Id</th>
						<th>Distributor</th>
            <th>Quantity</th>
						<th>Delivery Person Name</th>
          	<th>Delivery Person Contact</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<!-- fetch the data from the database -->
					<?php
					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
					?>

							<tr>
								<td><?php echo $row['bookingId']; ?></td>
								<td><?php echo $row['date']; ?></td>
								<td><?php echo $row['userId']; ?></td>
								<td><?php echo $row['distributor']; ?></td>
                <td><?php echo $row['qty']; ?></td>
								<td><?php echo $row['dpName']; ?></td>
								<td><?php echo $row['dpPhone']; ?></td>

								<td>
                  <form action="change.php?bookingId=<?php echo $row['bookingId']; ?>" method="POST">
                    <input type="radio"  name="deliveryStatus" <?php if ($row['deliveryStatus'] == 'Request accepted') {
                      echo "checked";
                    } ?> value="Request accepted">
                    <label>Accept request</label>
                    
                    <input type="radio"  name="deliveryStatus" <?php if ($row['deliveryStatus'] == 'Delivered') {
                      echo "checked";
                    } ?> value="Delivered">
                    <label>Delivered</label>
                    
                    <button class="btn btn-primary" name="change">Change Status</button>
                  </form>
                </td>
							</tr>

					<?php		}
					}
					?>

				</tbody>
			</table>
    </section>
</div>
</body>
</html>