        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Login Register</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Login Register</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Login Register section start-->
        <div class="login-register-section section pt-90 pt-lg-70 pt-md-60 pt-sm-55 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <!--Login Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register">
                            <div class="form-login-title">
                                <h2>Login</h2>
                            </div>
                            <div class="login-form">
                                <form action="/user/login" method="POST">
                                    <div class="form-fild">
                                        <p><label>Email <span class="required">*</span></label></p>
                                        <input name="Email" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Password <span class="required">*</span></label></p>
                                        <input name="Password" value="" type="password">
                                    </div>
                                    <div class="login-submit">
                                        <button id="enterBtn" type="submit" class="btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Login Form End-->
                    <!--Register Form Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="customer-login-register register-pt-0">
                            <div class="form-register-title">
                                <h2>Register</h2>
                            </div>
                            <div class="register-form">
                                <form action="/user/registration" method="POST">
                                    <div class="form-fild">
                                        <p><label>Name <span class="required">*</span></label></p>
                                        <input name="Name" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Surname <span class="required">*</span></label></p>
                                        <input name="Surname" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Email <span class="required">*</span></label></p>
                                        <input name="Email" value="" type="text">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Password <span class="required">*</span></label></p>
                                        <input name="Password" value="" type="password">
                                    </div>
                                    <div class="form-fild">
                                        <p><label>Phone <span class="required">*</span></label></p>
                                        <input name="Phone" value="" type="phone">
                                    </div>
                                    <div class="register-submit">
                                        <button id="enter" type="submit" class="btn">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Register Form End-->
                </div>
            </div>
        </div>
        <!--Login Register section end-->