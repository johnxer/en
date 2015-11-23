<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta name="description" content="Mobile Marketing & Advertising Gamification Platform">
    <meta name="keywords" content="mobile advertising, mobile marketing, location based services,geofencing,gamification,geotargeting,quest marketing">
    <title>Mobile Advertising | eagleninja</title>

  <!-- COMMON HEADER -->
  <?php include 'includes/header.php' ?>
  <!-- // COMMON HEADER -->

      <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>


  
    <script type="text/javascript">
    $(document).ready(function() {
        $(".pseudopage").css('height', $(window).height());
        $('.fixed-bar').localScroll(800);

        //.parallax(xPosition, speedFactor, outerHeight) options:
        //xPosition - Horizontal position of the element
        //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
        //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
        $('#welcome').parallax("50%", 0.3);
        $('#welcome .bg').parallax("30%", 0.7);
        $('#welcome-video-well').parallax("30%", 0.7);
        $('#what-is-eagleninja').parallax("50%", 0.1);
        $('#what-is-eagleninja .bg').parallax("70%", 0.7);
        $('#types-of-quests').parallax("50%", 0.1);
        $('#types-of-quests .bg').parallax("30%", 0.7);
        $('#pricing').parallax("50%", 0.1);
        $('#value-proposition').parallax("50%", 0.1);
        $('#pricing .bg').parallax("70%", 0.7);
        $('#agency').parallax("50%", 0.3);
        $('#agency').parallax("50%", 0.3);
        $('#sponsors').parallax("50%", 0.3);
        $('#sponsors .bg').parallax("50%", 0.7);
        $('#how-does-it-work').parallax("50%", 0.3);
        $('#how-do-join').parallax("50%", 0.3);
        $('#contact').parallax("50%", 0.3);
    })
    </script>
  </head>
  <body class="home">
  <!-- COMMON HEADER -->
  <?php include 'includes/topbar_home.php' ?>
  <!-- // COMMON HEADER -->

    <div id="welcome" class="pseudopage">
      <!--      <div class="bg"></div>-->
      <div class="bubble">
        <p class="text-center">Conversion &amp; Engagement through fun Mobile Quests</p>
        <div class="clear:  both; display: block"></div>
        <a class="button" href="new-quest.html">Set up a Mobile Quest for free!</a>
        
        
      </div>
      <div class="float-bottom">
        <div class="container">
          <div class="story row">
            <div class="story-div col-xs-12 col-sm-8 col-sm-offset-2">
            <div class="col-sm-4">
              <div class="circle"><i class="fa fa-gamepad"></i></div>
              <div class="cleafix"></div>
              <p>Convert prospects and engage customers with fun activities during incentivized Mobile Quests</p>
              </div>
              <div class="col-sm-4">
              <div class="circle"><i class="fa fa-trophy"></i></div>
              <div class="cleafix"></div>
              <p>Rewarded with cash, promotional coupons or donations to a favorite cause</p>
              </div>
              <div class="col-sm-4">
              <div class="circle"><i class="fa fa-scissors"></i></div>
              <div class="cleafix"></div>
              <p>Decrease your mobile customer acquisition cost by up to 10X!</p>
              </div>
              <!--<a id="video_button" class="button pull-right" data-toggle="modal" data-target="#video-modal" href="javascript:void(0)"><i class="fa fa-video-camera"></i> Watch video</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="what-is-eagleninja" class="pseudopage">
      <div class="bg"></div>
      <!--<a class="bubble" data-toggle="modal" data-target="#sponsor-form" href="javascript:void(0)">Set up your first Quest for free in few easy steps!</a>-->
      <div class="float-bottom">
        <div class="container">
          <div class="story row">
            <div class="story-div col-xs-12 col-sm-8 col-sm-offset-2">
              <h2>What <strong>we do</strong>?</h2>
              
              <p>Mobile as a media is exploding: You need to convert & engage your mobile audience with gamification techniques, leverage the experiential marketing capabilities of Mobile devices and deal with millennial attention spans.</p>
              <p>Whether through online e-commerce, offline m-commerce, conversion of mobile app downloads into high lifetime value users, or gamification of advertising and marketing, we help you convert leads into customers, and customers into loyal advocates.</p>
              <p><a href="new-quest.html">Set up your first Quest for free in a few easy steps!</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="value-proposition" class="pseudopage">
      <div class="bg"></div>
      <div class="float-bottom">
        <div class="container">
          <div class="story row">
            <div class="story-div col-xs-12 col-sm-8 col-sm-offset-2">
              <h2><strong>Value</strong> Proposition</h2>
              <p>There are many marketing platforms that provide you with leads, whether online or offline. Some of them include location based services capability, ibeacons, demographic and location based targeting, programmatic and other advanced ad-tech and marketing tech features that our platform includes.</p>
              
              <p><i>We turn those leads into customers.</i></p>
              <p>We use experiential marketing and mobile gamification marketing to convert your leads into customers, and your customers into loyal advocates. </p>
              <p>Offline leads to offline customers, online apps to online customers, offline to online and online to offline. </p>
              <p>We help you seduce your leads through fun activities involving your brand, value attributes and channels.</p>
              <p>Want to give it a try? <a href="new-quest.html">Set up your first Quest for free in a few easy steps</a>.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="types-of-quests" class="pseudopage">
      <div class="bg"></div>
      
      <div class="float-bottom">
        <div class="container">
          <div class="story row">
            <div class="story-div col-xs-12 col-sm-8 col-sm-offset-2">
              <h2 class="pull-left"><strong>Examples</strong></h2>
              <div class="clearfix"></div>
              <p><a href="javascript:void(0)" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s">Click here</a> to see some Mobile Quest examples</p>
              <p>It's really easy to set up a Quest by using our mobile web platform or our native iOS and Android apps. You can create a Quest in just a few minutes, at no charge, and insert the Quest invitation link into any of your media or send to lists of prospects.</p>
              <p>Prospects and customers who click on the Quest link will be directed to the Quest you have created, with your logo, images, videos, instructions, prizes, etc. Its very easy, <a href="new-quest.html">check it out for free!</a></p>
              <p>Scavenger Hunts, Geocaching, Retail Promotion Audits, Test Drives in Dealerships, Customer interactions and Engagement within store locations, Discovery of new mobile apps and new product features, Mobile customer Experience Surveys, Experiential Marketing, Bottom of funnel conversion, Gamification Marketing, Engagement Marketing, Mobile Direct Response Marketing, Offline & Online Mobile User Experience Surveys...</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div id="pricing" class="pseudopage">
      <div class="bg"></div>
      <div class="float-bottom">
        <div class="container">
          <div class="story row">
            <div class="story-div col-xs-12 col-sm-8 col-sm-offset-2">
              <h2><strong>Pricing</strong></h2>
              <p>You can create as many Quests as you like, at no charge, by using your own promotional coupon or loyalty code as the incentive.</p>
              <p><a href="new-quest.html">Want to give it a free try?</a></p>
              <p>If you wish to set up a Quest with validation of whether the Quests have been satisfactorily performed, we will handle the Quest validation & conversion attribution and charge you on a "Per Completed Quest" basis.</p>
              <p>If you want additional activities & features, beyond those available in the Free Quests, such as QR/Bar Code scanning, branded HTML based micro games, social sharing of activities, location based services, demographic filters, push notifications and others, we can set those up for you and charge you on a "Per Completed Quest" basis.
              </p>
              <p>If you wish to set up a Quest where the incentive is a monetary reward paid through PayPal we will handle all of the payment logistics and charge you on a "Per Completed Quest" basis. The same goes for Quests where the incentive is a donation to a favorite cause.
              </p>
              <p>We can also provide you with a <strong><i>Private Label</i></strong> version of our native Apps, or integrate our functionality within your existing apps.</p>
              <p>Want to explore one of these options? <a class="" data-toggle="modal" data-target="#sponsor-form" href="javascript:void(0)">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact" class="pseudopage">

      <div class="float-bottom">
        <div class="container">
          <div class="story row">
            <div class="story-div col-xs-12 col-sm-8 col-sm-offset-2">
              <h2><strong>Contact</strong></h2>
              <p>541 Jefferson Ave, STE 100<br />
                Redwood City, CA 94063<br />
                +1 415 944 9279<br />
                <a class="email" href="mailto:info@eagleninja.com">info@eagleninja.com</a>
                </p>

              
              <p><a class="" data-toggle="modal" data-target="#sponsor-form" href="javascript:void(0)">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>    
    <div id="clients" class="">
      <div class="float-bottom">
        <div class="container">
          <div class="story row">
            <div class="story-div col-xs-12 col-sm-8 col-sm-offset-2">
              <h2>Some of our <strong>Clients...</strong></h2>
              <div class="row">
                <div style="background: #fff; border-radius: 5px; padding: 10px 0;">
                  <div class="col-xs-4">
                    <img src="images/logos/google.png" class="img-responsive">
                  </div>
                  <div class="col-xs-4">
                    <img src="images/logos/bbva.png" class="img-responsive">
                  </div>
                  <div class="col-xs-4">
                    <img src="images/logos/marca.png" class="img-responsive">
                  </div>
                  <div class="col-xs-4">
                    <img src="images/logos/shc.png" class="img-responsive">
                  </div>
                  <div class="col-xs-4">
                    <img src="images/logos/onpublico.png" class="img-responsive">
                  </div>
                  <div class="col-xs-4">
                    <img src="images/logos/usl.png" class="img-responsive">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- COMMON FOOTER -->
  <?php include 'includes/footer.php' ?>
  <!-- // COMMON FOOTER -->

  </body>
