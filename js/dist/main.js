"use strict";

var Menu = document.querySelector('.menu');
var Lines = document.querySelector('.hamburger');
var stickyMenu = document.querySelector('#burger-menu2');
var stickyLines = document.querySelector('#burger-anim2');
var mainBody = document.getElementById('main-body');
var sidebarOverlay = document.getElementById('overlay');
var sidebarOverlay2 = document.getElementById('overlay2');
var sidebar = document.getElementById('sidebar'); // Sticky header

var prevScrollpos = 0;

mainBody.onscroll = function () {
  var currentScrollPos = $(this).scrollTop();

  if (currentScrollPos > prevScrollpos && currentScrollPos >= 208) {
    $("#sticky").css({
      top: '-208px'
    });
  } else {
    $("#sticky").css({
      top: '0px'
    });
  }

  prevScrollpos = currentScrollPos;
}; // Owl carousel


$('.owl-carousel').owlCarousel({
  items: 1,
  center: true,
  dots: true,
  loop: true,
  autoplay: true,
  autoplayHoverPause: true
}); //cookie popup 

var popup = document.getElementById('cookie-container');
var cookieSettings = document.getElementById('cookie-settings');
var cookieAccept = document.getElementById('cookie-accept');

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  var expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');

  for (var i = 0; i < ca.length; i++) {
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
  cookieAccept.addEventListener('click', function (e) {
    setCookie("accepted", "true", 30);
    popup.classList.remove('shown');
    console.log("worked");
  });
} // Burger animation with sidebar


Menu.addEventListener('click', function (e) {
  if (!Lines.classList.contains('is-active')) {
    Lines.classList.add('is-active');
    mainBody.classList.add('sidebar-shown');
    setTimeout(function () {
      mainBody.classList.add('slide-in');
    }, 5);
    sidebarOverlay.classList.add('shown');
    setTimeout(function () {
      sidebarOverlay.classList.add('slide-in');
    }, 1);
    sidebar.classList.add('shown');
    setTimeout(function () {
      sidebar.classList.add('slide-in');
    }, 1);
  } else {
    Lines.classList.remove('is-active');
    mainBody.classList.remove('sidebar-shown');
    setTimeout(function () {
      mainBody.classList.remove('slide-in');
    }, 300);
    sidebarOverlay.classList.remove('shown');
    setTimeout(function () {
      sidebarOverlay.classList.remove('slide-in');
    }, 300);
    sidebar.classList.remove('slide-in');
    setTimeout(function () {
      sidebar.classList.remove('shown');
    }, 300);
  }
});
stickyMenu.addEventListener('click', function (e) {
  if (!stickyLines.classList.contains('is-active')) {
    stickyLines.classList.add('is-active');
    mainBody.classList.add('sidebar-shown');
    setTimeout(function () {
      mainBody.classList.add('slide-in');
    }, 5);
    sidebarOverlay2.classList.add('shown');
    setTimeout(function () {
      sidebarOverlay2.classList.add('slide-in');
    }, 1);
    sidebar.classList.add('shown');
    setTimeout(function () {
      sidebar.classList.add('slide-in');
    }, 1);
  } else {
    stickyLines.classList.remove('is-active');
    mainBody.classList.remove('sidebar-shown');
    setTimeout(function () {
      mainBody.classList.remove('slide-in');
    }, 300);
    sidebarOverlay2.classList.remove('shown');
    setTimeout(function () {
      sidebarOverlay2.classList.remove('slide-in');
    }, 300);
    sidebar.classList.remove('slide-in');
    setTimeout(function () {
      sidebar.classList.remove('shown');
    }, 300);
  }
});
sidebarOverlay.addEventListener('click', function (e) {
  if (Lines.classList.contains('is-active')) {
    Lines.classList.remove('is-active');
    stickyLines.classList.remove('is-active');
    mainBody.classList.remove('slide-in');
    setTimeout(function () {
      mainBody.classList.remove('sidebar-shown');
    }, 300);
    sidebarOverlay.classList.remove('slide-in');
    setTimeout(function () {
      sidebarOverlay.classList.remove('shown');
    }, 300);
    sidebarOverlay2.classList.remove('slide-in');
    setTimeout(function () {
      sidebarOverlay2.classList.remove('shown');
    }, 300);
    sidebar.classList.remove('slide-in');
    setTimeout(function () {
      sidebar.classList.remove('shown');
    }, 300);
  }
});
sidebarOverlay2.addEventListener('click', function (e) {
  if (stickyLines.classList.contains('is-active')) {
    Lines.classList.remove('is-active');
    stickyLines.classList.remove('is-active');
    mainBody.classList.remove('slide-in');
    setTimeout(function () {
      mainBody.classList.remove('sidebar-shown');
    }, 300);
    sidebarOverlay.classList.remove('slide-in');
    setTimeout(function () {
      sidebarOverlay.classList.remove('shown');
    }, 300);
    sidebarOverlay2.classList.remove('slide-in');
    setTimeout(function () {
      sidebarOverlay2.classList.remove('shown');
    }, 300);
    sidebar.classList.remove('slide-in');
    setTimeout(function () {
      sidebar.classList.remove('shown');
    }, 300);
  }
});