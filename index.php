<?php

session_start();
include("./includes/header.php");
include("./database/db.php");

// Fetch property data from the database


?>
<!-- In HEAD -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Before closing BODY -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!-- location-section -->
<?php
// Fetch locations from the database
$sql = "SELECT DISTINCT city FROM properties";
$result = $conn->query($sql);
$locations = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $locations[] = $row['city'];
    }
}


?>


<section class="location-section">
    <div class="map-column">
        <div class="google-map-area">
            <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974"
                data-map-zoom="12">

            </div>
        </div>
        <div class="location-inner clearfix">
            <div class="single-location-box">
                <div class="inner">
                    <div class="marker-box">
                        <img src="assets/images/icons/map-marker-2.png" alt="">
                        <span>1</span>
                    </div>
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg"
                                                alt=""></figure>
                                        <h6>Michael Bean</h6>
                                    </div>
                                </div>
                                <div class="title-text">
                                    <h4><a href="property-details.php">Villa on Grand Avenue</a></h4>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>₹30,000.00</h4>
                                    </div>
                                    <!-- <ul class="other-option pull-right clearfix">
                                        <li><a href="property-details.php"><i class="icon-12"></i></a></li>
                                        <li><a href="property-details.php"><i class="icon-13"></i></a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-location-box">
                <div class="inner">
                    <div class="marker-box">
                        <img src="assets/images/icons/map-marker-2.png" alt="">
                        <span>2</span>
                    </div>
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg"
                                                alt=""></figure>
                                        <h6>Michael Bean</h6>
                                    </div>
                                </div>
                                <div class="title-text">
                                    <h4><a href="property-list.php">Contemporary Apartment</a></h4>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>₹30,000.00</h4>
                                    </div>
                                    <!-- <ul class="other-option pull-right clearfix">
                                        <li><a href="property-list.php"><i class="icon-12"></i></a></li>
                                        <li><a href="property-list.php"><i class="icon-13"></i></a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-location-box active">
                <div class="inner">
                    <div class="marker-box">
                        <img src="assets/images/icons/map-marker-2.png" alt="">
                        <span>3</span>
                    </div>
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg"
                                                alt=""></figure>
                                        <h6>Michael Bean</h6>
                                    </div>
                                </div>
                                <div class="title-text">
                                    <h4><a href="property-list.php">Luxury Villa With Pool</a></h4>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>₹30,000.00</h4>
                                    </div>
                                    <!-- <ul class="other-option pull-right clearfix">
                                        <li><a href="property-list.php"><i class="icon-12"></i></a></li>
                                        <li><a href="property-list.php"><i class="icon-13"></i></a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-location-box">
                <div class="inner">
                    <div class="marker-box">
                        <img src="assets/images/icons/map-marker-2.png" alt="">
                        <span>4</span>
                    </div>
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg"
                                                alt=""></figure>
                                        <h6>Michael Bean</h6>
                                    </div>
                                </div>
                                <div class="title-text">
                                    <h4><a href="property-list.php">Apartment in Glasgow</a></h4>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>₹30,000.00</h4>
                                    </div>
                                    <!-- <ul class="other-option pull-right clearfix">
                                        <li><a href="property-list.php"><i class="icon-12"></i></a></li>
                                        <li><a href="property-list.php"><i class="icon-13"></i></a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-location-box">
                <div class="inner">
                    <div class="marker-box">
                        <img src="assets/images/icons/map-marker-2.png" alt="">
                        <span>5</span>
                    </div>
                    <div class="feature-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg"
                                                alt=""></figure>
                                        <h6>Michael Bean</h6>
                                    </div>
                                </div>
                                <div class="title-text">
                                    <h4><a href="property-list.php">Family Home For Sale</a></h4>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>₹30,000.00</h4>
                                    </div>
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="property-list.php"><i class="icon-12"></i></a></li>
                                        <li><a href="property-list.php"><i class="icon-13"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- location-section end -->


<!-- search-field-section -->

