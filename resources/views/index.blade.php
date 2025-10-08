
@extends('layouts.layout')
@section('content')
    <!-- Trending Area Start -->
    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="row">
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">

                                        <img src="assets/img/gallery/coveregy.jpg" width="750" height="645" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="10ms">مساعدات</span>
                                            <h2><a href="/about" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">تسليم مساعدات عينية لمخيم رقم 8</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="10ms">تم النشر بتاريخ : 20-09-2025</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                            <!-- Trending Top -->
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/gallery/Cover_0.jpg" width="381" height="380" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgb">تعليم</span>
                                            <h2><a href="latest_news.html">مخيمات تعليمية</a></h2>
                                            <p>تم النشر بتاريخ 20-09-2025</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/gallery/Cover_0.jpg" width="381" height="226" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgg">صحة </span>
                                            <h2><a href="latest_news.html">وحدات صحية</a></h2>
                                            <p>تم النشر بتاريخ 19-09-2025</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-40 pb-20 gray-bg" id="LastNews">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h4>آخر الأخبار</h4>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-9">
                            <div class="properties__button">
                                <!--Nav Button  -->
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" href="/AllNews" role="tab" aria-controls="nav-home" aria-selected="true">عرض الجميع</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="whats-news-single mb-40 mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="latest_news.html">الصحة داخل مخيمات النزوح</a></h4>
                                                    <span>تم النشر بتاريخ 01-10-2025</span>
                                                    <p>تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">التعليم</span>
                                                            <h4><a href="latest_news.html">التعليم في مخيمات النزوح: أمل الاستقرار وسط الظروف الصعبة</a></h4>
                                                            <p>30-09-2025</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">التعليم</span>
                                                            <h4><a href="latest_news.html">التعليم في مخيمات النزوح: أمل الاستقرار وسط الظروف الصعبة</a></h4>
                                                            <p>30-09-2025</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">التعليم</span>
                                                            <h4><a href="latest_news.html">التعليم في مخيمات النزوح: أمل الاستقرار وسط الظروف الصعبة</a></h4>
                                                            <p>30-09-2025</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">التعليم</span>
                                                            <h4><a href="latest_news.html">التعليم في مخيمات النزوح: أمل الاستقرار وسط الظروف الصعبة</a></h4>
                                                            <p>30-09-2025</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card two -->

                            </div>
                        <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <!-- Banner -->

                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>مشترك</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>مشترك</p>
                                </div>
                            </div>
                                <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>مشترك</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>مشترك</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
                        <!-- Section Tittle -->
                        <div class="small-tittle mb-20">
                            <h4>المخيمات</h4>
                        </div>
                        <!-- Details -->
                        <div class="most-recent mb-40">

                            <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                                        <!-- Left Details Caption -->

                                        <!-- Right single caption -->

                                            <div class="row camps-list">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/post/post_1.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">مخيم 1</span>
                                                            <p>خيم، كرافانات (بيوت جاهزة صغيرة)، أو وحدات إسمنتية مؤقتة</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/post/post_2.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">مخيم 2</span>
                                                            <p>خيم، كرافانات (بيوت جاهزة صغيرة)، أو وحدات إسمنتية مؤقتة</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/post/post_3.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">مخيم 3</span>
                                                            <p>خيم، كرافانات (بيوت جاهزة صغيرة)، أو وحدات إسمنتية مؤقتة</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/post/post_4.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">مخيم 4</span>
                                                            <p>خيم، كرافانات (بيوت جاهزة صغيرة)، أو وحدات إسمنتية مؤقتة</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                </div>
                                <!-- Card two -->

                            </div>
                        <!-- End Nav Card -->
                        </div>
                    </div>



                        </div>
                        <!-- Single -->

                    </div>
                </div>
            </div>
        </div>
    </section>
      <div class="weekly2-news-area pt-40 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->

                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="small-tittle mb-30">
                                     <h4><i class="fab fa-youtube"></i> قناتنا على يوتيوب </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly2-news-active d-flex">
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">

                                             <iframe style="height: 214;width: 325;border-radius:10px" src="https://www.youtube-nocookie.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>

                                            </div>
                                            <div class="weekly2-caption">
                                                <h6><a href="#">اللجنة المصرية فى غزة تجهز مخيم جديد للنازحين وسط القطاع
