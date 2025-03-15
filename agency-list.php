<?php
session_start();
include("./includes/header.php");
include("./database/db.php");
?>

<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Agency List View</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Agency List View</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- agents-page-section -->
<section class="agents-page-section agents-list">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="default-sidebar agent-sidebar">
                    <div class="agents-search sidebar-widget">
                        <div class="widget-title">
                            <h5>Find Agent</h5>
                        </div>
                        <div class="search-inner">
                            <form method="GET" action="agency-list.php">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Enter Agent Name"
                                        value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>">
                                </div>
                                <div class="form-group">
                                    <div class="select-box">
                                        <select name="city" class="wide">
                                            <option value="">All Cities</option>
                                            <?php
                                            $cityQuery = "SELECT DISTINCT city FROM users WHERE role='agent'";
                                            $cityResult = mysqli_query($conn, $cityQuery);
                                            print_r($cityResult);
                                            while ($cityRow = mysqli_fetch_assoc($cityResult)) {
                                                $selected = (isset($_GET['city']) && $_GET['city'] == $cityRow['city']) ? 'selected' : '';
                                                echo "<option value='{$cityRow['city']}' $selected>{$cityRow['city']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-one">Search Agent</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <?php

                    // Fetch property status counts
                    $query = "SELECT property_status, COUNT(*) as count FROM properties GROUP BY property_status";
                    $result = mysqli_query($conn, $query);
                    ?>



                    <!-- <div class="category-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Status Of Property</h5>
                        </div>
                        <ul class="category-list clearfix">
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <li>
                                    <a href="agency-details.php?status=<?php echo urlencode($row['property_status']); ?>">
                                        <?php echo htmlspecialchars($row['property_status']); ?>
                                        <span>(<?php echo $row['count']; ?>)</span>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div> -->




                    <div class="featured-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Featured Properties</h5>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">


                            <?php
                            $sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
                            users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
                            FROM properties 
                            JOIN users ON properties.agent_id = users.id 
                            WHERE featured = 1 
                            LIMIT 3";
             
                            $result = mysqli_query($conn, $sql);
                            // Check if there are any results
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Extract data from the row
                                    $property_name = $row['property_name'];
                                    $price = $row['price'];
                                    $description = $row['description'];
                                    $agent_name = $row['name'];
                                    $property_img = $row['property_img1'];
                                    $beds = $row['beds'];
                                    $baths = $row['baths'];
                                    $square_feet = $row['square_feet'];

                                    ?>
                                    <div class="feature-block-one">




                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img
                                                        src="assets/images/property/<?php echo $property_img; ?>" alt="">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a
                                                            href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name ?></a>
                                                    </h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4>₹<?php echo $price ?></h4>
                                                    </div>
                                                </div>
                                                <p><?php echo $description ?></p>
                                                <div class="btn-box">



                                                    <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="property-details.php?id=<?php echo $row['id']; ?>" class="theme-btn btn-two">See Details</a>
        <?php } else { ?>
            <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">See Details</a>
        <?php } ?>
                                                    
                                                    
                                                    </div>
                                            </div>
                                        </div>



                                    </div>
                                    <?php

                                }
                            } else {
                                echo "No property found.";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="agency-content-side">
                    <?php
                    // Set the number of records per page
                    $limit = 4;

                    // Get the current page number from URL, default is 1
                    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                    if ($page < 1)
                        $page = 1;

                    // Calculate the starting record for the query
                    $offset = ($page - 1) * $limit;

                    // Get total records count
                    $total_query = "SELECT COUNT(*) AS total FROM users WHERE role='agent'";
                    $total_result = mysqli_query($conn, $total_query);
                    $total_row = mysqli_fetch_assoc($total_result);
                    $total_records = $total_row['total'];

                    // Calculate total pages
                    $total_pages = ceil($total_records / $limit);

                    // Fetch records with pagination
                    $query = "SELECT id, name, email, phone, user_img, occupation, company_name, facebook_link, twitter_link, linkedin_link 
          FROM users WHERE role='agent' LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($conn, $query);

                    // Showing dynamic results text
                    $start_item = ($page - 1) * $limit + 1;
                    $end_item = min($start_item + $limit - 1, $total_records);

                    ?>

                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h5>Search Results: <span>Showing <?php echo $start_item; ?>-<?php echo $end_item; ?> of
                                    <?php echo $total_records; ?> Listings</span></h5>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <!-- <div class="short-box clearfix">
            <div class="select-box">
                <select class="wide" id="sort-options">
                    <option data-display="Sort by: Newest">Sort by: Newest</option>
                    <option value="1">New Arrival</option>
                    <option value="2">Top Rated</option>
                    <option value="3">Offer Place</option>
                    <option value="4">Most Place</option>
                </select>
            </div>
        </div> -->
                            <div class="short-menu clearfix">
                                <button class="list-view on"><i class="icon-35"></i></button>
                                <button class="grid-view"><i class="icon-36"></i></button>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination logic remains here -->

                    <script>
                        // Sort functionality (basic example)
                        document.getElementById('sort-options').addEventListener('change', function () {
                            var sortValue = this.value;
                            // Implement AJAX or page reload with sorting query
                            console.log('Sorting by:', sortValue);
                            // Use the value to update the query, reload the page, or fetch new results dynamically
                        });
                    </script>



                    <?php
                    // Fetch filters from GET request
                    $search_name = isset($_GET['name']) ? mysqli_real_escape_string($conn, $_GET['name']) : '';
                    $search_city = isset($_GET['city']) ? mysqli_real_escape_string($conn, $_GET['city']) : '';

                    // Set the number of records per page
                    $limit = 4;
                    $page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                    if ($page < 1)
                        $page = 1;
                    $offset = ($page - 1) * $limit;

                    // Build the WHERE clause dynamically
                    $whereClause = "WHERE role='agent'";
                    if ($search_name != '') {
                        $whereClause .= " AND name LIKE '%$search_name%'";
                    }
                    if ($search_city != '') {
                        $whereClause .= " AND city = '$search_city'";
                    }

                    // Get total records count
                    $total_query = "SELECT COUNT(*) AS total FROM users $whereClause";
                    $total_result = mysqli_query($conn, $total_query);
                    $total_row = mysqli_fetch_assoc($total_result);
                    $total_records = $total_row['total'];
                    $total_pages = ceil($total_records / $limit);

                    // Fetch records with pagination
                    $query = "SELECT id, name, email, phone, user_img, occupation, company_name, facebook_link, twitter_link, linkedin_link, city 
          FROM users $whereClause LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($conn, $query);

                    // Display agents
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            $user_img = $row['user_img'];
                            $company_name = $row['occupation'];
                            $facebook = $row['facebook_link'];
                            $twitter = $row['twitter_link'];
                            $linkedin = $row['linkedin_link'];
                            $city = $row['city'];
                            ?>
                            <div class="wrapper list">
                                <div class="agents-list-content list-item">
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/users/<?php echo $user_img ?>"
                                                    alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">


                                                        <h4>
                                                            <a href="agency-details.php?id=<?php echo $id; ?>"><?php echo $name ?></a>

                                                            <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="agency-details.php?id=<?php echo  $id; ?>"><? echo $name?></a>
        <?php } else { ?>
            <a href="#"  onclick="showLoginAlert()"><? echo $name?></a>
        <?php } ?>
                                                        
                                                        
                                                        </h4>
                                                        <span class="designation"><?php echo $company_name ?> Real Estate
                                                            Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="<?php echo $facebook ?>"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="<?php echo $twitter ?>"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                        <li><a href="<?php echo $linkedin ?>"><i
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p><?php echo $name ?></p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a
                                                            href="mailto:<?php echo $email ?>"><?php echo $email ?></a></li>
                                                    <li><i class="fab fa fa-phone"></i><a
                                                            href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></li>
                                                </ul>
                                                <div class="btn-box">


                                                        <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="agency-details.php?id=<?php echo $id; ?>" class="theme-btn btn-two">View Profile</a>
        <?php } else { ?>
            <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">View Profile</a>
        <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="agents-grid-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img
                                                            src="assets/images/users/<?php echo $user_img ?>" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4>
                                                                
                                                            <a href="agency-details.php?id=<?php echo $id; ?>"><?php echo $name ?></a>

<?php if (isset($_SESSION['user_id'])) { ?>
<a href="agency-details.php?id=<?php echo  $id; ?>"><? echo $name?></a>
<?php } else { ?>
<a href="#"  onclick="showLoginAlert()"><? echo $name?></a>
<?php } ?>
                                                        
                                                        
                                                        </h4>
                                                            <span class="designation"><?php echo $company_name ?> Real Estate
                                                                Agent</span>
                                                        </div>
                                                        <!-- <div class="text">
                                                            <p><?php echo $name ?></p>
                                                        </div> -->
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a
                                                                    href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                                                            </li>
                                                            <li><i class="fab fa fa-phone"></i><a
                                                                    href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                                                            </li>
                                                        </ul>
                                                        <div class="btn-box">

                                                        <?php if (isset($_SESSION['user_id'])) { ?>
            <a href="agency-details.php?id=<?php echo $id; ?>" class="theme-btn btn-two">View Profile</a>
        <?php } else { ?>
            <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">View Profile</a>
        <?php } ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    } else {
                        echo "No agents found.";
                    }
                    ?>



                    <!-- Pagination -->
                    <?php if ($total_pages > 1): ?>
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <?php if ($page > 1): ?>
                                    <li><a href="?page=<?php echo ($page - 1); ?>"><i class="fas fa-angle-left"></i></a></li>
                                <?php endif; ?>

                                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <li><a href="?page=<?php echo $i; ?>"
                                            class="<?php echo ($page == $i) ? 'current' : ''; ?>"><?php echo $i; ?></a></li>
                                <?php endfor; ?>

                                <?php if ($page < $total_pages): ?>
                                    <li><a href="?page=<?php echo ($page + 1); ?>"><i class="fas fa-angle-right"></i></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- agents-page-section end -->

<?php include './includes/footer.php'; ?>

 <!-- see details button authorize -->
<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showLoginAlert() {
        Swal.fire({
            title: "Login Required",
            text: "You must be logged in to view Agent  details!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Login Now",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "signin.php";
            }
        });
    }
</script>