<section class="search-field-section style-two">
    <div class="auto-container">
        <div class="inner-container">
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tabs-content info-group">
                        <!-- <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">For Buy</li>
                            <li class="tab-btn" data-tab="#tab-2">For Rent</li>
                        </ul> -->
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form method="GET" action="property-list.php" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property..."
                                                            value="<?php echo isset($_GET['search-field']) ? $_GET['search-field'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide" name="location">
                                                            <option value="">Input location</option>
                                                            <option value="New York" <?php echo (isset($_GET['location']) && $_GET['location'] == "New York") ? 'selected' : ''; ?>>New York</option>
                                                            <option value="California" <?php echo (isset($_GET['location']) && $_GET['location'] == "California") ? 'selected' : ''; ?>>
                                                                California</option>
                                                            <option value="London" <?php echo (isset($_GET['location']) && $_GET['location'] == "London") ? 'selected' : ''; ?>>
                                                                London</option>
                                                            <option value="Mexico" <?php echo (isset($_GET['location']) && $_GET['location'] == "Mexico") ? 'selected' : ''; ?>>
                                                                Mexico</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <div class="select-box">
                                                        <select class="wide" name="property-type">
                                                            <option value="">All Type</option>
                                                            <option value="Apartment" <?php echo (isset($_GET['property-type']) && $_GET['property-type'] == "Apartment") ? 'selected' : ''; ?>>Apartment</option>
                                                            <option value="villa" <?php echo (isset($_GET['property-type']) && $_GET['property-type'] == "villa") ? 'selected' : ''; ?>>
                                                                Villa</option>
                                                            <option value="house" <?php echo (isset($_GET['property-type']) && $_GET['property-type'] == "house") ? 'selected' : ''; ?>>
                                                                House</option>
                                                            <option value="New" <?php echo (isset($_GET['property-type']) && $_GET['property-type'] == "New") ? 'selected' : ''; ?>>New
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="switch_btn_one ">
                                    
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search <i class="fas fa-angle-down"></i></button>
                                        
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <!-- <a href="#" class="close-side-widget"><i class="fas fa-angle-up"></i></a> -->
                                        </div>
                                       


                                        <form method="GET" action="property-list.php">
                                            <?php
                                            $selected_distance = isset($_GET['distance']) ? $_GET['distance'] : '';
                                            $selected_bedrooms = isset($_GET['bedrooms']) ? $_GET['bedrooms'] : '';
                                            $selected_sort = isset($_GET['sort']) ? $_GET['sort'] : '';
                                            $selected_floor = isset($_GET['floor']) ? $_GET['floor'] : '';
                                            $selected_bathrooms = isset($_GET['bathrooms']) ? $_GET['bathrooms'] : '';
                                            $selected_agency = isset($_GET['agency']) ? $_GET['agency'] : '';
                                            $selected_status = isset($_GET['status']) ? $_GET['status'] : '';


                                            $selected_min_price = isset($_GET['min_price']) ? $_GET['min_price'] : '';
                                            $selected_max_price = isset($_GET['max_price']) ? $_GET['max_price'] : '';
                                            $selected_min_sqft = isset($_GET['min_sqft']) ? $_GET['min_sqft'] : '';
                                            $selected_max_sqft = isset($_GET['max_sqft']) ? $_GET['max_sqft'] : '';

                                            ?>

                                            <div class="row clearfix">
                                                <!-- <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                            <div class="form-group">
                                                                <label>Distance from Location</label>
                                                                <div class="select-box">
                                                                    <select name="distance" class="wide">
                                                                        <option value="">Distance from Location</option>
                                                                        <option value="1" <?php echo ($selected_distance == "1") ? 'selected' : ''; ?>>Within 1 Mile</option>
                                                                        <option value="2" <?php echo ($selected_distance == "2") ? 'selected' : ''; ?>>Within 2 Miles</option>
                                                                        <option value="3" <?php echo ($selected_distance == "3") ? 'selected' : ''; ?>>Within 3 Miles</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bedrooms</label>
                                                        <div class="select-box">
                                                            <select name="bedrooms" class="wide">
                                                                <option value="">Max Rooms</option>
                                                                <option value="1" <?php echo ($selected_bedrooms == "1") ? 'selected' : ''; ?>>One Room</option>
                                                                <option value="2" <?php echo ($selected_bedrooms == "2") ? 'selected' : ''; ?>>Two Rooms</option>
                                                                <option value="3" <?php echo ($selected_bedrooms == "3") ? 'selected' : ''; ?>>Three Rooms</option>
                                                                <option value="4" <?php echo ($selected_bedrooms == "4") ? 'selected' : ''; ?>>Four Rooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                            <div class="form-group">
                                                                <label>Sort by</label>
                                                                <div class="select-box">
                                                                    <select name="sort" class="wide">
                                                                        <option value="">Most Popular</option>
                                                                        <option value="1" <?php echo ($selected_sort == "1") ? 'selected' : ''; ?>>
                                                                            Top Rating</option>
                                                                        <option value="2" <?php echo ($selected_sort == "2") ? 'selected' : ''; ?>>
                                                                            New Rooms</option>
                                                                        <option value="3" <?php echo ($selected_sort == "3") ? 'selected' : ''; ?>>
                                                                            Classic Rooms</option>
                                                                        <option value="4" <?php echo ($selected_sort == "4") ? 'selected' : ''; ?>>
                                                                            Luxury Rooms</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Floor</label>
                                                        <div class="select-box">
                                                            <select name="floor" class="wide">
                                                                <option value="">Select Floor</option>
                                                                <option value="1" <?php echo ($selected_floor == "1") ? 'selected' : ''; ?>>One Floor</option>
                                                                <option value="2" <?php echo ($selected_floor == "2") ? 'selected' : ''; ?>>Two Floors</option>
                                                                <option value="3" <?php echo ($selected_floor == "3") ? 'selected' : ''; ?>>Three Floors</option>
                                                                <option value="4" <?php echo ($selected_floor == "4") ? 'selected' : ''; ?>>Four Floors</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Bath</label>
                                                        <div class="select-box">
                                                            <select name="bathrooms" class="wide">
                                                                <option value="">Any</option>
                                                                <option value="1" <?php echo ($selected_bathrooms == "1") ? 'selected' : ''; ?>>One</option>
                                                                <option value="2" <?php echo ($selected_bathrooms == "2") ? 'selected' : ''; ?>>Two</option>
                                                                <option value="3" <?php echo ($selected_bathrooms == "3") ? 'selected' : ''; ?>>Three</option>
                                                                <option value="4" <?php echo ($selected_bathrooms == "4") ? 'selected' : ''; ?>>Four</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Agencies</label>
                                                        <div class="select-box">
                                                            <select name="agency" class="wide">
                                                                <option value="">Any Agency</option>
                                                                <?php

                                                                $sql_agent = "SELECT * FROM users WHERE role = 'agent'";
                                                                $result_agent = mysqli_query($conn, $sql_agent);

                                                                // Loop through each agency and generate option elements
                                                                if ($result_agent->num_rows > 0) {
                                                                    while ($row = $result_agent->fetch_assoc()) {
                                                                        $selected = ($selected_agency == $row['id']) ? 'selected' : '';
                                                                        echo '<option value="' . $row['id'] . '" ' . $selected . '>' . htmlspecialchars($row['name']) . '</option>';
                                                                    }
                                                                }

                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Property Status</label>
                                                        <div class="select-box">
                                                            <select name="status" class="wide">
                                                                <option value="">Any</option>
                                                                <option value="sale" <?php echo ($selected_status == "sale") ? 'selected' : ''; ?>>For
                                                                    Sale</option>
                                                                <option value="rent" <?php echo ($selected_status == "rent") ? 'selected' : ''; ?>>For
                                                                    Rent</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Price Range</label>
                                                        <div class="select-box"
                                                            style="display: flex; flex-wrap: wrap; gap: 10px;">
                                                            <input type="number" name="min_price" class="wide"
                                                                placeholder="Min Price"
                                                                value="<?= $selected_min_price; ?>"
                                                                style="flex: 1; min-width: 120px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">

                                                            <input type="number" name="max_price" class="wide"
                                                                placeholder="Max Price"
                                                                value="<?= $selected_max_price; ?>"
                                                                style="flex: 1; min-width: 120px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                    <div class="form-group">
                                                        <label>Square Feet</label>

                                                        <div class="select-box"
                                                            style="display: flex; flex-wrap: wrap; gap: 10px;">
                                                            <input type="number" name="min_sqft" class="wide"
                                                                placeholder="Min Sq Ft"
                                                                value="<?= $selected_min_sqft; ?>"
                                                                style="flex: 1; min-width: 120px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">

                                                            <input type="number" name="max_sqft" class="wide"
                                                                placeholder="Max Sq Ft"
                                                                value="<?= $selected_max_sqft; ?>"
                                                                style="flex: 1; min-width: 120px; padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
                                                        </div>


                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit"
                                                style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; cursor: pointer; transition: background 0.3s ease;">
                                                Search
                                            </button>
                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="index.php" method="post" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
                                                            <option value="1">New York</option>
                                                            <option value="2">California</option>
                                                            <option value="3">London</option>
                                                            <option value="4">Maxico</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="All Type">All Type</option>
                                                            <option value="1">Laxury</option>
                                                            <option value="2">Classic</option>
                                                            <option value="3">Modern</option>
                                                            <option value="4">New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="switch_btn_one ">
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search<i class="fas fa-angle-down"></i></button>
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Distance from Location</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Distance from Location">Distance from
                                                                Location</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Within 1 Mile</option>
                                                            <option value="3">Within 2 Mile</option>
                                                            <option value="4">Within 3 Mile</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bedrooms</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Rooms">Max Rooms</option>
                                                            <option value="1">One Rooms</option>
                                                            <option value="2">Two Rooms</option>
                                                            <option value="3">Three Rooms</option>
                                                            <option value="4">Four Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Sort by</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Most Popular">Most Popular</option>
                                                            <option value="1">Top Rating</option>
                                                            <option value="2">New Rooms</option>
                                                            <option value="3">Classic Rooms</option>
                                                            <option value="4">Luxry Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Floor</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Select Floor">Select Floor</option>
                                                            <option value="1">One Floor</option>
                                                            <option value="2">Two Floor</option>
                                                            <option value="3">Three Floor</option>
                                                            <option value="4">Four Floor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bath</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Bath">Max Bath</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Max Bath</option>
                                                            <option value="3">Max Bath</option>
                                                            <option value="4">Max Bath</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Agencies</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Any Agency">Any Agency</option>
                                                            <option value="1">Any Agency</option>
                                                            <option value="2">Agency 01</option>
                                                            <option value="3">Agency 02</option>
                                                            <option value="4">Agency 03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="range-box">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="price-range">
                                                        <h6>Select Price Range</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="field-name"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="field-name" readonly=""></div>
                                                        </div>
                                                        <div class="area-range-slider"></div>
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
    </div>
