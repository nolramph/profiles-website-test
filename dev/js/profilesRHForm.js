 $(function() {

  if($(window).width() <= 992)
  {
  $.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
  
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
  
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };
  
  $(window).on('resize scroll', function() {
    if ($('#profilesRhForm').isInViewport() || $('.cpright').isInViewport()) {
      $("a#call-us").hide('slow');
    } else {
      $("a#call-us").show('slow');
    }
    if ($('#socials').isInViewport()) {
      $("img#bubble-image").hide('slow');
    } else {
      $("img#bubble-image").show('slow');
    }
  });
}



  $("#profilesRhForm input,#profilesRhForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = $("input#name").val();
      var email = $("input#email").val(); 
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();
      var formData = $('#profilesRhForm').serializeArray();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#profilesRhBtn");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "././private/mail/contact_me.php",
        type: "POST", 
        data: formData, 
        dataType: 'json',
        cache: false,
        success: function(data) { 
        if(data.success == true){
            // Success message
            $('#success').html("<div class='alert alert-success'>");
            $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
              .append("</button>");
            $('#success > .alert-success')
              .append("<strong>" + data.message + " </strong>");
            $('#success > .alert-success')
              .append('</div>');
            //clear all fields
            $('#profilesRhForm').trigger("reset");
            grecaptcha.reset();
        }else{
             // Fail message
            $('#success').html("<div class='alert alert-danger'>");
            $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
              .append("</button>");
            $('#success > .alert-danger').append($("<strong>").text(data.message));
            $('#success > .alert-danger').append('</div>');
            //clear all fields
            $('.g-recaptcha').focus();
        } 
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });
  
  //Placeholder Animation
  $(".profilesRh-placeholder")
  .mouseover(function(){
    $(this).addClass("onHovered");
  })
  .mouseout(function() {
    $(this).removeClass("onHovered");
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success').html('');
});
