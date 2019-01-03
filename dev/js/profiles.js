window.onload = function($) {
  "use strict"; // Start of use strict
  var navbar;
setTimeout(function () {
  resizeTheDivs('custom-box');
  navbar = calNavbarHeight();
}, 10000);
navbarHeight();

//CAROUSEL SERVICE PAGE
$('.carousel').carousel({
  interval: 2000
});


//HOMEPAGE BOX RESIZER

function resizeTheDivs(tag){
  // first get the tags to adjust
  var $tags = $('.' + tag);
  var $new_height = 0;
  // find out which one is largest
  $('.' + tag).each(function(){
      $(this).removeAttr('style');
      $(this).height() > $new_height ? $new_height = $(this).height() : null;
  });
  // make all others that height
  $tags.height($new_height);
  // I console.log($new_height) here sometimes
}

//On Screen Change

$(window).resize(function() {
  clearTimeout(window.resizedFinished);
  resizeTheDivs('custom-box');
  window.resizedFinished = setTimeout(function(){
      resizeTheDivs('custom-box');
  }, 250);
  setTimeout(function(){
    navbarHeight();
}, 5000);
  callLogoToggle;
});


//Calculate Navbar Height
function calNavbarHeight(){
  var navbar =  $('.navbar').height();
  return navbar;
}

//Check Navbar Height
function navbarHeight(){
  var navbar = calNavbarHeight();
  if($(window).width() >= 992)
  {
    $('.head-container').css('padding-top', navbar * 1.2);
    $('.head-container').css('padding-bottom', navbar / 3);
  }else{
    if (window.innerHeight > window.innerWidth) {
        $('.head-container').css('padding-top', navbar * 1.5);
        $('.head-container').css('padding-bottom', navbar / 3);
     } else {
        $('.head-container').css('padding-top', navbar * 0.5);
        $('.head-container').css('padding-bottom', navbar / 3);
     }
  }
}


//Contact Us iFrame Embedding

var URLs = [
  'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14431.030975297646!2d55.379030473880206!3d25.27873359474208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c37b5f3a8a7%3A0x2a942215359d5faf!2sAl+Zarouni+Building+Materials+Trading!5e0!3m2!1sen!2sae!4v1524136130037',
  'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.5317121620787!2d55.4375311145764!3d25.286333834284537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5efa3bb9067d%3A0x6fea25a4ff6f94a3!2sProfiles+RHF!5e0!3m2!1sen!2sae!4v1524127388963'
];

function loadIframeSets(){ 

  var frameWindow = document.getElementById('iframeGoogleMap').contentWindow;

  if(URLs.length > 0){
      setTimeout(function(){ 
          frameWindow.location.replace(URLs.shift());
      }, 1000);
  }
}

  //Button Triggers
  
  if($(window).width() >= 992){
    //Index Request a Quote
    btnScrollTop('#btn-index-request-quote', '#profilesRhForm', navbar);

    //Products Request a Quote
    btnScrollTop('#btn-products-request-quote', '#request-quote', navbar/2);

    //Products List Items
    btnScrollTop('#btn-products-list', '#product-list', navbar/2);
  }else{ 
    //Index Request a Quote
    btnScrollTop('#btn-index-request-quote', '#profilesRhForm', navbar + 30);

    //Products Request a Quote
    btnScrollTop('#btn-products-request-quote', '#profilesRhForm', navbar + 30);

    //Products List Items
    btnScrollTop('#btn-products-list', '#product-list', navbar);

     //Contact Triggers
  
    contactTriggers('.tel-trigger', 'Initializing Call Service');
    contactTriggers('#call-us', 'Initializing Call Service');
  }

  //Contact Triggers
  contactTriggers('.mail-trigger', 'Initializing Email Service');


  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

//Navbar close visibility 
$(".mobile").click(function(){
    $(".navbar-toggler").trigger("click");
});

  $(".navbar-toggler").click(function(){
    var navbarTrue = $("#navbarResponsive").is(":visible");
    if(navbarTrue){
      $(".navbar-toggler i").removeClass("fa-times");
      $(".navbar-toggler i").addClass("fa-bars");
      $("#mainNav").css("position", "fixed");
    }else{
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      $(".navbar-toggler i").removeClass("fa-bars");
      $(".navbar-toggler i").addClass("fa-times");
      $("#mainNav").css("position", "relative");
    }
  });
  $("body")


  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 80) {
      $("#mainNav").addClass("navbar-shrink");
      
    } else {
      $("#mainNav").removeClass("navbar-shrink");

    }
  };

  var callLogoToggle = function() {
    $("#call-us").css('opacity','0.5');
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        $("#call-us").css('opacity','1');
    }, 500));
};

  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);
  $(window).scroll(callLogoToggle);
  $(window).scroll(navbarHeight()); 

function contactTriggers(className, Message){
  $(className).click(function showAlert() {
    $("#success-alert i").text(Message);
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
    });   
});
}

function btnScrollTop(className, scrollClassName, slideFormula){
  $(className).click(function() { 
    $('html, body').animate({
        scrollTop: $(scrollClassName).offset().top - (slideFormula)
    }, 2000);
  });
}

$(".manual-flip").click(function(){
 var thisContainer =  $(this).closest('.card-container');
  if(thisContainer.hasClass('hover')){
      thisContainer.removeClass('hover');
  } else {
      thisContainer.addClass('hover');
  }
});


}(jQuery); // End of use strict