</section>
<!-- search-field-section end -->



</style>
<!-- feature-style-three -->
<section class="feature-style-three centred">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-1"></i></div>
                        <h4>Excellent Reputation</h4>
                        <p style="font-size: 12px;">Pay your rent using Credit Card.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-26"></i></div>
                        <h4>Best Local Agents</h4>
                        <p style="font-size: 12px;">Instant access to zero brokerage properties</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-21"></i></div>
                        <h4>Personalized Service</h4>
                        <p style="font-size: 12px;">Lowest Interest rate offers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Latest Properties  -->
<?php
$sql = " SELECT properties.*, 
       users.name, users.email, users.user_img, users.phone, users.occupation, 
       users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
FROM properties 
JOIN users ON properties.agent_id = users.id 
ORDER BY properties.created_at DESC 
LIMIT 5";

$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    ?>

    <section class="feature-style-two alternate-2 sec-pad" style="padding-top: 109px;">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Latest</h5>
                <h2>Latest Properties</h2>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    $property_name = $row['property_name'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $agent_name = $row['name'];
                    $property_img = $row['property_img1'];
                    $beds = $row['beds'];
                    $baths = $row['baths'];
                    $square_feet = $row['square_feet'];
                    $prop_status = $row['status'];
                    $agent_img = $row['user_img'];
                    ?>
                    <div class="single-column">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image watermark-container">
                                        <img src="assets/images/property/<?php echo $property_img ?>" alt=""
                                            class="property-img">
                                        <img src="assets/images/logo.png" class="watermark" alt="Watermark">
                                    </figure>
                                    <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span>
                                </div>
                                <div class="lower-content">
                                    <div class="author-info clearfix">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="assets/images/users/<?php echo $agent_img ?>"
                                                    alt=""></figure>
                                            <h6 style="font-size: 13px;"><?php echo $agent_name ?></h6>
                                        </div>
                                        <div class="buy-btn pull-right"><a
                                                href="property-details.php?id=<?php echo $row['id']; ?>">For
                                                <?php echo $prop_status ?></a></div>
                                    </div>
                                    <div class="title-text">
                                        <h4><a
                                                href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a>
                                        </h4>
                                    </div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>₹<?php echo number_format($price, 2); ?></h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <!-- <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i
                                                        class="icon-12"></i></a></li>
                                            <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i
                                                        class="icon-13"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <!-- <p><?php echo $description; ?></p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i><?php echo $beds ?> Beds</li>
                                        <li><i class="icon-15"></i><?php echo $baths; ?> Baths</li>
                                        <li><i class="icon-16"></i><?php echo $square_feet ?> Sq Ft</li>
                                    </ul> -->
                                    <div class="btn-box">


                                        <?php if (isset($_SESSION['user_id'])) { ?>
                                            <a href="property-details.php?id=<?php echo $row['id']; ?>"
                                                class="theme-btn btn-two">See Details</a>
                                        <?php } else { ?>
                                            <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">See Details</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
} else {
    echo "<p>No Premium properties found.</p>";
}
?>





<!-- Latest Properties End -->








<!-- OUR PICKS -->
<?php
$sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
               users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
         WHERE picks = 1";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    ?>



    <section class="deals-style-two sec-pad" style="padding-top: 10px;">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>Hot Property</h5>
                <h2>Our Top Picks</h2>
            </div>
            <div class="deals-carousel owl-carousel owl-theme dots-style-one owl-nav-none owl-loaded owl-drag">




                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-6100px, 0px, 0px); transition: 0.5s; width: 9760px;">

                        <?php while ($row = mysqli_fetch_assoc($result)) {
                            $property_name = $row['property_name'];
                            $price = $row['price'];
                            $description = $row['description'];
                            $agent_name = $row['name'];
                            $property_img = $row['property_img1'];
                            $beds = $row['beds'];
                            $baths = $row['baths'];
                            $square_feet = $row['square_feet'];
                            $prop_status = $row['status'];
                            $agent_img = $row['user_img'];
                            ?>
                            <div class="owl-item cloned" style="width: 1170px; margin-right: 50px;">
                                <div class="single-item">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                            <div class="image-box">
                                                <figure class="image watermark-container">
                                                    <img src="assets/images/property/<?php echo $property_img ?>" alt=""
                                                        class="property-img">
                                                    <img src="assets/images/logo.png" class="watermark" alt="Watermark">
                                                </figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Top Pick</span>
                                                <div class="buy-btn"><a
                                                        href="property-details.php?id=<?php echo $row['id']; ?>">For Buy</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="lower-content">
                                                        <div class="title-text">
                                                            <h4>
                                                                <a href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?>
                                                                </a>



                                                            </h4>
                                                        </div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>₹<?php echo number_format($price, 2); ?></h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/users/<?php echo $agent_img ?>"
                                                                        alt="agent image">
                                                                    <span><?php echo $agent_name ?></span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p><?php echo $description ?></p>
                                                        <ul class="more-details clearfix">

                                                            <li><i class="icon-14"></i><?php echo $beds ?> Beds</li>
                                                            <li><i class="icon-15"></i><?php echo $baths ?> Baths</li>
                                                            <li><i class="icon-16"></i><?php echo $square_feet ?> Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box">
                                                                <?php if (isset($_SESSION['user_id'])) { ?>
                                                                    <a href="property-details.php?id=<?php echo $row['id']; ?>"
                                                                        class="theme-btn btn-one">See Details</a>
                                                                <?php } else { ?>
                                                                    <a href="#" class="theme-btn btn-two"
                                                                        onclick="showLoginAlert()">See
                                                                        Details</a>
                                                                <?php } ?>
                                                            </div>
                                                            <!-- <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.html"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.html"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button></div>

    </section>
    <?php
} else {
    echo "<p>No Pick Properties found.</p>";
}
?>
<!-- our picks end -->








