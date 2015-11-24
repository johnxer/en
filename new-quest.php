<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Launch of new Mobile Advertising & App Gamification | eagleninja</title>
    <meta name="description" content="Mobile App & Advertising Gamification">
    <meta name="keywords" content="mobile advertising,mobile app gamification,mobile ad format,mobile marketing,quest marketing,advertising gamification">
  <!-- COMMON HEADER -->
  <?php include 'includes/header.php' ?>
  <!-- // COMMON HEADER -->
  


<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.4.7/basic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>  
  </head>
    


  </head>
  <body class="quest-builder">
    <div style="position:absolute; width:100%; height:100%; opacity:0.4; display:none" class="overlay"></div>
    <div class="div-wrapper">

  <!-- COMMON FOOTER -->
  <?php include 'includes/topbar.php' ?>
  <!-- // COMMON FOOTER -->

      
      <div class="container">
        <h2>
        <a href="index.php#welcome"><i class="fa fa-chevron-left"></i></a> Create a Quest for free
        </h2>
        <div class="well">
          <div class="progress-header-out">
            <ul class="create-product-step-list-new ">
              <li> <a href="javascript:void(0)" class="step-1 active" rel="1"><span class="value"> Description</span> </a>  </li>
              <li> <a href="javascript:void(0)" class="step-2" rel="2"><span class="value">Background Image</span></a> </li>
              <li> <a href="javascript:void(0)" class="step-3" rel="3" disabled=""><span class="value">Define activities</span></a></li>
              <li style=""> <a href="javascript:void(0)" class="step-4 step-done" rel="4"><span class="value">Set Reward</span></a></li>
              <li> <a href="javascript:void(0)" class="step-5" rel="5"><span class="value">Other settings</span></a></li>
              <li style="display:"> <a href="javascript:void(0)" rel="6" class="step-6"><span class="value">Your details</span></a></li>
              <li style="display:"> <a href="javascript:void(0)" rel="7" class="step-7"><span class="value">Receive Quest URL</span></a></li>
              
              
            </ul>
            <div class="clearfix"></div>
          </div>
          <form method="post" action="create_quest.php" id="the_form" name="the_form">
          <ul class="builder_step_list">
            <li class="step_1_holder">
              <div class="step_box">
                <span>Step</span><div class="circle"><span>1</span></div>
              </div>
              <div class="step_content">
                <h4>Describe the Quest</h4>
                <div class="form-group new_input validated">
                  
                  
                  <textarea class="form-control" id="editorTPcontent" placeholder="" name="description">This is the description of what you will be asking your prospects or customers to do: <br />Make it sound fun and make sure you remind them of the reward they will receive!</textarea>
                  
                </div>
                <div class="builder_footer">
                  <a class="next btn-lg btn btn-cyan col-xs-3 pull-right next_step_1" rel="1" href="javascript:void(0)">
                    Next<span class="circle"><i class="fa fa-angle-right"></i></span>
                  </a>
                  <div style="display: none;" class="important_block important_1">Please describe the Quest!</div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </li>
            <li  class="step_2_holder">
              <div class="step_box">
                <span>Step</span><div class="circle"><span>2</span></div>
              </div>
              <div class="step_content">
                <h4>Upload a background image</h4>
                <div class="form-group new_input">
                  
                  <div class="input-group" style="width: 100%;">
                    <div data-id="photo" data-jq-toggle="editable">
                      <div>
                        
                        
                        <div class="outer_pic row" data-id="outer_pic">
                          <div class="inner_pic col-xs-2" data-id="photo_div">
                            <img data-id="no_image" id="no_background_image" src="images/no_image.png" alt="Please, select an image" class="empty_image">
                            <img data-id="photo" id="background_image_preview" style="display: none; max-width:100%; max-height:100%">
                          </div>
                          <div class="right-box col-xs-10">
                            <p data-id="text">
                              <span data-jq-text="msg">Choose a background image that will be visible throughout the Quest.</span><br><span>Photo must be <span data-jq-text="width">416</span>x<span data-jq-text="height">170</span> pixels minimum</span><br><span>Valid extensions are: <span data-jq-text="extensions">png, jpg, jpeg</span></span><br><label data-id="validation_msg" class="error" style="display:none">The image is required</label>
                            </p>
                            <div style="margin-top: 10px; position:relative;">
                              <input type="file" data-id="photo_file" name="background_image" id="background_image" style="opacity:0; position:absolute;width:120px; cursor:pointer">
                              <button type="button" class="btn btn-grey " data-id="photo_btn">
                              <span style="margin-right: 5px" class="fa fa-file"></span> Select image
                              <div id="background_image_error" style="position:absolute; font-weight:bold; color:red; top:40px; display:none;"></div>
                              </button>
                              
                            </div>
                          </div>
                        </div>
                        <div data-id="photo_effects"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="builder_footer">
                  <a class="btn-lg btn-back back btn btn-default col-xs-2" href="javascript:void(0)" rel="2" ><span class="circle"><i class="fa fa-angle-left"></i></span>
                  Back
                </a>
                <a class=" pull-right btn-lg btn btn-cyan next col-xs-3 next_step_2" rel="2" href="javascript:void(0)">
                  <span class="circle"><i class="fa fa-angle-right"></i></span>Next
                </a>
                <div class="important_block important_2">Please upload the image first!</div>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          <li class="step_3_holder">
            <div class="step_box">
              <span>Step</span><div class="circle"><span>3</span></div>
            </div>
            <div class="step_content">
              <h4>Define the activities</h4>
              <p>
                Define the tasks, instructions and questions for the Quest. They can be arranged (drag & drop) in any order, and can include watching a video, uploading an image, taking a photo, answering questions, an offer for a special discount or promotion, instructions on activities, places to visit, links to download an app etc.
              </p>
              <div class="tasks_wrapper">
                <div class="task_block">
                  <div class="row">
                    <div class="col-xs-12">
                      <ul id="draggablePanelList" class="task_list">
                      </ul>
                      <div class="text-center" style="margin: 20px 0 0 0">
                        <div class="btn-group">
                          <button type="button" class="add_task btn btn-warning btn-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i style="margin-right: 10px" class="fa fa-plus"></i>Add activity <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu add_activity_type">
                            <li><a href="javascript:void(0);" data-type="video">Watch a video</a></li>
                            <li><a href="javascript:void(0);" data-type="picture">Take a picture</a></li>
                            <li><a href="javascript:void(0);" data-type="single">Single choice</a></li>
                            <li><a href="javascript:void(0);" data-type="multi">Multiple choice</a></li>
                            <li><a href="javascript:void(0);" data-type="action">Instructions & Activities</a></li>
                            <li><a href="javascript:void(0);" data-type="text">Open ended</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="builder_footer">
                <a class="btn-lg btn-back back btn btn-default back col-xs-2" href="javascript:void(0)" rel="3" >
                  Back<span class="circle"><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="btn-lg btn btn-cyan next col-xs-3 pull-right next_step_3" rel="3" href="javascript:void(0)">
                  Next<span class="circle"><i class="fa fa-angle-right"></i></span>
                </a>
                <div class="important_block important_3">Please define at least one activity and/or fill all the fields!</div>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
          </li>
          <li class="step_4_holder">
            <div class="step_box">
              <span>Step</span><div class="circle"><span>4</span></div>
            </div>
            <div class="step_content form-horizontal">
              <h4>Set Reward</h4>
              <div class="clearfix"></div>
              <div class="form-group new_input new_input_short col-sm-12 validated" style="margin-top: 20px;">
                <label class="control-label col-sm-3" for="">Coupon code</label>
                <div class="input-group col-sm-3 pull-left">
                  <input type="text" class="form-control" placeholder="ABC123" name="coupon_code" id="coupon_code" value="">
                </div>
                <div class="pull-left col-sm-6" style="">
                  <p>Here you can define any type of alphanumeric promotional code or coupon that participants will see when they finish the Quest.</p>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
              <div style="position: relative">
                <div class="overflow-div" style="">
                  <span style="">Only available for Premium Quests (Paid)</span>
                </div>
                <div class="form-group new_input new_input_short  validated col-sm-12">
                  <label class="control-label col-sm-3" for="">Reward cash</label>
                  <div class="input-group col-sm-3">
                    <input type="number" class="form-control" id="" placeholder="XX">
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="form-group new_input new_input_short  validated col-sm-12">
                  <label class="control-label col-sm-3" for="">Reward currency</label>
                  <div class="input-group col-sm-3">
                    <select class="form-control questType">
                      <option selected="">
                        USD ($)
                      </option>
                      <option>
                        Euro (€)
                      </option>
                    </select>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
              </div>

              <div class="clearfix"></div>
              <div class="builder_footer">
                <a class="btn-lg btn-back back btn btn-default back col-xs-2" href="javascript:void(0)" rel="4" ><span class="circle"><i class="fa fa-angle-left"></i></span>
                Back
              </a>
              <a class="btn-lg btn btn-cyan col-xs-3 next pull-right next_step_4" rel="4" href="javascript:void(0)">
                Next<span class="circle"><i class="fa fa-angle-right"></i></span>
              </a>
              <div class="important_block important_4">Please fill all the fields first!</div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </li>
        <li class="step_5_holder">
          <div class="step_box">
            <span>Step</span><div class="circle"><span>5</span></div>
          </div>
          <div class="step_content ">
            <h4>Last decisions</h4>
            <div class="form-horizontal">
              <div class="form-group new_input new_input_short">
                <label for="" class="col-sm-4 control-label">Max number of participants</label>
                <div class="input-group col-sm-2 pull-left">
                  <input type="number" class="form-control step_5_validation" id="" placeholder="XX" min="0" name="number_of_participants">
                </div>
                
                <div class="col-sm-6"><p>Irrespective of the number of participants who click on the Quest link we will generate for you, this is the maximum number of participants who will be allowed to start and finish the Quest</p></div>
              </div>
              <div class="form-group new_input validated new_input_short  new_input_append  startEndTime" style="">
                <label class="col-sm-4 control-label" for="">Quest Availability Start Date</label>
                <div class="input-group col-sm-2">
                  <input type="text" class="form-control datepicker step_5_validation" name="start" />
                </div>
              </div>
              <div class="form-group new_input validated new_input_short  new_input_append  startEndTime" style="">
                <label class="col-sm-4 control-label" for="">Quest Availability Finish Date</label>
                <div class="input-group col-sm-2">
                  
                  <input type="text" class="form-control datepicker step_5_validation" name="end" />
                  
                </div>
                
              </div>
              <div class="form-group new_input new_input_append validated new_input_short">
                <label class="col-sm-4 control-label" for="">Max time allowed to finish Quest after start</label>
                <div class="input-group col-sm-2 pull-left">
                  <input type="number" class="form-control step_5_validation" id="" placeholder="XX" min="0" name="times">
                  <div class="input-group-addon">min</div>
                </div>
                <div class="col-sm-4">
                  <p>The countdown to finish a quest once started. After this period from start the participant slot will be expired and can be used by another user.</p>
                </div>
              </div>
              <ul class="filter_list" >
                <li style="position: relative">
                  <div class="overflow-div" style="">
                    <span style="">Only available for Premium Quests (Paid)</span>
                  </div>
                  <div class="" style="background: #fff;padding: 15px; margin-bottom:20px; border-radius: 4px;">
                    <div class="col-xs-12">
                      <h5 style="margin-left: -15px;font-size:  20px;font-weight:  300;margin: 0 -15px 10px -15px;border-bottom: 1px solid #eee;padding-bottom: 10px;">Demographics filter</h5>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                      <div class="form-group new_input" style="margin-bottom: 0;">
                        <label class="col-sm-4 control-label" for="">Filter</label>
                        <div class="input-group col-sm-6">
                          <select class="form-control filterType">
                            <option>
                              Gender
                            </option>
                            <option>
                              Age
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                      <div class="form-group new_input" style="margin-bottom: 0;">
                        <label class="col-sm-4 control-label" for="">Value</label>
                        <div class="input-group col-sm-6">
                          <select class="form-control countryType">
                            <option>
                              Men
                            </option>
                            <option>
                              Women
                            </option>
                            <option>
                              ...
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                      <div class="form-group new_input">
                        <button type="button" class="btn btn-block btn-cyan btn-sm"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </li>
                <li style="position: relative">
                  <div class="overflow-div" >
                    <span >Only available for Premium Quests (Paid)</span>
                  </div>
                  <div class="" style="background: #fff;padding: 15px; margin-bottom:20px; border-radius: 4px;">
                    <div class="col-xs-12">
                      <h5 style="margin-left: -15px;font-size:  20px;font-weight:  300;margin: 0 -15px 10px -15px;border-bottom: 1px solid #eee;padding-bottom: 10px;">Location filter</h5>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                      <div class="form-group new_input" style="margin-bottom: 0;">
                        <label class="col-sm-4 control-label" for="">Filter</label>
                        <div class="input-group col-sm-6">
                          <select class="form-control filterType">
                            <option>
                              Country
                            </option>
                            <option>
                              State
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                      <div class="form-group new_input" style="margin-bottom: 0;">
                        <label class="col-sm-4 control-label" for="">Value</label>
                        <div class="input-group col-sm-6">
                          <select class="form-control countryType">
                            <option>
                              USA
                            </option>
                            <option>
                              UK
                            </option>
                            <option>
                              ...
                            </option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                      <div class="form-group new_input">
                        <button type="button" class="btn btn-block btn-cyan btn-sm"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </li>
              </ul>
              <div class="builder_footer">
                <a class="btn-lg back btn-back btn btn-default col-xs-2" href="javascript:void(0)" rel="5" ><span class="circle"><i class="fa fa-angle-left"></i></span>
                Back
              </a>
              <a class="btn-lg btn btn-cyan col-xs-3 pull-right next next_step_5" rel="5" href="javascript:void(0)">
                Next<span class="circle"><i class="fa fa-angle-right"></i></span>
              </a>
              <div class="important_block important_5">Please fill all the fields first!</div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </li>
        <li class="step_6_holder">
          <div class="step_box">
            <span>Step</span><div class="circle"><span>6</span></div>
          </div>
          <div class="step_content form-horizontal">
            <h4>Your details </h4>
            <p><small>You are almost done! We will set up the Quest in accordance with what you just defined and within the next 24 hours we will send to you the Quest link that you can use to insert in your media, or send to prospect or customer lists.</small></p>
            <div class="form-group new_input new_input_short">
              <label for="" class="col-sm-2 control-label">Your name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control step_6_validation" id="" placeholder="" name="name">
              </div>
            </div>
            <div class="form-group new_input new_input_short">
              <label for="" class="col-sm-2 control-label">Your email</label>
              <div class="col-sm-4">
                <input type="email" class="form-control step_6_validation" id="email" placeholder="" name="email">
              </div>
            </div>
            <div class="form-group new_input new_input_short">
              <label for="" class="col-sm-2 control-label">Your company</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="" placeholder="" name="company">
              </div>
            </div>
            <div class="form-group new_input new_input_short">
              <label for="" class="col-sm-2 control-label">Your title</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="" placeholder="" name="title">
              </div>
            </div>
            <div class="form-group new_input new_input_short">
              <label for="" class="col-sm-2 control-label">Your tel number</label>
              <div class="col-sm-4">
                <input type="text" class="form-control step_6_validation" id="" placeholder="" name="phone">
              </div>
            </div>
            
            
            <div class="builder_footer">
              <a class="btn-lg btn-back back btn btn-default col-xs-2" href="javascript:void(0)" rel="6" ><span class="circle"><i class="fa fa-angle-left"></i></span>
              Back
            </a>
            <a class="btn-lg btn next pull-right btn-cyan col-xs-4 next_step_6 create_quest_button" rel="6" href="javascript:void(0)">
              Receive Quest URL<span class="circle"><i class="fa fa-angle-right"></i></span>
            </a>
            <div class="important_block important_6">Please fill all the fields first!</div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </li>
      <li>
        <div class="step_box">
          <span>Step</span><div class="circle"><span>7</span></div>
        </div>
        <div class="step_content">
          <h4>That's it!</h4>
          <p>
            We will contact you within 24 hours with the Quest URL which you can insert into any media, or send to lists of leads, prospects and customers. Anyone clicking on the link will start the Quest
          </p>


          <div class="builder_footer">

              <a class="btn-lg btn btn-default back col-xs-4 pull-left" href="index.html#welcome">
                Return to the Homepage
              </a>
          
            <a class="next btn-lg btn-cyan btn btn-default pull-right col-xs-5" data-toggle="modal" data-target="#sponsor-form" href="javascript:void(0)" >
              Learn about our Premium Quests
            </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </li>
      
    </ul>
  </form>
  </div>
