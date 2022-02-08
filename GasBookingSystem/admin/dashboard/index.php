<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="adminfp.css">
  <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>

<body>
  <!-- sidebar starts here   -->
  <div class="container-fluid row">
    <section style="width: 18%;">
      <div class="sidebar open">
        <div class="logo-details">
          <i class='bx bxs-flame ' id="flame"></i>
          <div class="logo_name" style="color: #0d6efd;">Gas Store</div>

        </div>
        <ul class="nav-list">
          <li>
            <a href="#">
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
    <section style="width:83%;margin-left:240px;">
      <div class="app-main__outer">
        <div class="app-main__inner">
          <div class="app-page-title " style="margin-top: 5px;">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class='bx bx-analyse'></i>
                </div>
                <div>ANALYSIS OF PRODUCTS
                  <div class="page-title-subheading">
                  </div>
                </div>
              </div>
              <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                  <i class="fa fa-star"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: -10px;">
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                    <div class="widget-heading">Total Orders</div>
                    <div class="widget-subheading">Last year expenses</div>
                  </div>
                  <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>1896</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                    <div class="widget-heading">Clients</div>
                    <div class="widget-subheading">Total Clients Profit</div>
                  </div>
                  <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>$ 568</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                    <div class="widget-heading">Followers</div>
                    <div class="widget-subheading">People Interested</div>
                  </div>
                  <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>46%</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
              <div class="card mb-3 widget-content bg-premium-dark">
                <div class="widget-content-wrapper text-white">
                  <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                  </div>
                  <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="mb-3 card">
                <div class="card-header-tab card-header-tab-animation card-header">
                  <div class="card-header-title">
                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                    Sales Report
                  </div>
                  <ul class="nav">
                    <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Last</a></li>
                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Current</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-eg-77">
                      <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                        <div class="widget-chat-wrapper-outer">
                          <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                            <canvas id="canvas"></canvas>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                      <div class="scroll-area-sm">
                        <div class="scrollbar-container">
                          <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                            <li class="list-group-item">
                              <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left mr-3">
                                    <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                  </div>
                                  <div class="widget-content-left">
                                    <div class="widget-heading">Ella-Rose Henry</div>
                                    <div class="widget-subheading">Web Developer</div>
                                  </div>
                                  <div class="widget-content-right">
                                    <div class="font-size-xlg text-muted">
                                      <small class="opacity-5 pr-1">$</small>
                                      <span>129</span>
                                      <small class="text-danger pl-2">
                                        <i class="fa fa-angle-down"></i>
                                      </small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left mr-3">
                                    <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                  </div>
                                  <div class="widget-content-left">
                                    <div class="widget-heading">Ruben Tillman</div>
                                    <div class="widget-subheading">UI Designer</div>
                                  </div>
                                  <div class="widget-content-right">
                                    <div class="font-size-xlg text-muted">
                                      <small class="opacity-5 pr-1">$</small>
                                      <span>54</span>
                                      <small class="text-success pl-2">
                                        <i class="fa fa-angle-up"></i>
                                      </small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left mr-3">
                                    <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                  <div class="widget-content-left">
                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                    <div class="widget-subheading">Java Programmer</div>
                                  </div>
                                  <div class="widget-content-right">
                                    <div class="font-size-xlg text-muted">
                                      <small class="opacity-5 pr-1">$</small>
                                      <span>429</span>
                                      <small class="text-warning pl-2">
                                        <i class="fa fa-dot-circle"></i>
                                      </small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="list-group-item">
                              <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                  <div class="widget-content-left mr-3">
                                    <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                  </div>
                                  <div class="widget-content-left">
                                    <div class="widget-heading">Mathews Jordan</div>
                                    <div class="widget-subheading">Industrialist</div>
                                  </div>
                                  <div class="widget-content-right">
                                    <div class="font-size-xlg text-muted">
                                      <small class="opacity-5 pr-1">$</small>
                                      <span>98</span>
                                      <small class="text-warning pl-2">
                                        <i class="fa fa-dot-circle"></i>
                                      </small>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="mb-3 card">
                <div class="card-header-tab card-header">
                  <div class="card-header-title">
                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                    Bandwidth Reports
                  </div>
                  <div class="btn-actions-pane-right">
                    <div class="nav">
                      <a href="javascript:void(0);" class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab 1</a>
                      <a href="javascript:void(0);" class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab 2</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content">
                  <div class="tab-pane fade active show" id="tab-eg-55">
                    <div class="widget-chart p-3">
                      <div style="height: 350px">
                        <canvas id="line-chart"></canvas>
                      </div>
                    </div>
                    <div class=" card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="widget-content">
                            <div class="widget-content-outer">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                  <div class="widget-numbers fsize-3 text-muted">63%</div>
                                </div>
                                <div class="widget-content-right">
                                  <div class="text-muted opacity-6">Generated Leads</div>
                                </div>
                              </div>
                              <div class="widget-progress-wrapper mt-1">
                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="widget-content">
                            <div class="widget-content-outer">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                  <div class="widget-numbers fsize-3 text-muted">32%</div>
                                </div>
                                <div class="widget-content-right">
                                  <div class="text-muted opacity-6">Submitted Tickers</div>
                                </div>
                              </div>
                              <div class="widget-progress-wrapper mt-1">
                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                  <div class="progress-bar bg-success" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="widget-content">
                            <div class="widget-content-outer">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                  <div class="widget-numbers fsize-3 text-muted">71%</div>
                                </div>
                                <div class="widget-content-right">
                                  <div class="text-muted opacity-6">Server Allocation</div>
                                </div>
                              </div>
                              <div class="widget-progress-wrapper mt-1">
                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="widget-content">
                            <div class="widget-content-outer">
                              <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                  <div class="widget-numbers fsize-3 text-muted">41%</div>
                                </div>
                                <div class="widget-content-right">
                                  <div class="text-muted opacity-6">Generating Leads</div>
                                </div>
                              </div>
                              <div class="widget-progress-wrapper mt-1">
                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                  <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Total Orders</div>
                      <div class="widget-subheading">Last year expenses</div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-success">1896</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Products Sold</div>
                      <div class="widget-subheading">Revenue streams</div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-warning">$3M</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Followers</div>
                      <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-danger">45,9%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
              <div class="card mb-3 widget-content">
                <div class="widget-content-outer">
                  <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                      <div class="widget-heading">Income</div>
                      <div class="widget-subheading">Expected totals</div>
                    </div>
                    <div class="widget-content-right">
                      <div class="widget-numbers text-focus">$147</div>
                    </div>
                  </div>
                  <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                      <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                    </div>
                    <div class="progress-sub-label">
                      <div class="sub-label-left">Expenses</div>
                      <div class="sub-label-right">100%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                <div class="widget-content">
                  <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left pr-2 fsize-1">
                        <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                      </div>
                      <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                      <div class="text-muted opacity-6">Income Target</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                <div class="widget-content">
                  <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left pr-2 fsize-1">
                        <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                      </div>
                      <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                      <div class="text-muted opacity-6">Expenses Target</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                <div class="widget-content">
                  <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left pr-2 fsize-1">
                        <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                      </div>
                      <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                      <div class="text-muted opacity-6">Spendings Target</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                <div class="widget-content">
                  <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                      <div class="widget-content-left pr-2 fsize-1">
                        <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                      </div>
                      <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                        </div>
                      </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                      <div class="text-muted opacity-6">Totals Target</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </div>
  </div>
  </section>
  </section>
  </div>



  <script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="adminfp.js"></script>

</html>