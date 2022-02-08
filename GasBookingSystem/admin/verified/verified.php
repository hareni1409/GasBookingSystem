<?php
session_start();
include "../../config.php";
$q = "select *from customers where isVerified =1";
$result = $con->query($q);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">

  <link rel="stylesheet" href="../dashboard/adminfp.css">
  <title>New Users</title>
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
            <a href="#">
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

    <section style="width:83%;margin-left:240px;">
      <h2>List of verified Users</h2>

      <br>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
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
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['email']; ?></td>

                <td><a class="btn btn-primary" href="users.php?userId=<?php echo $row['userId']; ?>">View Details</a></td>
              </tr>

          <?php    }
          }
          ?>

        </tbody>
      </table>
    </section>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>

</html>