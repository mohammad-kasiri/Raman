<header class="elementskit-header main-header">

    <div class="header-top">
        <div class="container ">
            <div class="top-outer clearfix">
                <!-- Top Left -->
                <ul class="top-left">
                    <li><a href="tel:+1-(212)-305-2500"><span class="icon flaticon-phone-receiver"></span>تماس
                            با ما 021-3302500</a></li>
                    <li><span class="icon flaticon-clock-1"></span>شنبه تا پنج‌شنبه (8-10)</li>
                    <li><a href="mailto:info@Medizco.com"><span class="icon flaticon-letter"></span>info@Medizco.com</a></li>
                </ul>

                <!-- Top Right -->
                <div class="top-right clearfix">
                    @auth()
                        @admin()
                            <div class="nav-box">
                                <div class="nav-btn nav-toggler navSidebar-button">
                                    <a href="{{route('admin.index')}}" class="theme-btn btn-style-transparent ">ورود به پنل مدیریت</a>
                                </div>
                            </div>
                        @endadmin
                    @else
                        <!-- Main Menu End-->
                        <div class="nav-box">
                            <div class="nav-btn  navSidebar-button">
                                <a href="{{route('otp-login.form')}}" class="theme-btn btn-style-transparent ">ورود</a>
                            </div>
                        </div>
                        <div class="nav-box">
                            <div class="nav-btn  navSidebar-button">
                                <a href="{{route('register.form')}}" class="theme-btn btn-style-transparent btn-sm">ثبت نام</a>
                            </div>
                        </div>
                    @endauth
                </div>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Upper -->
    <div class="header-upper">
        <!-- xs-container -->
        <div class="container">
            <div class="xs-navbar clearfix">

                <div class="logo-outer">
                    <div class="logo"><a href="#"><img src="images/logo-a.png" alt="" title=""></a>
                    </div>
                </div>

                <nav class="elementskit-navbar">

                    <!-- ---------------------------------------
                            // god menu markup start
                        ---------------------------------------- -->

                    <div class="xs-mobile-search">
                        <a href="#modal-popup-2" class="xs-modal-popup"><i class="icon icon-search"></i></a>
                    </div>

                    <!-- start humberger (for offcanvas toggler) -->
                    <button class="elementskit-menu-toggler xs-bold-menu">
                        <div class="xs-gradient-group">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <span> منو </span>
                    </button>
                    <!-- end humberger -->

                    <!-- start menu container -->
                    <div class="elementskit-menu-container elementskit-menu-offcanvas-elements">

                        <!-- start menu item list -->
                        <ul class="elementskit-navbar-nav nav-alignment-dynamic">
                            <li><a href="department.html">بخش ها</a></li>
                            <li><a href="department.html">بخش ها</a></li>
                            <li><a href="department.html">بخش ها</a></li>
                            <li><a href="department.html">بخش ها</a></li>


                        </ul> <!-- end menu item list -->


                        <!-- start menu logo and close button (for mobile offcanvas menu) -->
                        <div class="elementskit-nav-identity-panel">
                            <h1 class="elementskit-site-title">
                                <a href="#" class="elementskit-nav-logo">منو</a>
                            </h1>
                            <button class="elementskit-menu-close elementskit-menu-toggler" type="button"><i
                                    class="icon icon-cross"></i></button>
                        </div>
                        <!-- end menu logo and close button -->

                    </div>
                    <!-- end menu container -->

                    <!-- start offcanvas overlay -->
                    <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler">
                    </div>
                    <!-- end offcanvas overlay -->
                    <!-- ---------------------------------------
                            // god menu markup end
                        ---------------------------------------- -->

                </nav>
                <ul class="xs-menu-tools">
                    <li>
                        <a href="#modal-popup-2" class="navsearch-button xs-modal-popup"><i class="icon icon-search"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- .container END -->
</header>
