<?php 

session_start();
include("./includes/header.php");
include("./database/db.php"); 



?>

        <!-- page-content end -->
        <div class="page-content clearfix">

            <div class="left-column pull-left">
                <!-- location-section -->
                <section class="location-section">
                    <div class="map-column">
                    <div class="google-map-area">
                        <div 
                            class="google-map" 
                            id="contact-google-map" 
                            data-map-lat="40.712776" 
                            data-map-lng="-74.005974" 
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
                                                    <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                    <h6>Michael Bean</h6>
                                                </div>
                                            </div>
                                            <div class="title-text"><h4><a href="property-details.php">Villa on Grand Avenue</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
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
                                                    <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                    <h6>Michael Bean</h6>
                                                </div>
                                            </div>
                                            <div class="title-text"><h4><a href="property-details.php">Contemporary Apartment</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
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
                                                    <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                    <h6>Michael Bean</h6>
                                                </div>
                                            </div>
                                            <div class="title-text"><h4><a href="property-details.php">Luxury Villa With Pool</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
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
                                                    <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                                    <h6>Michael Bean</h6>
                                                </div>
                                            </div>
                                            <div class="title-text"><h4><a href="property-details.php">Home in Merrick Way</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
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
                    </div>
                </div>
                </section>
                <!-- location-section end -->
            </div>






            
            <div class="right-column pull-right">
                <!-- search-field-section -->
                <section class="search-field-section style-two">
                    <div class="auto-container">
                        <div class="inner-container">
                            <div class="search-field">
                                <div class="tabs-box">
                                    <div class="tabs-content info-group">
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li class="tab-btn active-btn" data-tab="#tab-1">For Buy</li>
                                            <li class="tab-btn" data-tab="#tab-2">For Rent</li>
                                        </ul>
                                        <div class="tab active-tab" id="tab-1">
                                            <div class="inner-box">
                                                <div class="top-search">
                                                <form action="property-list.php" method="post" class="search-form">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12 column">
            <div class="form-group">
                <label>Search Property</label>
                <div class="field-input">
                    <i class="fas fa-search"></i>
                    <input type="search" name="search-field" placeholder="Search by Property..." >
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
                        <option value="New York">New York</option>
                        <option value="California">California</option>
                        <option value="London">London</option>
                        <option value="Mexico">Mexico</option>
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
                        <option value="Apartment">Apartment</option>
                        <option value="villa">villa</option>
                        <option value="house">house</option>
                        <option value="New">New</option>
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
                                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
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
                                                                           <option data-display="Distance from Location">Distance from Location</option>
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
                                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                                        </div>
                                                                        <div class="price-range-slider"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                    <div class="area-range">
                                                                        <h6>Select Area</h6>
                                                                        <div class="range-input">
                                                                            <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
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
                                        <!-- <div class="tab" id="tab-2">
                                            <div class="inner-box">
                                                <div class="top-search">
                                                    <form action="index.php" method="post" class="search-form">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Search Property</label>
                                                                    <div class="field-input">
                                                                        <i class="fas fa-search"></i>
                                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Location</label>
                                                                    <div class="select-box">
                                                                        <i class="far fa-compass"></i>
                                                                        <select class="wide">
                                                                           <option data-display="Input location">Input location</option>
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
                                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
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
                                                                           <option data-display="Distance from Location">Distance from Location</option>
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
                                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                                        </div>
                                                                        <div class="price-range-slider"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                    <div class="area-range">
                                                                        <h6>Select Area</h6>
                                                                        <div class="range-input">
                                                                            <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                                        </div>
                                                                        <div class="area-range-slider"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
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
if ($page < 1) $page = 1;

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

// Check if search query is provided
if (isset($_POST['search-field']) && !empty($_POST['search-field'])) {
    $search_query = mysqli_real_escape_string($conn, $_POST['search-field']);
    $search_condition = "AND (properties.property_name LIKE '%$search_query%' OR properties.description LIKE '%$search_query%')";
}

// Check if location is selected
if (isset($_POST['location']) && !empty($_POST['location'])) {
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $location_condition = "AND properties.location = '$location'";
}

