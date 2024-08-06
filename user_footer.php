<?php
include('db.php');

$sqli="select *from info order by info_id DESC LIMIT 1";
$xyz=mysqli_query($abc,$sqli);

$gpt="select *from types";
$htp=mysqli_query($abc,$gpt);

if(isset($_REQUEST['get']))
{
    $email=$_REQUEST['email'];

    $sql="insert into email (email) values ('$email') ";
    mysqli_query($abc,$sql);
}
?>
    <!-- Begin Hiraola's Footer Area -->
    <div class="hiraola-footer_area">
        <div class="footer-top_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widgets_info">

                            <div class="footer-widgets_logo">
                                <a href="#">
                                    <img src="assets/images/footer/logo/1.png" alt="Hiraola's Footer Logo">
                                </a>
                            </div>

                            <div class="widget-short_desc">
                                <p>We are a team of designers and developers that create high quality HTML Template &
                                    Woocommerce, Shopify Theme.
                                </p>
                            </div>
                            <div class="hiraola-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="footer-widgets_area">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="footer-widgets_title">
                                        <h6>Product</h6>
                                    </div>
                                    
                                    <div class="footer-widgets">
                                        <ul>
                                        <?php
                                            while($pro=mysqli_fetch_array($htp))
                                            {
                                              ?> 

                                            
                                            <li><a href="#"><?php echo $pro['name']; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-5">
                                    <div class="footer-widgets_info">
                                        <div class="footer-widgets_title">
                                            <h6>About Us</h6>
                                        </div>
                                        <?php
                                        while($add=mysqli_fetch_array($xyz))
                                        {
                                          ?>
                                        
                                        <div class="widgets-essential_stuff">
                                            <ul>
                                                <li class="hiraola-address"><i
                                                class="ion-ios-location"></i><span>Address:</span><?php echo $add['address']; ?></li>
                                                <li class="hiraola-phone"><i class="ion-ios-telephone"></i><span>Call
                                                Us:</span> <a href="tel://+<?php echo $add['phone']; ?>"><?php echo $add['phone']; ?></a>
                                                </li>
                                                <li class="hiraola-email"><i
                                                class="ion-android-mail"></i><span>Email:</span> <a href="mailto://<?php echo $add['email']; ?>"><?php echo $add['email']; ?></a></li>
                                            </ul>
                                        </div>
                                        <?php
                                        } 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="instagram-container footer-widgets_area">
                                        <div class="footer-widgets_title">
                                            <h6>Sign Up For Newslatter</h6>
                                        </div>
                                        <div class="widget-short_desc">
                                            <p>Subscribe to our newsletters now and stay up-to-date with new collections</p>
                                        </div>
                                        <div class="newsletter-form_wrap">
                                            <form class="subscribe-form" action="#" method="post">
                                                <input class="newsletter-input"  type="email" autocomplete="off" name="email" value="Enter Your Email" onblur="if(this.value==''){this.value='Enter Your Email'}" onfocus="if(this.value=='Enter Your Email'){this.value=''}">
                                                <button class="newsletter-btn"  name="get">
                                                    <i class="ion-android-mail"></i>
                                                </button>
                                            </form>
                                            <!-- Mailchimp Alerts -->
                                            <div class="mailchimp-alerts mt-3">
                                                <div class="mailchimp-submitting"></div>
                                                <div class="mailchimp-success"></div>
                                                <div class="mailchimp-error"></div>
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
        <div class="footer-bottom_area">
            <div class="container">
                <div class="footer-bottom_nav">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">Online Shopping</a></li>
                                    <li><a href="#">Promotions</a></li>
                                    <li><a href="#">My Orders</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Most Populars</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                    <li><a href="#">Special Products</a></li>
                                    <li><a href="#">Manufacturers</a></li>
                                    <li><a href="#">Our Stores</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Payments</a></li>
                                    <li><a href="#">Warantee</a></li>
                                    <li><a href="#">Refunds</a></li>
                                    <li><a href="#">Checkout</a></li>
                                    <li><a href="#">Discount</a></li>
                                    <li><a href="#">Refunds</a></li>
                                    <li><a href="#">Policy Shipping</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="payment">
                                <a href="#">
                                    <img src="assets/images/footer/payment/1.png" alt="Hiraola's Payment Method">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="copyright">
                                <span>Copyright &copy; 2022 <a href="index.html">Hiraola.</a> All rights reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Footer Area End Here -->
<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Slick Slider JS -->

   
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/js/plugins/countdown.min.js"></script>
    <!-- Barrating JS -->
    <script src="assets/js/plugins/jquery.barrating.min.js"></script>
    <!-- Counterup JS -->
    <script src="assets/js/plugins/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <!-- Sticky Sidebar JS -->
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Jquery-ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- Scroll Top JS -->
    <script src="assets/js/plugins/scroll-top.min.js"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <!-- ElevateZoom JS -->
    <script src="assets/js/plugins/jquery.elevateZoom-3.0.8.min.js"></script>
    <!-- Timecircles JS -->
    <script src="assets/js/plugins/timecircles.min.js"></script>
    <!-- Mailchimp Ajax JS -->
    <script src="assets/js/plugins/mailchimp-ajax.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <!-- <script src="assets/js/main.min.js"></script> -->