<!-- featured properties -->
 <?php
$sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
               users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        WHERE  featured = 1;";
$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    ?>


    <section class="team-section sec-pad centred  ">
        <!-- <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div> -->
        <div class="auto-container">
            <div class="sec-title">
                <h5>Featured </h5>
                <h2>Featured Properties</h2>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one owl-loaded owl-drag">





                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2800px, 0px, 0px); transition: 0.5s; width: 4400px;">



                        <?php while ($row = mysqli_fetch_assoc($result)) {
                            $property_name = $row['property_name'];
                            $price = $row['price'];
                            $description = $row['description'];
                            $agent_name = $row['name'];
                            $property_img = $row['property_img1'];
                            $beds = $row['beds'];
                            $baths = $row['baths'];
                            $square_feet = $row['square_feet'];
                            $prop_status = $row['status'];
                            $agent_img = $row['user_img'];
                            ?>

                            <div class="owl-item cloned" style="width: 370px; margin-right: 30px;">



                                <div class="team-block-one">
                                    <div class="inner-box">

                                        <div class="image-box">
                                            <figure class="image watermark-container">
                                                <img src="assets/images/property/<?php echo $property_img ?>" alt=""
                                                    class="property-img">
                                                <img src="assets/images/logo.png" class="watermark" alt="Watermark">
                                            </figure>
                                            <!-- <div class="batch"><i class="icon-11"></i></div>
                                    <span class="category">Featured</span> -->
                                        </div>
                                        <div class="lower-content">
                                            <div class="inner">
                                                <h4><a
                                                        href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a>
                                                </h4>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <!-- <h6>Start From</h6> -->
                                                        <h4>₹<?php echo number_format($price, 2); ?></h4>
                                                    </div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <!-- <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i
                                                        class="icon-12"></i></a></li>
                                            <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i
                                                        class="icon-13"></i></a></li> -->
                                                    </ul>
                                                </div>
                                                <ul class="social-links clearfix">
                                                    <?php if (isset($_SESSION['user_id'])) { ?>
                                                        <a href="property-details.php?id=<?php echo $row['id']; ?>"
                                                            class="theme-btn btn-two">See Details</a>
                                                    <?php } else { ?>
                                                        <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">See
                                                            Details</a>
                                                    <?php } ?>
                                                </ul>

                                                <!-- <div class="btn-box">


                                        <?php if (isset($_SESSION['user_id'])) { ?>
                                            <a href="property-details.php?id=<?php echo $row['id']; ?>"
                                                class="theme-btn btn-two">See Details</a>
                                        <?php } else { ?>
                                            <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">See Details</a>
                                        <?php } ?>
                                    </div> -->


                                            </div>




                                        </div>

                                    </div>

                                </div>


                            </div>
                        <?php } ?>
                    </div>

                </div>


                <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span
                            class="far fa-angle-left"></span></button>
                    <button type="button" role="presentation" class="owl-next"><span
                            class="far fa-angle-right"></span></button>
                </div>
                <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                    <button role="button" class="owl-dot active"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                </div>
            </div>

        </div>
    </section>
    <?php
} else {
    echo "<p>No properties found.</p>";
}
?>


