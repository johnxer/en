<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Blog | eagleninja</title>
<meta name="description" content="Gamified advertising and mobile app experience gamification">
<meta name="keywords" content="mobile advertising gamification,mobile app gamification,mobile marketing gamification,quest marketing">
  <!-- COMMON HEADER -->
  <?php include 'includes/header.php' ?>
  <!-- // COMMON HEADER -->

</head>

<body class="blog">
<div class="div-wrapper">
  <!-- COMMON HEADER -->
  <?php include 'includes/topbar.php' ?>
  <!-- // COMMON HEADER -->
      
      <div class="container">
            
<h2>
      <a href="index.html#welcome"><i class="fa fa-chevron-left"></i></a> eagleninja Blog
</h2>
<div class="well">
<ul class="container-list">
      
<div class="">
      <li style="text-align: center;">
          <div class="header" style="position: relative;">
          <a href="blogpost_challenges_mobile_advertising.html"><h3>The Challenges of Mobile Advertising</h3>
          </a>
          </div>
          <div class="blog_img">
      <div class="calendar-div-css">
          <div class="calendar-div-top">
          <div class="circle circle-left"></div>
          <div class="circle circle-right"></div>
          <h5>Jan</h5>
          </div>
          <h6>28</h6>
          <h4>2015</h4>
        </div>          
          <img src="images/blog/2015-01-23/main.jpg" alt="The Challenges of Mobile Advertising" class="img-responsive">
          <a href="blogpost_challenges_mobile_advertising.html"></a>
          </div>
          <div class="content-box">
          <p>
Mobile is an exploding media and mobile advertising is following our collective eyeballs; already worth $3.5 Billion in the US and $18 Billion globally, its compound annual growth is projected to be an astounding <i><strong>49.7%</strong></i> through 2018 (the next fastest growing categories are Social and Desktop Video at 18% and 15% respectively.) <sup>1</sup>

</p>
<p>
And yet although mobile as a share of our overall media consumption already accounts for 25%, mobile advertising as a share of advertising lags significantly, at 9.8%.
          </p>
      <a class="button button-green" href="blogpost_challenges_mobile_advertising.html">Read more <i class="fa fa-chevron-right"></i></a>          

          </div>
      </li>
      

</div>
</ul>
<div style="clear:both; display: block;"></div>
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