</div>
</div>
<div class="push"></div>

  <!-- COMMON FOOTER -->
  <?php include 'includes/footer.php' ?>
  <!-- // COMMON FOOTER -->

    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Delete task</h4>
          </div>
              <div class="modal-body ">Are you sure you wish to delete this task</div>
              <div class="modal-footer" style="margin-top: 0;">
                <button style="float: left; width: 100px;" type="button" class="button button-grey" data-dismiss="modal">Cancel</button>
                <button style="width: 200px;" type="button" class="button button-green button_delete_task"><i class="fa fa-paper-plane"></i> Delete</button>
              </div>
          
        </div>
      </div>
    </div>
  <li class="panel panel-info new_task_clone" style="display:none;">
                          <div class="panel-heading"><i class="fa fa-arrows"></i></div>
                          <div class="panel-body">

<!-- MINIMIZED -->
                            <div class="minimized" style="display: none;">
                              <div class="form-group new_input col-left validated col-sm-8">
                                <label for="">Activity description and/or instructions</label>
                                <h5 class="quest_description_html"></h5>
                              </div>
                              <div class="form-group new_input col-right col-sm-4">
                                <label for="">Type</label>
                                <h5 class="quest_type">
                                Watch a video
                                </h5>
                               

                              </div>
                              <div class="clearfix"></div>
                            </div>