<!-- Premium properties -->
<?php
$sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
                users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
         FROM properties 
         JOIN users ON properties.agent_id = users.id 
         WHERE  is_premium = 1";



$result = mysqli_query($conn, $sql);
if ($result && mysqli_num_rows($result) > 0) {
    ?>
    <section class="news-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <h5>Premium </h5>
                <h2>Premium  Properties</h2>
            </div>

            <!-- Swiper Slider Start -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <?php while ($row = mysqli_fetch_assoc($result)) {
                        $property_name = $row['property_name'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $agent_name = $row['name'];
                        $property_img = $row['property_img1'];
                        $beds = $row['beds'];
                        $baths = $row['baths'];
                        $square_feet = $row['square_feet'];
                        $prop_status = $row['status'];
                        $agent_img = $row['user_img'];
                        ?>
                        <!-- Each Slide -->
                        <div class="swiper-slide">
                            <div class="col news-block">
                                <div class="news-block-two wow fadeInLeft animated" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <div class="inner-box align-items-center">
                                        <div class="image-box">
                                            <figure class="image">
                                                
                                                    <img src="assets/images/property/<?php echo $property_img ?>" alt="">
                                               
                                            </figure>
                                            
                                        </div>
                                        <div class="content-box">
                                            <ul class="post-info clearfix">
                                                <li class="author-box">
                                                    <figure class="author-thumb">
                                                        <img src="assets/images/users/<?php echo $agent_img ?>" alt="">
                                                    </figure>
                                                    <h5><?php echo $agent_name ?></h5>
                                                </li>
                                            </ul>
                                            <h4>
                                                <a
                                                    href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a>
                                            </h4>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>₹<?php echo number_format($price, 2); ?></h4>
                                                </div>
                                            </div>
                                            <p><?php echo $description ?></p>
                                            <div class="btn-box">
                                                <?php if (isset($_SESSION['user_id'])) { ?>
                                                    <a href="property-details.php?id=<?php echo $row['id']; ?>"
                                                        class="theme-btn btn-two">See Details</a>
                                                <?php } else { ?>
                                                    <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">See Details</a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <!-- Swiper Slider End -->

        </div>
    </section>

    <!-- Swiper Init -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 1,
                },
                480: {
                    slidesPerView: 1,
                }
            }
        });
    </script>

    <?php
} else {
    echo "<p>No properties found.</p>";
}
?>
<style>
    .swiper-button-next,
    .swiper-button-prev {
        width: 42px;
        height: 42px;
        background-color: #e5e7ec;
        color: #555;
        border-radius: 6px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: #d3d6dc;
        color: #000;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 16px;
        font-weight: bold;
    }

    /* Small spacing between arrows and slider */
    .swiper-button-next {
        right: 10px;
    }

    .swiper-button-prev {
        left: 10px;
    }
