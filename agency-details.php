<?php include './includes/header.php';
include("./database/db.php");
?>

<!--Page Title-->
<section class="page-title centred" style="background-image: url(assets/images/background/page-title.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Agency Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Agency Details</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<?php


$agent_id = $_GET['id'];
if ($agent_id) {
    $sql = "SELECT * FROM users WHERE id = '$agent_id'";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $property = $result->fetch_assoc();
    } else {
        echo "<p>No agent found!</p>";
        exit;
    }
} else {
    echo "<p>Agent ID is missing!</p>";
    exit;
}
?>


<!-- agent-details -->
<section class="agent-details">
    <div class="auto-container">
        <div class="agency-details-content">
            <div class="agents-block-one">
                <div class="inner-box mr-0">
                    <figure class="image-box"><img src="assets/images/users/<?php echo $property['user_img']; ?>"
                            alt=""></figure>
                    <div class="content-box">
                        <div class="upper clearfix">
                            <div class="title-inner pull-left">
                                <h4><?php echo $property['name']; ?></h4>
                                <span class="designation"><?php echo $property['occupation']; ?> Real Estate
                                    Agent</span>
                            </div>
                            <ul class="social-list pull-right clearfix">
                                <li><a href="<?php echo $property['facebook_link']; ?>"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $property['twitter_link']; ?>"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a href="<?php echo $property['linkedin_link']; ?>"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="text">
                            <p><?php echo $property['user_description']; ?></p>
                        </div>
                        <ul class="info clearfix mr-0">
                            <li><i class="fab fa fa-envelope"></i><a
                                    href="mailto:<?php echo $property['email']; ?>"><?php echo $property['email']; ?></a>
                            </li>
                            <li><i class="fab fa fa-phone"></i><a
                                    href="tel:<?php echo $property['phone']; ?>"><?php echo $property['phone']; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- agent-details end -->


<!-- agents-page-section -->
<section class="agents-page-section agent-details-page">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side tabs-box">
                    <div class="group-title">
                        <h3>Listing By <?php echo $property['name']; ?></h3>
                    </div>
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Apartments</li>
                                    <!-- <li class="tab-btn" data-tab="#tab-2">TownHouse</li>
                                            <li class="tab-btn" data-tab="#tab-3">Office</li> -->
                                </ul>
                            </div>
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

                    <div class="tabs-content">

                        <div class="tab active-tab" id="tab-1">


                            <div class="wrapper list">
                                <?php

