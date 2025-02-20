
<?php 
session_start();
include("./includes/header.php");
include("./database/db.php"); 
?>


        <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Property Details</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Home</a></li>
                        <li>Property Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->

<?php 

        $prop_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        // $sql = "SELECT * FROM properties WHERE id = $property_id";


        $sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
        users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description,users.house,users.street,users.city,users.state,users.country 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        WHERE properties.id = '$prop_id'";


$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $property = $result->fetch_assoc();
    // print_r($property);exit();

    $property_name = $property['property_name'];
    $property_description = $property['description'];
    $property_price = $property['price']; 
    $property_img1 = $property['property_img1'];
    $property_img2 = $property['property_img2'];
    $property_img3 = $property['property_img3'];
    $property_img4 = $property['property_img4'];
    $property_img5 = $property['property_img5'];
    $property_img6 = $property['property_img6'];
    $agent_name = $property['name'];
    $property_id = $property['property_id'];
    $beds = $property['beds'];
    $baths = $property['baths'];
    $country = $property['country'];
    $state_county = $property['state_county'];
    $city = $property['city'];
    $address = $property['address'];
    $zip_postal_code = $property['zip_postal_code'];
    $rooms = $property['rooms'];
    $garage_size = $property['garage_size'];
    $property_price = $property['property_price'];
    $year_built = $property['year_built'];
    $property_type = $property['property_type'];
    $property_status = $property['property_status'];
    $property_size = $property['property_size'];
    $garage = $property['garage'];
    $amenities_1 = $property['amenities_1'];
    $amenities_2 = $property['amenities_2'];
    $amenities_3 = $property['amenities_3'];
    $amenities_4 = $property['amenities_4'];
    $amenities_5 = $property['amenities_5'];
    $amenities_6 = $property['amenities_6'];
    $nearbyscl_1 = $property['nearbyscl_1'];
    $nearbyres_1 = $property['nearbyres_1'];
    $nearbyhos_1 = $property['nearbyhos_1'];

    $agent_img = $property['user_img'];
    $agent_phone = $property['phone'];
    $agent_house = $property['house'];
    $agent_street = $property['street'];
    $agent_city = $property['city'];
    $agent_state = $property['state'];
    $agent_id = $property['agent_id'];


} else {
    echo "No property found with that ID.";
}

