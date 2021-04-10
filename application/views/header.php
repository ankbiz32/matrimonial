
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Matrimony </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
    <meta name="theme-color" content="#0F76B7">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor/plazaicon.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/vendor/font-awesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/plugins/select2.min.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <script src="<?=base_url()?>assets/js/vendor/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

    
</head>

<body>

    <div class="main-wrapper">
        
        <div class="header-section d-none d-lg-block">
            <div class="main-header">
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="header-logo">
                                <a href="<?=base_url()?>"><img src="assets/images/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 position-static">
                            <div class="site-main-nav">
                                <nav class="site-nav">
                                    <ul>
                                        <li><a href="<?=base_url()?>">Home</a></li>
                                        <li><a href="<?=base_url('about-us')?>">About</a></li>
                                        <li>
                                            <a href="#">Find your partner <span class="new">New</span></a>

                                            <ul class="mega-sub-menu">
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="#">By City</a>

                                                    <ul class="mega-item">
                                                        <li><a href="#">Raipur</a></li>
                                                        <li><a href="#">Mumbai</a></li>
                                                        <li><a href="#">Delhi</a></li>
                                                        <li><a href="#">Hyderabad</a></li>
                                                        <li><a href="#">Jagdalpur</a></li>
                                                        <li><a href="#">Durg</a></li>
                                                        <li><a href="#">See more →</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="#">By Caste</a>

                                                    <ul class="mega-item">
                                                        <li><a href="#">Brahmin</a></li>
                                                        <li><a href="#">Sindhi</a></li>
                                                        <li><a href="#">Kayasta</a></li>
                                                        <li><a href="#">Muslim</a></li>
                                                        <li><a href="#">Christian</a></li>
                                                        <li><a href="#">Sikh</a></li>
                                                        <li><a href="#">See more →</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="mega-title" href="#">By profession</a>

                                                    <ul class="mega-item">
                                                        <li><a href="#">Businessman</a></li>
                                                        <li><a href="#">IT service</a></li>
                                                        <li><a href="#l">Govt. service</a></li>
                                                        <li><a href="#l">Freelancer</a></li>
                                                        <li><a href="#">See more →</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-dropdown">
                                                    <a class="menu-banner" href="#">
                                                        <img src="assets/images/menu-banner.jpg" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-meta-info">
                                <div class="header-account">
                                    <div class="header-account-list dropdown top-link">
                                        <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>

                                        <ul class="dropdown-menu ">
                                            <?php if(isset($this->session->reg)){?>
                                                <li><a href="<?=base_url()?>profile">My Profile</a></li>
                                                <li><a href="<?=base_url()?>logout">Logout</a></li>
                                                <?php } else{?>
                                                    <li><a href="<?=base_url()?>register">Register</a></li>
                                                    <li><a href="<?=base_url()?>login">Login</a></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-mobile d-lg-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="header-logo">
                            <a href="<?=base_url()?>"><img src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="header-meta-info">
                            <div class="header-account">
                                <div class="header-account-list dropdown top-link">
                                    <a href="#" role="button" data-toggle="dropdown"><i class="icon-users"></i></a>

                                    <ul class="dropdown-menu ">
                                        <?php if(isset($this->session->reg)){?>
                                            <li><a href="<?=base_url()?>profile">My Profile</a></li>
                                            <li><a href="<?=base_url()?>logout">Logout</a></li>
                                            <?php } else{?>
                                                <li><a href="<?=base_url()?>register">Register</a></li>
                                                <li><a href="<?=base_url()?>login">Login</a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                                <div class="header-account-list mobile-menu-trigger">
                                    <button id="menu-trigger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="header-mobile-menu d-lg-none">

            <a href="javascript:void(0)" class="mobile-menu-close">
                <span></span>
                <span></span>
            </a>

            <div class="header-meta-info">
                <div class="header-search">
                    <form action="#">
                        <input type="text" placeholder="Search our store ">
                        <button><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="site-main-nav">
                <nav class="site-nav">
                    <ul class="navbar-mobile-wrapper">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?=base_url('about-us')?>">About</a></li>
                        <li>
                            <a href="#">Find your partner <span class="new">New</span></a>


                            <ul class="mega-sub-menu">
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">By City</a>

                                    <ul class="mega-item">
                                        <li><a href="shop-grid-3.html">Raipur</a></li>
                                        <li><a href="shop-grid-3.html">Mumbai</a></li>
                                        <li><a href="shop-grid-3.html">Delhi</a></li>
                                        <li><a href="shop-grid-3.html">Hyderabad</a></li>
                                        <li><a href="shop-grid-3.html">Jagdalpur</a></li>
                                        <li><a href="shop-grid-3.html">Durg</a></li>
                                        <li><a href="shop-list-right-sidebar.html">See more →</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">By Caste</a>

                                    <ul class="mega-item">
                                        <li><a href="shop-single.html">Brahmin</a></li>
                                        <li><a href="shop-single-affiliate.html">Sindhi</a></li>
                                        <li><a href="shop-single-variable.html">Kayasta</a></li>
                                        <li><a href="shop-single-group.html">Muslim</a></li>
                                        <li><a href="shop-single-group.html">Christian</a></li>
                                        <li><a href="shop-single-group.html">Sikh</a></li>
                                        <li><a href="shop-list-right-sidebar.html">See more →</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">By profession</a>

                                    <ul class="mega-item">
                                        <li><a href="cart.html">Businessman</a></li>
                                        <li><a href="wishlist.html">IT service</a></li>
                                        <li><a href="compare.html">Govt. service</a></li>
                                        <li><a href="compare.html">Freelancer</a></li>
                                        <li><a href="shop-list-right-sidebar.html">See more →</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="menu-banner" href="#">
                                        <img src="assets/images/menu-banner.jpg" alt="">
                                    </a>
                                </li>
                            </ul>


                            <!-- <ul class="mega-sub-menu">
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Shop</a>

                                    <ul class="mega-item">
                                        <li><a href="shop-grid-3.html">Shop Grid 3</a></li>
                                        <li><a href="shop-grid-4.html">Shop Grid 4</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                        <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Shop Single</a>

                                    <ul class="mega-item">
                                        <li><a href="shop-single.html">Shop Single</a></li>
                                        <li><a href="shop-single-affiliate.html">Shop Single Affiliate</a></li>
                                        <li><a href="shop-single-variable.html">Shop Single Variable</a></li>
                                        <li><a href="shop-single-group.html">Shop Single Group</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="mega-title" href="#">Page</a>

                                    <ul class="mega-item">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="empty-cart.html">Empty Cart</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li class="mega-dropdown">
                                    <a class="menu-banner" href="#">
                                        <img src="assets/images/menu-banner.jpg" alt="">
                                    </a>
                                </li>
                            </ul> -->
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="header-social">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>

        </div>

        <div class="overlay"></div>