<!-- // MINIMIZED -->     
<!-- MAXIMIZED -->
                            <div class="full form-horizontal" style="">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">Type</label>
                                <div class="col-sm-7">
                                      <div class="static-input quest_type">
                                      Watch a video
                                      </div>
                                     


                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-5 control-label">Activity description and/or instructions</label>
                                <div class="col-sm-7 description ">
                                  <textarea name="editor" id="editor" rows="10" cols="80" class="form-control quest_description_value editor" placeholder="Enter question"></textarea>
                                   <input type="hidden" class="form-control task_type" name="task_type" id="" placeholder="Enter options" value="">
                                </div>
                              </div>
                              <div class="quest_extra single multi" style="">
                                <div class="form-group new_input">
                                  <label class="col-sm-5 control-label" for="">Options </label>
                                  <div class="col-sm-7">
                                  <input type="text" class="form-control" name="text" id="" placeholder="Enter options" value="">
                                 
                                  <div class="pull-right help-block"><small>Coma separated</small></div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="quest_extra video">
                              <div class="form-group" style="margin-bottom: 0;">
                                <div class="col-sm-offset-5 col-sm-7">
                                  <div class="" style="">
                                    <a href="javascript:void()">
                                      <input type="file" data-id="video" accept="video/*" data-filename-placement="inside" data-jq-val="video" data-jq-toggle="enabled" style="" id="add_video_field" name="add_video_field">
                                    </a>
                                    <div class="help-block">
                                        <p>Free Mobile Quests are limited to only one video per Quest, of a maximum of 15MB. In Premium Quests you can set up as many Video tasks as you like, and with larger size video files.</p>
                                    </div>

                                  </div>
                                </div>
                              </div>
                             </div>
                          </div>