</html>
<script>
$(document).ready(function(){
//$(".fixed-bar").addClass("mini-bar");
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
$(window).on('load', function () {
$('.selectpicker').selectpicker({
'selectedText': 'cat'
});
// $('.selectpicker').selectpicker('hide');
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
/* Youtube video on modal open adds autoplay. Doesnt work though :( */
$("#video_button").on("click", function(){
var video = $("#utubevideo").attr("src");
$("#utubevideo").attr("src",video + "?autoplay=1");
})
/* Youtube video on modal close stop playing + removes autoplay. Doesnt work though :( */
$("button#stopVideo").on("click", function(){
var video = $("#utubevideo").attr("src");
$("#utubevideo").attr("src","");
$("#utubevideo").attr("src",(video.substring(0,video.length - 11)));
})
</script>
<script>
/*
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
{ (i[r].q=i[r].q||[]).push(arguments)}
,i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-53060589-1', 'auto');
ga('send', 'pageview');
*/
//Check Mobile Devices
var checkMobile = function() {
    //Check Device
    var isTouch = ('ontouchstart' in document.documentElement);
    //Check Device //All Touch Devices
    if (isTouch) {
        $('html').addClass('touch');
        $(".fixed-bar").addClass("mini-bar");
        $(window).scroll({
                previousTop: 0
            },
            function() {
                var currentTop = $(window).scrollTop();
                if (currentTop < this.previousTop) {} else {
                    /*$(".fixed-bar").fadeOut(300);*/
                    $(".fixed-bar").addClass("mini-bar");
                }
                this.previousTop = currentTop;
            });
    } else {
        $('html').addClass('no-touch');
        $(window).scroll({
                previousTop: 0
            },
            function() {
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
/*
$(".fixed-bar").on("mouseover", function(){
$(this).removeClass(".mini-bar");
})
*/

  autoPlayYouTubeModal();

  //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
  function autoPlayYouTubeModal() {
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.click(function () {
          var theModal = $(this).data("target"),
              videoSRC = $(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1";
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
          $('.modal').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }

</script>