// $conn->close();
?>
        <!--End Page Title-->


        <!-- property-details -->
        <section class="property-details property-details-three">
            <div class="auto-container">
                <div class="carousel-inner">
                    <div class="bxslider">
                        <div class="slider-content">
                            <div class="product-image">
                                <figure class="image-box"><img src="assets/images/property/<?php echo $property_img1; ?>" alt=""></figure>
                            </div>
                            <div class="slider-pager">
                                <ul class="thumb-box clearfix">
                                    <li>
                                        <a class="active" data-slide-index="0" href="#"><figure><img src="assets/images/property/<?php echo $property_img1; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href="#"><figure><img src="assets/images/property/<?php echo $property_img2; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href="#"><figure><img src="assets/images/property/<?php echo $property_img3; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href="#"><figure><img src="assets/images/property/<?php echo $property_img4; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href="#"><figure><img src="assets/images/property/<?php echo $property_img5; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="5" href="#"><figure><img src="assets/images/property/<?php echo $property_img6; ?>" alt=""></figure></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="product-image">
                                <figure class="image-box"><img src="assets/images/property/<?php echo $property_img2; ?>" alt=""></figure>
                            </div>
                            <div class="slider-pager">
                                <ul class="thumb-box clearfix">
                                <ul class="thumb-box clearfix">
                                    <li>
                                        <a class="active" data-slide-index="0" href="#"><figure><img src="assets/images/property/<?php echo $property_img1; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href="#"><figure><img src="assets/images/property/<?php echo $property_img2; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href="#"><figure><img src="assets/images/property/<?php echo $property_img3; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href="#"><figure><img src="assets/images/property/<?php echo $property_img4; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href="#"><figure><img src="assets/images/property/<?php echo $property_img5; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="5" href="#"><figure><img src="assets/images/property/<?php echo $property_img6; ?>" alt=""></figure></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="product-image">
                                <figure class="image-box"><img src="assets/images/property/<?php echo $property_img3; ?>" alt=""></figure>
                            </div>
                            <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                    <li>
                                        <a class="active" data-slide-index="0" href="#"><figure><img src="assets/images/property/<?php echo $property_img1; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href="#"><figure><img src="assets/images/property/<?php echo $property_img2; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href="#"><figure><img src="assets/images/property/<?php echo $property_img3; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href="#"><figure><img src="assets/images/property/<?php echo $property_img4; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href="#"><figure><img src="assets/images/property/<?php echo $property_img5; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="5" href="#"><figure><img src="assets/images/property/<?php echo $property_img6; ?>" alt=""></figure></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="product-image">
                                <figure class="image-box"><img src="assets/images/property/<?php echo $property_img4; ?>" alt=""></figure>
                            </div>
                            <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                    <li>
                                        <a class="active" data-slide-index="0" href="#"><figure><img src="assets/images/property/<?php echo $property_img1; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href="#"><figure><img src="assets/images/property/<?php echo $property_img2; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href="#"><figure><img src="assets/images/property/<?php echo $property_img3; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href="#"><figure><img src="assets/images/property/<?php echo $property_img4; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href="#"><figure><img src="assets/images/property/<?php echo $property_img5; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="5" href="#"><figure><img src="assets/images/property/<?php echo $property_img6; ?>" alt=""></figure></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="slider-content">
                            <div class="product-image">
                                <figure class="image-box"><img src="assets/images/property/<?php echo $property_img5; ?>" alt=""></figure>
                            </div>
                            <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                    <li>
                                        <a class="active" data-slide-index="0" href="#"><figure><img src="assets/images/property/<?php echo $property_img1; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href="#"><figure><img src="assets/images/property/<?php echo $property_img2; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href="#"><figure><img src="assets/images/property/<?php echo $property_img3; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href="#"><figure><img src="assets/images/property/<?php echo $property_img4; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href="#"><figure><img src="assets/images/property/<?php echo $property_img5; ?>" alt=""></figure></a>
                                    </li>
                                    <li>
                                        <a data-slide-index="5" href="#"><figure><img src="assets/images/property/<?php echo $property_img6; ?>" alt=""></figure></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider content END -->


                <div class="top-details clearfix">
                    <div class="left-column pull-left clearfix">
                        <h3><?php echo $property_name; ?></h3>
                        <div class="author-info clearfix">
                            <div class="author-box pull-left">
                                <figure class="author-thumb"><img src="assets/images/users/<?php echo $agent_img ?>" alt=""></figure>
                                <h6><?php echo $agent_name; ?></h6>
                            </div>
                            <ul class="rating clearfix pull-left">
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-39"></i></li>
                                <li><i class="icon-40"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-column pull-right clearfix">
                        <div class="price-inner clearfix">
                            <ul class="category clearfix pull-left">
                                <li><a href="property-details.php">Building</a></li>
                                <li><a href="property-details.php">For Buy</a></li>
                            </ul>
                            <div class="price-box pull-right">
                                <h3>
                                ₹<?php echo $property_price?></h3>
                            </div>
                        </div>
                        <ul class="other-option pull-right clearfix">
                            <li><a href="property-details.php"><i class="icon-37"></i></a></li>
                            <li><a href="property-details.php"><i class="icon-38"></i></a></li>
                            <li><a href="property-details.php"><i class="icon-12"></i></a></li>
                            <li><a href="property-details.php"><i class="icon-13"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-details-content">
                            <div class="discription-box content-widget">
                                <div class="title-box">
                                    <h4>Property Description</h4>
                                </div>
                                <div class="text">
                                    <p><?php echo $property_description?></p>
                                  
                                </div>
                            </div>
                            <div class="details-box content-widget">
                                <div class="title-box">
                                    <h4>Property Details</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li>Property ID: <span><?php echo $property_id ?></span></li>
                                    <li>Rooms: <span><?php echo $rooms ?></span></li>
                                    <li>Garage Size: <span><?php echo $garage_size ?></span></li>
                                    <li>Property Price: ₹<span><?php echo $property_price ?></span></li>
                                    <li>Bedrooms: <span><?php echo $beds ?></span></li>
                                    <li>Year Built: <span><?php echo $year_built ?></span></li>
                                    <li>Property Type: <span><?php echo $property_type ?></span></li>
                                    <li>Bathrooms: <span><?php echo $baths ?></span></li>
                                    <li>Property Status: <span><?php echo $property_status ?></span></li>
                                    <li>Property Size: <span><?php echo $property_size ?></span></li>
                                    <li>Garage: <span><?php echo $garage ?></span></li>
                                </ul>
                            </div>
                            <div class="amenities-box content-widget">
                                <div class="title-box">
                                    <h4>Amenities</h4>
                                </div>
                                <ul class="list clearfix">
                                    <li><?php echo $amenities_1 ?></li>
                                    <li><?php echo $amenities_2 ?></li>
                                    <li><?php echo $amenities_3 ?></li>
                                    <li><?php echo $amenities_4 ?></li>
                                    <li><?php echo $amenities_5 ?></li>
                                    <li><?php echo $amenities_6 ?></li>
                                    
                                </ul>
                            </div>
                            <div class="floorplan-inner content-widget">
    <div class="title-box">
        <h4>Floor Plan</h4>
    </div>
    <ul class="accordion-box">
        <!-- First Floor -->
        <?php if (!empty($property['floor_plan_1_description'])): ?>
        <li class="accordion block active-block">
            <div class="acc-btn active">
                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                <h5>First Floor</h5>
            </div>
            <div class="acc-content current">
                <div class="content-box">
                    <p><?php echo $property['floor_plan_1_description']; ?></p>
                    <figure class="image-box">
                        <img src="assets/images/floor/<?php echo $property['floor_plan_1_image']; ?>" alt="First Floor">
                    </figure>
                </div>
            </div>
        </li>
        <?php endif; ?>

        <!-- Second Floor -->
        <?php if (!empty($property['floor_plan_2_description'])): ?>
        <li class="accordion block">
            <div class="acc-btn">
                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                <h5>Second Floor</h5>
            </div>
            <div class="acc-content">
                <div class="content-box">
                    <p><?php echo $property['floor_plan_2_description']; ?></p>
                    <figure class="image-box">
                        <img src="assets/images/floor/<?php echo $property['floor_plan_2_image']; ?>" alt="Second Floor">
                    </figure>
                </div>
            </div>
        </li>
        <?php endif; ?>

        <!-- Third Floor -->
        <?php if (!empty($property['floor_plan_3_description'])): ?>
        <li class="accordion block">
            <div class="acc-btn">
                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                <h5>Third Floor</h5>
            </div>
            <div class="acc-content">
                <div class="content-box">
                    <p><?php echo $property['floor_plan_3_description']; ?></p>
                    <figure class="image-box">
                        <img src="assets/images/floor/<?php echo $property['floor_plan_3_image']; ?>" alt="Third Floor">
                    </figure>
                </div>
            </div>
        </li>
        <?php endif; ?>
    </ul>
