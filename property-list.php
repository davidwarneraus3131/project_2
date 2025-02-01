<?php 

session_start();
include("./includes/header.php");
include("./database/db.php"); 

// Fetch property data from the database
$sql = "SELECT * FROM properties WHERE featured = 1";  
$result = mysqli_query($conn, $sql);  

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
                                                    <form action="index.php" method="post" class="search-form">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                                <div class="form-group">
                                                                    <label>Search Property</label>
                                                                    <div class="field-input">
                                                                        <i class="fas fa-search"></i>
                                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
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
                                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- search-field-section end -->

                
                <!-- deals-style-two -->
                <section class="deals-style-two">
                    <div class="auto-container">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">
                                <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                            </div>
                            <div class="right-column pull-right clearfix">
                                <div class="short-box clearfix">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Sort by: Newest">Sort by: Newest</option>
                                           <option value="1">New Arrival</option>
                                           <option value="2">Top Rated</option>
                                           <option value="3">Offer Place</option>
                                           <option value="4">Most Place</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="short-menu clearfix">
                                    <button class="list-view on"><i class="icon-35"></i></button>
                                    <button class="grid-view"><i class="icon-36"></i></button>
                                </div>
                            </div>
                        </div>







                        <div class="wrapper list">
    <!-- Loop through each property fetched from the database -->
    <?php
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Retrieve the data
            $property_name = $row['property_name'];
            $price = $row['price'];
            $description = $row['description'];
            $agent_name = $row['agent_name'];
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
                        <div class="batch"><i class="icon-11"></i></div>
                        <span class="category">Featured</span>
                        <div class="buy-btn"><a href="property-details.php?id=<?php echo $row['id']; ?>">For Buy</a></div>
                    </div>
                    <div class="lower-content">
                        <div class="title-text"><h4><a href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a></h4></div>
                        <div class="price-box clearfix">
                            <div class="price-info pull-left">
                                <h6>Start From</h6>
                                <h4>$<?php echo number_format($price, 2); ?></h4>
                            </div>
                            <div class="author-box pull-right">
                                <figure class="author-thumb"> 
                                    <img src="assets/images/feature/author-1.jpg" alt="">
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
        // Assuming you're fetching multiple properties
        $sql_grid = "SELECT * FROM properties";  // Fetch all properties for grid view
        $result_grid = mysqli_query($conn, $sql_grid);
        if ($result_grid && mysqli_num_rows($result_grid) > 0) {
            while ($row = mysqli_fetch_assoc($result_grid)) {
                // Fetch data for each property
                $property_name = $row['property_name'];
                $price = $row['price'];
                $agent_name = $row['agent_name'];
                $property_img = $row['property_img'];
                $beds = $row['beds'];
                $baths = $row['baths'];
                $square_feet = $row['square_feet'];
        ?>
        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
            <div class="feature-block-one">
                <div class="inner-box">
                    <div class="image-box">
                        <figure class="image"><img src="assets/images/property/<?php echo $property_img; ?>" alt=""></figure>
                        <div class="batch"><i class="icon-11"></i></div>
                        <span class="category">Featured</span>
                    </div>
                    <div class="lower-content">
                        <div class="author-info clearfix">
                            <div class="author pull-left">
                                <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                <h6><?php echo $agent_name; ?></h6>
                            </div>
                            <div class="buy-btn pull-right"><a href="property-details.php?id=<?php echo $row['id']; ?>">For Buy</a></div>
                        </div>
                        <div class="title-text"><h4><a href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a></h4></div>
                        <div class="price-box clearfix">
                            <div class="price-info pull-left">
                                <h6>Start From</h6>
                                <h4>$<?php echo number_format($price, 2); ?></h4>
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



                        
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="property-list-3.php" class="current">1</a></li>
                                <li><a href="property-list-3.php">2</a></li>
                                <li><a href="property-list-3.php">3</a></li>
                                <li><a href="property-list-3.php"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
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
