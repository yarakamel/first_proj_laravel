@extends('layouts.layout')

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<style>
/* الصندوق الكامل */
.news-card {
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  margin-bottom: 30px;
}

/* السلايدر */
.mySwiper {
  width: 100%;
  height: 400px;
}

.mySwiper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* النص تحت السلايدر */
.news-info {
  padding: 25px;
  direction: rtl;
}

.news-info h4 {
  font-size: 22px;
  color: #222;
  margin-bottom: 10px;
}

.news-info p {
  color: #555;
  line-height: 1.7;
}

/* الأسهم */
.swiper-button-next,
.swiper-button-prev {
  background: #fff;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
  color: #c70000;
  transition: 0.3s;
}
.swiper-button-next:hover,
.swiper-button-prev:hover {
  background: #c70000;
  color: #fff;
  transform: scale(1.1);
}
.swiper-button-next::after,
.swiper-button-prev::after {
  font-size: 18px;
  font-weight: bold;
}
</style>

@section('content')

<section class="whats-news-area pt-50 pb-20 gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <div class="news-card">
          <!-- ✅ السلايدر -->
          <div class="swiper mySwiper" dir="rtl">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="assets/img/trending/trending_top.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/trending/trending_top4.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="assets/img/trending/trending_top.jpg" alt="">
              </div>
            </div>

            <!-- الأسهم -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>

          <!-- ✅ النص -->
          <div class="news-info text-right">
            <h4>الصحة داخل مخيمات النزوح</h4>
            <span class="text-muted d-block mb-2">تم النشر بتاريخ 01-10-2025</span>
            <p>
              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.

              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.

              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.

              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.

              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.

              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.

              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.

              تحديات الرعاية الصحية في مخيمات النزوح: بين قلة الإمكانيات وتزايد الاحتياجات.
              يعاني السكان من نقص الخدمات الطبية والمستلزمات الأساسية،
              مما يزيد الضغط على الكوادر الصحية والمنظمات الإنسانية العاملة في الميدان.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

    <div class="weekly2-news-area pb-30 gray-bg">
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
                                     <h4>آخر الأخبار</h4>
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

                                                    <img src="assets/img/trending/trending_top.jpg" alt="">

                                            </div>
                                            <div class="weekly2-caption">
                                                <h6><a href="#">اللجنة المصرية فى غزة تجهز مخيم جديد للنازحين وسط القطاع
</a></h6>

                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                    <img src="assets/img/trending/trending_top.jpg" alt="">
                                            </div>
                                            <div class="weekly2-caption">
                                                <h6><a href="#">للجنة المصرية فى غزة تجهز مخيم جديد للنازحين وسط القطاع</a></h6>

                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                    <img src="assets/img/trending/trending_top.jpg" alt="">
                                            </div>
                                            <div class="weekly2-caption">
                                                <h6><a href="#">للجنة المصرية فى غزة تجهز مخيم جديد للنازحين وسط القطاع</a></h6>

                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                    <img src="assets/img/trending/trending_top.jpg" alt="">
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

@endsection
@section('scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".mySwiper", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
</script>

@endsection