</style>


<!-- feature-style-two end -->
<!-- cta-section -->
<section class="cta-section alternate-2 pb-240 centred"
    style="background-image: url(assets/images/background/cta-1.jpg);">
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text">
                <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
            </div>
            <div class="btn-box">
                <a href="property-list.php" class="theme-btn btn-three">Rent Properties</a>
                <a href="property-list.php" class="theme-btn btn-one">Buy Properties</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- funfact-section -->
<section class="funfact-section centred">
    <div class="auto-container">
        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="1270">0</span>
                            </div>
                            <p>Total Professionals</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2350">0</span>
                            </div>
                            <p>Total Property Sell</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2540">0</span>
                            </div>
                            <p>Total Property Rent</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="8270">0</span>
                            </div>
                            <p>Total Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->

<?php
// Fetch agents from database
$query = "SELECT * FROM teams";
$result = mysqli_query($conn, $query);
?>
<!-- team-section -->
<section class="team-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Agents</h5>
            <h2>Meet Our Excellent Agents</h2>
        </div>
        <div class="row clearfix">
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $name = $row['name'];
                    $designation = $row['designation'];

                    $agent_img = $row['image'];
                    $twitter = $row['twitter'];
                    $facebook = $row['facebook'];
                    $google = $row['google_plus'];

                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/agents/<?php echo $agent_img ?>" alt="">
                                </figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="#"><?php echo $name ?></a></h4>
                                        <span class="designation"><?php echo $designation ?></span>
                                        <ul class="social-links clearfix">
                                            <li><a href="<?php echo $facebook ?>"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="<?php echo $twitter ?>"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="<?php echo $google ?>"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No agents found.</p>";
            }
            ?>
        </div>
    </div>