<!-- // MAXIMIZED -->
                          </div>
                          <button type="button" class="collapse_task" data-toggle2="tooltip" title="Collapse Task"><i class="fa fa-minus"></i></button>
                          <button type="button" class="remove_task" data-toggle2="tooltip" title="Remove Task"><i class="fa fa-times"></i></button>
                        </li>
<script type="text/javascript">
$(document).ready(function() {
    $(".builder_step_list > li").hide();
    $(".builder_step_list > li:nth-child(1)").show();
    $(".btn-cyan").on("click", function() {
        var stepCurr = parseInt($(this).attr("rel"));
        $(".create-product-step-list-new > li:nth-child(" + (stepCurr + 1) + ") a").addClass("active");
        $(".builder_step_list > li:nth-child(" + stepCurr + ")").hide();
        $(".builder_step_list > li:nth-child(" + (stepCurr + 1) + ")").show();
        if (typeof window['validate_step_'+(stepCurr + 1)] == 'function')
          window['validate_step_'+(stepCurr + 1)]();
    })
    $(".btn-back").on("click", function() {
        var stepCurr = parseInt($(this).attr("rel"));
        $(".create-product-step-list-new > li:nth-child(" + (stepCurr) + ") a").removeClass("active");
        $(".builder_step_list > li:nth-child(" + stepCurr + ")").hide();
        $(".builder_step_list > li:nth-child(" + (stepCurr - 1) + ")").show();
    })
    $(document).on('mousedown','.panel-heading', function()
    {
      if(!$(this).parents('.panel:first').hasClass('collapsed'))
      {
        $(this).parents('.panel:first').addClass('collapsed_by_drag');
        $(this).parents('.panel:first').find('.collapse_task').click();
      }
    })

    jQuery(function($) {
        var panelList = $('#draggablePanelList');
        panelList.sortable({
            // Only make the .panel-heading child elements support dragging.
            // Omit this to make then entire <li>...</li> draggable.
            
            handle: '.panel-heading',
            start: function(event, ui) {
               CKEDITOR.instances[ui.item.find('.editor').attr('id')].destroy();
               
            },
            stop: function(event, ui) {
              CKEDITOR.replace(ui.item.find('.editor').attr('id'));
               if ($(ui.item).hasClass('collapsed_by_drag'))
               {
                  $(ui.item).find('.collapse_task').click();
               }
            }
        });
    });
    CKEDITOR.replace('editorTPcontent');

    var content_editor = CKEDITOR.instances['editorTPcontent'];

content_editor.on( 'change', function(evt) {
     validate_step_1()
});
    $('.input-daterange').datepicker({
        startDate: "Today",
        clearBtn: true,
        autoclose: true,
        todayHighlight: true,
        defaultViewDate: {
            year: 1977,
            month: 04,
            day: 25
        }
    });
    $(".questType").on('change', function() {
        var selectedOption = $(this).val();
        $(this).parents(".task_block ul li").find('[class*="quest_"]').hide();
        $(this).parents(".task_block ul li").find("." + selectedOption).fadeIn();
    })


    $("#background_image").change(function(){
        readURL(this);
    });

    $(document).on('change','#add_video_field', function()
    {
     validate_step_3();
    })

    $(document).on('keyup', '.task_list .panel input', function()
    {
      validate_step_3();
    })

    $(document).on("click",".collapse_task", function() {
        if ($(this).hasClass("closed")) {
            $(this).html("<i class='fa fa-minus'></i>");
            $(this).siblings(".panel-body").find(".minimized").hide();
            $(this).siblings(".panel-body").find(".full").fadeIn();
            $(this).removeClass("closed");
            $(this).parents('.panel:first').removeClass('collapsed');
        } else {
            var editor=$(this).parents('.panel:first').find('textarea').attr('id');
            $(this).parents('.panel:first').find('.quest_description_html').html(CKEDITOR.instances[editor].getData())
            $(this).html("<i class='fa fa-plus'></i>");
            $(this).siblings(".panel-body").find(".minimized").fadeIn();
            $(this).siblings(".panel-body").find(".full").hide();
            $(this).addClass("closed");
            $(this).parents('.panel:first').addClass('collapsed');
        }
    })


    //add activity dropdown click action
    $(document).on('click', '.add_activity_type a', function()
    {
        if ($(this).hasClass('disabled')) return false;

        var new_task=$('.new_task_clone').clone();
        task_type_info=quest_data[$(this).data('type')];

        $(new_task).removeClass('new_task_clone').addClass($(this).data('type')).show();
        $(new_task).find('.quest_type').html(task_type_info['type']);
        $(new_task).find('.task_type').val($(this).data('type'));
        $(new_task).find('.quest_description_html').html(task_type_info['description']);
        $(new_task).find('.quest_description_value').val(task_type_info['description']);
        if (task_type_info['extra']=='') $(new_task).find('.quest_extra').remove();
        else $(new_task).find('.quest_extra:not(.'+task_type_info['extra']+')').remove();
        var new_editor_id='editor'+$('.task_list > li').length;
        $(new_task).find('.editor').attr('id', 'editor'+$('.task_list > li').length);
        $('.task_list').append($(new_task));
        CKEDITOR.replace(new_editor_id);
        CKEDITOR.instances[new_editor_id].on( 'change', function(evt) {
             validate_step_3()
        });
        validate_step_3()

        if ($(this).data('type') == 'video') $(this).addClass('disabled');
    })

    $(document).on('click', '.remove_task', function()
    {
      task_to_delete=$(this).parents('li:first');
      $('#delete-modal').modal('show');
    })

    $('.button_delete_task').on('click', function()
    {
      $(task_to_delete).remove();
      $('#delete-modal').modal('hide');
      validate_step_3();
    })

    $('.step_5_validation').on('change keyup', function()
    {
      validate_step_5();
    })

    $('.step_6_validation').on('change keyup', function()
    {
      validate_step_6();
    })
    $('.datepicker').datepicker({
        startDate: "today",
        clearBtn: true,
        autoclose: true,
        todayHighlight: true
        });

    $('.create_quest_button').on('click', function()
    {
      $('.overlay').show();
      $('#the_form').submit();
    })

    $('#coupon_code').on('keyup', function()
    {
      validate_step_4();
    })

    $('#the_form').ajaxForm(
    {
      beforeSerialize: function()
      {
        CKEDITOR.instances['editorTPcontent'].updateElement()
        //rename the fields
        $('.task_list > li').each(function(k)
        {
          var the_editor= $(this).find('textarea').attr('id');
          CKEDITOR.instances[the_editor].updateElement();
          $(this).find('textarea').attr('name','editor['+k+']');
          $(this).find('input[type="text"]').attr('name','text['+k+']' )
          $(this).find('input[type="file"]').attr('name','file['+k+']' )
          $(this).find('input[type="hidden"]').attr('name','task_type['+k+']' )
        })
      },
      success: function()
      {
        //success
        $('.overlay').hide();
      }
    })
});

