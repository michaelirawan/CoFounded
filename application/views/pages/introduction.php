<script src=<?php echo base_url('js/jquery.js') ?>></script>
<script src=<?php echo base_url('js/bootstrap.min.js') ?>></script>
<script src=<?php echo base_url('js/jquery-ui-1.9.2.custom.min.js') ?>></script>
<script src=<?php echo base_url('js/resize.js') ?>></script>
<script src=<?php echo base_url('js/deprecated.js') ?>></script>
<script src=<?php echo base_url('js/jquery.jcarousel.min.js') ?>></script>
<script src=<?php echo base_url('js/ckeditor.js') ?>></script>
<script src=<?php echo base_url('js/style.js') ?>></script>    

<div style="margin-bottom: 20px;margin-top: 30px">
</div>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="well-route">
                <div class="itemin">
                    <div class="tabbable tabs-left">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#lA" data-toggle="tab"><i class="icon-briefcase icon-white"></i> Introduction</a></li>
                            <li><a href="#lB" data-toggle="tab"><i class="icon-user icon-white"></i> Profile</a></li>
                            <li><a href="#lC" data-toggle="tab"><i class="icon-film icon-white"></i> Media</a></li>
                            <li><a href="#lD" data-toggle="tab"><i class="icon-globe icon-white"></i> Partnership</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="lA">
                                <div class="row">
                                    <div class="span7" id="header-editable">
                                        <h2 contenteditable="true" id="nama" title="Edit Your Name"><?php echo $fname; ?> <?php echo $lname; ?></h2>
                                        <h4 contenteditable="true" id="title" title="Edit Your Title Job"><?php echo $title_name; ?></h4> 
                                        <h4 contenteditable="true" title="Edit Your Industry" id="industry" ><?php echo $industry; ?></h4> 
                                        City: <p contenteditable="true" id="city" title="Edit Your City"><?php echo $city; ?> </p> 
                                        State: <p contenteditable="true" id="state" title="Edit Your State"> <?php echo $state; ?> </p> 
                                        Country: <p contenteditable="true" id="country" title="Edit Your Country"> <?php echo $country; ?> </p> 
                                        <p contenteditable="true" class="status" id="status" title="Edit Your Status"><?php echo $quotes; ?></p>
                                    </div>
                                    <div class="span2">
                                        <img src=<?php echo base_url($img_url); ?>>
                                        <p>
                                            <a href="#" id="change_picture" value="upload">Change picture</a>
                                            <input type="file" name="picture" id="change_picture_form" style="display: none" />

                                            <a href="#">Remove Picture</a>
                                        </p>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span9 edit_on">
                                        <h3 class="red-header">About me</h3>
                                        <div id="editable" contenteditable="true" class="editable_content">
                                            <p id="content-about" title="Edit Your About">
                                                <?php echo $about; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span9 edit_on">
                                        <h3 class="red-header">Looking for</h3>
                                        <div id="editable2" contenteditable="true" class="editable_content">
                                            <p id="content-looking" title="Edit Your Looking For">
                                                <?php echo $lookingfor; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span9 edit_on">
                                        <h3 class="red-header">Ideas & goals</h3>
                                        <div id="editable3" contenteditable="true" class="editable_content">
                                            <p id="content-idea" title="Edit Your Idea">
                                                <?php echo $idea; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span9">
                                        <button class="btn btn-primary pull-right" style="position: right;" id="save_editable">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="lB">
                                <div class="row">
                                    <div class="span9">
                                        <div class="row">
                                            <div class="span7">
                                                <h3 class="red-header">Work Experiences</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span9">
                                                <p style="margin-top: -15px">Provide details on your work experience: employer, job title, location, time period and job description</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span9 editable_content">
                                                <div class="content">
                                                    <h5>RDC Telkom &nbsp;&nbsp;<a style="display: none;"data-target="#work" data-toggle="modal" href="#" class="content-edit icon-pencil icon-white"></a></h5>
                                                    <p>web developer (August 2012 - Present)</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
                                                </div>
                                                <div class="content">
                                                    <h5>RDC Telkom &nbsp;&nbsp;<a style="display: none;"data-target="#work" data-toggle="modal" href="#" class="content-edit icon-pencil icon-white"></a></h5>
                                                    <p>web developer (August 2012 - Present)</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
                                                </div>
                                            </div>
                                        </div><!-- row -->
                                    </div>
                                    <div class="span9">
                                        <div id="work" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Work Experiences</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-vertical">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" id="company" placeholder="Company name">
                                                        </div>
                                                        <div class="controls">
                                                            <input type="text" id="position" placeholder="Position">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" id="date_from" placeholder="From" class="datepicker">
                                                            <input type="text" id="date_to" placeholder="To" class="datepicker">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <textarea rows="3" placeholder="Description"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary">Save</button>
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                            </div>
                                        </div>
                                        <a data-target="#work" data-toggle="modal" class="btn btn-primary btn-full"><i class="icon-plus icon-white"></i> Add New Job</a>
                                    </div><!-- modal -->
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span9">
                                        <div class="row">
                                            <div class="span7">
                                                <h3 class="red-header">Education</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span9">
                                                <p style="margin-top: -15px">Provide details on your academic background : school, degree, area of study, dates attended and activities</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span9 editable_content">
                                                <div class="content">
                                                    <?php
                                                    foreach ($edu->result() as $row) {
                                                        ?>
                                                        <p style="font-size: 14px; color: DarkSlateGray; text-align:justify;  font-family: 'Titillium Web', sans-serif"> <?php echo $row->school; ?> &nbsp; (<?php echo $row->degree; ?>)</p>
                                                        <p style="text-align: justify"> <?php echo $row->studyarea; ?>,&nbsp; <?php echo $row->attdate; ?> </p>
                                                        <p style="text-align: justify"> <?php echo $row->activities; ?> </p>
                                                        <?php
                                                    }
                                                    ?> 
                                                </div>
                                            </div>
                                        </div><!-- row -->
                                    </div>
                                    <div class="span9">
                                        <div id="education" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Education</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-vertical" method="post" action="<?php echo base_url('index.php/introduction/update_edu'); ?>">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" id="school_name" placeholder="School name" name="edu_school">
                                                        </div>
                                                        <div class="controls">
                                                            <input type="text" id="studyarea" placeholder="Area of Study" name="edu_area">
                                                            <input type="text" id="degree" placeholder="Degree" name="edu_degree">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <script type="text/javascript">
                                                                $(function() {
                                                                    $('#date_from3').datepicker();
                                                                });

                                                            </script>
                                                            <input type="text" id="date_from3" placeholder="Date" class="datepicker" name="edu_date"/>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <textarea rows="3" placeholder="Description" name="edu_activeties" ></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button class="btn btn-primary">Save</button>
                                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        <a data-target="#education" data-toggle="modal" class="btn btn-primary btn-full"><i class="icon-plus icon-white"></i> Add New School</a>
                                    </div><!-- modal -->
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span9">
                                        <div class="row">
                                            <div class="span7">
                                                <h3 class="red-header">Skills</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span9">
                                                <p style="margin-top: -15px">Provide details on your skill sets and expertise</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="span9 editable_content">
                                                <div class="content">
                                                    <?php
                                                    foreach ($skill->result() as $row) {
                                                        ?>
                                                        <p style="font-size: 14px; color: DarkSlateGray; text-align:justify;  font-family: 'Titillium Web', sans-serif"> <?php echo $row->skillexpertname; ?> </p>
                                                        <p style="text-align: justify"> <?php echo $row->skillexperttext; ?> </p>
                                                        <?php
                                                    }
                                                    ?> 
                                                </div>

                                            </div>
                                        </div><!-- row -->
                                    </div>
                                    <div class="span9">
                                        <div id="skill" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Skill</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-vertical" method="post" action="<?php echo base_url('index.php/introduction/update_skill'); ?>">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" id="skill_name" placeholder="Enter your skill name" name="skill_name">
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <textarea rows="3"  id="description" placeholder="Description" name="desc_skill"> </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <button class="btn btn-primary">Save</button>
                                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <a data-target="#skill" data-toggle="modal" class="btn btn-primary btn-full"><i class="icon-plus icon-white"></i> Add new skill</a>
                                    </div><!-- modal -->
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span9">
                                        <h3 class="red-header">Interest</h3>
                                        <div class="row">
                                            <div class="span9 editable_content">
                                                <div class="content">
                                                    <h5 id="startup">Startup &nbsp;&nbsp;<a style="display: none;" data-target="#additional" data-toggle="modal" href="#" class="content-edit icon-pencil icon-white"></a></h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
                                                </div>
                                                <div class="content">
                                                    <h5>CV &nbsp;&nbsp;<a style="display: none;"data-target="#additional" data-toggle="modal" href="#" class="content-edit icon-pencil icon-white"></a></h5>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillu</p>
                                                </div>
                                            </div>
                                        </div><!-- row -->
                                    </div>
                                    <div class="span9">
                                        <div id="additional" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h3 id="myModalLabel">Additional Information</h3>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-vertical">
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            <input type="text" id="additional_name" placeholder="Additional name">
                                                        </div>
                                                        <div class="controls">
                                                            <textarea rows="3" placeholder="Additional information"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary">Save</button>
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                            </div>
                                        </div>
                                        <a data-target="#additional" data-toggle="modal" class="btn btn-primary btn-full"><i class="icon-plus icon-white"></i> Add new interest</a>
                                    </div><!-- modal -->
                                </div><!-- row -->
                            </div>
                            <div class="tab-pane" id="lC">
                                <div class="row">
                                    <div class="span9">
                                        <h3 class="red-header">Add Media</h3>
                                        <div class="row">
                                            <div class="span3 media-logo click" data-toggle="modal" data-target="#myModalMediaYoutube">
                                                <div class="mediain" style="display: block;">
                                                    <div class="mediain_logo">
                                                        <img src=<?php echo base_url("img/logo/youtube-icon.png") ?>>
                                                    </div>
                                                    <div class="mediain_description">
                                                        <h4>Youtube</h4>
                                                        <p>CoFounded.co<br>Social Media</p>
                                                    </div>
                                                </div>
                                                <div class="mediain hover" style="display: none;">
                                                    <div class="connect_desc"><p>Connect to youtube and share your video</p></div>
                                                    <div class="connect_icon"><i class="icon-plus-sign"></i></div>
                                                </div>
                                            </div>
                                            <div class="span3 media-logo click" data-toggle="modal" data-target="#myModalMediaFacebook">
                                                <div class="mediain">
                                                    <div class="mediain_logo">
                                                        <img src=<?php echo base_url("img/logo/facebook-icon.png") ?> >
                                                    </div>
                                                    <div class="mediain_description">
                                                        <h4>Facebook</h4>
                                                        <p>CoFounded.co<br>Social Media</p>
                                                    </div>
                                                </div>
                                                <div class="mediain hover" style="display: none;">
                                                    <div class="connect_desc"><p>Connect to Facebook and share your word</p></div>
                                                    <div class="connect_icon"><i class="icon-plus-sign"></i></div>
                                                </div>
                                            </div>
                                            <div class="span3 media-logo click" data-toggle="modal" data-target="#myModalMediaTwitter">
                                                <div class="mediain">
                                                    <div class="mediain_logo">
                                                        <img src=<?php echo base_url("img/logo/twitter-icon.png") ?>>
                                                    </div>
                                                    <div class="mediain_description">
                                                        <h4>Twitter</h4>
                                                        <p>CoFounded.co<br>Social Media</p>
                                                    </div>
                                                </div>
                                                <div class="mediain hover" style="display: none;">
                                                    <div class="connect_desc"><p>Connect to Twitter and share your word</p></div>
                                                    <div class="connect_icon"><i class="icon-plus-sign"></i></div>
                                                </div>
                                            </div>
                                            <div class="span3 media-logo click" data-toggle="modal" data-target="#myModalMediaSlideshare">
                                                <div class="mediain">
                                                    <div class="mediain_logo">
                                                        <img src=<?php echo base_url("img/logo/slideshare-icon.png") ?>>
                                                    </div>
                                                    <div class="mediain_description">
                                                        <h4>Slideshare</h4>
                                                        <p>CoFounded.co<br>Social Media</p>
                                                    </div>
                                                </div>
                                                <div class="mediain hover" style="display: none;">
                                                    <div class="connect_desc"><p>Connect to Slideshare and share your presentation</p></div>
                                                    <div class="connect_icon"><i class="icon-plus-sign"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal media -->
                                <div id="myModalMediaYoutube" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h3 id="myModalLabel">Adding Youtube media</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo base_url('index.php/introduction/insert_media_youtube'); ?>">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input name="input_Youtube" type="text" id="input_Youtube" placeholder="Type the URL here..." style="width: 95%">
                                                </div>
                                            </div>
                                            <div class="controls">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <!-- modal media -->
                                <div id="myModalMediaFacebook" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h3 id="myModalLabel">Adding facebook media</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" id="inputEmail" placeholder="Type the URL here..." style="width: 95%">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                                <!-- modal media -->
                                <div id="myModalMediaTwitter" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h3 id="myModalLabel">Adding twitter media</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input type="text" id="inputEmail" placeholder="Type the URL here..." style="width: 95%">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                                <!-- modal media -->
                                <div id="myModalMediaSlideshare" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h3 id="myModalLabel">Adding slideshare media</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo base_url('index.php/introduction/insert_new_media_slideshare'); ?>">
                                            <div class="control-group">
                                                <div class="controls">
                                                    <input name="input_slideshare" type="text" id="input_slideshare" placeholder="Type the URL here..." style="width: 95%">
                                                </div>
                                            </div>
                                            <div class="controls">
                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                                <button class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="span9">
                                        <h3 class="red-header"> Media Content</h3>
                                        <div class="content media">
                                            <div class="clear"></div>
                                            <ul class="mycarousel jcarousel-skin-tango">
                                                <li>
                                                    <?php foreach ($media_youtube->result() as $row): ?>
                                                        <a href="#">
                                                            <?php echo $row->url ?>
                                                        </a>
                                                    <?php endforeach ?>
                                                </li>
                                                <li>
                                                    <?php foreach ($media_slideshare->result() as $row): ?>
                                                        <a href="#">
                                                            <?php echo $row->url ?>
                                                        </a>
                                                        <div class="media_hover" style="display: none;">
                                                            <a href="#" class="goto"><i class="icon-globe"></i>Open</a>
                                                            <a href="#" class="close_media"><i class="icon-trash"></i>delete</a>
                                                        </div>
                                                    <?php endforeach ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="lD">
                                <div class="row">
                                    <div class="span9">
                                        <h4>What are your criteria for partner matching ?</h4>
                                        <p>Please select the options below to help us better find your matches</p>
                                    </div>
                                </div><!-- row -->
                                <div class="row">
                                    <div class="span3"><h5>Filters</h5></div>
                                    <div class="span6"><h5>Keywords</h5></div>
                                </div><!-- row -->
                                <form>
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Title
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Industry
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Location
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> About me
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Business ideas and goals
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Work experience
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Education
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Skill & Expertise
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Interests
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Additional information
                                            </label>
                                        </div>
                                        <div class="span3">
                                            <input type="text" placeholder="Type something…">
                                        </div>
                                        <div class="span3">
                                            <label class="checkbox">
                                                <input type="checkbox"> Just find similiary
                                            </label>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="span9">
                                            <p>Describe your perfect business partner: </p>
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="span9">
                                            <btn class="btn btn-primary">Submit</btn>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /tabbable -->
                </div>
            </div>
        </div>
    </div><!-- row -->
