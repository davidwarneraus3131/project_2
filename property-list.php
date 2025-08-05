
<?php
// echo "Floor: " . $_GET['floor'];
// exit;
session_start();
include("./includes/header.php");
include("./database/db.php");


?>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>



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
$page = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;
$offset = ($page - 1) * $limit;

// Sanitize and validate GET input helper
function get_param($key, $default = '', $sanitize = 'string') {
    $value = $_GET[$key] ?? $default;
    switch ($sanitize) {
        case 'int': return filter_var($value, FILTER_VALIDATE_INT) ?: $default;
        case 'float': return filter_var($value, FILTER_VALIDATE_FLOAT) ?: $default;
        case 'string': return htmlspecialchars(trim($value));
        case 'array': return is_array($value) ? array_map('htmlspecialchars', $value) : [];
        default: return $default;
    }
}

$sort_options = [
    '1' => 'ORDER BY properties.created_at DESC',
    '2' => 'ORDER BY properties.rating DESC',
    '3' => 'ORDER BY properties.price ASC',
    '4' => 'ORDER BY properties.views DESC'
];
$sort_key = get_param('sort', '1', 'string');
$sort_order = $sort_options[$sort_key] ?? $sort_options['1'];

// Filters
$search = get_param('search-field');
$location = get_param('location');
$property_type = get_param('property-type');
$distance = get_param('distance', 0, 'int');
$bedrooms = get_param('bedrooms', 0, 'int');
$floor = get_param('floor', 0, 'int');
$bathrooms = get_param('bathrooms', 0, 'int');
$agency = get_param('agency');
$status = get_param('status');
$min_price = get_param('min_price', 0, 'int');
$max_price = get_param('max_price', 0, 'int');
$min_sqft = get_param('min_sqft', 0, 'int');
$max_sqft = get_param('max_sqft', 0, 'int');
$features = get_param('features', [], 'array');

$conditions = ["1=1"];

if (!empty($search)) {
    $safe_search = mysqli_real_escape_string($conn, $search);
    $conditions[] = "(properties.property_name LIKE '%$safe_search%' OR properties.description LIKE '%$safe_search%')";
}

if (!empty($location)) {
    $safe_location = mysqli_real_escape_string($conn, $location);
    $conditions[] = "'$safe_location' LIKE CONCAT('%', properties.location, '%')";
}

if (!empty($property_type)) {
    $safe_property_type = mysqli_real_escape_string($conn, $property_type);
    $conditions[] = "properties.property_type = '$safe_property_type'";
}

if ($distance > 0) $conditions[] = "properties.distance <= $distance";
if ($bedrooms > 0) $conditions[] = "properties.beds = $bedrooms";
if ($floor > 0) $conditions[] = "properties.total_floors = $floor";
if ($bathrooms > 0) $conditions[] = "properties.baths = $bathrooms";

if (!empty($agency)) {
    $safe_agency = mysqli_real_escape_string($conn, $agency);
    $conditions[] = "properties.agent_id = '$safe_agency'";
}

if (!empty($status)) {
    $safe_status = mysqli_real_escape_string($conn, $status);
    $conditions[] = "properties.property_now_status = '$safe_status'";
}

if ($min_price > 0 && $max_price > 0) {
    $conditions[] = "properties.price BETWEEN $min_price AND $max_price";
}

if ($min_sqft > 0 && $max_sqft > 0) {
    $conditions[] = "properties.square_feet BETWEEN $min_sqft AND $max_sqft";
}

$feature_map = [
    'furnished' => 'properties.furnished',
    'semi_furnished' => 'properties.semi_furnished',
    'ac' => 'properties.ac',
    'balcony' => 'properties.balcony',
    'refrigerator' => 'properties.refrigerator'
];

foreach ($features as $feature) {
    if (array_key_exists($feature, $feature_map)) {
        $conditions[] = $feature_map[$feature] . ' = 1';
    }
}

$where_clause = implode(' AND ', $conditions);

$sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
               users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        WHERE $where_clause 
        $sort_order 
        LIMIT $limit OFFSET $offset";

$result = mysqli_query($conn, $sql);

