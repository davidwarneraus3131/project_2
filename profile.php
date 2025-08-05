


       <?php
include './includes/header.php';
include("./database/db.php");

// Assuming user ID is stored in session
$user_id = $_SESSION['user_id'] ?? 0;

// Fetch cities and property types from DB if dynamic
?>

<section class="myprofile-section sec-pad">
    <div class="auto-container">
        <div class="title">
            <h3>Set Your Preferences</h3>
        </div>
        <form method="POST" action="save_user_preferences.php">
            <div class="row clearfix">
                <!-- Name (readonly) -->
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="field-input">
                        <label>Name</label>
                        <input type="text" name="name" value="<?= $_SESSION['name'] ?? '' ?>" readonly>
                    </div>
                </div>

                <!-- Phone (readonly) -->
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="field-input">
                        <label>Phone</label>
                        <input type="text" name="phone" value="<?= $_SESSION['phone'] ?? '' ?>" readonly>
                    </div>
                </div>

                <!-- Email (readonly) -->
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="field-input">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $_SESSION['email'] ?? '' ?>" readonly>
                    </div>
                </div>

                <!-- Preferred Cities -->
                <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <div class="field-input">
                        <label>Preferred Cities</label>
                        <select name="cities[]" multiple class="wide">
                            <option value="Chennai">Chennai</option>
                            <option value="Bangalore">Bangalore</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Pune">Pune</option>
                            <option value="Coimbatore">Coimbatore</option>
                        </select>
                    </div>
                </div>

                <!-- Budget Min -->
                <div class="col-lg-3 col-md-6 col-sm-12 column">
                    <div class="field-input">
                        <label>Min Budget</label>
                        <input type="number" name="min_budget" placeholder="₹ Min">
                    </div>
                </div>

                <!-- Budget Max -->
                <div class="col-lg-3 col-md-6 col-sm-12 column">
                    <div class="field-input">
                        <label>Max Budget</label>
                        <input type="number" name="max_budget" placeholder="₹ Max">
                    </div>
                </div>

                <!-- Property Types -->
                <div class="col-lg-12 col-md-12 col-sm-12 column">
                    <div class="field-input">
                        <label>Property Types</label><br>
                        <label><input type="checkbox" name="property_types[]" value="Flat"> Flat</label>
                        <label><input type="checkbox" name="property_types[]" value="Villa"> Villa</label>
                        <label><input type="checkbox" name="property_types[]" value="Independent House"> Independent House</label>
                        <label><input type="checkbox" name="property_types[]" value="Plot"> Plot</label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-lg-12 col-md-12 col-sm-12 column text-center">
                    <button type="submit" class="theme-btn btn-one">Save Preferences</button>
                </div>
            </div>
        </form>
    </div>
</section>

        <!-- myprofile-section end -->


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
                            <form action="contact.html" method="post" class="subscribe-form">
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
                                        <li><a href="index.html">About Us</a></li>
                                        <li><a href="index.html">Listing</a></li>
                                        <li><a href="index.html">How It Works</a></li>
                                        <li><a href="index.html">Our Services</a></li>
                                        <li><a href="index.html">Our Blog</a></li>
                                        <li><a href="index.html">Contact Us</a></li>
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
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-1.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                        <p>Mar 25, 2020</p>
                                    </div>
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html"><img src="assets/images/resource/footer-post-2.jpg" alt=""></a></figure>
                                        <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
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
                        <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                        <div class="copyright pull-left">
                            <p><a href="index.html">Realshed</a> &copy; 2021 All Right Reserved</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index.html">Terms of Service</a></li>
                            <li><a href="index.html">Privacy Policy</a></li>
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

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->
</html>