</a></h6>

                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                             <iframe style="height: 214;width: 325;border-radius:10px" src="https://www.youtube-nocookie.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <div class="weekly2-caption">
                                                <h6><a href="#">للجنة المصرية فى غزة تجهز مخيم جديد للنازحين وسط القطاع</a></h6>

                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                             <iframe style="height: 214;width: 325;border-radius:10px" src="https://www.youtube-nocookie.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <div class="weekly2-caption">
                                                <h6><a href="#">للجنة المصرية فى غزة تجهز مخيم جديد للنازحين وسط القطاع</a></h6>

                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                             <iframe style="height: 214;width: 325;border-radius:10px" src="https://www.youtube-nocookie.com/embed/tgbNymZ7vqY" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                            <div class="weekly2-caption">
                                                <h6><a href="#">للجنة المصرية فى غزة تجهز مخيم جديد للنازحين وسط القطاع</a></h6>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->

    <!-- End Weekly-News -->
    <!--  Recent Articles start -->
<section class="whats-news-area pt-40 pb-20 gray-bg" id="about">

    <div class="whats-news-wrapper">

      <div class="row d-flex align-items-stretch">
        <!-- من نحن -->
        <div class="col-md-6 col-12 border-md-end" style="border-left:1px solid #ccc;">
          <div class="section-tittle mb-30 px-4">
            <h4><i class="fa fa-users"></i> من نحن </h4>
            <p style="font-size:17px; line-height:1.8;">
              نحن اللجنة المصرية التي تسعى إلى تقديم الدعم والمساعدة للمحتاجين
              في مختلف أنحاء البلاد، من خلال برامج إنسانية وتنموية مستدامة.
                  نحن اللجنة المصرية التي تسعى إلى تقديم الدعم والمساعدة للمحتاجين
              في مختلف أنحاء البلاد، من خلال برامج إنسانية وتنموية مستدامة.
                  نحن اللجنة المصرية التي تسعى إلى تقديم الدعم والمساعدة للمحتاجين
              في مختلف أنحاء البلاد، من خلال برامج إنسانية وتنموية مستدامة.
            </p>
          </div>
        </div>

        <!-- مهمتنا -->
        <div class="col-md-6 col-12">
          <div class="section-tittle mb-30 px-4">
            <h4><i class="fa fa-tasks"></i> مهمتنا </h4>
            <p style="font-size:17px; line-height:1.8;">
              مهمتنا هي تعزيز روح التضامن الاجتماعي عبر مشاريع
              تهدف إلى تمكين الأفراد وتحسين جودة حياتهم
              من خلال التعليم، والصحة، والتنمية المجتمعية.
              نحن في اللجنة المصرية للإغاثة والمساعدات الإنسانية نسعى إلى تقديم الدعم العاجل والضروري للنازحين في قطاع غزة، من خلال توفير الغذاء والدواء والمساعدات الأساسية. رسالتنا إنسانية خالصة، هدفها تخفيف المعاناة ودعم صمود أهلنا في ظل الظروف الاستثنائية التي يمرون بها.
            </p>
          </div>
        </div>
      </div>

    </div>

</section>

<section class="whats-news-area pt-40 pb-20 gray-bg" id="contact">
  <div class="container">
    <div class="row">

      <!-- معلومات التواصل -->


      <!-- نموذج التواصل -->
      <div class="col-lg-12">
        <div class="whats-news-wrapper">
             <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h4><i class="fa-solid fa-message"></i> تواصل معنا </h4>
                            </div>
                        </div>
                    </div>
          <form id="contactForm">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label fw-semibold">الاسم الكامل</label>
                <input type="text" class="form-control" placeholder="اكتب اسمك الكامل">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">البريد الإلكتروني</label>
                <input type="email" class="form-control" placeholder="example@email.com">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">رقم الجوال</label>
                <input type="text" class="form-control" placeholder="+960..">
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">نوع الرسالة</label>
                <select class="form-select">
                  <option>استفسار عام</option>
                  <option>شكوى</option>
                  <option>مقترح</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label fw-semibold">ملاحظاتك</label>
                <textarea class="form-control" rows="4" placeholder="اكتب ملاحظاتك هنا..."></textarea>
              </div>
              <div class="col-12 text-center mt-3">
                <button type="submit" class="btn btn-primary rounded-pill ">
                  <i class="fa fa-paper-plane me-2"></i> إرسال
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection
@section('scripts')
<script>
$('.camps-list').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  vertical: true,
  verticalSwiping: true,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: false,
  dots: false,
  infinite: true,
});
</script>
@endsection
