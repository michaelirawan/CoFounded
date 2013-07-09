
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="well-route">
                    <div class="itemin">
                        <h1>Join Bizshout</h1>
                        <div class="content">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="content">
                            <h3>Term Of Services</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="content">
                            <h3>Contact us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="content">
                            <h3>Jobs</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div><!-- itemin -->
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
            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/home/validate_credential');?>">
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
            <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/home/create_member');?>">
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
