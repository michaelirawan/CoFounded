<div style="margin-bottom: 30px;margin-top: 40px">
</div>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <h3 class="white-header">From Team-up, to Start-up</h3>
                    <h3 class="white-header-light">Global matchmaking for your next co-founder</h3>
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="span4" style="padding-top: 29px">
                    </div>            
                    <div class="span4" style="padding-top: 29px; text-align: center;">
                        <btn class="btn btn-warning btn-large" data-target="#signupModal" data-toggle="modal"><b>Join now</b></btn>
                    </div>            
                    <div class="span12 hero">
                    </div>
                </div>
            </div>

        </div><!-- span -->
    </div><!-- row -->
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <div class="well-route">
                        <div class="row">
                            <div class="span6">
                                <div class="itemin">
                                    <h4>What’s CoFounded?</h4>
                                    <p>
                                        Finding the right business partner to launch your start-up can be daunting.  We’ve all been through it!  CoFounded is an online service that helps you find the perfect match.  We connect individuals to create companies.  So, whether you just came up with a new idea or you’re deep into a current project, CoFounded is the community for entrepreneurs!
                                    </p>
                                </div>
                            </div>
                            <div class="span6">
                                <div class="itemin leftline">
                                    <h4>How does it work?</h4>
                                    <p>
                                        Creating a CoFounded page is simple and uniquely yours!  Your page lets you share who you are, who you’re looking to work with, and what you’re trying to accomplish.     
                                    </p>
                                    <p>
                                        Some account features:
                                    </p>
                                    <p>
                                    <ul class="list-white">
                                        <li>Entrepreneurial profile with your experience, skills, and goals</li>
                                        <li>Upload custom content (videos, photos, presentations)</li>
                                        <li>Search users who match your criteria</li>
                                        <li>Recommended partner matches</li>
                                        <li>Communication with other users</li>
                                        <li>Integration with other social media sites</li>
                                    </ul>
                                    <form>
                                        <btn class="btn btn-info" > Learn more >></btn>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- span -->
    </div><!-- row -->
    <div class="row">
        <div class="span12">
            <div class="row">
                <div class="span12">
                    <div class="well-route" style="background: none;box-shadow: none;">
                        <div class="row">
                            <div class="span12">
                                <h3>See our list of potential partners</h3>
                            </div>
                        </div>
                        <div class="row">                
                            <?php foreach ($member as $member_item): ?>
                                <div class="span4 profile_box">
                                    <div class="item-in-home">
                                        <div class="image">
                                            <img src=<?php echo base_url($member_item['photo']) ?> />
                                        </div>
                                        <div class="profile-left">
                                            <p class="profile_header">
                                                <?php echo $member_item['firstname'] . " " . $member_item['lastname'] ?>
                                            </p>
                                            <p><?php echo $member_item['title'] . ", "; ?> <br><?php echo $member_item['industry']; ?><br>
                                                <?php echo $member_item['city'] . ", " . $member_item['state'] . ", " . $member_item['country']; ?></p>
                                        </div>
                                        <div class="looking-for">
                                            <p>Looking For: <?php echo $member_item['partnerreq']; ?></p>
                                        </div>
                                        <hr>
                                        <div class="about-me">
                                            <p>
                                                About Me: <br>
                                                <?php echo substr($member_item['aboutme'], 0, 140); ?>... <a href=<?php echo site_url("view/index/id/" . $member_item['member_id']) ?>>More</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div><!--row-->                     
                        <a style="text-align: right;" href=<?php echo site_url("/browse_all") ?>>See all our list of potential partners</a>
                    </div>
                    
                </div>
            </div>
        </div><!-- span -->
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
<script src=<?php echo base_url('js/jquery.js') ?>></script>
<script src=<?php echo base_url('js/bootstrap.min.js') ?>></script>
<!-- the mousewheel plugin -->
<script type="text/javascript" src=<?php echo base_url('js/jquery.mousewheel.js') ?>></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src=<?php echo base_url('js/jquery.jscrollpane.js') ?>></script>
<script type="text/javascript" id="sourcecode">
    $(function()
    {
        $('.well-route-top').jScrollPane();
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
                        <input type="checkbox" name="remember"> Remember me
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
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>
