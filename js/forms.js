$(document).ready(function(){

      $('#learn_more_form').on('submit', function (e) {
            e.preventDefault();

            var oldLabel = $('#form-sponsor button[type="submit"]').html();
            $('#learn_more_form .learn_more_submit').prop('disabled', true).text('Sending...');

            $.ajax({
             type:'POST',
             url: '/learn_more.php',
             data: $('#learn_more_form').serialize()})
                .done(function() {
                      $('#learn_more_form').get(0).reset();
                      $('.screen-1').hide();
                      $('.screen-2').show();
                });

      });

      $('#learn_more_form').on('hidden.bs.modal', function (e) {
            $('.screen-2').hide();
            $('.screen-1').show();
      });



      $('#form-affiliate').on('submit', function(e) {
            e.preventDefault();

            var oldLabel = $('#form-affiliate button[type="submit"]').html();
            $('#form-affiliate button[type="submit"]').prop('disabled', true).text('Sending...');

            $.ajax({
                  type:'POST',
                  url: 'http://www.eagleninja.com/affiliate',
                  data: $('#form-affiliate').serialize()
            }).done(function() {
                  $('#form-affiliate').get(0).reset();
                  $('.screen-1').hide();
                  $('.screen-2').show();
            }).always(function() {
                  $('#form-affiliate button[type="submit"]').prop('disabled', false).html(oldLabel);

            }).fail(function(){
                  alert('Please fill all the form fields.');
            });

            $('#affiliate-form').on('hidden.bs.modal', function (e) {
                  $('.screen-2').hide();
                  $('.screen-1').show();
            });
            
      });

      $('#form-agency').on('submit', function(e) {
            e.preventDefault();

            var oldLabel = $('#form-agency button[type="submit"]').html();
            $('#form-agency button[type="submit"]').prop('disabled', true).text('Sending...');

            $.ajax({
                  type:'POST',
                  url: 'http://www.eagleninja.com/agency',
                  data: $('#form-agency').serialize()})
                  .done( function(data) {
                      $('.screen-2').show();
                      $('.screen-1').hide();
                      $('#form-agency').get(0).reset();

                  })
                  .fail( function(){
                      alert('Please fill all the form fields.');
                })
                  .always( function(){
                      $('#form-agency button[type="submit"]').prop('disabled', false).html(oldLabel);
                });
            });

      $('#agency-form').on('hidden.bs.modal', function (e) {
            $('.screen-2').hide();
            $('.screen-1').show();
      });


      $('#iOS-form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                  type:'POST',
                  url: 'http://www.eagleninja.com/ios/user',
                  data: $('#iOS-form').serialize(),                              
                  success: function(data) {
                        $('#iOS-form').get(0).reset();
                        $('#email_confirmation').show("Thank you, we shall contact you as soon as we have the iOS version of Eagle Ninja available at the Apple Store");
                  }                                                           
            }); 
      });

});

function downloadApp(){
      var ua = navigator.userAgent;
      var iOS = ( ua.match(/(iPad|iPhone|iPod)/g) ? true : false );
      if(iOS){
            $('#iOS-modal').modal('show');
      }else{
            window.location.href = "https://play.google.com/store/apps/details?id=com.eagleninja.app";
      }
}