$sql = "SELECT properties.*, users.name, users.email, users.user_img, users.phone, users.occupation, 
        users.facebook_link, users.twitter_link, users.linkedin_link, users.user_description 
        FROM properties 
        JOIN users ON properties.agent_id = users.id 
        WHERE properties.agent_id = '$agent_id'";
        $prop_result = $conn->query($sql);


                                // Check if there are any properties for this agent
                                if ($prop_result->num_rows > 0) {
                                    while ($property = $prop_result->fetch_assoc()):

                                        ?>
                                        <div class="deals-list-content list-item">
                                            <div class="deals-block-one">

                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img
                                                                src="assets/images/property/<?php echo $property['property_img1']; ?>"
                                                                alt=""></figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span
                                                            class="category"><?php echo ($property['featured'] == 1) ? 'Featured' : 'Regular'; ?></span>
                                                        <div class="buy-btn"><a
                                                                href="property-details.php?id=<?php echo $property['id']; ?>">For
                                                                Buy</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text">
                                                            <h4><a
                                                                    href="property-details.php?id=<?php echo $property['id']; ?>"><?php echo $property['property_name']; ?></a>
                                                            </h4>
                                                        </div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>₹<?php echo number_format($property['price'], 2); ?></h4>
                                                            </div>
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="assets/images/users/<?php echo $property['user_img']; ?>"
                                                                        alt="">
                                                                    <span><?php echo $property['name']; ?></span>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                        <p><?php echo $property['description']; ?></p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i><?php echo $property['beds']; ?> Beds
                                                            </li>
                                                            <li><i class="icon-15"></i><?php echo $property['baths']; ?> Baths
                                                            </li>
                                                            <li><i class="icon-16"></i><?php echo $property['square_feet']; ?>
                                                                Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            <div class="btn-box pull-left"><a
                                                                    href="property-details.php?id=<?php echo $property['id']; ?>"
                                                                    class="theme-btn btn-two">See Details</a></div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a
                                                                        href="property-details.php?id=<?php echo $property['id']; ?>"><i
                                                                            class="icon-12"></i></a></li>
                                                                <li><a
                                                                        href="property-details.php?id=<?php echo $property['id']; ?>"><i
                                                                            class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="deals-grid-content">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                                    <div class="feature-block-one">


                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <figure class="image"><img
                                                                        src="assets/images/property/<?php echo $property['property_img1']; ?>"
                                                                        alt=""></figure>
                                                                <div class="batch"><i class="icon-11"></i></div>
                                                                <span class="category">Featured</span>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-info clearfix">
                                                                    <div class="author pull-left">
                                                                        <figure class="author-thumb"><img
                                                                                src="assets/images/users/<?php echo $property['user_img']; ?>"
                                                                                alt=""></figure>
                                                                        <h6><?php echo $property['name']; ?></h6>
                                                                    </div>
                                                                    <div class="buy-btn pull-right"><a
                                                                            href="property-details.php?id=<?php echo $property['id']; ?>">For
                                                                            Buy</a></div>
                                                                </div>
                                                                <div class="title-text">
                                                                    <h4><a
                                                                            href="property-details.php?id=<?php echo $property['id']; ?>"><?php echo $property['user_img']; ?></a>
                                                                    </h4>
                                                                </div>
                                                                <div class="price-box clearfix">
                                                                    <div class="price-info pull-left">
                                                                        <h6>Start From</h6>
                                                                        <h4>₹<?php echo $property['price']; ?></h4>
                                                                    </div>
                                                                    <ul class="other-option pull-right clearfix">
                                                                        <li><a
                                                                                href="property-details.php?id=<?php echo $property['id']; ?>"><i
                                                                                    class="icon-12"></i></a></li>
                                                                        <li><a
                                                                                href="property-details.php?id=<?php echo $property['id']; ?>"><i
                                                                                    class="icon-13"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                                <p><?php echo $property['description']; ?></p>
                                                                <ul class="more-details clearfix">
                                                                    <li><i class="icon-14"></i><?php echo $property['beds']; ?>
                                                                        Beds</li>
                                                                    <li><i class="icon-15"></i><?php echo $property['baths']; ?>
                                                                        Baths</li>
                                                                    <li><i
                                                                            class="icon-16"></i><?php echo $property['square_feet']; ?>
                                                                        Sq Ft</li>
                                                                </ul>
                                                                <div class="btn-box"><a
                                                                        href="property-details.php?id=<?php echo $property['property_id']; ?>"
                                                                        class="theme-btn btn-two">See Details</a></div>
                                                            </div>
                                                        </div>






                                                    </div>
                                                </div>



                                            </div>
                                        </div>


                                    <?php
                                    endwhile;
                                } else {
                                    echo "<p>No properties uploaded by this agent.</p>";
                                }
                                ?>

                            </div>
                        </div>





                        <div class="tab" id="tab-2">
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/deals-3.jpg"
                                                        alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="property-details.php">For Buy</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="property-details.php">Villa on Grand Avenue</a></h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb">
                                                            <img src="assets/images/feature/author-1.jpg" alt="">
                                                            <span>Michael Bean</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do
                                                    tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="property-details.php"
                                                            class="theme-btn btn-two">See Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.php"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.php"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="deals-grid-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img
                                                                src="assets/images/feature/feature-1.jpg" alt="">
                                                        </figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-info clearfix">
                                                            <div class="author pull-left">
                                                                <figure class="author-thumb"><img
                                                                        src="assets/images/feature/author-1.jpg" alt="">
                                                                </figure>
                                                                <h6>Michael Bean</h6>
                                                            </div>
                                                            <div class="buy-btn pull-right"><a
                                                                    href="property-details.php">For Buy</a></div>
                                                        </div>
                                                        <div class="title-text">
                                                            <h4><a href="property-details.php">Family Home For Sale</a>
                                                            </h4>
                                                        </div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$30,000.00</h4>
                                                            </div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.php"><i
                                                                            class="icon-12"></i></a></li>
                                                                <li><a href="property-details.php"><i
                                                                            class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="btn-box"><a href="property-details.php"
                                                                class="theme-btn btn-two">See Details</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="wrapper list">
                                <div class="deals-list-content list-item">
                                    <div class="deals-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/resource/deals-3.jpg"
                                                        alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                                <div class="buy-btn"><a href="property-details.php">For Buy</a></div>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text">
                                                    <h4><a href="property-details.php">Villa on Grand Avenue</a></h4>
                                                </div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info pull-left">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                    <div class="author-box pull-right">
                                                        <figure class="author-thumb">
                                                            <img src="assets/images/feature/author-1.jpg" alt="">
                                                            <span>Michael Bean</span>
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do
                                                    tempor incididunt labore.</p>
                                                <ul class="more-details clearfix">
                                                    <li><i class="icon-14"></i>3 Beds</li>
                                                    <li><i class="icon-15"></i>2 Baths</li>
                                                    <li><i class="icon-16"></i>600 Sq Ft</li>
                                                </ul>
                                                <div class="other-info-box clearfix">
                                                    <div class="btn-box pull-left"><a href="property-details.php"
                                                            class="theme-btn btn-two">See Details</a></div>
                                                    <ul class="other-option pull-right clearfix">
                                                        <li><a href="property-details.php"><i class="icon-12"></i></a>
                                                        </li>
                                                        <li><a href="property-details.php"><i class="icon-13"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <div class="deals-grid-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                            <div class="feature-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image"><img
                                                                src="assets/images/feature/feature-1.jpg" alt="">
                                                        </figure>
                                                        <div class="batch"><i class="icon-11"></i></div>
                                                        <span class="category">Featured</span>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="author-info clearfix">
                                                            <div class="author pull-left">
                                                                <figure class="author-thumb"><img
                                                                        src="assets/images/feature/author-1.jpg" alt="">
                                                                </figure>
                                                                <h6>Michael Bean</h6>
                                                            </div>
                                                            <div class="buy-btn pull-right"><a
                                                                    href="property-details.php">For Buy</a></div>
                                                        </div>
                                                        <div class="title-text">
                                                            <h4><a href="property-details.php">Villa on Grand Avenue</a>
                                                            </h4>
                                                        </div>
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>$30,000.00</h4>
                                                            </div>
                                                            <ul class="other-option pull-right clearfix">
                                                                <li><a href="property-details.php"><i
                                                                            class="icon-12"></i></a></li>
                                                                <li><a href="property-details.php"><i
                                                                            class="icon-13"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>3 Beds</li>
                                                            <li><i class="icon-15"></i>2 Baths</li>
                                                            <li><i class="icon-16"></i>600 Sq Ft</li>
                                                        </ul>
                                                        <div class="btn-box"><a href="property-details.php"
                                                                class="theme-btn btn-two">See Details</a></div>
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


            <?php
            $agent_id = $_GET['id'];
            $sql = "SELECT * FROM users WHERE id = '$agent_id'";

            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                $property = $result->fetch_assoc();
            } else {
                $property = [];
            }
            ?>


            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="default-sidebar agent-sidebar">
                    <div class="agents-contact sidebar-widget">
                        <div class="widget-title">
                            <h5>Contact To <?php echo htmlspecialchars($property['name']); ?></h5>
                        </div>
                        <div class="form-inner">
                            <form action="send_agency_email.php" method="post" class="default-form">
                                <input type="hidden" name="agent_email"
                                    value="<?php echo htmlspecialchars($property['email']); ?>">
                                <input type="hidden" name="agent_name"
                                    value="<?php echo htmlspecialchars($property['name']); ?>">

                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-one">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>

                    <?php

                    // Fetch property status counts
                    $query = "SELECT property_status, COUNT(*) as count FROM properties GROUP BY property_status";
                    $result = mysqli_query($conn, $query);
                    ?>


                    <div class="category-widget sidebar-widget">
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
                    </div>
                    <div class="featured-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Featured Properties</h5>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">

                            <?php
                            $sql = "SELECT * FROM properties WHERE featured = 1";
                            $result = mysqli_query($conn, $sql);
                            // Check if there are any results
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    // Extract data from the row
                                    $property_name = $row['property_name'];
                                    $price = $row['price'];
                                    $description = $row['description'];
                                    $agent_name = $row['agent_name'];
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
                                                <div class="btn-box"><a href="property-details.php?id=<?php echo $row['id']; ?>"
                                                        class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php

                                }
                            } else {
                                echo "No feature property found.";
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- agents-page-section end -->


<?php include './includes/footer.php'; ?>