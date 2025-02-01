

<?php include './includes/header.php'; ?>

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
                                    <form action="agents-list.php">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Enter Agent Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="All Categories">All Categories</option>
                                                   <option value="1">New Arrival</option>
                                                   <option value="2">Top Rated</option>
                                                   <option value="3">Most Search</option>
                                                   <option value="4">Recent Place</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="All Cities">All Cities</option>
                                                   <option value="1">New York</option>
                                                   <option value="2">California</option>
                                                   <option value="3">London</option>
                                                   <option value="4">Maxico</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-one">Search Agent</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Status Of Property</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <li><a href="agency-details.php">For Rent <span>(200)</span></a></li>
                                    <li><a href="agency-details.php">For Sale <span>(700)</span></a></li>
                                </ul>
                            </div>
                            <div class="featured-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Featured Properties</h5>
                                </div>
                                <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-1.jpg" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.php">Villa on Grand Avenue</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <div class="btn-box"><a href="property-details.php" class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-2.jpg" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.php">Luxury Villa With Pool</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <div class="btn-box"><a href="property-details.php" class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/feature/feature-3.jpg" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.php">Contemporary Apartment</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <div class="btn-box"><a href="property-details.php" class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="agency-content-side">
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
                                <div class="agents-list-content list-item">
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/resource/agency-1.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agency-details.php">Realhome Estate</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.php"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:info@realhome.com">info@realhome.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/resource/agency-2.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agency-details.php">Housetlk Property</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.php"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:info@housetlk.com">info@housetlk.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/resource/agency-3.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agency-details.php">Home & Garden</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.php"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:info@homegarden.com">info@homegarden.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/resource/agency-4.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agency-details.php">Property Company</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.php"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:info@property.com">info@property.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/resource/agency-5.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agency-details.php">Realty Investment</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.php"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:info@investment.com">info@investment.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="assets/images/resource/agency-6.jpg" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="agency-details.php">Propertydeal</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.php"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.php"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul>
                                                <div class="btn-box">
                                                    <a href="profile.php" class="theme-btn btn-two">View Profile</a>
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
                                                    <figure class="image-box"><img src="assets/images/resource/agency-1.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agency-details.php">Realhome Estate</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:info@realhome.com">info@realhome.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/resource/agency-2.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agency-details.php">Housetlk Property</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:info@housetlk.com">info@housetlk.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/resource/agency-3.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agency-details.php">Home & Garden</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:info@homegarden.com">info@homegarden.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/resource/agency-4.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agency-details.php">Property Company</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:info@property.com">info@property.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/resource/agency-5.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agency-details.php">Realty Investment</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:info@investment.com">info@investment.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="assets/images/resource/agency-6.png" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="agency-details.php">Propertydeal</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <ul class="info clearfix">
                                                            <li><i class="fab fa fa-envelope"></i><a href="mailto:info@propertydeal.com">info@propertydeal.com</a></li>
                                                            <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                        </ul>
                                                        <div class="btn-box">
                                                            <a href="profile.php" class="theme-btn btn-two">View Profile</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="agency-list.php" class="current">1</a></li>
                                    <li><a href="agency-list.php">2</a></li>
                                    <li><a href="agency-list.php">3</a></li>
                                    <li><a href="agency-list.php"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agents-page-section end -->

        <?php include './includes/footer.php'; ?>