var task_to_delete;
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

function validate_step_1()
{
  $('.next_step_1').addClass('disabled');
  $('.important_1').show();
  if (CKEDITOR.instances['editorTPcontent'].getData().length > 0)
  {
     $('.next_step_1').removeClass('disabled');
     $('.important_1').hide();
  }
}

function validate_step_2()
{
  $('.next_step_2').addClass('disabled');
  $('.important_2').show();
  if ($('#background_image').val() != '')
  {
     $('.next_step_2').removeClass('disabled');
     $('.important_2').hide();

  }
}

function validate_step_3()
{
  $('.next_step_3').addClass('disabled');
  $('.important_3').show();

  if ($('.task_list > li').length == 0) return;

  var all_good=true;
  $.each($('.task_list > li'), function()
  {
    var the_editor=$(this).find('textarea').attr('id');
    if (CKEDITOR.instances[the_editor].getData().length ==0)
    {
      all_good=false;
      return false;
    }
    
    if ($(this).find('input[type="text"]').length > 0 && $(this).find('input[type="text"]').val()=='') 
    {
      all_good=false;
      return false;
    }

    
  })

  if ($('.task_list > li.video').length > 0 && ($('#add_video_field').val() == '' || (document.getElementById('add_video_field').files[0].size/1024/1024).toFixed(2) >15))
  {
    return;
  }


  if (all_good)
  {
      $('.next_step_3').removeClass('disabled');
      $('.important_3').hide();
  } 

  console.log(all_good)
}

