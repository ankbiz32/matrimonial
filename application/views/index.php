
        
        <div class="slider-area">
            <div class="swiper-container slider-active">
                <div class="swiper-wrapper">
                    <div class="single-slider swiper-slide animation-style-01" style="background-image: url(assets/images/slider/slider-1.jpg);">
                        <div class="container">
                            <div class="slider-content">
                                <h2 class="main-title">Special Moment!</h2>
                                <p class="">We are here for your Special Moment</p>

                                <ul class="slider-btn">
                                    
                                <?php if(isset($this->session->reg)){?>
                                    <li><a href="<?=base_url('people')?>" class="btn btn-round btn-primary">Find your partner</a></li>
                                <?php } else{?>
                                    <li><a href="<?=base_url('register')?>" class="btn btn-round btn-primary">Register & find your partner now</a></li>
                                <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Swiper Wrapper End-->

                <!-- Add Arrows -->
                <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

            </div>
            <!--Swiper Container End-->
        </div>

        <div class="shipping-area section-padding-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="assets/images/shipping-icon/Free-Delivery.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Free Trial</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, recusandae.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="assets/images/shipping-icon/Online-Order.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Online Chat</h5>
                                <p>Don’t worry you can chat Online by our Site</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="assets/images/shipping-icon/Freshness.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Freshness</h5>
                                <p>You have freshness flowers every single order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-shipping">
                            <div class="shipping-icon">
                                <img src="assets/images/shipping-icon/Made-By-Artists.png" alt="">
                            </div>
                            <div class="shipping-content">
                                <h5 class="title">Made by Artists</h5>
                                <p>World for all made by artists orders over now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="about-area section-padding-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/images/about/about.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2 class="title">Suprise Your Valentine! Let us arrange a smile For Her.</h2>
                            <p>Where flowers are our inspiration to create lasting memories. Whatever the occasion inspiration to create lasting memories.... </p>
                            <ul>
                                <li> Hand picked just for you. </li>
                                <li> Hand picked just for you. </li>
                                <li> Hand picked just for. </li>
                            </ul>
                            <div class="about-btn">
                                <a href="<?=base_url('about-us')?>" class="btn btn-primary btn-round">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="blog-area blog-bg section-padding-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 col-sm-11">
                        <div class="section-title text-center">
                            <h2 class="title">See some profiles</h2>
                            <p>A perfect blend of creativity, energy, communication, happiness and love. Let us arrange a smile for you.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper">
                    <div class="swiper-container mb-5 blog-active">
                        <div class="swiper-wrapper">
                            <?php foreach($people as $p){?>
                                
                                <div class="swiper-slide">
                                    <div class="single-blog">
                                        <div class="blog-image">
                                            <?php if($p->img_src){?>
                                            <?php if(!isset($this->session->reg->id)){?>
                                                <style>
                                                    .proImg{filter:blur(8px);}
                                                </style>
                                            <?php } ?>
                                                <a href="#">
                                                    <img class="proImg" src="assets/images/blog/<?=$p->img_src?>" height="183" width="153" style="object-fit:cover;object-position:center;" alt="">
                                                </a>
                                            <?php }else{?>
                                                <a href="#"><img src="assets/images/blog/default.jpg" alt=""></a>
                                            <?php }?>
                                        </div>
                                        <div class="blog-content">
                                            <h4 class="title d-flex justify-content-between align-items-center">
                                                    
                                                <?php if(isset($this->session->reg)){?>
                                                    <a href="#"><?=$p->fname?> <small>(Age: <?=$p->age?> yrs)</small> </a>
                                                <?php } else{?>
                                                    <a href="#">#<?=$p->id?> <small>(Age: <?=$p->age?> yrs)</small> </a>
                                                <?php }?>
                                            </h4>
                                            <div class="articles-date">
                                                <p class="mb-1">Occupation: <span><?=$p->occupation?></span></p>
                                                <p>City: <span><?=$p->city?></span></p>
                                            </div>

                                            <div class="blog-footer">
                                            <?php if(isset($this->session->reg)){?>
                                                <a class="more" href="<?=base_url('people')?>">See details</a>
                                            <?php } else{?>
                                                <a class="more" href="<?=base_url('login')?>">Login to see image</a>
                                            <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>

                        <!-- Add Arrows -->
                        <div class="swiper-next"><i class="fa fa-angle-right"></i></div>
                        <div class="swiper-prev"><i class="fa fa-angle-left"></i></div>
                    </div>
                    <br><br>
                    <div class="text-center mt-5 pt-5">
                    <?php if(isset($this->session->reg)){?>
                        <a href="<?=base_url('people')?>" style class="btn btn-primary btn-round">See more profiles</a>
                    <?php } else{?>
                        <a href="<?=base_url('login')?>" style class="btn btn-primary btn-round">See more profiles</a>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>


