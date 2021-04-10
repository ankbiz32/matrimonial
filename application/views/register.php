
        <div class="page-banner" style="background-image: url(assets/images/testimonial-bg.jpg);">
            <div class="container">
                <div class="page-banner-content text-center">
                    <h2 class="title">Register</h2>
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="register-page section-padding-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-register-content">
                            <h4 class="title">Create New Account</h4>

                            <div class="login-register-form">
                                <form action="<?=base_url('submit-register')?>" method="POST">
                                    <div class="single-form">
                                        <label>First name *</label>
                                        <input type="text" name="fname">
                                    </div>
                                    <div class="single-form">
                                        <label>Last name *</label>
                                        <input type="text" name="lname" required>
                                    </div>
                                    <div class="single-form">
                                        <label>Email address *</label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="single-form">
                                        <label>Create password *</label>
                                        <input type="password" name="pwd" required>
                                    </div>
                                    <div class="single-form">
                                        <button class="btn btn-primary btn-block">Register</button>
                                    </div>
                                    <br>
                                    <div class="single-form">
                                        <label>Already have an account?</label>
                                        
                                        <a href="<?=base_url('login')?>" class="btn btn-dark btn-block">Log in!</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