// Check if property type is selected
if (isset($_POST['property-type']) && !empty($_POST['property-type'])) {
    $property_type = mysqli_real_escape_string($conn, $_POST['property-type']);
    $type_condition = "AND properties.property_type = '$property_type'";
}

// Fetch records with pagination and filtering
$sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
               users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        WHERE 1=1 $search_condition $location_condition $type_condition 
        $sort_order 
        LIMIT $limit OFFSET $offset";

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
        <h5>Search Results: <span>Showing <?php echo $start_item . '-' . $end_item; ?> of <?php echo $total_records; ?> Listings</span></h5>
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



                        <?php
// Set the number of records per page
$limit = 6;

// Get the current page number from URL, default is 1
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) $page = 1;

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



// Initialize the filter conditions
$search_condition = "";
$location_condition = "";
$type_condition = "";

// Check if a search query is provided
if (isset($_POST['search-field']) && !empty($_POST['search-field'])) {
    $search_query = mysqli_real_escape_string($conn, $_POST['search-field']);
    $search_condition = "AND (properties.property_name LIKE '%$search_query%' OR properties.description LIKE '%$search_query%')";
}

// Check if location is selected
if (isset($_POST['location']) && $_POST['location'] != '') {
    $location = $_POST['location'];
    $location_condition = "AND properties.location_id = $location";
}

// Check if property type is selected
if (isset($_POST['property-type']) && $_POST['property-type'] != '') {
    $property_type = $_POST['property-type'];
    $type_condition = "AND properties.property_type = $property_type";
}

// Fetch records with pagination and filtering
$sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
               users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        WHERE 1=1 $search_condition $location_condition $type_condition 
        $sort_order 
        LIMIT $limit OFFSET $offset";

$result = mysqli_query($conn, $sql);

// Showing dynamic results text
$start_item = ($page - 1) * $limit + 1;
$end_item = min($start_item + $limit - 1, $total_records);
?>


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
                        <figure class="image"><img src="assets/images/property/<?php echo $property_img; ?>" alt=""></figure>
                        <?php if ($row['batch'] == 1): ?>
                            <div class="batch"><i class="icon-11"></i></div>
<?php endif; ?>
                        
                       
                        <?php if ($row['featured'] == 1): ?>
    <span class="category">Featured</span>
<?php endif; ?>
                        <div class="buy-btn"><a href="property-details.php?id=<?php echo $row['id']; ?>">For Buy</a></div>
                    </div>
                    <div class="lower-content">
                        <div class="title-text"><h4><a href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a></h4></div>
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
                            <div class="btn-box pull-left"><a href="property-details.php?id=<?php echo $row['id']; ?>" class="theme-btn btn-two">See Details</a></div>
                            <ul class="other-option pull-right clearfix">
                                <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i class="icon-12"></i></a></li>
                                <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i class="icon-13"></i></a></li>
                            </ul>
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
                        <figure class="image"><img src="assets/images/property/<?php echo $property_img; ?>" alt=""></figure>
                        
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
                                <figure class="author-thumb"><img src="assets/images/users/<?php echo $agent_img ?>" alt=""></figure>
                                <h6><?php echo $agent_name; ?></h6>
                            </div>
                            <div class="buy-btn pull-right"><a href="property-details.php?id=<?php echo $row['id']; ?>">For Buy</a></div>
                        </div>
                        <div class="title-text"><h4><a href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a></h4></div>
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
                        <div class="btn-box"><a href="property-details.php?id=<?php echo $row['id']; ?>" class="theme-btn btn-two">See Details</a></div>
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
                                    <p>Lorem ipsum dolor amet consetetur adi pisicing elit sed eiusm tempor in cididunt ut labore dolore magna aliqua enim ad minim venitam</p>
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
                                        <figure class="post-thumb"><a href="blog-details.php"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.php">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
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
                                        <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                        <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
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
                        <figure class="footer-logo"><a href="index.php"><img src="assets/images/footer-logo.png" alt=""></a></figure>
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
