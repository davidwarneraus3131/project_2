<?php
session_start();
include("./includes/header.php");
include("./database/db.php");
?>

<!-- page-content end -->
<div class="page-content clearfix">

    <div class="left-column pull-left">
        <!-- location-section -->
        <!-- <section class="location-section">
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
                                    <ul class="other-option pull-right clearfix">
                                        <li><a href="property-details.php"><i class="icon-12"></i></a></li>
                                        <li><a href="property-details.php"><i class="icon-13"></i></a></li>
                                    </ul>
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
</section> -->
        <!-- location-section end -->
    </div>



    <!--Page Title-->
    <section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Property List View</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li>Property List </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->



    <div class="right-column pull-right">
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





                                            <form method="GET" action="" class="search-form">
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
                                                                    <?php


                                                                    // Fetch distinct locations from the properties table
                                                                    $sql_location = "SELECT DISTINCT state_county FROM properties WHERE state_county IS NOT NULL AND state_county != ''";
                                                                    $result = $conn->query($sql_location);

                                                                    // Loop through each location and generate option elements
                                                                    if ($result && $result->num_rows > 0) {
                                                                        while ($row = $result->fetch_assoc()) {
                                                                            $selected = (isset($_GET['location']) && $_GET['location'] == $row['state_county']) ? 'selected' : '';
                                                                            echo '<option value="' . htmlspecialchars($row['state_county']) . '" ' . $selected . '>' . htmlspecialchars($row['state_county']) . '</option>';
                                                                        }
                                                                    }
                                                                    ?>
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
                                                                    <option value="villa" <?php echo (isset($_GET['property-type']) && $_GET['property-type'] == "villa") ? 'selected' : ''; ?>>Villa</option>
                                                                    <option value="house" <?php echo (isset($_GET['property-type']) && $_GET['property-type'] == "house") ? 'selected' : ''; ?>>House</option>
                                                                    <option value="New" <?php echo (isset($_GET['property-type']) && $_GET['property-type'] == "New") ? 'selected' : ''; ?>>New</option>
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
                                                    <a href="#" class="close-side-widget"><i
                                                            class="far fa-times"></i></a>
                                                </div>

                                                <form method="GET" action="">
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
                                                                        <option value="sale" <?php echo ($selected_status == "sale") ? 'selected' : ''; ?>>For Sale</option>
                                                                        <option value="rent" <?php echo ($selected_status == "rent") ? 'selected' : ''; ?>>For Rent</option>
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

                                                        <!-- Tags Filters -->
                                                        <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                            <div class="form-group">
                                                                <label>Property Features</label>
                                                                <div class="checkbox-group">
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" name="features[]"
                                                                            value="furnished" <?php echo (isset($_GET['features']) && in_array('furnished', $_GET['features'])) ? 'checked' : ''; ?>>
                                                                        <label for="furnished">Furnished</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" name="features[]"
                                                                            value="semi_furnished" <?php echo (isset($_GET['features']) && in_array('semi_furnished', $_GET['features'])) ? 'checked' : ''; ?>>
                                                                        <label
                                                                            for="semi_furnished">Semi-Furnished</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" name="features[]"
                                                                            value="ac" <?php echo (isset($_GET['features']) && in_array('ac', $_GET['features'])) ? 'checked' : ''; ?>>
                                                                        <label for="ac">AC</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" name="features[]"
                                                                            value="balcony" <?php echo (isset($_GET['features']) && in_array('balcony', $_GET['features'])) ? 'checked' : ''; ?>>
                                                                        <label for="balcony">Balcony</label>
                                                                    </div>
                                                                    <div class="checkbox">
                                                                        <input type="checkbox" name="features[]"
                                                                            value="refrigerator" <?php echo (isset($_GET['features']) && in_array('refrigerator', $_GET['features'])) ? 'checked' : ''; ?>>
                                                                        <label for="refrigerator">Refrigerator</label>
                                                                    </div>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- search-field-section end -->

        <?php

        // Set the number of records per page
        $limit = 6;

        // Get the current page number from URL, default is 1
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        if ($page < 1)
            $page = 1;

        // Calculate the starting record for the query
        $offset = ($page - 1) * $limit;

        // Get total records count
        $total_query = "SELECT COUNT(*) AS total FROM properties";
        $total_result = mysqli_query($conn, $total_query);
        $total_row = mysqli_fetch_assoc($total_result);
        $total_records = $total_row['total'] ?? 0;

        // Calculate total pages
        $total_pages = ($total_records > 0) ? ceil($total_records / $limit) : 1;

        // Default sorting order
        $sort_order = "ORDER BY properties.created_at DESC"; // Default: Newest
        
        // Check if a sorting option is selected
        if (isset($_GET['sort'])) {
            switch ($_GET['sort']) {
                case '1':
                    $sort_order = "ORDER BY properties.created_at DESC"; // New Arrival
                    break;
                case '2':
                    $sort_order = "ORDER BY properties.rating DESC"; // Top Rated
                    break;
                case '3':
                    $sort_order = "ORDER BY properties.price ASC"; // Offer Place (Lowest Price)
                    break;
                case '4':
                    $sort_order = "ORDER BY properties.views DESC"; // Most Place (Most Views)
                    break;
            }
        }

        // Initialize filter conditions
        $search_condition = "";
        $location_condition = "";
        $type_condition = "";
        $feature_conditions = "";


        // Check if search query is provided
        if (isset($_GET['search-field']) && !empty($_GET['search-field'])) {
            $search_query = mysqli_real_escape_string($conn, $_GET['search-field']);
            $search_condition = "AND (properties.property_name LIKE '%$search_query%' OR properties.description LIKE '%$search_query%')";
        }

        if (isset($_GET['location']) && !empty($_GET['location'])) {
            $location = mysqli_real_escape_string($conn, $_GET['location']);
            $location_condition = "AND properties.location = '$location'";
        }

        if (isset($_GET['property-type']) && !empty($_GET['property-type'])) {
            $property_type = mysqli_real_escape_string($conn, $_GET['property-type']);
            $type_condition = "AND properties.property_type = '$property_type'";
        }

        // Initialize the filter conditions for advanced search
        
        $distance_condition = "";
        $bedroom_condition = "";
        $floor_condition = "";
        $bath_condition = "";
        $agency_condition = "";
        $price_condition = "";
        $area_condition = "";
        $property_type_condition = "";

        if (isset($_GET['distance']) && !empty($_GET['distance'])) {
            $distance = intval($_GET['distance']);
            $distance_condition = "AND properties.distance <= $distance";
        }

        if (isset($_GET['bedrooms']) && !empty($_GET['bedrooms'])) {
            $bedrooms = intval($_GET['bedrooms']);
            $bedroom_condition = "AND properties.beds = '$bedrooms'";
        }

        if (isset($_GET['floor']) && !empty($_GET['floor'])) {
            $floor = intval($_GET['floor']);
            $floor_condition = "AND properties.floor = $floor";
        }

        if (isset($_GET['bathrooms']) && !empty($_GET['bathrooms'])) {
            $bath = intval(value: $_GET['bathrooms']);
            $bath_condition = "AND properties.baths = $bath";
        }

        if (isset($_GET['agency']) && !empty($_GET['agency'])) {
            $agency = mysqli_real_escape_string($conn, $_GET['agency']);
            $agency_condition = "AND properties.agent_id = '$agency'";

        }

        if (isset($_GET['status']) && !empty($_GET['status'])) {
            $status = mysqli_real_escape_string($conn, $_GET['status']);
            $property_type_condition = "AND properties.property_now_status  = '$status'";
        }

        // Price Range Condition
        if (isset($_GET['min_price']) && isset($_GET['max_price']) && !empty($_GET['min_price']) && !empty($_GET['max_price'])) {
            $min_price = intval($_GET['min_price']);
            $max_price = intval($_GET['max_price']);
            $price_condition = "AND properties.price BETWEEN $min_price AND $max_price";
        }

        // Area (Sq Ft) Condition
        if (isset($_GET['min_sqft']) && isset($_GET['max_sqft']) && !empty($_GET['min_sqft']) && !empty($_GET['max_sqft'])) {
            $min_sqft = intval($_GET['min_sqft']);
            $max_sqft = intval($_GET['max_sqft']);
            $area_condition = "AND properties.square_feet BETWEEN $min_sqft AND $max_sqft";
        }

        // Initialize the feature conditions
        
        if (isset($_GET['features']) && !empty($_GET['features'])) {
            $features = $_GET['features'];

            // Add conditions for each feature
            if (in_array('furnished', $features)) {
                $feature_conditions .= " AND properties.furnished = 1";
            }
            if (in_array('semi_furnished', $features)) {
                $feature_conditions .= " AND properties.semi_furnished = 1";
            }
            if (in_array('ac', $features)) {
                $feature_conditions .= " AND properties.ac = 1";
            }
            if (in_array('balcony', $features)) {
                $feature_conditions .= " AND properties.balcony = 1";
            }
            if (in_array('refrigerator', $features)) {
                $feature_conditions .= " AND properties.refrigerator = 1";
            }
        }

        $sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
               users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        WHERE 1=1 $search_condition $location_condition $type_condition 
              $distance_condition $bedroom_condition $floor_condition $bath_condition 
              $agency_condition $price_condition $area_condition $property_type_condition $feature_conditions
        $sort_order 
        LIMIT $limit OFFSET $offset";

        //  echo $sql;
        
        $result = mysqli_query($conn, $sql);
        // Showing dynamic results text
        $start_item = ($page - 1) * $limit + 1;
        $end_item = min($start_item + $limit - 1, $total_records);
        ?>

        <!-- deals-style-two -->
        <section class="deals-style-two">
            <div class="auto-container">
                <div class="item-shorting clearfix">
                    <div class="left-column pull-left">
                        <h5>Search Results: <span>Showing <?php echo $start_item . '-' . $end_item; ?> of
                                <?php echo $total_records; ?> Listings</span></h5>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="short-box clearfix">
                            <div class="select-box">
                                <select class="wide" onchange="sortProperties(this.value)">
                                    <option value="newest" <?php echo (!isset($_GET['sort']) || $_GET['sort'] == '1') ? 'selected' : ''; ?>>Sort by: Newest</option>
                                    <option value="1" <?php echo (isset($_GET['sort']) && $_GET['sort'] == '1') ? 'selected' : ''; ?>>New Arrival</option>
                                    <option value="2" <?php echo (isset($_GET['sort']) && $_GET['sort'] == '2') ? 'selected' : ''; ?>>Top Rated</option>
                                    <option value="3" <?php echo (isset($_GET['sort']) && $_GET['sort'] == '3') ? 'selected' : ''; ?>>Offer Place</option>
                                    <option value="4" <?php echo (isset($_GET['sort']) && $_GET['sort'] == '4') ? 'selected' : ''; ?>>Most Place</option>
                                </select>
                            </div>
                        </div>
                        <div class="short-menu clearfix">
                            <button class="list-view on"><i class="icon-35"></i></button>
                            <button class="grid-view"><i class="icon-36"></i></button>
                        </div>
                    </div>
                </div>

                <script>
                    function sortProperties(value) {
                        window.location.href = "?sort=" + value + "&page=1";
                    }
                </script>
                <div class="wrapper list">
                    <!-- Loop through each property fetched from the database -->
                    <?php
                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Retrieve the data
                            $property_name = $row['property_name'];
                            $price = $row['price'];
                            $description = $row['description'];
                            $agent_name = $row['name'];
                            $agent_img = $row['user_img'];
                            $property_img = $row['property_img1'];
                            $beds = $row['beds'];
                            $baths = $row['baths'];
                            $square_feet = $row['square_feet'];
                            ?>
                            <div class="deals-list-content list-item">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">

                                       <figure class="image watermark-container">
    <img src="assets/images/property/<?php echo $property_img ?>" alt="" class="property-img">
    <img src="assets/images/logo.png" class="watermark" alt="Watermark">
