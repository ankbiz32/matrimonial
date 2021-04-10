
        <div class="page-banner" style="background-image: url(assets/images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">My Account</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="register-page section-padding-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <div class="my-account-menu mt-30">
                            <ul class="nav account-menu-list flex-column">
                                <li>
                                    <a class="active" data-toggle="pill" href="#pills-dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a data-toggle="pill" href="#pills-account"><i class="fa fa-user"></i> Account Details</a>
                                </li>
                                <li>
                                    <a data-toggle="pill" href="#pills-order"><i class="fa fa-lock"></i> Change password</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>logout"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <div class="tab-content my-account-tab mt-30" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-dashboard">
                                <div class="my-account-dashboard account-wrapper">
                                    <h4 class="account-title">Dashboard</h4>
                                    <div class="welcome-dashboard">
                                        <p>Hello, <strong><?=$this->session->reg->fname.' '.$this->session->reg->lname?></strong> !</p>
                                    </div>
                                    <p class="mt-25">From your account dashboard. you can easily check & view your recent likes & manage your addresses and edit your password and account details.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-order">
                                <div class="my-account-order account-wrapper">
                                    <h4 class="account-title"> Password change</h4>
                                    <form action="<?=base_url('change-password')?>" id="form-pwd" method="post">
                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="password" name="oldp" placeholder="Current Password *" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="password" name="newp" placeholder="New Password *" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <input type="password" name="cnfp" placeholder="Confirm Password *" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <br><br>
                                            <div class="col-md-6">
                                                <div class="single-form">
                                                    <button class="btn btn-primary" type="button" id="change-pwd">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-account">
                                <div class="my-account-details account-wrapper">
                                    <h4 class="account-title">Account Details</h4>

                                    <div class="account-details">
                                        <form action="update-profile" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="single-form">
                                                        Registered email: &nbsp; <strong><?=$this->session->reg->email?></strong>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <?php if($profile->img_src){?>
                                                            <a href="blog-single-right-sidebar.html"><img src="assets/images/blog/<?=$profile->img_src?>" alt="" height="100"></a>
                                                        <?php }else{?>
                                                            <a href="blog-single-right-sidebar.html"><img src="assets/images/blog/default.jpg" alt="" height="100"></a>
                                                        <?php }?>
                                            
                                                        <input type="file" class="mt-4" name="img">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="single-form">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" name="fname" placeholder="First Name" value="<?=$this->session->reg->fname?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" name="lname"  placeholder="Last Name" value="<?=$this->session->reg->lname?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" name="age"  placeholder="Age" value="<?=$profile->age?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" name="occupation"  placeholder="Occupation" value="<?=$profile->occupation?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <input type="text" name="city"  placeholder="City" value="<?=$profile->city?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <textarea name="address" cols="30" rows="10" class="form-control" required><?=$profile->address?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-form">
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#change-pwd').click(function() {
                if ($('input[name=cnfp]').val() == $('input[name=newp]').val()) {
                    $('#form-pwd').submit();
                }
                else { 
                    alert('New password & confirm password should be same');
                }
            });
        </script>

