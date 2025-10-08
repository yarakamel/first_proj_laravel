$(window).on('load', function() {
  var $owl = $('.weekly2-news-active');
  var isRTL = $('html').attr('dir') === 'rtl';

  $owl.owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    autoplay: false,
    rtl: isRTL,
    responsive: {
      0: { items: 1 },
      768: { items: 2 },
      992: { items: 3 },
      1200: { items: 4 }
    }
  });
});