</figure>
  
                                            <?php if ($row['batch'] == 1): ?>
                                                <div class="batch"><i class="icon-11"></i></div>
                                            <?php endif; ?>


                                            <?php if ($row['featured'] == 1): ?>
                                                <span class="category">Featured</span>
                                            <?php endif; ?>
                                            <div class="buy-btn"><a href="property-details.php?id=<?php echo $row['id']; ?>">For
                                                    Buy</a></div>
                                        </div>
                                        <div class="lower-content">
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
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb">
                                                        <img src="assets/images/users/<?php echo $agent_img ?>" alt="">
                                                        <span><?php echo $agent_name; ?></span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p><?php echo $description; ?></p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i><?php echo $beds; ?> Beds</li>
                                                <li><i class="icon-15"></i><?php echo $baths; ?> Baths</li>
                                                <li><i class="icon-16"></i><?php echo $square_feet; ?> Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left">
                                                    <?php if (isset($_SESSION['user_id'])) { ?>
                                                        <a href="property-details.php?id=<?php echo $row['id']; ?>"
                                                            class="theme-btn btn-two">See Details</a>
                                                    <?php } else { ?>
                                                        <a href="#" class="theme-btn btn-two" onclick="showLoginAlert()">See
                                                            Details</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "No properties found.";
                    }
                    ?>
                    <!-- Grid Layout for Properties -->
                    <div class="deals-grid-content">
                        <div class="row clearfix">
                            <?php
                            // Set the number of records per page
                            

                            // Fetch records with pagination
                            $sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
               users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        LIMIT $limit OFFSET $offset";

                            $result = mysqli_query($conn, $sql);

                            // Showing dynamic results text
                            $start_item = ($page - 1) * $limit + 1;
                            $end_item = min($start_item + $limit - 1, $total_records);

                            $result = mysqli_query($conn, $sql);
                            if ($result && mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $property_name = $row['property_name'];
                                    $price = $row['price'];
                                    $description = $row['description'];
                                    $agent_name = $row['name'];
                                    $agent_img = $row['user_img'];
                                    $property_img = $row['property_img1'];
                                    $beds = $row['beds'];
                                    $baths = $row['baths'];
                                    $square_feet = $row['square_feet'];
                                    ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                      <figure class="image watermark-container">
    <img src="assets/images/property/<?php echo $property_img ?>" alt="" class="property-img">
    <img src="assets/images/logo.png" class="watermark" alt="Watermark">
</figure>

                                                    <?php if ($row['batch'] == 1): ?>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                    <?php endif; ?>


                                                    <?php if ($row['featured'] == 1): ?>
                                                        <span class="category">Featured</span>
                                                    <?php endif; ?>

                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img
                                                                    src="assets/images/users/<?php echo $agent_img ?>" alt="">
                                                            </figure>
                                                            <h6><?php echo $agent_name; ?></h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a
                                                                href="property-details.php?id=<?php echo $row['id']; ?>">For
                                                                Buy</a></div>
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
                                                    </div>
                                                    <p><?php echo $description; ?></p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i><?php echo $beds; ?> Beds</li>
                                                        <li><i class="icon-15"></i><?php echo $baths; ?> Baths</li>
                                                        <li><i class="icon-16"></i><?php echo $square_feet; ?> Sq Ft</li>
                                                    </ul>
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
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>



                </div>
                <!-- Pagination -->
                <?php if ($total_pages > 1): ?>
                    <div class="pagination-wrapper">
                        <ul class="pagination clearfix">
                            <!-- Previous Button -->
                            <?php if ($page > 1): ?>
                                <li><a href="?page=<?php echo ($page - 1); ?>"><i class="fas fa-angle-left"></i></a></li>
                            <?php endif; ?>

                            <!-- Page Numbers -->
                            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                <li>
                                    <a href="?page=<?php echo $i; ?>" class="<?php echo ($page == $i) ? 'current' : ''; ?>">
                                        <?php echo $i; ?>
                                    </a>
                                </li>
                            <?php endfor; ?>

                            <!-- Next Button -->
                            <?php if ($page < $total_pages): ?>
                                <li><a href="?page=<?php echo ($page + 1); ?>"><i class="fas fa-angle-right"></i></a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <!-- <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="property-list-3.html" class="current">1</a></li>
                                <li><a href="property-list-3.html">2</a></li>
                                <li><a href="property-list-3.html">3</a></li>
                                <li><a href="property-list-3.html"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div> -->

            </div>
            <!-- ad section  -->
            <div class="sticky-ad" style="position: fixed; top: 350px; right: 20px; width: 100px; z-index: 99; ">
                <img src="assets/images/background/cta-1.jpg" alt="Sidebar Ad" style="width: 100%;">
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="ad-container mb-4">
                    <img src="assets/images/background/cta-1.jpg" class="img-fluid w-100" alt="Sidebar Ad">
                </div>
            </div>

            <style>
                .ad-container {
                    margin: 20px 0;
                    text-align: center;
                }

                .ad-container img {
                    max-width: 100%;
                    height: auto;
                    border-radius: 10px;
                }
            </style>

            <!-- ad section end -->
        </section>
        <!-- deals-style-two end -->
    </div>

</div>
<!-- page-content end -->


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
<script src="assets/js/product-filter.js"></script>
<script src="assets/js/nav-tool.js"></script>

<!-- map script -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="assets/js/gmaps.js"></script>
<script src="assets/js/map-helper.js"></script>

<!-- main-js -->
<script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

</html>

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
