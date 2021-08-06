


// Sticky header

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    $("#sticky").slideDown(150)
  } else {
    $("#sticky").slideUp(150)
    
  }
  prevScrollpos = currentScrollPos;
}



// Owl carousel


  $('.owl-carousel').owlCarousel({
    items: 1,
    center: true,
    dots: true,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true
  });