</div>
                            <div class="location-box content-widget">
                                <div class="title-box">
                                    <h4>Location</h4>
                                </div>
                                <ul class="info clearfix">
                                    <li><span>Address:</span> <?php echo $address?></li>
                                    <li><span>Country:</span> <?php echo $country?></li>
                                    <li><span>State/county:</span> <?php echo $state_county?></li>
                                    <li><span>Zip/Postal Code:</span> <?php echo $zip_postal_code?></li>
                                    <li><span>City:</span> <?php echo $city?></li>
                                </ul>
                                <div class="google-map-area">
                                    <div 
                                        class="google-map" 
                                        id="contact-google-map" 
                                        data-map-lat="40.712776" 
                                        data-map-lng="-74.005974" 
                                        data-icon-path="assets/images/icons/map-marker.png"  
                                        data-map-title="Brooklyn, New York, United Kingdom" 
                                        data-map-zoom="12" 
                                        data-markers='{
                                            "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                                        }'>

                                    </div>
                                </div>
                            </div>
                            <div class="nearby-box content-widget">
                                <div class="title-box">
                                    <h4>What’s Nearby?</h4>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-book-reader"></i></div>
                                        <div class="inner">
                                            <h5>Education:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <!-- <h6>Western Reserve University <span>(2.10 km)</span></h6> -->
                                                    <h6><?php echo $nearbyscl_1 ?> <span>(2.10 km)</span></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-coffee"></i></div>
                                        <div class="inner">
                                            <h5>Restaurant:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6><?php echo $nearbyres_1 ?> </h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="fas fa-capsules"></i></div>
                                        <div class="inner">
                                            <h5>Health & Medical:</h5>
                                            <div class="box clearfix">
                                                <div class="text pull-left">
                                                    <h6><?php echo $nearbyhos_1 ?></h6>
                                                </div>
                                                <ul class="rating pull-right clearfix">
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-39"></i></li>
                                                    <li><i class="icon-40"></i></li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="statistics-box content-widget">
                                <div class="title-box">
                                    <h4>Page Statistics</h4>
                                </div>
                                <figure class="image-box">
                                    <a href="assets/images/property/statistics-1.png" class="lightbox-image" data-fancybox="gallery"><img src="assets/images/property/statistics-1.png" alt=""></a>
                                </figure>
                            </div> -->
                            <div class="schedule-box content-widget">
                                <div class="title-box">
                                    <h4>Schedule A Tour</h4>
                                </div>
                                <div class="form-inner">
                                    <form action="property-details.php" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-calendar-alt"></i>
                                                    <input type="text" name="date" placeholder="Tour Date" id="datepicker">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <i class="far fa-clock"></i>
                                                    <input type="text" name="time" placeholder="Any Time">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="text" name="name" placeholder="Your Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="email" name="email" placeholder="Your Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <input type="tel" name="phone" placeholder="Your Phone" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Your message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                                <div class="form-group message-btn">
                                                    <button type="submit" class="theme-btn btn-one">Submit Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="property-sidebar default-sidebar">
                            <div class="author-widget sidebar-widget">
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="assets/images/users/<?php echo $agent_img ?>" alt=""></figure>
                                    <div class="inner">
                                        <h4><?php echo $agent_name; ?></h4>
                                        <ul class="info clearfix">
                                            <li><i class="fas fa-map-marker-alt"></i><?php echo  $agent_house.','.$agent_street.','.$agent_city.','.$agent_state ?>.</li>
                                            <li><i class="fas fa-phone"></i><a href="tel:<?php echo $agent_phone ?>"><?php echo $agent_phone ?></a></li>
                                        </ul>
                                        <div class="btn-box"><a href="agency-details.php?id=<?php echo $agent_id; ?>">View Listing</a></div>
                                    </div>
                                </div>
                                <div class="form-inner">
                                    <form action="property-details.php" method="post" class="default-form">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Your name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Your Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="calculator-widget sidebar-widget">


  <div class="calculate-inner">
    <div class="widget-title">
        <h4>Mortgage Calculator</h4>
    </div>
    <form id="mortgageForm" method="post" class="default-form">
        <div class="form-group">
            <i class="fas fa-rupee-sign"></i>
            <input type="number" name="total_amount" placeholder="Total Amount (₹)" required>
        </div>
        <div class="form-group">
            <i class="fas fa-rupee-sign"></i>
            <input type="number" name="down_payment" placeholder="Down Payment (₹)" required>
        </div>
        <div class="form-group">
            <i class="fas fa-percent"></i>
            <input type="number" name="interest_rate" placeholder="Interest Rate (%)" required>
        </div>
        <div class="form-group">
            <i class="far fa-calendar-alt"></i>
            <input type="number" name="loan" placeholder="Loan Terms (Years)" required>
        </div>
        <div class="form-group">
            <div class="select-box">
                <select class="wide">
                    <option data-display="Monthly">Monthly</option>
                    <option value="1">Yearly</option>
                </select>
            </div>
        </div>
        <div class="form-group message-btn">
            <button type="submit" class="theme-btn btn-one">Calculate Now</button>
        </div>
    </form>
