    <div id="footer">
      <div class="story text-center">
        <ul class="download_links">
          <li>
            <a href="https://itunes.apple.com/app/id944191030">
              <img alt="DOwnload on the AppStore" src="images/Download_on_the_App_Store_Badge_US-UK_135x40.svg">
            </a>
            <div style="clear:both; display: block; "></div>
          </li>
          <li>
            <a href="https://play.google.com/store/apps/details?id=com.eagleninja.app&amp;hl=en">
              <img alt="Get it on Google Play" src="https://developer.android.com/images/brand/en_generic_rgb_wo_45.png">
            </a>
            <div style="clear:both; display: block; "></div>
          </li>
        </ul>
        <ul>
          <!--<li><a data-toggle="modal" data-target="#affiliate-form" href="javascript:void(0)">Become an Affiliate</a></li>-->
          <!--<li><a href="in-news.html">In the news</a></li>-->
          <!--<li><a href="download-app.html">Download App</a></li>-->
          <li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/faq.php' ? ' active' : '');?>" href="/faq.php">FAQ</a></li></li>
          <li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/privacy.php' ? ' active' : '');?>" href="/privacy.php">Privacy policy</a></li></li>
          <li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/terms-of-service.php' ? ' active' : '');?>" href="/terms-of-service.php">Terms of service</a></li></li>
          <li><a class="<?php echo ($_SERVER['PHP_SELF'] == '/blog.php' ? ' active' : '');?>" href="/blog.php">Blog</a></li></li>
        </ul>
        <p>&copy; 2015 eagleninja</p>
        <ul class="social-icons" style="clear: left">
          <li><a class="fb" href="https://www.facebook.com/EagleNinja"><i class="fa fa-facebook"></i></a></li>
          <li><a class="tw" href="https://twitter.com/EagleNinjaCorp"><i class="fa fa-twitter"></i></a></li>
          <li><a class="gp" href="https://plus.google.com/103793372995570130930" rel="publisher"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
    </div>

        <!-- Modal -->
    <div class="modal fade" id="affiliate-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Interested in collaborating with Eagle Ninja?</h4>
          </div>
          <div class="screen-1">
            <form id="form-affiliate">
              <div class="modal-body ">
                <div class="control-group">
                  <label class="control-label">
                    Name:
                  </label>
                  <div class="controls">
                    <input name="aff_name" type="text" placeholder="Please enter your name" id="aff_name">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    Email:
                  </label>
                  <div class="controls">
                    <input name="aff_email" type="email" placeholder="Please enter your email" id="aff_email">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    Tel. number:
                  </label>
                  <div class="controls">
                    <input name="aff_phone" type="phone" placeholder="Please enter your phone number" id="aff_phone">
                  </div>
                </div>
                <div class="control-group" style="margin-bottom: 0;">
                  <label class="" style="">
                    Please let us know the categories, product or service areas or verticals in which you would be able to collaborate in because of your expertise and network:
                  </label>
                  <div class="" style="margin-top: 5px">
                    <textarea name="aff_intend" id="aff_intend" placeholder="Please write your message here..."></textarea>
                  </div>
                </div>
                
              </div>
              <div class="modal-footer" style="margin-top: 0;">
                <button style="float: left; width: 100px;" type="button" class="button button-grey" data-dismiss="modal">Close</button>
                <button style="width: 200px;" type="submit" class="button button-green"><i class="fa fa-paper-plane"></i> Submit</button>
              </div>
            </form>
          </div>
          <div class="screen-2" style="display: none;">
            <div class="modal-body ">
              <h4 style="">
              <i style="" class="fa fa-check-circle"></i> Message successfully sent!
              </h4>
              
            </div>
            <div class="modal-footer" style="margin-top: 0;">
              <button style="float: left; width: 100%;" type="button" class="button button-grey" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eagle ninja</h4>
          </div>
          <div class="modal-body ">
            <div class="video-box" style="text-align: center; position: relative; height: 100%;">
              <div class="videoWrapper">
                
                <!--                                <iframe id="utubevideo" width="" height="" src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1&enablejsapi=1" frameborder="0" allowfullscreen></iframe>-->
                <!--<iframe id="utubevideo" width="800" height="450" src="//www.youtube.com/embed/hA68UhxdWn4?rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>-->
              </div>
            </div>
            
          </div>
          <div class="modal-footer" style="margin-top: 0;">
            <button id="stopVideo" style="float: left; width: 100%;" type="button" class="button button-grey" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
      <!-- Modal -->
    <div class="modal fade" id="sponsor-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Custom Demo</h4>
          </div>
          <div class="screen-1" style="">
            <form id="learn_more_form" action="learn_more.php" method="post">
              <div class="modal-body ">
                
                <div class="control-group">
                  <label class="control-label">
                    Name:
                  </label>
                  <div class="controls">
                    <input name="sponsor_name" type="text" placeholder="Please enter your name" id="sponsor_name" class="learn_more_validation">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    Email:
                  </label>
                  <div class="controls">
                    <input name="sponsor_email" type="email" placeholder="Please enter your email" id="sponsor_email" class="learn_more_validation">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    Tel.number:
                  </label>
                  <div class="controls">
                    <input name="sponsor_phone" type="phone" placeholder="Please enter your phone number" id="sponsor_phone" class="learn_more_validation">
                  </div>
                </div>
                <div class="control-group">
                  <label class="control-label">
                    Company name:
                  </label>
                  <div class="controls">
                    <input name="sponsor_cname" type="text" placeholder="Please enter your company name" id="sponsor_cname" class="learn_more_validation">
                  </div>
                </div>
                <div class="control-group">
                  <label class="">
                    Please enter the category or product you are interested in:
                  </label>
                  <div class="" style="margin-top: 5px">
                    <textarea name="aff_intend" id="aff_intend" placeholder="Please write your message here..." class="learn_more_validation"></textarea>
                  </div>
                </div>
                
                <div class="control-group" style="">
                  <label class="control-label" style="width: 300px;">
                    How did you hear of eagleninja?
                  </label>
                  <div class="controls select-block" style="margin-left: 310px;">
                    <select name="sponsor_heard" class="learn_more_validation">
                      <option disabled selected>Please select one option</option>
                      <option value="1">Blog</option>
                      <option value="2">Press mention</option>
                      <option value="3">Advertisement</option>
                      <option value="4">Referral</option>
                      <option value="5">Other</option>
                    </select>
                  </div>
                </div>
                <div class="control-group" style="margin-bottom: 0;">
                  <label class="" style="margin-bottom: 5px;">
                    Please let us know who referred you so we can thank them:
                  </label>
                  <div class="controls select-block" style="margin-left:130px">
                    <input name="sponsor_referral" type="text" placeholder="Enter your referral" id="sponsor_referral" class="learn_more_validation">
                  </div>
                </div>
                
              </div>
              <div class="modal-footer" style="margin-top: 0;">
                <button style="float: left; width: 100px;" type="button" class="button button-grey" data-dismiss="modal">Close</button>
                <button style="float: right;width: 200px;" class="button button-green learn_more_submit disabled" type="button"><i class="fa fa-paper-plane"></i> Submit</button>
                <div class="important_block important_lm">Please fill all the fields first!</div>

              </div>
            </form>
          </div>
          <div class="screen-2" style="display: none;">
            <div class="modal-body ">
              <h4 style="">
              <i style="" class="fa fa-check-circle"></i> Message successfully sent!
              </h4>
              
            </div>
            <div class="modal-footer" style="margin-top: 0;">
              <button style="float: left; width: 100%;" type="button" class="button button-grey" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal iOS User-->
    <div class="modal fade" id="iOS-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">iOS App</h4>
            <h5>You are trying to download the Eagle Ninja App from an iOS device.
            For the moment the Eagle Ninja App is only available for Android devices. We shall have a version for iOS in the near future, please fill in this form if you would like to be notified when the iOS version is available:</h5>
          </div>
          <form id="iOS-form">
            <div class="modal-body ">
              <div class="control-group">
                <label class="control-label">
                  Name:
                </label>
                <div class="controls">
                  <input name="iOS_name" type="text" placeholder="Please enter your name" id="iOS_name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">
                  Email:
                </label>
                <div class="controls">
                  <input name="iOS_email" type="email" placeholder="Please enter your email" id="iOS_email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">
                  Tel.number:
                </label>
                <div class="controls">
                  <input name="iOS_phone" type="phone" placeholder="Please enter your phone number" id="iOS_phone">
                </div>
              </div>
            </div>
            <div class="modal-footer" style="margin-top: 0;">
              <button style="float: left; width: 100px;" type="button" class="button button-grey" data-dismiss="modal">Close</button>
              <button style="width: 200px;" type="submit" class="button button-green"><i class="fa fa-paper-plane"></i> Submit</button>
            </div>
            <div id="email_confirmation" class="alert alert-success" role="alert" style="display:none;">Thank you, we shall contact you as soon as we have the iOS version of Eagle Ninja available at the Apple Store</div>
          </form>
        </div>
      </div>
    </div>





<script type="text/javascript">
  
</script>