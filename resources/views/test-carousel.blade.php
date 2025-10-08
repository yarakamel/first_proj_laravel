<!-- داخل ملف Blade أو HTML -->

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>سلايدر الأخبار</title>

    <!-- ✅ ملفات Slick من CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>


    <!-- ✅ Bootstrap (لو التصميم عندك يستخدمه) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .slick-slide img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }
        .slick-prev:before, .slick-next:before {
            color: black;
        }
    </style>
</head>
<body>

<div class="tab-content" id="nav-tabContent">
    <!-- تبويب واحد كمثال -->
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

        <!-- ✅ هذا هو السلايدر -->
        <div class="slider-news mt-4">

            <div class="whats-news-single mb-40">
                <div class="whates-img">
                    <img src="https://picsum.photos/id/1015/900/400" alt="صورة 1">
                </div>
                <div class="whates-caption text-center mt-2">
                    <h4>الصحة داخل مخيمات النزوح</h4>
                    <span>01-10-2025</span>
                </div>
            </div>

            <div class="whats-news-single mb-40">
                <div class="whates-img">
                    <img src="https://picsum.photos/id/1016/900/400" alt="صورة 2">
                </div>
                <div class="whates-caption text-center mt-2">
                    <h4>افتتاح مركز صحي جديد</h4>
                    <span>05-10-2025</span>
                </div>
            </div>

            <div class="whats-news-single mb-40">
                <div class="whates-img">
                    <img src="https://picsum.photos/id/1020/900/400" alt="صورة 3">
                </div>
                <div class="whates-caption text-center mt-2">
                    <h4>تحسين خدمات النظافة</h4>
                    <span>07-10-2025</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ✅ jQuery أولاً -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- ✅ بعده slick -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
$(document).ready(function() {
    // تفعيل السلايدر
    $('.slider-news').slick({
        rtl: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 4000
    });
});
</script>

</body>
</html>