</section>
<!-- team-section end -->





<!-- pricing-section -->
<section class="pricing-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Pricing plan</h5>
            <h2>Choose Your Plan</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="pricing-table">
                        <div class="table-header">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                            <h4>Basic Pack</h4>
                            <h2>₹300 <span>/ mo</span></h2>
                        </div>
                        <div class="table-content">
                            <ul class="feature-list clearfix">
                                <li>1 Bathroom Cleaning</li>
                                <li>Up to 3 Bedrooms Cleaning</li>
                                <li>1 Livingroom Cleaning</li>
                                <li>Kitchen Cleaning</li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <button class="link-btn razorpay-btn" data-amount="300" data-plan="Basic Pack">Buy
                                Now</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="pricing-table">
                        <div class="table-header">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                            <h4>Premium Pack</h4>
                            <h2>₹500 <span>/ mo</span></h2>
                        </div>
                        <div class="table-content">
                            <ul class="feature-list clearfix">
                                <li>1 Bathroom Cleaning</li>
                                <li>Up to 3 Bedrooms Cleaning</li>
                                <li>1 Livingroom Cleaning</li>
                                <li>Kitchen Cleaning</li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <button class="link-btn razorpay-btn" data-amount="500" data-plan="Premium Pack">Buy
                                Now</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="pricing-table">
                        <div class="table-header">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                            <h4>Platinum Pack</h4>
                            <h2>₹900 <span>/ mo</span></h2>
                        </div>
                        <div class="table-content">
                            <ul class="feature-list clearfix">
                                <li>1 Bathroom Cleaning</li>
                                <li>Up to 3 Bedrooms Cleaning</li>
                                <li>1 Livingroom Cleaning</li>
                                <li>Kitchen Cleaning</li>
                            </ul>
                        </div>
                        <div class="table-footer">
                            <button class="link-btn razorpay-btn" data-amount="900" data-plan="platinum Pack">Buy
                                Now</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- pricing-section end -->


<!-- contact-section -->
<section class="contact-section bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <h5>Contact</h5>
                        <h2>Contact Us</h2>
                    </div>
                    <div class="form-inner">
                        <form method="post" action="contact_mail.php" id="contact-form" class="default-form">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email address" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="3000ms">
                    <figure class="image"><img src="assets/images/banner/contact-1.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->






















