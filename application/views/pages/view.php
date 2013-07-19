<div style="margin-bottom: 20px;margin-top: 30px">
</div>

<div class="container">
    <div class="row">
        <div class="span8">
            <div class="well-route" style="height: 575px">
                <div class="itemin">
                    <div class="profile_tag">
                        <img src="<?php echo base_url($member['photo']) ?>" style="width:120px; height:150px;">
                        <div class="profile_tag_info">
                            <h3><?php echo $member['firstname'] . " " . $member['lastname'] ?></h3>
                            <p><?php echo $member['title'] . ", " . $member['industry'] ?></p>
                            <p><?php echo $member['city'] . ", " . $member['state'] . ", " . $member['country'] ?></p>
                            <p class="status"><?php echo $member['memberquotes'] ?></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="edit_off">
                        <h3>About Me</h3>
                        <div class="box">
                            <p style="width: 540px;text-align: justify;">
                                <?php echo $member['aboutme'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="edit_off">
                        <h3>Looking For</h3>
                        <div class="box">
                            <p style="width: 540px;text-align: justify;">
                                <?php echo $member['partnerreq'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="edit_off">			
                        <h3>Ideas and Goals</h3>
                        <div class="box">
                            <p style="width: 540px;text-align: justify;">
                                <?php echo $member['bizidea'] ?></p>
                        </div>
                    </div>
                </div><!-- itemin -->
            </div>
        </div>
        <div class="span4">
            <div class="well-route">
                <div class="itemin" style="padding-bottom: 0px;">
                    <h3>My Uploads</h3>
                </div>
                <div id="pages-share" class="boxin">
                    <div id="page_shares" style="height: 800px;">
                        <?php foreach ($media as $media_item): ?>
                            <div class="itemin img-padding" >
                                <a href="#" style="width: 77px; height: 259px;">
                                    <?php echo $media_item['url'] ?>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->
    <div class="row">
        <div class="span8">
            <div class="well-route">
                <div class="itemin">
                    <h3>Profile</h3>
                    <div class="accordion" id="accordion2" style="margin-left: -10px">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                    <i class="icon-chevron-right icon-white icon_collapse" style="margin-top: 7px"></i> Work Experiences
                                </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <div class="editable_content">
                                        <div class="content">
                                            <?php foreach ($work_exp as $media_item): ?>                                               

                                                <p> <b><?php echo $media_item['employer'] ?> </b> - <?php echo $media_item['jobtitle'] ?> (<?php echo $media_item['periodfrom'] ?> - <?php echo $media_item['periodto'] ?>) </p>

                                                <p><?php echo $media_item['jobdesc'] ?></p>

                                            <?php endforeach ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                    <i class="icon-chevron-right icon-white icon_collapse" style="margin-top: 7px"></i> Education
                                </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="editable_content">
                                        <div class="content">
                                            <?php foreach ($edu as $media_item): ?>                                               

                                                <p style="color: DarkSlateGray; font-weight: bold; text-align:justify;  font-family:  'ABeeZee', sans-serif"> <?php echo $media_item['school'] ?> &nbsp; (<?php echo $media_item['degree'] ?>) </p>
                                                <p><?php echo $media_item['studyarea'] ?> , <?php echo $media_item['attdate'] ?></p>
                                                <p><?php echo $media_item['activities'] ?></p> 
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                    <i class="icon-chevron-right icon-white icon_collapse" style="margin-top: 7px"></i> Skill and Expertises
                                </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="editable_content">
                                        <div class="content">
                                            <?php foreach ($skill as $media_item): ?>                                               

                                                <p style="color: DarkSlateGray; font-weight: bold; text-align:justify;  font-family:  'ABeeZee', sans-serif"> <?php echo $media_item['skillexpertname'] ?>&nbsp;</p>
                                                <p><?php echo $media_item['skillexperttext'] ?> </p>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                                    <i class="icon-chevron-right icon-white icon_collapse" style="margin-top: 7px"></i> Additional information
                                </a>
                            </div>
                            <div id="collapseFive" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <div class="editable_content">
                                        <div class="content">
                                            <?php foreach ($additional as $media_item): ?>                                               

                                                <p style="color: DarkSlateGray; font-weight: bold; text-align:justify;  font-family:  'ABeeZee', sans-serif"> <?php echo $media_item['type'] ?>&nbsp;</p>
                                                <p><?php echo $media_item['etc'] ?> </p>
                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->
    <?php if ($this->session->userdata('email') != null && $this->session->userdata('email') != $member['email']) { ?>
        <div class="row">
            <div class="span8">
                <div class="well-route">
                    <form method="post" action="<?php echo base_url('index.php/view/insert_new_message1'); ?>">

                        <div class="itemin">
                            <h3>Message</h3>
                            <textarea rows="3"  id="message_input" placeholder="Enter Your Message" name="message_input"> </textarea>
                            <input type="hidden" name="member_id_message" value="<?php echo $member['member_id'] ?>" />
                            <button class="btn btn-primary" style="position: right;">Send</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    <?php } ?><!-- row -->
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
<script src=<?php echo base_url('js/jquery.js') ?>></script>

<script src=<?php echo base_url('js/bootstrap.min.js') ?>></script>
<script src=<?php echo base_url('js/jquery-ui-1.9.2.custom.min.js') ?>></script>
<script type="text/javascript" src=<?php echo base_url('js/jquery.mousewheel.js') ?>></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src=<?php echo base_url('js/jquery.jscrollpane.js') ?>></script>
<script type="text/javascript" id="sourcecode">
    $(function()
    {
        $('.box').jScrollPane();
        $('.boxin').jScrollPane();
    });
</script>
<!-- Modal -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>SignIn</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/home/validate_credential'); ?>">
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Email" name="email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>
                <div class="controls">
                    <input type="password" id="inputPassword" placeholder="Password" name="password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox" style="color: #333;">
                        <input type="checkbox"> Remember me
                    </label>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="signupModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>SignUp</h3>
    </div>
    <div class="modal-body">
        <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/home/create_member'); ?>">
            <div class="control-group">
                <label class="control-label" for="inputEmail"><i style="color: red;" title="required">*</i> Email</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Email" name="email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail"><i style="color: red;" title="required">*</i>  Firstname</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Firstname" name="first_name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail"><i style="color: red;" title="required">*</i> Lastname</label>
                <div class="controls">
                    <input type="text" id="inputEmail" placeholder="Lastname" name="last_name">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword"><i style="color: red;" title="required">*</i>  Password</label>
                <div class="controls">
                    <input type="password" id="inputPassword" placeholder="Password" name="password">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword"><i style="color: red;" title="required">*</i>  Password confirm</label>
                <div class="controls">
                    <input type="password" id="inputPassword" placeholder="Password confirm" name="password2">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPassword"><i style="color: red;" title="required">*</i>  Location</label>
                <div class="controls">
                    <input type="text" id="inputLocation" placeholder="Location" name="location">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