</div>

<!-- Result Popup -->
<div class="popup-overlay" style="display:none;"></div>
<div class="popup-box" id="resultPopup" style="display:none;">
    <h4>Estimated Monthly Payment</h4>
    <p id="paymentResult"></p>
    <button class="theme-btn btn-one close-btn">Close</button>
</div>

<!-- jQuery for AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#mortgageForm").submit(function (event) {
            event.preventDefault(); // Prevent form submission

            $.ajax({
                url: "mortgage-calculator.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        $("#paymentResult").html("₹" + response.payment);
                        $(".popup-overlay, #resultPopup").fadeIn();
                    } else {
                        alert(response.message);
                    }
                },
                error: function () {
                    alert("Something went wrong. Please try again.");
                }
            });
        });

        // Close popup
        $(".close-btn, .popup-overlay").click(function () {
            $(".popup-overlay, #resultPopup").fadeOut();
        });
    });
</script>

<!-- Popup Styling -->
<style>
    .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }
    .popup-box {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        text-align: center;
        z-index: 1000;
    }
    .close-btn {
        margin-top: 10px;
        cursor: pointer;
    }
</style>


                            </div>
                        </div>
                    </div>
                </div>



                <?php 
// Fetch Current Property Details
$current_query = "SELECT property_type FROM properties WHERE id = $prop_id";
$current_result = $conn->query($current_query);

