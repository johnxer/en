<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Privacy Policy and Procedures of Eagle Ninja Corp">
<meta name="keywords" content="">
<title>Privacy Policy of Eagle Ninja Corp | eagleninja</title>
  <!-- COMMON HEADER -->
  <?php include 'includes/header.php' ?>
  <!-- // COMMON HEADER -->


</head>

<body class="privacy">
  <!-- COMMON HEADER -->
  <?php include 'includes/topbar.php' ?>
  <!-- // COMMON HEADER -->
      <div class="container">
            <div class="wrapper">
      
<h2><a class="dark" href="index.html#welcome"><i class="fa fa-chevron-left"></i></a> Privacy</h2>      
      
<p>We at Eagle Ninja Corp take your privacy very seriously. This Privacy Policy covers what we do with the personal information you choose to share with us and the data we collect while you use the Eagle Ninja Corp native mobile apps on the Appstore and Google Play and the Appless Responsive Mobile Web Platform and associated digital assets comprising the Eagle Ninja Quest Marketing Platform (The "Quest Marketing Platform").</p>
<h2 style="margin-top: 60px;">What Eagle Ninja Corp Collects</h2>
<h3>Account Creation</h3>
<p>Because Eagle Ninja Corp is a professional service, we require certain personally identifying information ("PII") during the account setup process to establish your identity. In addition, if you provide permission when logging into our service through the Facebook or Google + login we collect a series of additional information you have on file with either or both of these services.</p>
<p>We also collect, with your permission, your mobile phone contact information and other data.</p>
<p>Also, if you fill in some or all of the fields in the Profile section, we will have collected data related to your household income, ethnicity, occupation, hobbies, interests, family size and other data.</p>
<p>The individual bits and pieces of your PII will not be shared with any third party without prior notification to you beyond what is outlined in this Privacy Policy. Tools are available for members to change the PII they've shared via the Eagle Ninja Corp Quest Marketing Platform. PII is stored securely on restricted database servers. Eagle Ninja Corp may share anonymous aggregate information to our customers in the form of metrics, etc.</p> 

<h3>Location</h3>
<p>Each time you launch the Eagle Ninja Corp app, we collect your location information to best determine what Quests to invite you to. We may share this information in aggregate form so that potential Quest sponsors and customers may understand how our members use the service. If you accept a Quest invitation we may show an Eagle Ninja Corp sponsor or customer your location when you accepted the Quest. If you accepted to do a Quest and perform the Quest, an Eagle Ninja Corp sponsor or customer may see the specific location where you performed the Quest.</p>

<h3>Payment</h3>
<p>To accept payment for the incentives associated with Cash Quests you performed that were approved by Eagle Ninja Corp you will need to permit the necessary mechanisms for us to transfer payment to your PayPal account.</p>

<h2 style="margin-top: 60px;">What Information Eagle Ninja Corp Shares</h2> 
<h3>With Eagle Ninja Corp Sponsors and Customers</h3>
<p>Our sponsors and customers work with us to invite certain Ninjas to Cash Quests or Promotional Coupon Quests or Donation based Quests or Shuriken (Digital Point based) Quests. When you undertake a Quest, the location information, profile, date and time of day and Quest results becomes the property of Eagle Ninja Corp and/or of the Eagle Ninja Corp sponsor or customer. In addition to the content created during a Quest, we will share your location at the time you performed the Quest, the date & time of day, profile information and other data relating to you as the Ninja (Particpant) and relating to the Quest.</p>

<h2 style="margin-top: 60px;">Transference of Services</h2>
<p>If Eagle Ninja Corp or its assets are acquired, member information would be one of the assets that is transferred or acquired by a third party.</p>

<p><strong>Please note that use of Eagle Ninja Corp is limited to individuals who are eighteen or older. </strong> 
If you're a parent or guardian and become aware that your minor child is using our service, please contact <a href="mailto:info@eagleninja.com">info@eagleninja.com</a> regarding the removal of the account in question.</p>
<p>Eagle Ninja Corp may change and update this Privacy Policy from time to time. Should you have any questions regarding the content, please feel free to contact us at <a href="mailto:info@eagleninja.com">info@eagleninja.com</a>.</p>
<p style="text-align: right; margin-top: 20px;">
<i>Last Updated: November 14th, 2015</i>      
</p>      
      </div>
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