// Count total records for pagination
$total_query = "SELECT COUNT(*) AS total FROM properties WHERE $where_clause";
$total_result = mysqli_query($conn, $total_query);
$total_row = mysqli_fetch_assoc($total_result);
$total_records = $total_row['total'] ?? 0;
$total_pages = ($total_records > 0) ? ceil($total_records / $limit) : 1;

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
                  <div id="map-container" style="margin: 20px 0; position: relative;">
    <div id="map" style="height: 600px; width: 100%; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);"></div>
    <div id="map-controls" style="position: absolute; top: 20px; right: 20px; z-index: 1000;">
        <button id="theme-toggle" class="map-control-btn" title="Change map theme">
            <i class="fas fa-palette"></i>
        </button>
        <button id="locate-me" class="map-control-btn" title="Find my location">
            <i class="fas fa-location-arrow"></i>
        </button>
    </div>
</div>

<!-- Include Leaflet CSS and JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<!-- Include Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

<script>
// Premium Map Themes
const mapThemes = {
    'standard': {
        name: 'Standard',
        url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
    },
    'dark': {
        name: 'Dark',
        url: 'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        maxZoom: 19
    },
    'satellite': {
        name: 'Satellite',
        url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
        maxZoom: 19
    },
    'light': {
        name: 'Light',
        url: 'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png',
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        maxZoom: 19
    },
    'terrain': {
        name: 'Terrain',
        url: 'https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png',
        attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
        maxZoom: 17
    }
};

// Initialize the map with responsive view
const map = L.map('map', {
    center: [20.5937, 78.9629],
    zoom: 4,
    zoomControl: false,
    scrollWheelZoom: true
});

// Add initial tile layer
let currentTheme = 'standard';
L.tileLayer(mapThemes[currentTheme].url, {
    attribution: mapThemes[currentTheme].attribution,
    maxZoom: mapThemes[currentTheme].maxZoom
}).addTo(map);

// Custom marker icons for different property types
const propertyIcons = {
    'Apartment': L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    }),
    'Villa': L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-gold.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    }),
    'House': L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    }),
    'default': L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    })
};

// Function to fetch and display properties
function loadPropertiesOnMap() {
    fetch('get_properties.php')
        .then(response => response.json())
        .then(properties => {
            const markers = L.featureGroup();
            
            properties.forEach(property => {
                const icon = propertyIcons[property.property_type] || propertyIcons['default'];
                
                const marker = L.marker([property.latitude, property.longitude], {
                    icon: icon,
                    riseOnHover: true
                }).addTo(map);
                
                // Custom popup content with more details
                marker.bindPopup(`
                    <div class="map-popup">
                        <div class="popup-header">
                            <h4>${property.property_name}</h4>
                            <span class="property-type ${property.property_type.toLowerCase()}">${property.property_type}</span>
                        </div>
                        <div class="popup-image-container">
                            <img src="${property.property_img1 || 'https://via.placeholder.com/300x200?text=Property'}" 
                                 alt="${property.property_name}" 
                                 class="popup-image">
                            <div class="price-badge">₹${property.price.toLocaleString('en-IN')}</div>
                        </div>
                        <div class="popup-details">
                            <div class="detail-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>${property.location}</span>
                            </div>
                            <div class="specs">
                                <div class="spec-item">
                                    <i class="fas fa-bed"></i>
                                    <span>${property.beds} Beds</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-bath"></i>
                                    <span>${property.baths} Baths</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-vector-square"></i>
                                    <span>${property.square_feet} sq.ft</span>
                                </div>
                            </div>
                        </div>
                        <div class="popup-footer">
                            <a href="property-details.php?id=${property.id}" class="popup-link">
                                View Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                `, {
                    maxWidth: 300,
                    minWidth: 250,
                    className: 'custom-popup'
                });
                
                markers.addLayer(marker);
            });
            
            // Fit map to show all markers if there are any
            if (properties.length > 0) {
                map.fitBounds(markers.getBounds().pad(0.2));
            }
        })
        .catch(error => console.error('Error loading properties:', error));
}

// Theme toggle functionality
document.getElementById('theme-toggle').addEventListener('click', function() {
    const themeKeys = Object.keys(mapThemes);
    const currentIndex = themeKeys.indexOf(currentTheme);
    const nextIndex = (currentIndex + 1) % themeKeys.length;
    currentTheme = themeKeys[nextIndex];
    
    // Remove existing tiles
    map.eachLayer(layer => {
        if (layer instanceof L.TileLayer) {
            map.removeLayer(layer);
        }
    });
    
    // Add new tiles
    L.tileLayer(mapThemes[currentTheme].url, {
        attribution: mapThemes[currentTheme].attribution,
        maxZoom: mapThemes[currentTheme].maxZoom
    }).addTo(map);
    
    // Show theme name notification
    L.DomUtil.get('theme-toggle').innerHTML = `<i class="fas fa-palette"></i> ${mapThemes[currentTheme].name}`;
    setTimeout(() => {
        L.DomUtil.get('theme-toggle').innerHTML = '<i class="fas fa-palette"></i>';
    }, 2000);
});

