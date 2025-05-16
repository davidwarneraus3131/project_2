<?php
session_start();
include '../database/db.php';

?>
<?php



$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';
$agent_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;

// Fetch properties based on user role
if ($role === 'admin') {
  $sql = "SELECT * FROM properties"; // Admin sees all properties
} elseif ($role === 'agent') {
  $sql = "SELECT * FROM properties WHERE agent_id = $agent_id";
} else {
  echo "Unauthorized access!";
  exit;
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Shahid Real Estate

  </title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.php" class="logo">
            <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">

            <?php

            $role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest'; // Default to 'guest' if not set
            ?>
            <?php if ($role === 'admin'): ?>
              <!-- USERS MENU (ONLY FOR ADMIN) -->

              <li class="nav-item active">
                <a href="dashboard.php" class="collapsed" aria-expanded="false">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
              </li>




              <!-- USERS MENU (ONLY FOR ADMIN) -->



              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-address-card"></i>
                  <p>Users</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="./users/users.php">
                        <span class="sub-item">Users</span>
                      </a>
                    </li>
                    <li>
                      <a href="./agents/agents.php">
                        <span class="sub-item">Agents</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            <?php endif; ?>

            <?php if ($role === 'admin' || $role === 'agent'): ?>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-building"></i>
                  <p>Properties</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="./property/property.php">
                        <span class="sub-item"> All Properties</span>
                      </a>
                    </li>
                    <li>
                      <a href="./pending_property/pending_property.php">
                        <span class="sub-item"> Pending Property List</span>
                      </a>
                    </li>
                    <li>
                      <a href="./approved_property/approved_property_list.php">
                        <span class="sub-item"> Approved Property List</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            <?php endif; ?>


            <?php if ($role === 'admin'): ?>


              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#blogs">
                  <i class="fas fa-newspaper"></i>
                  <p>Blogs</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="blogs">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="./blogs/blog_list.php">
                        <span class="sub-item">Blog List</span>
                      </a>
                    </li>

                  </ul>
                </div>
              </li>




<li class="nav-item">
  <a data-bs-toggle="collapse" href="#contact">
    <i class="fas fa-money-check-alt"></i>
    <p>Transaction</p>
    <span class="caret"></span>
  </a>
  <div class="collapse" id="contact">
    <ul class="nav nav-collapse">
      <li>
        <a href="../transaction/transaction.php">
          <span class="sub-item">Transaction List</span>
        </a>
      </li>
      
    </ul>
  </div>
</li>




              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#contact">
                  <i class="fas fa-comment-alt"></i>
                  <p>Contact</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="contact">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="./contact/contact.php">
                        <span class="sub-item">Contact Messages</span>
                      </a>
                    </li>

                  </ul>
                </div>
              </li>

              <!-- customers section start -->
            <?php endif; ?>




          </ul>
        </div>
      </div>
    </div>
    <!-- End Sidebar -->

    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>



        <!-- Header section End  -->




        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
          <div class="container-fluid">
            <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pe-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control" />
              </div>
            </nav>

            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
              <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false" aria-haspopup="true">
                  <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu dropdown-search animated fadeIn">
                  <form class="navbar-left navbar-form nav-search">
                    <div class="input-group">
                      <input type="text" placeholder="Search ..." class="form-control" />
                    </div>
                  </form>
                </ul>
              </li>

              <li class="nav-item topbar-user dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                  <div class="avatar-sm">
                    <img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" />
                  </div>
                  <span class="profile-username">
                    <span class="op-7">Hi,</span>
                    <span class="fw-bold"><?php echo $_SESSION['name'] ?></span>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                  <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                      <div class="user-box">
                        <div class="avatar-lg">
                          <img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded" />
                        </div>
                        <div class="u-text">
                          <h4>Sridhar</h4>
                          <!-- <p class="text-muted">hello@example.com</p> -->
                          <!-- <a
                              href="profile.php"
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            > -->
                        </div>
                      </div>
                    </li>
                    <li>
                      <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">My Balance</a>
                        <a class="dropdown-item" href="#">Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Account Setting</a>
                        <div class="dropdown-divider"></div> -->
                      <a class="dropdown-item" href="logout.php">Logout</a>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>

      <div class="container">
        <div class="page-inner">
          <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
              <h3 class="fw-bold mb-3">Dashboard</h3>
              <h6 class="op-7 mb-2">Admin Dashboard</h6>
            </div>
            <div class="ms-md-auto py-2 py-md-0">
              <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
              <a href="#" class="btn btn-primary btn-round">Add Customer</a>
            </div>
          </div>



          <?php
          // Fetch total users
          $result = $conn->query("SELECT COUNT(id) AS total_users FROM users");
          $total_users = $result->fetch_assoc()['total_users'];

          // Fetch total verified users
          $result = $conn->query("SELECT COUNT(id) AS verified_users FROM users WHERE is_verified = 1");
          $verified_users = $result->fetch_assoc()['verified_users'];

          // Fetch total properties listed
          $result = $conn->query("SELECT COUNT(id) AS total_properties FROM properties");
          $total_properties = $result->fetch_assoc()['total_properties'];

          // Fetch total featured properties
          $result = $conn->query("SELECT COUNT(id) AS featured_properties FROM properties WHERE featured = 1");
          $featured_properties = $result->fetch_assoc()['featured_properties'];

          // Fetch total active listings
          $result = $conn->query("SELECT COUNT(id) AS active_listings FROM properties WHERE property_status = 1");
          $active_listings = $result->fetch_assoc()['active_listings'];

          // Fetch total agents
          $result = $conn->query("SELECT COUNT(id) AS total_agents FROM users WHERE role = 'agent'");
          $total_agents = $result->fetch_assoc()['total_agents'];

          // Fetch total sales (assuming property sales are stored)
          $result = $conn->query("SELECT COUNT(id) AS total_sales FROM properties WHERE status = 'sold'");
          $total_sales = $result->fetch_assoc()['total_sales'];


          // Fetch total blogs
          $result = $conn->query("SELECT COUNT(id) AS total_blogs FROM blogs");
          $total_blogs = $result->fetch_assoc()['total_blogs'];

          // Fetch total featured blogs
          $result = $conn->query("SELECT COUNT(id) AS featured_blogs FROM blogs WHERE featured = 1");
          $featured_blogs = $result->fetch_assoc()['featured_blogs'];

          ?>

          <div class="row">
            <!-- Total Users -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-primary bubble-shadow-small">
                      <a href="./users/users.php"><i class="fas fa-users"></i></a> 
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Total Users</p>
                        <h4 class="card-title"><?php echo $total_users; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Verified Users -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-success bubble-shadow-small">
                      <a href="./users/users.php"><i class="fas fa-user-check"></i></a> 
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Verified Users</p>
                        <h4 class="card-title"><?php echo $verified_users; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Properties -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-info bubble-shadow-small">
                       <a href="./property/property.php"><i class="fas fa-building"></i></a> 
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Properties Listed</p>
                        <h4 class="card-title"><?php echo $total_properties; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Featured Properties -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-warning bubble-shadow-small">
                      <a href="./property/property.php"> <i class="fas fa-star"></i> </a>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Featured Properties</p>
                        <h4 class="card-title"><?php echo $featured_properties; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Active Listings -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-secondary bubble-shadow-small">
                      <a href="./approved_property/approved_property_list.php"> <i class="fas fa-home"></i></a>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Active Listings</p>
                        <h4 class="card-title"><?php echo $active_listings; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Agents -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-dark bubble-shadow-small">
                      <a href="./agents/agents.php"> <i class="fas fa-user-tie"></i> </a>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Total Agents</p>
                        <h4 class="card-title"><?php echo $total_agents; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Sales -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-success bubble-shadow-small">
                      <a href="./property/property.php"><i class="fas fa-handshake"></i> </a>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Total Sales</p>
                        <h4 class="card-title"><?php echo $total_sales; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- Total Blogs -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-warning bubble-shadow-small">
                      <a href="./blogs/blog_list.php"> <i class="fas fa-users"></i></a>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Total Blogs</p>
                        <h4 class="card-title"><?php echo $total_blogs; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Featured Blogs -->
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-icon">
                      <div class="icon-big text-center icon-success bubble-shadow-small">
                      <a href="./blogs/blog_list.php"><i class="fas fa-star"></i> </a>
                      </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                      <div class="numbers">
                        <p class="card-category">Featured Blogs</p>
                        <h4 class="card-title"><?php echo $featured_blogs; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <?php


          // Fetch total users
          $result = $conn->query("SELECT COUNT(id) AS total_users FROM users");
          $total_users = $result->fetch_assoc()['total_users'];

          // Fetch total agents
          $result = $conn->query("SELECT COUNT(id) AS total_agents FROM users WHERE role = 'agent'");
          $total_agents = $result->fetch_assoc()['total_agents'];

          ?>

          <div class="row">
            <div class="col-md-8">
              <div class="card card-round">
                <div class="card-header">
                  <div class="card-head-row">
                    <div class="card-title">User & Agent Statistics</div>
                    <div class="card-tools">
                      <!-- <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                        <span class="btn-label"><i class="fa fa-pencil"></i></span> Export
                      </a>
                      <a href="#" class="btn btn-label-info btn-round btn-sm">
                        <span class="btn-label"><i class="fa fa-print"></i></span> Print
                      </a> -->
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-container" style="min-height: 375px">
                    <canvas id="userStatisticsChart"></canvas>
                  </div>
                  <div id="chartLegend"></div>
                </div>
              </div>
            </div>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
            // User & Agent Statistics Chart
            var ctx = document.getElementById("userStatisticsChart").getContext("2d");
            var userStatisticsChart = new Chart(ctx, {
              type: "bar",
              data: {
                labels: ["Users", "Agents"],
                datasets: [{
                  label: "Total Count",
                  backgroundColor: ["#1D8CF8", "#00c851"],
                  data: [<?php echo $total_users; ?>, <?php echo $total_agents; ?>]
                }]
              },
              options: {
                responsive: true,
                maintainAspectRatio: false
              }
            });
          </script>





        </div>
      </div>


      <!-- Footer section Start   -->





      <footer class="footer">
        <div class="container-fluid d-flex justify-content-between">
          <nav class="pull-left">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="https://davidwarneraus3131.github.io/PortFolio/sri_portfolio-main/">
                  ThemeKita
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Help </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Licenses </a>
              </li>
            </ul>
          </nav>
          <div class="copyright">
            2024, made with <i class="fa fa-heart heart text-danger"></i> by
            <a href="https://davidwarneraus3131.github.io/PortFolio/sri_portfolio-main/">ThemeKita</a>
          </div>
          <div>
            Distributed by
            <a target="_blank" href="https://davidwarneraus3131.github.io/PortFolio/sri_portfolio-main/">ThemeWagon</a>.
          </div>
        </div>
      </footer>
    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
      <div class="title">Settings</div>
      <div class="custom-content">
        <div class="switcher">
          <div class="switch-block">
            <h4>Logo Header</h4>
            <div class="btnSwitch">
              <button type="button" class="selected changeLogoHeaderColor" data-color="dark"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
              <br />
              <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
              <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
            </div>
          </div>
          <div class="switch-block">
            <h4>Navbar Header</h4>
            <div class="btnSwitch">
              <button type="button" class="changeTopBarColor" data-color="dark"></button>
              <button type="button" class="changeTopBarColor" data-color="blue"></button>
              <button type="button" class="changeTopBarColor" data-color="purple"></button>
              <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
              <button type="button" class="changeTopBarColor" data-color="green"></button>
              <button type="button" class="changeTopBarColor" data-color="orange"></button>
              <button type="button" class="changeTopBarColor" data-color="red"></button>
              <button type="button" class="selected changeTopBarColor" data-color="white"></button>
              <br />
              <button type="button" class="changeTopBarColor" data-color="dark2"></button>
              <button type="button" class="changeTopBarColor" data-color="blue2"></button>
              <button type="button" class="changeTopBarColor" data-color="purple2"></button>
              <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
              <button type="button" class="changeTopBarColor" data-color="green2"></button>
              <button type="button" class="changeTopBarColor" data-color="orange2"></button>
              <button type="button" class="changeTopBarColor" data-color="red2"></button>
            </div>
          </div>
          <div class="switch-block">
            <h4>Sidebar</h4>
            <div class="btnSwitch">
              <button type="button" class="changeSideBarColor" data-color="white"></button>
              <button type="button" class="selected changeSideBarColor" data-color="dark"></button>
              <button type="button" class="changeSideBarColor" data-color="dark2"></button>
            </div>
          </div>
        </div>
      </div>
      <div class="custom-toggle">
        <i class="icon-settings"></i>
      </div>
    </div>
    <!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="assets/js/plugin/jsvectormap/world.js"></script>

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo.js"></script>
  <script src="assets/js/demo.js"></script>
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>
</body>

</html>