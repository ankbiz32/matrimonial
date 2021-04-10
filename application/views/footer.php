
        <div class="newsletter-area section-padding-5">
            <div class="container">
                <div class="newsletter-form">
                    <div class="section-title text-center">
                        <h2 class="title">Join The Colorful Bunch!</h2>
                    </div>
                    <div class="form-wrapper">
                        <form action="<?= base_url('subscribe')?>" method="POST">
                            <input type="email"  name="email" placeholder="Your email address" required>
                            <button type="submit">Subscribe</button>
                            <i class="icon-mail"></i>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-area">
            <div class="container">
                <div class="footer-widget-area section-padding-6">
                    <div class="row justify-content-between">

                        <!--Footer Widget Start-->
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget">
                                <a class="footer-logo w-50" href="<?=base_url()?>"><img src="assets/images/logo/logo-white.png" alt=""></a>
                                <div class="footer-widget-text">
                                    <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you. </p>
                                </div>
                                <div class="widget-social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--Footer Widget End-->
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Information</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Search Terms</a></li>
                                        <li><a href="#">Advanced Search</a></li>
                                        <li><a href="#">Helps & Faqs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">My Account</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="<?=base_url('profile')?>">Profile</a></li>
                                        <li><a href="#">My connections</a></li>
                                        <li><a href="#">Subscriptions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Help</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">FAQ’s</a></li>
                                        <li><a href="#">Pricing Plans</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Customer Service</h4>

                                <div class="footer-widget-menu">
                                    <ul>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Refunds</a></li>
                                        <li><a href="#">Legal Notice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-section">
            <div class="container">
                <div class="copyright-wrapper text-center d-lg-flex align-items-center justify-content-between">

                    <!--Right Start-->
                    <div class="copyright-content">
                        <p>Copyright <?=date('Y')?> &copy; . All Rights Reserved</p>
                    </div>
                    <!--Right End-->

                    <!--Right Start-->
                    <div class="copyright-payment">
                        <img src="assets/images/payment.png" alt="">
                    </div>
                    <!--Right End-->

                </div>
            </div>
        </div>

        <a href="#" class="back-to-top">
            <i class="fa fa-angle-double-up"></i>
        </a>

    </div>


    <!-- Modernizer JS -->
    <script src="<?=base_url()?>assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- jQuery JS -->
    <script src="<?=base_url()?>assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?=base_url()?>assets/js/vendor/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="<?=base_url()?>assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/jquery.elevateZoom.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/select2.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/ajax-contact.js"></script>


    <!-- Main JS -->
    <script src="<?=base_url()?>assets/js/main.js"></script>


    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ5y0EF8dE6qwc03FcbXHJfXr4vEa7z54"></script>
    <script src="<?=base_url()?>assets/js/map-script.js"></script>

    
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>    
        <?php if($this->session->flashdata('success') ):?>
                Swal.fire({
                html: '<?= $this->session->flashdata('success')?>',
                icon: 'success',
                position: 'center',
                showConfirmButton: false,
                timer: 6000,
            });
        <?php endif;?>
            
        <?php if($this->session->flashdata('error') || $this->session->flashdata('error') ):?>
                Swal.fire({
                html: '<?= $this->session->flashdata('error')?>',
                icon: 'error',
                position: 'center',
                showConfirmButton: false,
                timer: 6000,
            });
        <?php endif;?>
    </script>

</body>
</html>