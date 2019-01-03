window.onload = (function($){


$(function() {
  $('.lazy').Lazy();
});
//Header Navigation add active state
var hostName = location.hostname;
if(hostName == 'localhost'){
  var navLocation = window.location.pathname.split("/")[2];
}else{
  var navLocation = window.location.pathname.split("/")[1];
} 

// var navLocation = window.location.pathname.split("/")[1];

$('a.nav-link').removeClass('active');
 if (navLocation !== ""){ 
  var href = $("#mainBreadcrumbsPage").attr('href');
   if(href){
    $('a[href$="' + href + '"]').addClass('active');
   }else{
    $('a[href$="' + navLocation + '"]').addClass('active');
   }
}else{ 
  $("a[href$='/']").addClass('active');
}

if($(window).width() < 992){
  $('.dropdown a.dropdown-toggle').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault(); 
  });
}

// $('html,body').animate({
//   scrollTop: $(window.location.hash).offset().top
// });



})(jQuery);