function validate_step_4()
{
  $('.next_step_4').addClass('disabled');
  $('.important_4').show();
  if ($('#coupon_code').val()!='')
  {
    $('.next_step_4').removeClass('disabled');
    $('.important_4').hide();
  }
}

function validate_step_5()
{
  $('.next_step_5').addClass('disabled');
  $('.important_5').show();
  var all_good=true;
  $.each($('.step_5_validation'), function()
  {
    if ($(this).val()=='')
    {
      all_good=false;
      return false;
    }
  })

  if (all_good){
    $('.next_step_5').removeClass('disabled');
    $('.important_5').hide(); 
  }
}

function validate_step_6()
{
  $('.next_step_6').addClass('disabled');
  $('.important_6').show(); 
  var all_good=true;
  $.each($('.step_6_validation'), function()
  {
    if ($(this).val()=='')
    {
      all_good=false;
      return false;
    }
  })

  if (all_good && isValidEmailAddress($('#email').val())){
    $('.next_step_6').removeClass('disabled');
    $('.important_6').hide();
  }


}

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};


function readURL(input) {
  console.log(input);
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var image= new Image();
       
       

        reader.readAsDataURL(input.files[0]);  
        if (input.files[0].type.split('/')[0]!='image')
        {
           $('#background_image_preview').hide();
           $('#no_background_image').show();
           $(input).val('');
           $('#background_image_error').html('Only images are allowed');
           $('#background_image_error').show();
           validate_step_2();
           return false;
        }
        else
        {
          if (input.files[0].type.split('/')[1]!='jpeg' && input.files[0].type.split('/')[1]!='png')
          {
             $('#background_image_preview').hide();
             $('#no_background_image').show();
             $(input).val('');
             $('#background_image_error').html('Only png/jpeg images are allowed');
             $('#background_image_error').show();
             validate_step_2();
              return false;
          }
        }
        reader.onload = function (e) {
            image.src    = e.target.result;   
            image.onload = function() {
                w = this.width;
                h = this.height;
                t = input.files[0].type;                         // ext only: // file.type.split('/')[1],
                n = input.files[0].name;
                s = ~~(input.files[0].size/1024) +'KB';
              
                if (w < 416 || h < 170) 
                {
                   $('#background_image_preview').hide();
                   $('#no_background_image').show();
                   $(input).val('');
                   $('#background_image_error').html('The selected image size is '+w+'x'+h+' it must be at least 416x170');
                   $('#background_image_error').show();
                  validate_step_2()
                   return false;
                }




              $('#background_image_preview').attr('src', e.target.result);
              $('#background_image_preview').show();
              $('#background_image_error').hide();
              $('#no_background_image').hide();
              validate_step_2()
        }; 
         

            
        }

    }
}
//these are the defaults
var quest_data={};
quest_data['video']={'type' : 'Watch a video', 'description' : 'Watch this brief clip' , 'extra' : 'video'};
quest_data['picture']={'type' : 'Take a picture', 'description' : "Take a Selfie\n\nOR\n\nUpload the screenshot you just took\n\nOR similar instructions" , 'extra' : ''};
quest_data['single']={'type' : 'Single choice', 'description' : 'Here you can set up a question where the participant is obliged to select only one of the potential answers. Remember, a question is a great opportunity to remind your audience of your value added attributes and features, by listing them in the answers.' , 'extra' : 'single'};
quest_data['multi']={'type' : 'Multiple choice', 'description' : 'Here you can set up a question where the participant can select as many of the potential answers mas they like. Remember, a question is a great opportunity to remind your audience of your value added attributes and features, by listing them in the answers.' , 'extra' : 'multi'};
quest_data['action']={'type' : 'Action task', 'description' : 'Here you can direct participants to go to a specific physical location, or online destination, or both, or to download an app, or call a telephone number, or search for an item, etc. You can provide any kind of instruction (or explanation) as you like, and of course you can have as many of these types of "Activity Instruction" tasks as you like, in whatever order you like.' , 'extra' : ''};
quest_data['text']={'type' : 'Text answer', 'description' : 'Here you can set up a question where the participant verbally answers, and their answer is automatically transcribed (or they can also type the answer). You may want to point out to your audience that they can speak their answers out loud, using the microphone, and that their answer will be automatically transcribed.' , 'extra' : ''};

</script>
</body>
</html>