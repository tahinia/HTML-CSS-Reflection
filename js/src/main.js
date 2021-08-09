var Menu = document.getElementById('burger-menu');
var Lines = document.getElementById('burger-anim');
var stickyMenu = document.getElementById('burger-menu2');
var stickyLines = document.getElementById('burger-anim2');


// Sticky header

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos && prevScrollpos >= 208) {
    $("#top-header").removeClass("main-header");
    $("#top-header").addClass("sticky");
  } else {
    
    $("#top-header").removeClass("sticky");
    $("#top-header").addClass("main-header");
    
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


  //cookie popup 


var popup = document.getElementById('cookie-container');
var cookieSettings = document.getElementById('cookie-settings');
var cookieAccept = document.getElementById('cookie-accept');

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

if (getCookie("accepted") === "" || getCookie("accepted") === null) {

  popup.classList.add('shown');
  document.body.classList.add('fixed-position');

  cookieAccept.addEventListener('click', function(e) {
    setCookie("accepted","true",30);
    popup.classList.remove('shown');
    console.log("worked");
  });

}

// Burger animation with sidebar soon



var Menu = document.getElementById('burger-menu');
var Lines = document.getElementById('burger-anim');
var stickyMenu = document.getElementById('burger-menu2');
var stickyLines = document.getElementById('burger-anim2');


Menu.addEventListener('click', function(e) {
  if (!Lines.classList.contains('is-active')) {
    Lines.classList.add('is-active');
    console.log(e);

  } else {
    Lines.classList.remove('is-active');
    console.log(e);
    

  }
});

function stickyburger () { 
stickyMenu.addEventListener("click", function(e) {
  if (!stickyLines.classList.contains('is-active')) {
    stickyLines.classList.add('is-active');
    console.log(e);

  } else {
    stickyLines.classList.remove('is-active');
    console.log(e);
    

  }
});
}
