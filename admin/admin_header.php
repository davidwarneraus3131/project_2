<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Shahid Real Estate

    </title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="../assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
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
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
              <img
                src="../assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
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
<?php if ($role === 'admin') : ?>
<li class="nav-item active">
    <a href="../dashboard.php" class="collapsed" aria-expanded="false">
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
                    <a href="../users/users.php">
                        <span class="sub-item">Users</span>
                    </a>
                </li>
                <li>
                    <a href="../agents/agents.php">
                        <span class="sub-item">Agents</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <!-- BLOGS MENU (ONLY FOR ADMIN) -->
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#blogs">
            <i class="fas fa-newspaper"></i>
            <p>Blogs</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="blogs">
            <ul class="nav nav-collapse">
                <li>
                    <a href="../blogs/blog_list.php">
                        <span class="sub-item">Blog List</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
<?php endif; ?>

<?php if ($role === 'admin' || $role === 'agent') : ?>
<!-- PROPERTIES MENU (VISIBLE TO BOTH ADMIN & AGENT) -->
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#forms">
        <i class="fas fa-building"></i>
        <p>Properties</p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="forms">
        <ul class="nav nav-collapse">
            <li>
                <a href="../property/property.php">
                    <span class="sub-item">All Properties</span>
                </a>
            </li>
            <li>
                <a href="../pending_property/pending_property.php">
                    <span class="sub-item">Pending Property List</span>
                </a>
            </li>
            <li>
                <a href="../approved_property/approved_property_list.php">
                    <span class="sub-item">Approved Property List</span>
                </a>
            </li>
        </ul>
    </div>
</li>
<?php endif; ?>
<?php if ($role === 'admin' || $role === 'agent') : ?>
<!-- PROPERTIES MENU (VISIBLE TO BOTH ADMIN & AGENT) -->
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#formsenqiry">
        <i class="far fa-paper-plane"></i>
        <p>Enquiry </p>
        <span class="caret"></span>
    </a>
    <div class="collapse" id="formsenqiry">
        <ul class="nav nav-collapse">
            <li>
                <a href="../enquiry/enquiry_list.php">
                    <span class="sub-item">Enquiry List</span>
                </a>
            </li>
            <!-- <li>
                <a href="../pending_property/pending_property.php">
                    <span class="sub-item">Pending Property List</span>
                </a>
            </li>
            <li>
                <a href="../approved_property/approved_property_list.php">
                    <span class="sub-item">Approved Property List</span>
                </a>
            </li> -->
        </ul>
    </div>
</li>
<?php endif; ?>

<?php if ($role === 'admin') : ?>

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
              <?php endif; ?>


<?php if ($role === 'admin') : ?>

              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#contact">
                  <i class="fas fa-comment-alt"></i>
                  <p>Contact</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="contact">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../contact/contact.php">
                        <span class="sub-item">Contact Messages</span>
                      </a>
                    </li>
                    
                  </ul>
                </div>
              </li>
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
              <a href="index.html" class="logo">
                <img
                  src="../assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
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
                <!-- Navbar Header -->
                <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
          

                <li class="nav-item topbar-user dropdown hidden-caret">
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="../assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold"><?php echo $_SESSION['name']; ?></span>

                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <!-- <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="../assets/img/profile.jpg"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4>Hizrian</h4>
                            <p class="text-muted">hello@example.com</p>
                            <a
                              href="profile.html"
                              class="btn btn-xs btn-secondary btn-sm"
                              >View Profile</a
                            >
                          </div>
                        </div>
                      </li> -->
                      <li>
                        <div class="dropdown-divider"></div>
                
                        <a class="dropdown-item" href="../logout.php">Logout</a>
                      </li>
                    </div>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
          