<!-- main-footer -->
<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About</h3>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor in cididunt ut
                                labore dolore magna aliqua enim ad minim venitam</p>
                            <p>Quis nostrud exercita laboris nisi ut aliquip commodo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="index.php">About Us</a></li>
                                <li><a href="index.php">Listing</a></li>
                                <li><a href="index.php">How It Works</a></li>
                                <li><a href="index.php">Our Services</a></li>
                                <li><a href="index.php">Our Blog</a></li>
                                <li><a href="index.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Top News</h3>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.php"><img
                                            src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                <h5><a href="blog-details.php">The Added Value Social Worker</a></h5>
                                <p>Mar 25, 2020</p>
                            </div>
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.php"><img
                                            src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                <h5><a href="blog-details.php">Ways to Increase Trust</a></h5>
                                <p>Mar 24, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville, FV77
                                    8WS</li>
                                <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                <li><i class="fas fa-envelope"></i><a
                                        href="mailto:info@example.com">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <figure class="footer-logo"><a href="index.php"><img src="assets/images/footer-logo.png" alt=""></a>
                </figure>
                <div class="copyright pull-left">
                    <p><a href="index.php">Realshed</a> &copy; 2021 All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="index.php">Terms of Service</a></li>
                    <li><a href="index.php">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fal fa-angle-up"></span>
</button>
</div>


<!-- jequery plugins -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jQuery.style.switcher.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.paroller.min.js"></script>
<script src="assets/js/nav-tool.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="assets/js/gmaps.js"></script>
<script src="assets/js/map-helper.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>


<!-- for inspect block securtiy reasons -->


<!-- see details button authorize -->
<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showLoginAlert() {
        Swal.fire({
            title: "Login Required",
            text: "You must be logged in to view property details!",
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



<!-- Razorpay Payment Integration -->
<?php

$username = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
?>


<!-- Add SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let buttons = document.querySelectorAll(".razorpay-btn");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                let amount = this.getAttribute("data-amount");
                let plan = this.getAttribute("data-plan");
                let username = "<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>";

                var options = {
                    "key": "rzp_test_9raH3Ams4ZlDWn",
                    "amount": amount * 100,
                    "currency": "INR",
                    "name": "Real Estate",
                    "description": plan + " Subscription",
                    "handler": function (response) {
                        // Capture payment method details
                        let payment_method = response.method || "Razorpay";

                        fetch("./payment_success.php", {
                            method: "POST",
                            headers: { "Content-Type": "application/json" },
                            body: JSON.stringify({
                                payment_id: response.razorpay_payment_id,
                                amount: amount,
                                plan: plan,
                                username: username,
                                payment_method: payment_method
                            })
                        })
                            .then(res => res.json())
                            .then(data => {
                                if (data.status === "success") {
                                    Swal.fire({
                                        title: "Payment Successful!",
                                        text: "Transaction ID: " + response.razorpay_payment_id,
                                        icon: "success",
                                        confirmButtonText: "OK"
                                    }).then(() => {
                                        window.location.reload();
                                    });
                                } else {
                                    Swal.fire({
                                        title: "Payment Failed",
                                        text: data.message,
                                        icon: "error",
                                        confirmButtonText: "Try Again"
                                    });
                                }
                            })
                            .catch(error => {
                                console.error("Error:", error);
                                Swal.fire({
                                    title: "Error",
                                    text: "Something went wrong. Please try again.",
                                    icon: "error",
                                    confirmButtonText: "OK"
                                });
                            });
                    },
                    "theme": { "color": "#2dbe6c" }
                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            });
        });
    });
</script>


<!-- gettting a users location  -->
<script>
    navigator.geolocation.getCurrentPosition(function (position) {
        fetch('get-properties.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                lat: position.coords.latitude,
                lng: position.coords.longitude
            })
        })
            .then(res => res.json())
            .then(data => {
                const div = document.getElementById("results");
                div.innerHTML = data.length === 0
                    ? "No nearby properties found"
                    : data.map(p => `
          <div>
            <h3>${p.property_name}</h3>
            <p>${p.city}, ${p.address}</p>
            <img src="${p.property_img1}" width="200" /><br>
            <strong>${p.price} ₹</strong><br>
            <small>${p.distance.toFixed(2)} km away</small>
          </div>
        `).join('');
            });
    });
</script>

<div id="results">Loading nearby properties...</div>



<style>
    .watermark-container {
        position: relative;
        width: 100%;
        height: auto;
    }

    .property-img {
        width: 100%;
        height: auto;
        display: block;
    }

    .watermark {
        position: absolute;
        bottom: 39px;
        right: 10px;
        width: 30px;
        height: auto;
        opacity: 0.5;
        pointer-events: none;
        z-index: 2;
    }
</style>