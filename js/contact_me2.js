/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

 $("input#email2").jqBootstrapValidation(
    {
     preventSubmit: true,
     submitError: function($form, event, errors) {
      // something to have when submit produces an error ?
      // Not decided if I need it yet
     },
     submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
       // get values from FORM
 
       var email = $("input#email2").val(); 
        var firstName = name; // For Success/Failure Message
           // Check for white space in name for Success/Fail message
        if (firstName.indexOf(' ') >= 0) {
	   firstName = name.split(' ').slice(0, -1).join(' ');
         }        
	 $.ajax({
                url: "./bin/contact_me2.php",
            	type: "POST",
            	data: {email: email},
            	cache: false,
            	success: function() {  
            	// Success message
                   $('#success2').html("<div class='alert alert-success'>");
            	   /*$('#success2 > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            		.append( "</button>");*/
            	  $('#success2 > .alert-success')
            		.append("<strong>Your message has been sent. </strong>");
 		  $('#success2 > .alert-success')
 			.append('</div>');
 						    
 		  //clear all fields
 		  $('#contactForm2').trigger("reset");
 	      },
 	   error: function() {		
 		// Fail message
 		 $('#success2').html("<div class='alert alert-danger'>");
            	/*$('#success2 > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            	 .append( "</button>");*/
            	$('#success2 > .alert-danger').append("<strong>Sorry "+firstName+" it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:arivas@userlytics.com?Subject=eagleNinja information request;>arivas@userlytics.com</a> ? Sorry for the inconvenience!");
 	        $('#success2 > .alert-danger').append('</div>');
 		//clear all fields
 		$('#contactForm2').trigger("reset");
 	    },
           })
         },
         filter: function() {
                   return $(this).is(":visible");
         },
       });

      $("a[data-toggle=\"tab\"]").click(function(e) {
                    e.preventDefault();
                    $(this).tab("show");
        });
  });
 

/*When clicking on Full hide fail/success boxes */ 
/*$('#email2').live('click',function(){
     alert("2");
     $('#success2').html('');
  });*/
  
$(document).ready(function(){
     $('.controls').on('focus', '#email2', function(){
     $('#success2 > .alert').remove();
});      
});  