</div> <!-- /container -->
<div class="footer-sitemap">
    <div class="content">
        <ul class="sitemap-block">
            <li><a href= "<?php echo site_url("about") ?>">About</a></li>
            <li><a href= "<?php echo site_url("jobs") ?>">Jobs</a></li>
            <li><a href= "<?php echo site_url("contact") ?>">Contact</a></li>
        </ul>
        <ul class="sitemap-block">
            <li><a href= "<?php echo site_url("browse") ?>"> Browse</a></li>
            <li><a href="#" data-target="#signupModal" data-toggle="modal">Sign Up</a></li>
        </ul>
        <ul class="sitemap-block">
            <li><a href="https://www.facebook.com/"><img alt="Share on Facebook" src=<?php echo base_url("img/social_fb.png") ?>>&nbsp;Share</a></li>
            <li><a href="https://twitter.com/"><img alt="Follow our Twitter" src=<?php echo base_url("img/social_twitter.png") ?>>&nbsp;Follow</a></li>
        </ul>
        <ul class="sitemap-block">
            <li>Our Partners:</li>
        </ul>
    </div>
</div>
<div class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="navbar-inner">
        <div class="container footer">
            <div class="row">
                <div class="span6">
                    <ul class="legal-links"><li><a href="#">Term of Services</a></li><li><a href="#">Privacy</a></li><li><a href="#">Feedback & support</a></li></ul>
                    <p>
                        ©
                        2013
                        BizShout, Inc. All rights reserved.
                    </p>
                </div>
                <div class="span6">
                    <ul class="locale-links"><li><a href="#">English</a></li><li><a href="#">Bahasa</a></li><li><a href="#">Français</a></li><li><a href="#">Español</a></li><li><a href="#">Português</a></li><li><a href="#">简体中文</a></li></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->




<script type="text/javascript">
    $('.mycarousel').jcarousel();
    // We need to turn off the automatic editor creation first.
    CKEDITOR.disableAutoInline = true;

    var heditor = CKEDITOR.inline('header-editable');
    var editor = CKEDITOR.inline('editable');
    var editor2 = CKEDITOR.inline('editable2');
    var editor3 = CKEDITOR.inline('editable3');
</script>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button id="" class="btn btn-primary">Save changes</button>
    </div>
    <form id="form-data" method="post" action="<?php echo base_url('index.php/introduction/update_member'); ?>">

    </form>
</div>
</body>
</html>
