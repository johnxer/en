<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Short video of the Eagle Ninja Quest Marketing App and app download link so you can earn money while having fun and improving the products you like">
<meta name="keywords" content="Gaming app discovery,quest marketing,mobile shopping,performance based advertising,CPA based advertising,mobile advertising,mobile app gamification,advertising gamification">
<title>Download of the Eagle Ninja Quest Marketing App</title>
  <!-- COMMON HEADER -->
  <?php include 'includes/header.php' ?>
  <!-- // COMMON HEADER -->
<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
</head>

<body class="download_app">            
  <div class="div-wrapper">


  <!-- COMMON FOOTER -->
  <?php include 'includes/topbar.php' ?>
  <!-- // COMMON FOOTER -->

      
      <div class="container ">
      	<div class="row" >
      	<div class="col-xs-12 col-sm-10 col-sm-offset-1">
<h2 style="background: none;border-bottom: 0; color:#fff; text-transform: none; margin-bottom: 20px; color: rgba(255,255,255,0.9)">
<!--<a href="index.html"><i class="fa fa-chevron-left"></i></a> --><strong style="color: #168e7d">WATCH</strong> & <strong>DOWNLOAD APP</strong>
</h2>      
</div>
</div>
            <div class="well" style="background: none;border: none; box-shadow: none;">
            <div class="row">
            	<div class="col-sm-6 col-sm-offset-1">
					<div style="padding: 0px">
						<div class='embed-container'><iframe src='http://www.youtube.com/embed/hA68UhxdWn4' frameborder='0' allowfullscreen></iframe>
						</div>
					</div>
            	</div>            	
            	<div class="col-sm-4">
            	<div style="padding: 0px">
              <p style="font-size: 14px;color: #fff;">Download the Eagle Ninja Quest Marketing App to earn money while doing the things you like, and improving the products you care about!</p>

<p style="font-size: 14px;color: #fff;margin-bottom: 10px;">Download games, play them and earn money for reaching key levels</p>

<p style="font-size: 14px;color: #fff;margin-bottom: 10px;">Give us your feedback on new apps</p>

<p style="font-size: 14px;color: #fff;margin-bottom: 10px;">Test drive cars in nearby dealerships</p>

<p style="font-size: 14px;color: #fff;margin-bottom: 10px;">Try on cool outfits or new cosmetic brands</p>

<p style="font-size: 14px;color: #fff;margin-bottom: 10px;">And earn money while having fun!!</p>
				</p>
              <ul class="download_links">
              <li>
                <a href="https://itunes.apple.com/app/id944191030">
                  <img alt="DOwnload on the AppStore"
                       src="images/Download_on_the_App_Store_Badge_US-UK_135x40.svg" />
                </a>
                <div style="clear:both; display: block; "></div>
              </li>
              <li>
                <a href="https://play.google.com/store/apps/details?id=com.eagleninja.app&hl=en">
                  <img alt="Get it on Google Play"
                       src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png" />
                </a>
                <div style="clear:both; display: block; "></div>
              </li>
              </ul>              
        <div style="clear:both; display: block; "></div>
				</div>
            	</div>
            </div>
            <div style="clear:both; display: block; "></div>
    </div>
  </div>
  <div class="push"></div>
</div>
 
  <!-- COMMON FOOTER -->
  <?php include 'includes/footer.php' ?>
  <!-- // COMMON FOOTER -->


</body>
</html>
<script>
$(document).ready(function(){

$(".fixed-bar").addClass("mini-bar");

      $("a#nav-show").click(function(){
            $("#nav").fadeIn(300);
            $(this).addClass("active");
      
     
     });


      $("a.circle-arrow").click(function(){
            if($(".fixed-bar").hasClass("mini-bar")){
               
               $(".fixed-bar").removeClass("mini-bar");

            }else{

            $(".fixed-bar").addClass("mini-bar");
            }
      });
    


});  
$(document).mouseup(function (e)
{
    var container = $("#nav");
    var trigger = $("a#nav-show");
    
    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.hide();
        trigger.removeClass("active");
    }
});


        $(window).on('load', function () {

            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });

            // $('.selectpicker').selectpicker('hide');
        });

</script>                                                                        

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
{ (i[r].q=i[r].q||[]).push(arguments)}
,i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-53060589-1', 'auto');
ga('send', 'pageview');



//Check Mobile Devices

var checkMobile = function(){



    //Check Device

    var isTouch = ('ontouchstart' in document.documentElement);



    //Check Device //All Touch Devices

    if ( isTouch ) {



        $('html').addClass('touch');

        $(".fixed-bar").addClass("mini-bar");

      $(window).scroll(
    {
        previousTop: 0
    }, 
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
   
    } else {
   
        /*$(".fixed-bar").fadeOut(300);*/
        $(".fixed-bar").addClass("mini-bar");
    }
    this.previousTop = currentTop;
});


    }

    else {



        $('html').addClass('no-touch');



      $(window).scroll(
    {
        previousTop: 0
    }, 
    function () {
    var currentTop = $(window).scrollTop();
    if (currentTop < this.previousTop) {
   
        /*$(".fixed-bar").fadeIn(500);*/
        $(".fixed-bar").removeClass("mini-bar");
    } else {
   
        /*$(".fixed-bar").fadeOut(300);*/
        $(".fixed-bar").addClass("mini-bar");
    }
    this.previousTop = currentTop;
});



    };



};



//Execute Check

checkMobile();

</script>