// Locate me functionality
// Improved Locate Me functionality
document.getElementById('locate-me').addEventListener('click', function() {
    const locateBtn = document.getElementById('locate-me');
    
    // Show loading state
    locateBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
    locateBtn.style.pointerEvents = 'none';
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            position => {
                // Success - reset button and center map
                locateBtn.innerHTML = '<i class="fas fa-location-arrow"></i>';
                locateBtn.style.pointerEvents = 'auto';
                
                // Remove any existing user location marker
                map.eachLayer(layer => {
                    if (layer.options.className === 'user-location-marker') {
                        map.removeLayer(layer);
                    }
                });
                
                // Fly to user location
                map.flyTo([position.coords.latitude, position.coords.longitude], 13);
                
                // Add user location marker
                const userMarker = L.marker([position.coords.latitude, position.coords.longitude], {
                    icon: L.divIcon({
                        className: 'user-location-marker',
                        html: '<div class="pulse-dot"></div><div class="pulse-ring"></div>',
                        iconSize: [32, 32],
                        iconAnchor: [16, 16]
                    }),
                    zIndexOffset: 1000
                }).addTo(map);
                
                // Show temporary popup
                userMarker.bindPopup("You are here").openPopup();
                setTimeout(() => userMarker.closePopup(), 3000);
            },
            error => {
                // Error - reset button and show appropriate message
                locateBtn.innerHTML = '<i class="fas fa-location-arrow"></i>';
                locateBtn.style.pointerEvents = 'auto';
                
                let errorMessage = "Unable to retrieve your location";
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        errorMessage = "Location access was denied. Please enable permissions in your browser settings.";
                        break;
                    case error.POSITION_UNAVAILABLE:
                        errorMessage = "Location information is unavailable.";
                        break;
                    case error.TIMEOUT:
                        errorMessage = "The request to get your location timed out.";
                        break;
                    case error.UNKNOWN_ERROR:
                        errorMessage = "An unknown error occurred while getting your location.";
                        break;
                }
                
                // Show error message in a nice popup instead of alert
                const errorPopup = L.popup()
                    .setLatLng(map.getCenter())
                    .setContent(`
                        <div class="error-popup">
                            <i class="fas fa-exclamation-triangle"></i>
                            <div>${errorMessage}</div>
                            ${error.code === error.PERMISSION_DENIED ? 
                              '<a href="#" onclick="showLocationHelp()" style="font-size:12px; margin-top:8px; display:inline-block;">How to enable location access</a>' : ''}
                        </div>
                    `)
                    .openOn(map);
                
                // Auto-close after 5 seconds
                setTimeout(() => map.closePopup(errorPopup), 5000);
            },
            {
                enableHighAccuracy: true,
                timeout: 10000, // 10 seconds
                maximumAge: 0
            }
        );
    } else {
        // Browser doesn't support geolocation
        locateBtn.innerHTML = '<i class="fas fa-location-arrow"></i>';
        locateBtn.style.pointerEvents = 'auto';
        
        L.popup()
            .setLatLng(map.getCenter())
            .setContent(`
                <div class="error-popup">
                    <i class="fas fa-exclamation-triangle"></i>
                    <div>Geolocation is not supported by your browser.</div>
                </div>
            `)
            .openOn(map);
    }
});

// Function to show help for enabling location (add this to your script)
function showLocationHelp() {
    const helpPopup = L.popup()
        .setLatLng(map.getCenter())
        .setContent(`
            <div class="help-popup">
                <h4>How to enable location access:</h4>
                <ul>
                    <li><strong>Chrome/Firefox/Edge:</strong> Click the lock/padlock icon in the address bar > Site settings > Location > Allow</li>
                    <li><strong>Safari:</strong> Preferences > Websites > Location > Set to "Allow" for this site</li>
                    <li><strong>Mobile:</strong> Check your device settings > Location > Enable for browser</li>
                </ul>
                <button onclick="map.closePopup()" style="margin-top:10px;">Got it</button>
            </div>
        `)
        .openOn(map);
}


// Load properties when page is ready
document.addEventListener('DOMContentLoaded', function() {
    loadPropertiesOnMap();
    
    // Make map responsive when window resizes
    window.addEventListener('resize', function() {
        map.invalidateSize();
    });
});

