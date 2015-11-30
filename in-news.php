<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <title>Launch of new Mobile Advertising & App Gamification | eagleninja</title>
    <meta name="description" content="Mobile App & Advertising Gamification">
    <meta name="keywords" content="mobile advertising,mobile app gamification,mobile ad format,mobile marketing,quest marketing,advertising gamification">
  <!-- COMMON HEADER -->
  <?php include 'includes/header.php' ?>
  <!-- // COMMON HEADER -->
  </head>
  <body class="in-news">
    <div class="div-wrapper">
  <!-- COMMON HEADER -->
  <?php include 'includes/topbar.php' ?>
  <!-- // COMMON HEADER -->
      
      <div class="container">
        
        <h2>
        <a href="/#welcome"><i class="fa fa-chevron-left"></i></a> In the News
        </h2>
        <div class="well">
          <ul class="container-list">
            <div>
              <li style="text-align: center;">
                <a href="http://finance.yahoo.com/news/eagle-ninja-releases-advertising-gamification-123100148.html"><h3>iOS App of Eagle Ninja Quest Marketing Platform is now live</h3></a>
              </li>
              
              <li><h3>Eagle Ninja on Mobile Advertising Panel</h3>
                <iframe width="400" height="225" src="//www.youtube.com/embed/YvCunkk71kA?rel=0" frameborder="0" allowfullscreen></iframe>
                
              </li>
            </div>
            <div>
              <li style="text-align: center;">
                <a href="http://finance.yahoo.com/news/eagle-ninja-selected-mobile-company-160200562.html"><h3>Eagle Ninja Selected as a Mobile "Company to Watch" for its Mobile Quest Marketing Platform</h3></a>
              </li>
              
              <li style="text-align: center;">
                <a href="http://aoevents.aonetwork.com/onmobile/2014/program"><img src="/images/AO.OnMob14.TW.png" alt="ToWatch Winner 2014" style="width: 180px;"></a>
              </li>
            </div>
            <div>
              <li class="tweet"><blockquote class="twitter-tweet" lang="en"><p>A good salesperson starts by asking questions, not by selling the product <a href="https://twitter.com/EagleNinjaCorp">@EagleNinjaCorp</a> at <a href="https://twitter.com/hashtag/wppdigital?src=hash">#wppdigital</a></p>&mdash; Ella Weston (@ellaweston) <a href="https://twitter.com/ellaweston/status/529662137963405312">November 4, 2014</a></blockquote>
              <script async src="//platform.twitter.com/widgets.js" charset="utf-8">
              </script>
              </li>
              <li><h3>Eagle Ninja Presenting at the NOW Moment Conference, May 28 2014</h3>
                <iframe width="400" height="225" src="//www.youtube.com/embed/e4hzKw3jlS8" frameborder="0" allowfullscreen></iframe>
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