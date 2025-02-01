<?php 

session_start();
include("./includes/header.php");
include("./database/db.php"); 

// Fetch property data from the database
  

?>


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
                                    <div class="title-text"><h4><a href="property-details.php">Apartment in Glasgow</a></h4></div>
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
                                            <figure class="author-thumb"><img src="assets/images/feature/author-1.jpg" alt=""></figure>
                                            <h6>Michael Bean</h6>
                                        </div>
                                    </div>
                                    <div class="title-text"><h4><a href="property-details.php">Family Home For Sale</a></h4></div>
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
    <?php foreach ($locations as $location): ?>
        <option value="<?php echo $location; ?>"><?php echo $location; ?></option>
    <?php endforeach; ?>
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


        <!-- feature-style-three -->
        <section class="feature-style-three centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-1"></i></div>
                                <h4>Excellent Reputation</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-26"></i></div>
                                <h4>Best Local Agents</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <h4>Personalized Service</h4>
                                <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-three end -->


        <!-- feature-style-two -->
        <?php
$sql = "SELECT * FROM properties WHERE featured = 1";  
$result = mysqli_query($conn, $sql); 


if ($result && mysqli_num_rows($result) > 0) {
?>
<section class="feature-style-two alternate-2 sec-pad"> 
    <div class="auto-container">
        <div class="sec-title">
            <h5>Features</h5>
            <h2>Featured Property</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <?php while ($row = mysqli_fetch_assoc($result)) {
                $property_name = $row['property_name'];
                $price = $row['price'];
                $description = $row['description'];
                $agent_name = $row['agent_name'];
                $property_img = $row['property_img1'];
                $beds = $row['beds'];
                $baths = $row['baths'];
                $square_feet = $row['square_feet'];
                $prop_status = $row['status'];
            ?>
            <div class="single-column">
                <div class="feature-block-one">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/property/<?php echo $property_img ?>" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="<?php echo $property_img ?>" alt=""></figure>
                                    <h6><?php echo $agent_name ?></h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.php?id=<?php echo $row['id']; ?>">For <?php echo $prop_status ?></a></div>
                            </div>
                            <div class="title-text">
                                <h4><a href="property-details.php?id=<?php echo $row['id']; ?>"><?php echo $property_name; ?></a></h4>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$<?php echo number_format($price, 2); ?></h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.php?id=<?php echo $row['id']; ?>"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p><?php echo $description; ?></p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i><?php echo $beds ?> Beds</li>
                                <li><i class="icon-15"></i><?php echo $baths; ?> Baths</li>
                                <li><i class="icon-16"></i><?php echo $square_feet ?> Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.php?id=<?php echo $row['id']; ?>" class="theme-btn btn-two">See Details</a></div>
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
    echo "<p>No properties found.</p>";
}
?>

        <!-- feature-style-two end -->
        <!-- cta-section -->
        <section class="cta-section alternate-2 pb-240 centred" style="background-image: url(assets/images/background/cta-1.jpg);">
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
                                <figure class="image-box"><img src="assets/images/agents/<?php echo $agent_img  ?>" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.php"><?php echo $name  ?></a></h4>
                                        <span class="designation"><?php  echo $designation ?></span>
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


        <!-- testimonial-style-two -->
        <section class="testimonial-style-three" style="background-image: url(assets/images/background/testimonial-1.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-7 col-lg-12 col-md-12 offset-xl-5 inner-column">
                        <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                        <h4>Rebeka Dawson</h4>
                                        <span class="designation">Instructor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                        <h4>Marc Kenneth</h4>
                                        <span class="designation">Founder CEO</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                        <h4>Owen Lester</h4>
                                        <span class="designation">Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->


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
                                    <h2>$39 <span>/ mo</span></h2>
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
                                    <a href="index-3.php" class="link-btn">Buy Now</a>
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
                                    <h2>$49 <span>/ mo</span></h2>
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
                                    <a href="index-3.php" class="link-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                        <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="pricing-table">
                                <div class="table-header">
                                    <div class="shape-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                                    <div class="shape-2" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                    <h4>Platinam Pack</h4>
                                    <h2>$59 <span>/ mo</span></h2>
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
                                    <a href="index-3.php" class="link-btn">Buy Now</a>
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
                                <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
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
                                            <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
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
    <script src="assets/js/nav-tool.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