if ($current_result && $current_result->num_rows > 0) {
    $current_row = $current_result->fetch_assoc();
    $current_category = $current_row['property_type'];
    $safe_category = $conn->real_escape_string($current_category);


    $query = "SELECT properties.*, 
    users.name, users.email, users.user_img, users.phone, users.occupation, 
    users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description, 
    users.house, users.street, users.city, users.state, users.country 
FROM properties 
JOIN users ON properties.agent_id = users.id 
WHERE properties.property_type = '$safe_category' AND properties.id != $prop_id 
LIMIT 3";




    
    
    $result = $conn->query($query);
}
?>

<div class="similar-content">
    <div class="title">
        <h4>Similar Properties</h4>
    </div>
    <div class="row clearfix">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="assets/images/property/<?= $row['property_img1']; ?>" alt="">
                                </figure>
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category"><?= $row['property_type']; ?></span>
                            </div>
                            <div class="lower-content">
                                <div class="author-info clearfix">
                                    <div class="author pull-left">
                                        <figure class="author-thumb">
                                            <img src="assets/images/users/<?= $row['user_img']; ?>" alt="">
                                        </figure>
                                        <h6><?= $row['name']; ?></h6>
                                    </div>
                                    <div class="buy-btn pull-right"><a href="property-details.php?id=<?= $row['id']; ?>">For Buy</a></div>
                                </div>
                                <div class="title-text">
                                    <h4><a href="property-details.php?id=<?= $row['id']; ?>"><?= $row['property_name']; ?></a></h4>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="price-info pull-left">
                                        <h6>Start From</h6>
                                        <h4>₹<?= number_format($row['price'], 2); ?></h4>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                <ul class="more-details clearfix">
                                    <li><i class="icon-14"></i><?= $row['beds']; ?> Beds</li>
                                    <li><i class="icon-15"></i><?= $row['baths']; ?> Baths</li>
                                    <li><i class="icon-16"></i><?= $row['square_feet']; ?> Sq Ft</li>
                                </ul>
                                <div class="btn-box">
                                    <a href="property-details.php?id=<?= $row['id']; ?>" class="theme-btn btn-two">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No similar properties found.</p>
        <?php endif; ?>
    </div>
</div>




            </div>
        </section>
        <!-- property-details end -->







<?php
// Close Connection at the END
$conn->close();
?>












        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="contact.php" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


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
                                        <figure class="post-thumb"><a href="blog-details.php"><img src="assets/images/property/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.php">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.php"><img src="assets/images/property/footer-post-2.jpg" alt=""></a></figure>
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
    <script src="assets/js/product-filter.js"></script>
    <script src="assets/js/timePicker.js"></script> 
    <script src="assets/js/bxslider.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
