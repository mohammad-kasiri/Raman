@extends('guest.layout.master')

@section('content')

    <!-- Bnner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
                <div class="container xs-banner-container-parent">
                    <div class="clearfix">

                        <!-- Content Column -->
                        <div class="banner-column col-lg-6 col-md-6 col-sm-12">
                            <div class="title wow fadeInUp" data-wow-delay="250ms">تشخیص</div>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">مراقبت شخصی از شما برای زندگی سالم</h2>
                            <p class="text wow fadeInUp" data-wow-delay="750ms">لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                                و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            <div class="link-box wow fadeInUp" data-wow-delay="1000ms">
                                <a href="department.html" class="theme-btn btn-style-two"><i>همین حالا نوبت
                                        بگیرید</i> <span class="arrow icon icon-arrow_right"></span></a>
                            </div>
                        </div>

                        <!-- Image Column -->

                        <div class="image">
                            <img src="images/main-slider/content-image.png" alt="" />
                        </div>


                    </div>

                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
                <div class="container xs-banner-container-parent">
                    <div class="clearfix">

                        <!-- Content Column -->
                        <div class="banner-column col-lg-6 col-md-6 col-sm-12">
                            <div class="title wow fadeInUp" data-wow-delay="250ms">تشخیص</div>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">مراقبت شخصی از شما برای زندگی سالم</h2>
                            <p class="text wow fadeInUp" data-wow-delay="750ms">لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                                و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            <div class="link-box wow fadeInUp" data-wow-delay="1000ms">
                                <a href="department.html" class="theme-btn btn-style-two"><i>همین حالا نوبت
                                        بگیرید</i> <span class="arrow icon icon-arrow_right"></span></a>
                            </div>
                        </div>

                        <!-- Image -->

                        <div class="image">
                            <img src="images/main-slider/content-image-2.png" alt="" />
                        </div>



                    </div>

                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
                <div class="container xs-banner-container-parent">
                    <div class="clearfix">

                        <!-- Content Column -->
                        <div class="banner-column col-lg-6 col-md-6 col-sm-12">
                            <div class="title wow fadeInUp" data-wow-delay="250ms">تشخیص</div>
                            <h2 class="wow fadeInUp" data-wow-delay="500ms">مراقبت شخصی از شما برای زندگی سالم</h2>
                            <p class="text wow fadeInUp" data-wow-delay="750ms">لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                                و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            <div class="link-box wow fadeInUp" data-wow-delay="1000ms">
                                <a href="department.html" class="theme-btn btn-style-two"><i>همین حالا نوبت
                                        بگیرید</i> <span class="arrow icon icon-arrow_right"></span></a>
                            </div>
                        </div>

                        <!-- Image Column -->

                        <div class="image">
                            <img src="images/main-slider/content-image-3.png" alt="" />
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Services Form Section -->
    <section class="services-form-section">
        <div class="image-layer" style="background-image:url(images/background/1.png)"></div>
        <div class="container ">

            <!-- Services Form -->
            <div class="services-form">

                <!--Contact Form-->
                <form method="post" action="contact.html">
                    <div class="row">

                        <!--Form Group-->
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="map-icon fas fa-map-marker-alt"></div>
                            <div class="location-icon icon-target"></div>
                            <select class="custom-select-box">
                                <option>انتخاب محدوده</option>
                                <option>محدوده یک</option>
                                <option>محدوده دو</option>
                                <option>محدوده سه</option>
                                <option>محدوده چهار</option>
                            </select>
                        </div>

                        <!--Form Group-->
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <select class="custom-select-box">
                                <option>انتخاب نوع سرویس درمانی</option>
                                <option>سرویس درمانی یک</option>
                                <option>سرویس درمانی دو</option>
                                <option>سرویس درمانی سه</option>
                                <option>سرویس درمانی چهار</option>
                            </select>
                        </div>

                        <!--Form Group-->
                        <div class="form-group button-group col-lg-4 col-md-12 col-sm-12">
                            <div class="left-curves"></div>
                            <div class="right-curves"></div>
                            <button class="theme-btn submit-btn" type="submit" name="submit-form">همین حالا خدمات درمانی خود را
                                انتخاب کنید</button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </section>
    <!-- End Services Form Section -->

    <!-- Featured Section -->
    <section class="featured-section">
        <div class="pattern-layer" style="background-image:url(images/background/pattern-1.png)"></div>
        <div class="container">
            <div class="row">

                <!-- Featured Block -->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-pill"></span>
                        </div>
                        <h3><a href="#"> پشتیبانی <br> تخصصی</a></h3>
                        <p>در این کلینیک خدمات پزشکی بسیاری در قسمت های مختلف با بیشترین امکانات دارد </p>
                    </div>
                </div>

                <!-- Featured Block -->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-diagnosis"></span>
                        </div>
                        <h3><a href="#">تشخیص و <br> بررسی</a></h3>
                        <p>پزشکان کلینیک با انجام آزمایشات مرتبط به راحتی نوع بیماری و درمان آن را تشخیص میدهند
                        </p>
                    </div>
                </div>

                <!-- Featured Block -->
                <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-1.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-medical1"></span>
                        </div>
                        <h3><a href="#">خدمات پزشکی و <br> جراحی</a></h3>
                        <p>پزشکی حوزه های وسیعی دارد و در هر حوزه متخصصین ما قادر به کار هستند</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Featured Section -->

    <!-- Fullwidth Section -->
    <section class="container-fluid">
        <div class="pattern-layer" style="background-image:url(images/background/pattern-2.png)"></div>
        <div class="outer-section">
            <div class="clearfix">

                <!-- Left Column -->
                <div class="left-column">
                    <div class="inner-column">
                        <div class="shadow-one paroller" style="background-image:url(images/icons/shadow-1.png)"
                             data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15"
                             data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">
                        </div>
                        <div class="shadow-two paroller" style="background-image:url(images/icons/shadow-2.png)"
                             data-paroller-factor="-0.15" data-paroller-factor-lg="-0.15" data-paroller-factor-md="-0.15"
                             data-paroller-factor-sm="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
                        </div>
                        <div class="shadow-three paroller" style="background-image:url(images/icons/shadow-3.png)"
                             data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15"
                             data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">
                        </div>
                        <div class="image">
                            <img src="images/resource/image-1.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column">
                    <div class="inner-column">
                        <h2>پزشکان بیماران را آزمایش می‌کند تا بتوانند بیماری را تشخیص دهند</h2>
                        <ul class="featured-list">
                            <li class="wow fadeInUp clearfix" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <span class="icon icon-brifecase-hospital2"></span>
                                <div class="content">
                                    <div class="title">مراقبت های ویژه</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp clearfix" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <span class="icon icon-heart1"></span>
                                <div class="content">
                                    <div class="title">پشتیبانی تخصصی سرویس درمانی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp clearfix" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <span class="icon icon-doctor"></span>
                                <div class="content">
                                    <div class="title">پزشکی و جراحی</div>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- End Fullwidth Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="team-pattern-layer" style="background-image:url(images/background/pattern-1.png)"></div>
        <div class="team-pattern-layer-two" style="background-image:url(images/background/pattern-5.png)"></div>
        <div class="container">

            <!-- Sec Title -->
            <div class="section-title text-center">
                <h2>آشنایی با متخصصین</h2>
                <p class="text">بیمارستان نقشی اساسی در خدمت به بیماران برای درمان و بازپروری دارد</p>
            </div>

            <div class="team-carousel owl-carousel owl-theme">

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">کامیار آزاد</a></h3>
                            <p class="designation">متخصص پوست</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">آبتین ستوده</a></h3>
                            <p class="designation">قلب و عروق</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">سپهر جم</a></h3>
                            <p class="designation">رادیولوژی</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">سینا آتشفروز</a></h3>
                            <p class="designation">بیهوشی</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">کامیار آزاد</a></h3>
                            <p class="designation">متخصص پوست</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">آبتین ستوده</a></h3>
                            <p class="designation">قلب و عروق</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">سپهر جم</a></h3>
                            <p class="designation">رادیولوژی</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">سینا آتشفروز</a></h3>
                            <p class="designation">بیهوشی</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">کامیار آزاد</a></h3>
                            <p class="designation">متخصص پوست</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">آبتین ستوده</a></h3>
                            <p class="designation">قلب و عروق</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">سپهر جم</a></h3>
                            <p class="designation">رادیولوژی</p>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt="" />
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <ul class="team-social-box">
                                        <li class="youtube"><a href="#" class="icon icon-youtube"></a><span
                                                class="social-name">یوتیوپ</span></li>
                                        <li class="linkedin"><a href="#" class="icon icon-linkedin"></a><span
                                                class="social-name">لینکدین</span></li>
                                        <li class="facebook"><a href="#" class="icon icon-facebook"></a><span
                                                class="social-name">فیسبوک</span></li>
                                        <li class="twitter"><a href="#" class="icon icon-twitter"></a><span
                                                class="social-name">توییتر</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="icon-box">
                                <span class="icon icon-heart1"></span>
                            </div>
                            <h3><a href="#">سینا آتشفروز</a></h3>
                            <p class="designation">بیهوشی</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Appointment Section -->
    <section class="appointment-section">
        <div class="pattern-layer" style="background-image:url(images/background/pattern-1.png)"></div>
        <div class="container">
            <div class="title-box">
                <h2> با دسترسی 24 ساعته به کمک همکاران اورژانس شما میتوانید به دیگران کمک کنید</h2>
            </div>
            <div class="inner-section">
                <div class="row">
                    <!-- Calender Column -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="calender-column">
                            <div class="inner-column">
                                <!-- Calender Title -->
                                <div class="calender-title">
                                    <div class="title">به پزشک نیاز دارید؟</div>
                                    <h3>نوبت <span class="theme_color">بگیرید</span></h3>
                                </div>

                                <div class="calender-carousel owl-carousel owl-theme">

                                    <!-- Calender Block -->
                                    <div class="calender-block">
                                        <div class="block-outer">
                                            <div class="inner-box">
                                                <!-- Days Boxed -->
                                                <div class="days-boxed">
                                                    <div class="clearfix">
                                                        <div class="day-date"><strong>شنبه</strong>10 مهر 1398</div>
                                                        <div class="day-date"><strong>یک شنبه</strong>11 مهر 1398</div>
                                                        <div class="day-date"><strong>دوشنبه</strong>12 مهر 1398</div>
                                                        <div class="day-date"><strong>سه شنبه</strong>13 مهر 1398</div>
                                                        <div class="day-date"><strong>چهارشنبه</strong>14 مهر 1398</div>
                                                    </div>
                                                </div>

                                                <!-- Time Boxed -->
                                                <div class="time-boxed">
                                                    <div class="clearfix">
                                                        <div class="time">08:30</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:00</div>
                                                    </div>
                                                </div>

                                                <!-- More Boxed -->
                                                <div class="more-boxed">
                                                    <div class="clearfix">
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Button Box -->
                                            <div class="button-box">
                                                <a href="#" class="theme-btn btn-style-transparent">انصراف<span
                                                        class="arrow icon icon-arrow_right"></span></a>
                                                <a href="#" class="theme-btn btn-style-three">همین حالا نوبت بگیرید
                                                    <span class="arrow icon-arrow_right"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Calender Block -->
                                    <div class="calender-block">
                                        <div class="block-outer">
                                            <div class="inner-box">
                                                <!-- Days Boxed -->
                                                <div class="days-boxed">
                                                    <div class="clearfix">
                                                        <div class="day-date"><strong>شنبه</strong>10 مهر 1398</div>
                                                        <div class="day-date"><strong>یک شنبه</strong>11 مهر 1398</div>
                                                        <div class="day-date"><strong>دوشنبه</strong>12 مهر 1398</div>
                                                        <div class="day-date"><strong>سه شنبه</strong>13 مهر 1398</div>
                                                        <div class="day-date"><strong>چهارشنبه</strong>14 مهر 1398</div>
                                                    </div>
                                                </div>

                                                <!-- Time Boxed -->
                                                <div class="time-boxed">
                                                    <div class="clearfix">
                                                        <div class="time">08:30</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:00</div>
                                                    </div>
                                                </div>

                                                <!-- More Boxed -->
                                                <div class="more-boxed">
                                                    <div class="clearfix">
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Button Box -->
                                            <div class="button-box">
                                                <a href="#" class="theme-btn btn-style-transparent">انصراف<span
                                                        class="arrow icon icon-arrow_right"></span></a>
                                                <a href="#" class="theme-btn btn-style-three">همین حالا نوبت بگیرید
                                                    <span class="arrow icon-arrow_right"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Calender Block -->
                                    <div class="calender-block">
                                        <div class="block-outer">
                                            <div class="inner-box">
                                                <!-- Days Boxed -->
                                                <div class="days-boxed">
                                                    <div class="clearfix">
                                                        <div class="day-date"><strong>شنبه</strong>10 مهر 1398</div>
                                                        <div class="day-date"><strong>یک شنبه</strong>11 مهر 1398</div>
                                                        <div class="day-date"><strong>دوشنبه</strong>12 مهر 1398</div>
                                                        <div class="day-date"><strong>سه شنبه</strong>13 مهر 1398</div>
                                                        <div class="day-date"><strong>چهارشنبه</strong>14 مهر 1398</div>
                                                    </div>
                                                </div>

                                                <!-- Time Boxed -->
                                                <div class="time-boxed">
                                                    <div class="clearfix">
                                                        <div class="time">08:30</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">08:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">09:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:30</div>
                                                        <div class="time">10:00</div>
                                                        <div class="time">10:00</div>
                                                    </div>
                                                </div>

                                                <!-- More Boxed -->
                                                <div class="more-boxed">
                                                    <div class="clearfix">
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                        <div class="more">بیشتر...</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Button Box -->
                                            <div class="button-box">
                                                <a href="#" class="theme-btn btn-style-transparent">انصراف<span
                                                        class="arrow icon icon-arrow_right"></span></a>
                                                <a href="#" class="theme-btn btn-style-three">همین حالا نوبت بگیرید
                                                    <span class="arrow icon icon-arrow_right"></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="form-column">
                            <div class="inner-column">
                                <h3>فرم را پر نمایید</h3>
                                <!-- Calender Form -->
                                <div class="calender-form">

                                    <!--Contact Form-->
                                    <form method="post" action="contact.html">

                                        <!--Form Group-->
                                        <div class="form-group">
                                            <label><span class="icon icon-doctor"></span>علت مراجعه</label>
                                            <select class="custom-select-box">
                                                <option>انتخاب نوع ویزیت</option>
                                                <option>نوع یک</option>
                                                <option>نوع دو</option>
                                                <option>نوع سه</option>
                                                <option>نوع چهار</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label><span class="icon flaticon-new-user"></span>نام خود را وارد نمایید</label>
                                            <input type="text" name="username" placeholder="نام و نام خانوادگی" required>
                                        </div>

                                        <div class="form-group">
                                            <label><span class="icon icon-envelope"></span> ایمیل</label>
                                            <input type="text" name="email" placeholder="ایمیل" required>
                                        </div>

                                        <div class="form-group">
                                            <label><span class="icon flaticon-phone-receiver"></span>شماره تماس</label>
                                            <input type="text" name="phone" placeholder="شماره تماس" required>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- Emergency Section -->
    <section class="emergency-section" style="background-image:url(images/background/3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- Content Box -->
                    <div class="content-box">
                        <div class="inner-box">
                            <h2><span class="icon-box flaticon-24-hours"></span><strong>خدمات پزشکی</strong>24 ساعته </h2>
                            <p class="text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. </p>
                            <p class="phone"><a href="tel:812-243-7969"><span
                                        class="icon-box icon-phone_call"></span>812-243-7969</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Emergency Section -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">

            <!-- Sec Title -->
            <div class="section-title text-center">
                <h2> امکانات ما در مدیزکو</h2>
                <p class="text">بیمارستان نقشی اساسی در خدمت به بیماران برای درمان و بازپروری دارد</p>
            </div>

            <div class="row">

                <!-- Featured Block -->
                <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-brifecase-hospital2"></span>
                        </div>
                        <h3><a href="#"> مراقبتهای ویژه </a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <!-- Featured Block -->
                <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-hospital-symbol"></span>
                        </div>
                        <h3><a href="#">کلینیک پزشکی آنلاین</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <!-- Featured Block -->
                <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-heart1"></span>
                        </div>
                        <h3><a href="#">آزمایشگاه</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <!-- Featured Block -->
                <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-ambulance"></span>
                        </div>
                        <h3><a href="#">ماشین آمبولانس</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <!-- Featured Block -->
                <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-capsule"></span>
                        </div>
                        <h3><a href="#">داروخانه</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

                <!-- Featured Block -->
                <div class="featured-block style-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url(images/resource/feature-2.jpg)"></div>
                        <div class="icon-box">
                            <span class="icon icon-book"></span>
                        </div>
                        <h3><a href="#">چکاپ</a></h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="image-layer" style="background-image:url(images/background/4.jpg)"></div>
        <div class="container">
            <div class="title-box">
                <h2>گالری کلینیک آنلاین مدیزکو</h2>
            </div>

            <div class="row">

                <!-- Project Block -->
                <div class="project-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/gallery/1.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon icon-heart1"></span>
                                        </div>
                                        <h3><a href="doctor-detail.html">کلینیک پزشکی آنلاین</a></h3>
                                        <a class="plus" href="images/gallery/1.jpg" data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/gallery/2.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon icon-heart1"></span>
                                        </div>
                                        <h3><a href="doctor-detail.html">کلینیک پزشکی آنلاین</a></h3>
                                        <a class="plus" href="images/gallery/2.jpg" data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/gallery/3.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon icon-heart1"></span>
                                        </div>
                                        <h3><a href="doctor-detail.html">کلینیک پزشکی آنلاین</a></h3>
                                        <a class="plus" href="images/gallery/3.jpg" data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/gallery/4.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon icon-heart1"></span>
                                        </div>
                                        <h3><a href="doctor-detail.html">کلینیک پزشکی آنلاین</a></h3>
                                        <a class="plus" href="images/gallery/4.jpg" data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/gallery/5.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon icon-heart1"></span>
                                        </div>
                                        <h3><a href="doctor-detail.html">کلینیک پزشکی آنلاین</a></h3>
                                        <a class="plus" href="images/gallery/5.jpg" data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <img src="images/gallery/6.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <div class="icon-box">
                                            <span class="icon icon-heart1"></span>
                                        </div>
                                        <h3><a href="doctor-detail.html">کلینیک پزشکی آنلاین</a></h3>
                                        <a class="plus" href="images/gallery/6.jpg" data-fancybox="gallery-1" data-caption=""><span
                                                class="flaticon-plus-symbol"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <!-- Button Box -->
            <div class="button-box text-center">
                <a href="gallery.html" class="theme-btn btn-style-three"><span class="arrow icon-chevron-left"></span> مشاهده
                    بیشتر </a>
            </div>

        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Events Section -->
    <section class="events-section">
        <div class="pattern-layer-two" style="background-image:url(images/background/pattern-5.png)"></div>
        <div class="container">
            <!-- Title Box -->
            <div class="title-box">
                <div class="clearfix">
                    <div class="pull-right">
                        <h2>رخدادهای اخیر</h2>
                    </div>
                    <div class="pull-left">
                        <a href="#" class="view-events">دیدن تمامی رخدادها <span class="arrow fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>

            <!-- Inner Container -->
            <div class="inner-container">
                <div class="pattern-layer-one" style="background-image:url(images/background/pattern-4.png)"></div>
                <div class="row">

                    <!-- Column -->
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">

                        <!-- Event Block Two -->
                        <div class="event-block-two">
                            <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content clearfix">
                                    <!-- Event Date -->
                                    <div class="event-date">
                                        <strong>26</strong>مهر
                                    </div>
                                    <ul class="event-list">
                                        <li><span class="icon icon-map-marker2"></span>سالن کنفرانس رز</li>
                                        <li><span class="icon icon-clock3"></span>از پنج عصر تا 9 شب</li>
                                    </ul>
                                    <h3><a href="appointment.html">متخصصین کم یا مهاجرت متخصصین؟</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Event Block Two -->
                        <div class="event-block-two">
                            <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content clearfix">
                                    <!-- Event Date -->
                                    <div class="event-date">
                                        <strong>28</strong>مهر
                                    </div>
                                    <ul class="event-list">
                                        <li><span class="icon icon-map-marker2"></span>سالن همایش رویال</li>
                                        <li><span class="icon icon-clock3"></span>از پنج عصر تا 9 شب</li>
                                    </ul>
                                    <h3><a href="appointment.html">راه های جدید تشخیص</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Event Block -->
                        <div class="event-block">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="upper-box clearfix">
                                    <!-- Event Date -->
                                    <div class="event-date">
                                        <strong>25</strong>مهر
                                    </div>
                                    <div class="image">
                                        <img src="images/resource/author-1.jpg" alt="" />
                                    </div>
                                    <ul class="event-list">
                                        <li><span class="icon icon-map-marker2"></span>برج آسمان، طبقه همکف</li>
                                        <li><span class="icon icon-clock3"></span>از پنج عصر تا 9 شب</li>
                                    </ul>
                                </div>
                                <h3><a href="appointment.html">ازریابی و بومی سازی تجهیزات جدید پزشکی</a></h3>
                                <a href="event-detail.html" class="theme-btn btn-style-four">شرکت در همایش<span
                                        class="arrow fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </section>
    <!-- End Events Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <!-- Sec Title -->
            <div class="section-title text-center">
                <h2>مراجعه کنندگان می گویند</h2>
            </div>

            <div class="testimonials-carousel owl-carousel owl-theme">

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="quote-icon icon-quote2"></div>
                            <p class="text">. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت
                                تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
                                موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <h3>کیمیا زارعی</h3>
                            <p class="designation">شهروند تهران</p>
                        </div>
                        <div class="image-box">
                            <img src="images/resource/author-2.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="quote-icon icon-quote2"></div>
                            <p class="text">. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت
                                تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
                                موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <h3>کیمیا زارعی</h3>
                            <p class="designation">شهروند تهران</p>
                        </div>
                        <div class="image-box">
                            <img src="images/resource/author-3.png" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content-box">
                            <div class="quote-icon icon-quote2"></div>
                            <p class="text">. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت
                                تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای
                                موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <h3>کیمیا زارعی</h3>
                            <p class="designation">شهروند تهران</p>
                        </div>
                        <div class="image-box">
                            <img src="images/resource/author-4.png" alt="" />
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="pattern-layer-one" style="background-image:url(images/background/pattern-6.png)"></div>
        <div class="pattern-layer-two" style="background-image:url(images/background/pattern-7.png)"></div>
        <div class="container">
            <!-- Sec Title -->
            <div class="section-title text-center">
                <h2>اخبار و مقالات</h2>
                <div class="text">. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به
                    پایان رسد </div>
            </div>
            <div class="news-carousel owl-carousel owl-theme">

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                            <div class="post-date"><strong>25</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">پزشکان با دیدن نتایج چکاپ بیماران ...</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                            <div class="post-date"><strong>26</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">مدت زمان بهبود نسبی بعد از عمل زیبایی</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                            <div class="post-date"><strong>28</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">نتایج مثبت مزوتراپی و روند آن در کلینیک</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                            <div class="post-date"><strong>25</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">پزشکان با دیدن نتایج چکاپ بیماران ...</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                            <div class="post-date"><strong>26</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">مدت زمان بهبود نسبی بعد از عمل زیبایی</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                            <div class="post-date"><strong>28</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">نتایج مثبت مزوتراپی و روند آن در کلینیک</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-1.jpg" alt="" /></a>
                            <div class="post-date"><strong>25</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">پزشکان با دیدن نتایج چکاپ بیماران ...</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-2.jpg" alt="" /></a>
                            <div class="post-date"><strong>26</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">مدت زمان بهبود نسبی بعد از عمل زیبایی</a></h3>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="blog-detail.html"><img src="images/resource/news-3.jpg" alt="" /></a>
                            <div class="post-date"><strong>28</strong>مهر</div>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><a href="blog-detail.html"><span class="icon icon-user"></span>تمنا آزاده</a>
                                </li>
                                <li><a href="blog-detail.html"><span class="icon icon-folders"></span>جراحی</a>
                                </li>
                            </ul>
                            <h3><a href="blog-detail.html">نتایج مثبت مزوتراپی و روند آن در کلینیک</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Sponsors Section-->

    <!-- Fullwidth Section -->
    <section class="fullwidth-section-two">
        <div class="outer-container">
            <div class="clearfix">

                <!-- Left Column -->
                <div class="left-column" style="background-image:url(images/background/5.jpg)">
                    <div class="inner-column">
                        <h2>اشتراک برای مشاهده <br> اخبار جدید</h2>
                        <!-- Subscribe Form -->
                        <div class="subscribe-form">
                            <form method="post" action="contact.html">
                                <div class="form-group">
                                    <input type="email" name="email" value="" placeholder="ایمیل" required>
                                    <button type="submit" class="theme-btn subscribe-btn"><span class="icon icon-envelope3"></span>
                                        اشتراک</button>
                                </div>
                            </form>
                        </div>
                        <!-- Text -->
                        <p class="text">***بدون اسپم!</p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column" style="background-image:url(images/background/6.jpg)">
                    <div class="inner-column">
                        <!-- Phone -->
                        <a href="tel:+1-812-243-7969" class="phone">
                            <span class="icon-box flaticon-24-hours"></span>
                            <span class="title">کلینیک آنلاین پزشکی</span><strong>+1-812-243-7969</strong>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Fullwidth Section Section -->

@endsection
