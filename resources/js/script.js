
jQuery(document).ready(function ($) {
  $(".loop").owlCarousel({
    center: true,
    items: 2,
    loop: true,
    margin: 50,
    responsive: {
      0: {
        items: 1,
      },

      480: {
        items: 1,
      },

      1000: {
        items: 2,
      },
    },
  });
  
  var owl = $('.owl-carousel');
  owl.owlCarousel();
  $('#customNextBtn').click(function() {
      owl.trigger('next.owl.carousel');
  })
  $('#customPrevBtn').click(function() {
      owl.trigger('prev.owl.carousel', [300]);
  })
});
