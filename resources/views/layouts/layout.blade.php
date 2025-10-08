
<html class="no-js" lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>الموقع الرسمي للجنة المصرية</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logoo.png">

    <!-- CSS here -->
    <!--link rel="stylesheet" href="assets/css/bootstrap.min.css"-->
    <link rel="stylesheet" href="assets/css/rtl/bootstrap-rtl.min.css">

    <!--link rel="stylesheet" href="assets/css/ticker-style.css"-->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!--link rel="stylesheet" href="assets/css/animate.min.css"-->
    <!--link rel="stylesheet" href="assets/css/magnific-popup.css"-->
    <!--link rel="stylesheet" href="assets/css/fontawesome-all.min.css"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--link rel="stylesheet" href="assets/css/nice-select.css"-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<!-- Preloader Start -->
<!--div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logoo.png" alt="">
            </div>
        </div>
    </div>
</div-->
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-sm-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li class="title"><i class="fa fa-envelope"></i>  تواصل معنا  </li>
                                    <li>info@egycom.org</li>
                                    <li> +880166 253 232</li>

                                </ul>
                            </div>
                            <div class="header-info-right">

                                    <a href="/login" target="_blank"><span class="fa-solid fa-right-to-bracket"></span> تسجيل دخول </a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logoo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right">
                                <img src="assets/img/gallery/header_card.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">الرئيسية</a></li>
                                        <li><a href="{{ url('/#about') }}" class="scroll-link" data-target="#about">من نحن</a></li>

                                        <li><a href="{{ url('/#LastNews') }}" class="scroll-link" data-target="#LastNews">آخر الأخبار</a></li>

                                        <li><a href="{{ url('/#contact') }}" class="scroll-link" data-target="#contact">تواصل معنا</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="header-right f-right d-none d-lg-block">
                                <!-- Heder social -->
                                <ul class="header-social">
                                    <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                                <!-- Search Nav -->

                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>

           @yield('content')


</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">نعمل من أجل دعم الأسر المتعففة وتقديم المساعدات الإنسانية والاجتماعية عبر مشروعات تنموية تهدف إلى تحسين جودة الحياة في المجتمع المصري.</p>
                                        <p class="info2">جمهورية مصر العربية</p>
                                        <p class="info2">البريد الإلكتروني : info@egycom.org</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>روابط سريعة</h4>
                            </div>
                            <!-- Popular post -->
                            <div style="align-content: center" class="whats-right-single mb-20">

                                <div class="whats-right-cap">
                                    <h4><a href="/">الرئيسية</a></h4>

                                </div>
                            </div>
                                 <div class="whats-right-single mb-20">
                                <div class="whats-right-cap">
                                    <h4><a href="{{ url('/#LastNews') }}" class="scroll-link" data-target="#LastNews">آخر الأخبار</a></h4>
                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">

                                <div class="whats-right-cap">
                                    <h4><a href="{{ url('/#about') }}" class="scroll-link" data-target="#about">من نحن</a></h4>
                                </div>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">

                                <div class="whats-right-cap">
                                    <h4><a href="{{ url('/#contact') }}" class="scroll-link" data-target="#contact">تواصل معنا</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>تواصل إجتماعي</h4>
                            </div>
                            <!-- Popular post -->
                        <div class="social-icons">
  <a href="https://facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
  <a href="https://twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
  <a href="https://instagram.com" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
  <a href="https://youtube.com" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    حقوق النشر محفوظة –  اللجنة المصرية
    &copy;<script>document.write(new Date().getFullYear());</script>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>



<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!--script src="./assets/js/bootstrap.min.js"></script-->
    <script src="assets/js/rtl/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <!--script src="assets/js/gijgo.min.js"></script-->
    <!-- One Page, Animated-HeadLin -->
    <script src="assets/js/wow.min.js"></script>
    <!--script src="assets/js/animated.headline.js"></script-->
    <!--script src="assets/js/jquery.magnific-popup.js"></script-->
    <!-- Scrollup, nice-select, sticky -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!--script src="./assets/js/jquery.nice-select.min.js"></script-->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- contact js -->
    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
@yield('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".scroll-link");
    const currentPath = window.location.pathname;
    const header = document.querySelector(".header-bottom"); // لو عندك class أو id مختلف للهيدر عدليه
    const headerHeight = header ? header.offsetHeight : 0;

    links.forEach(link => {
        link.addEventListener("click", function (e) {
            const target = this.getAttribute("data-target");
            const homePath = "{{ url('/') }}"; // الصفحة الرئيسية

            if (currentPath === "/" || currentPath === "{{ parse_url(url('/'), PHP_URL_PATH) }}") {
                // المستخدم داخل الصفحة الرئيسية ✅
                e.preventDefault();
                const section = document.querySelector(target);
                if (section) {
                    const topPos = section.offsetTop - headerHeight; // ← خصم ارتفاع الهيدر
                    window.scrollTo({
                        top: topPos,
                        behavior: "smooth"
                    });
                }
            }
            // المستخدم في صفحة ثانية → ننتقل عادي إلى الرئيسية
        });
    });
});
</script>
</body>
</html>

