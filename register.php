
        <?php
        include('templates/header.php')
        ?>
        <!-- /header -->

        <!-- page-title -->
        <div class="tf-page-title style-2">
            <div class="container-full">
                <div class="heading text-center">Create a New Account</div>
            </div>
        </div>
        <!-- /page-title -->

        <section class="flat-spacing-10">
            <div class="container">
                <div class="tf-grid-layout lg-col-2 tf-login-wrap">
                    <div class="tf-login-form">
                        <div id="recover">
                            <h5 class="mb_24">Reset your password</h5>
                            <p class="mb_30">We will send you an email to reset your password</p>
                            <div>
                                <form class="" id="login-form" action="#" method="post" accept-charset="utf-8" data-mailchimp="true">
                                    <div class="tf-field style-1 mb_15">
                                        <input class="tf-field-input tf-input" placeholder="" type="email" id="property3" name="email">
                                        <label class="tf-field-label fw-4 text_black-2" for="property3">Email *</label>
                                    </div>
                                    <div class="mb_20">
                                        <a href="#login" class="tf-btn btn-line">Cancel</a>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Reset password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <form class="" action="registercode.php" id="register-form" method="post" accept-charset="utf-8" data-mailchimp="true">
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder="" type="text" id="name" name="name">
                                <label class="tf-field-label fw-4 text_black-2" for="name">Name</label>
                            </div>
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder="" type="email" id="email" name="email">
                                <label class="tf-field-label fw-4 text_black-2" for="email">Email *</label>
                            </div>
                            <div class="tf-field style-1 mb_30">
                                <input class="tf-field-input tf-input" placeholder=" " type="password" id="password" name="password">
                                <label class="tf-field-label fw-4 text_black-2" for="password">Password *</label>
                            </div>
                            <div class="tf-field style-1 mb_30">
                                <input class="tf-field-input tf-input" placeholder=" " type="password" id="cpassword" name="cpassword">
                                <label class="tf-field-label fw-4 text_black-2" for="cpassword">Confirm Password *</label>
                            </div>
                            <div id="nullerror" style="padding-top: 14px !important;" class="bg-danger p-1 text-center text-white rounded mt-1">
                                <p>Username or password are null</p>
                            </div>
                            <div id="cpasserror" style="padding-top: 14px !important;" class="bg-danger p-1 text-center text-white rounded mt-1">
                                <p>**Password is not matching</p>
                            </div>
                            <div class="mb_20">
                                <button id="btn-register" type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">Register</button>
                            </div>
                            <div class="text-center">
                                <a href="login.php" class="tf-btn btn-line">Already have an account? Log in here<i class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </form>
    
                    </div>
                    <div class="tf-login-content">
                        <h5 class="mb_36">I Already have an Account</h5>
                        <p class="mb_20">Sign in for early Sale access plus tailored new arrivals, trends and promotions. To opt out, click unsubscribe in our emails.</p>
                        <a href="login.php" class="tf-btn btn-line">Login<i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <?php
        include('templates/footer.php')
        ?>
        <!-- /Footer -->

    </div>

    <!-- gotop -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>
    <!-- /gotop -->

    <!-- toolbar-bottom -->
    <div class="tf-toolbar-bottom type-1150">
        <div class="toolbar-item active">
            <a href="#toolbarShopmb" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-shop"></i>
                </div>
                <div class="toolbar-label">Shop</div>
            </a>
        </div>

        <div class="toolbar-item">
            <a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                <div class="toolbar-icon">
                    <i class="icon-search"></i>
                </div>
                <div class="toolbar-label">Search</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#login" data-bs-toggle="modal">
                <div class="toolbar-icon">
                    <i class="icon-account"></i>
                </div>
                <div class="toolbar-label">Account</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.php">
                <div class="toolbar-icon">
                    <i class="icon-heart"></i>
                    <div class="toolbar-count">0</div>
                </div>
                <div class="toolbar-label">Wishlist</div>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#shoppingCart" data-bs-toggle="modal">
                <div class="toolbar-icon">
                    <i class="icon-bag"></i>
                    <div class="toolbar-count">1</div>
                </div>
                <div class="toolbar-label">Cart</div>
            </a>
        </div>
    </div>
    <!-- /toolbar-bottom -->



    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-one" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                            <span>Home</span>
                            <span class="btn-open-sub"></span>
                        </a>


                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-two" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-two">
                            <span>Shop</span>
                            <span class="btn-open-sub"></span>
                        </a>
                        <div id="dropdown-menu-two" class="collapse">
                            <ul class="sub-nav-menu" id="sub-menu-navigation">
                                <li><a href="#sub-shop-one" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-one">
                                        <span>Shop layouts</span>
                                        <span class="btn-open-sub"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href="#sub-shop-two" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-two">
                                        <span>Features</span>
                                        <span class="btn-open-sub"></span>
                                    </a>

                                </li>
                                <li>
                                    <a href="#sub-shop-three" class="sub-nav-link collapsed" data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-shop-three">
                                        <span>Product styles</span>
                                        <span class="btn-open-sub"></span>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-three" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                            <span>Products</span>
                            <span class="btn-open-sub"></span>
                        </a>

                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-four" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                            <span>Pages</span>
                            <span class="btn-open-sub"></span>
                        </a>
                    </li>
                    <li class="nav-mb-item">
                        <a href="#dropdown-menu-five" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-five">
                            <span>Blog</span>
                            <span class="btn-open-sub"></span>
                        </a>

                    </li>
                    <li class="nav-mb-item">
                        <a href="#" class="mb-menu-link">Buy now</a>
                    </li>
                </ul>
                <div class="mb-other-content">
                    <div class="d-flex group-icon">
                        <a href="wishlist.php" class="site-nav-icon"><i class="icon icon-heart"></i>Wishlist</a>
                        <a href="#" class="site-nav-icon"><i class="icon icon-search"></i>Search</a>
                    </div>
                    <div class="mb-notice">
                        <a href="contact-1.php" class="text-need">Need help ?</a>
                    </div>
                    <ul class="mb-info">
                        <li>Address: 1234 Fashion Street, Suite 567, <br> New York, NY 10001</li>
                        <li>Email: <b>info@fashionshop.com</b></li>
                        <li>Phone: <b>(212) 555-1234</b></li>
                    </ul>
                </div>
            </div>
            <div class="mb-bottom">
                <a href="login.php" class="site-nav-icon"><i class="icon icon-account"></i>Login</a>
                <div class="bottom-bar-language">
                    <div class="tf-currencies">
                        <select class="image-select center style-default type-currencies">
                            <option data-thumbnail="assets/frontend/images/country/fr.svg">EUR <span>€ | France</span></option>
                            <option data-thumbnail="assets/frontend/images/country/de.svg">EUR <span>€ | Germany</span></option>
                            <option selected data-thumbnail="assets/frontend/images/country/us.svg">USD <span>$ | United States</span></option>
                            <option data-thumbnail="assets/frontend/images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                        </select>
                    </div>
                    <div class="tf-languages">
                        <select class="image-select center style-default type-languages">
                            <option>English</option>
                            <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <!-- Javascript -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var nullError = document.getElementById('nullerror');
                var cpassError = document.getElementById('cpasserror');
                var registerButton = document.getElementById('btn-register');
                var passwordField = document.getElementById('password');
                var usernameField = document.getElementById('name');
                var cpwdField = document.getElementById('cpassword');

                nullError.style.display = 'none';
                cpassError.style.display = 'none';

                registerButton.addEventListener('click', function() {
                    var username = usernameField.value;
                    var password = passwordField.value;

                    if (password === '' || username === '') {
                        nullError.style.display = 'block';
                        return false;
                    }
                });

                cpwdField.addEventListener('keyup', function() {
                    var password = passwordField.value;
                    var cpwd = cpwdField.value;

                    if (password !== cpwd) {
                        cpassError.style.display = 'block';
                        return false;
                    } else {
                        cpassError.style.display = 'none';
                        return true;
                    }
                });
            });
        </script>
        <?php
        include('templates/footerscripts.php')
        ?>
</body>


<!-- Mirrored from themesflat.co/html/ecomus/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 09:30:20 GMT -->

</html>