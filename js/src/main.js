
var Menu = document.querySelector('.menu');
var Lines = document.querySelector('.hamburger');
var stickyMenu = document.querySelector('#burger-menu2');
var stickyLines = document.querySelector('#burger-anim2');
var mainBody = document.getElementById('main-body');
var sidebarOverlay = document.getElementById('overlay');
var sidebarOverlay2 = document.getElementById('overlay2');
var sidebar = document.getElementById('sidebar');



if (Modernizr.hiddenscroll === true){
  $('#sticky').css("width", "100%");
}else {
  $('#sticky').css("width", mainBody.clientWidth);
}

$( window ).resize(function() {
  $('#sticky').css("width", mainBody.clientWidth);
});


// Sticky header



var prevScrollpos = 0;
mainBody.onscroll = function() {
  var currentScrollPos = $(this).scrollTop();
  if (currentScrollPos> prevScrollpos && currentScrollPos >= 208 ) {
    
    $("#sticky").css({ top: '-208px' });
    
  } else {
    $("#sticky").css({ top: '0px' });
    
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


  //Cookie popup 


var popup = document.getElementById('cookie-container');
var cookieAccept = document.getElementById('cookie-accept');

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

if (readCookie("accepted") === "" || readCookie("accepted") === null) {

  popup.classList.add('shown');
  document.body.classList.add('fixed-position');

  cookieAccept.addEventListener('click', function(e) {
    createCookie("accepted","true",30);
    popup.classList.remove('shown');
    console.log("success");
  });

}

// Burger animation with sidebar





Menu.addEventListener('click', function(e) {
  
    Lines.classList.toggle('is-active');

    mainBody.classList.toggle('sidebar-shown');
    
    mainBody.classList.toggle('slide-in');
    
    sidebarOverlay.classList.toggle('shown');
    
    sidebarOverlay.classList.toggle('slide-in');
    
    
    sidebar.classList.toggle('shown');
   
    sidebar.classList.toggle('slide-in');
   
    
    

  });
    

stickyMenu.addEventListener('click', function(e) {
 
    stickyLines.classList.toggle('is-active');

    mainBody.classList.toggle('sidebar-shown');
 
      mainBody.classList.toggle('slide-in');
  

   

    sidebarOverlay2.classList.toggle('shown');
   
      sidebarOverlay2.classList.toggle('slide-in');
   
    

    sidebar.classList.toggle('shown');

      sidebar.classList.toggle('slide-in');

    
    

  } );

sidebarOverlay.addEventListener('click', function(e) {
  if (Lines.classList.contains('is-active')) {
    Lines.classList.toggle('is-active');
    
    stickyLines.classList.toggle('is-active');

    mainBody.classList.toggle('slide-in');
    
      mainBody.classList.toggle('sidebar-shown');
 

    sidebarOverlay.classList.toggle('slide-in');
  
      sidebarOverlay.classList.toggle('shown');

    
 

    sidebar.classList.toggle('slide-in');
   
      sidebar.classList.toggle('shown');


  } 
});

sidebarOverlay2.addEventListener('click', function(e) {
  if (stickyLines.classList.contains('is-active')) {
    Lines.classList.toggle('is-active');
    stickyLines.classList.toggle('is-active');
    mainBody.classList.toggle('slide-in');
   
      mainBody.classList.toggle('sidebar-shown');
   

    
    sidebarOverlay2.classList.toggle('slide-in');
   
      sidebarOverlay2.classList.toggle('shown');
    

    sidebar.classList.toggle('slide-in');

      sidebar.classList.toggle('shown');
   

  } 
});

//Drop down contact

let dropdown = document.querySelector('.dropdown-link')
let hidden = document.querySelector('.hidden_text')



dropdown.addEventListener('click', () => {
    if (clicked) {
        hidden.classList.toggle('show_hidden');
    }
    ;
})