// Add custom CSS for the map elements
const style = document.createElement('style');
style.textContent = `

 .user-location-marker {
        background: transparent;
        border: none;
    }
    
    .pulse-dot {
        width: 16px;
        height: 16px;
        background: #4285F4;
        border-radius: 50%;
        position: absolute;
        top: 8px;
        left: 8px;
        box-shadow: 0 0 0 0 rgba(66, 133, 244, 0.7);
        animation: pulse 2s infinite;
    }
    
    .pulse-ring {
        width: 32px;
        height: 32px;
        background: rgba(66, 133, 244, 0.3);
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
    }
    
    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(66, 133, 244, 0.7);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(66, 133, 244, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(66, 133, 244, 0);
        }
    }
    
    /* Error popup styles */
    .error-popup {
        padding: 10px;
        text-align: center;
    }
    
    .error-popup i {
        color: #F4B400;
        font-size: 24px;
        margin-bottom: 8px;
    }
    
    .error-popup div {
        margin-bottom: 5px;
    }
    
    .help-popup {
        padding: 10px;
        max-width: 250px;
    }
    
    .help-popup h4 {
        margin-top: 0;
        font-size: 14px;
    }
    
    .help-popup ul {
        padding-left: 20px;
        font-size: 12px;
        text-align: left;
    }
    
    .help-popup li {
        margin-bottom: 8px;
    }
    
    .help-popup button {
        background: #4285F4;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
    }

    /* Map controls */
    .map-control-btn {
        background: white;
        border: none;
        border-radius: 4px;
        width: 36px;
        height: 36px;
        margin-bottom: 8px;
        box-shadow: 0 1px 5px rgba(0,0,0,0.2);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        transition: all 0.2s;
    }
    
    .map-control-btn:hover {
        background: #f8f9fa;
        color: #0066cc;
        transform: scale(1.05);
    }
    
    /* Custom popup styles */
    .custom-popup .leaflet-popup-content-wrapper {
        border-radius: 8px;
        padding: 0;
        overflow: hidden;
    }
    
    .map-popup {
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }
    
    .popup-header {
        padding: 12px 15px;
        background: #f8f9fa;
        border-bottom: 1px solid #eee;
    }
    
    .popup-header h4 {
        margin: 0;
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }
    
    .property-type {
        display: inline-block;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: bold;
        text-transform: uppercase;
        margin-left: 8px;
    }
    
    .property-type.apartment {
        background: #4285F4;
        color: white;
    }
    
    .property-type.villa {
        background: #FBBC05;
        color: #333;
    }
    
    .property-type.house {
        background: #34A853;
        color: white;
    }
    
    .popup-image-container {
        position: relative;
        height: 150px;
        overflow: hidden;
    }
    
    .popup-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }
    
    .popup-image-container:hover .popup-image {
        transform: scale(1.05);
    }
    
    .price-badge {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-weight: bold;
        font-size: 14px;
    }
    
    .popup-details {
        padding: 12px 15px;
    }
    
    .detail-item {
        display: flex;
        align-items: center;
        margin-bottom: 8px;
        color: #555;
        font-size: 13px;
    }
    
    .detail-item i {
        margin-right: 8px;
        color: #666;
    }
    
    .specs {
        display: flex;
        justify-content: space-between;
        margin-top: 12px;
    }
    
    .spec-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: 12px;
        color: #666;
    }
    
    .spec-item i {
        font-size: 16px;
        margin-bottom: 4px;
        color: #4285F4;
    }
    
    .popup-footer {
        padding: 10px 15px;
        background: #f8f9fa;
        border-top: 1px solid #eee;
        text-align: center;
    }
    
    .popup-link {
        display: inline-block;
        padding: 6px 15px;
        background: #4285F4;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 13px;
        font-weight: 500;
        transition: all 0.2s;
    }
    
    .popup-link:hover {
        background: #3367D6;
        color: white;
        transform: translateY(-1px);
    }
    
    /* Leaflet popup tip */
    .custom-popup .leaflet-popup-tip {
        background: white;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        #map {
            height: 450px !important;
        }
        
        .map-popup {
            max-width: 220px !important;
        }
    }
    
    @media (max-width: 576px) {
        #map {
            height: 350px !important;
        }
        
        #map-controls {
            top: 10px;
            right: 10px;
        }
    }
`;
document.head.appendChild(style);
</script>



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

/* for  map mobile view  */
/* Add to your main CSS file */
#map-container {
    margin: 20px 0;
    padding: 0 15px;
}

@media (max-width: 768px) {
    #map {
        height: 350px !important;
    }
}

@media (max-width: 576px) {
    #map {
        height: 300px !important;
    }
}

</style>






