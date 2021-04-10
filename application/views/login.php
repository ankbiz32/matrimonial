

        <div class="page-banner" style="background-image: url(assets/images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Login</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="login-page section-padding-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-register-content">

                            <div class="login-register-form">
                                <form method="POST" action="<?=base_url('/submit-login')?>" class="login-form">
                                    <h4 class="title">Login to Your Account</h4>
                                    <br>
                                    <div class="single-form">
                                        <label>Email address *</label>
                                        <input type="email" name="email">
                                    </div>
                                    <div class="single-form">
                                        <label>Password</label>
                                        <input type="password" name="pwd">
                                    </div>
                                    <div class="single-form d-flex justify-content-between">
                                        <div class="forget">
                                        </div>
                                    </div>
                                    <div class="single-form">
                                        <button class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <br>
                                    
                                    <div class="single-form">
                                        <label>Don't have account ?</label>
                                        <a href="<?=base_url('register')?>" class="btn btn-dark btn-block">Create Account Now</a>
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
