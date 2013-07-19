<div class="container" style="min-height: 20%;margin-bottom: 20px;margin-top: 40px">
    <div class="row">
        <div class="span12">
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
            <script type="text/javascript">
                $('document').ready(function() {
                    $('.title').click(function() {
                        var browser = $(this).attr('id');
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/bizshout2/index.php/browse/get_where_browser",
                            data: "browser=" + browser,
                            success: function(data) {
                                var i = 0;
                                var content = JSON.parse(data);
                                var enterpreneur = "<h4 style=\"color: #5A5A5A;\">" + content.length + " Enterpreneurs have been found to have worked in " + browser + "</h4>";
                                $('#enterpreneur1').html(enterpreneur);

                                for (i = 0; i < content.length; i++) {
                                    var isi = "<div class=\"span4 profile_box\">";
                                    isi += "<div class=\"item-in-home\">";
                                    isi += "<div class=\"image\">";
                                    isi += "<img src =http://localhost/bizshout2/" + content[i].photo + ">";
                                    isi += "</div>";
                                    isi += "<div class=\"profile-left\">";
                                    isi += "<p class = \"profile_header\" >";
                                    isi += content[i].firstname + " " + content[i].lastname;
                                    isi += "</p>";
                                    isi += "<p>" + content[i].title + ", " + "<br>" + content[i].industry + "<br>" + content[i].city + ", " + content[i].state + ", " + content[i].country + ", " + "</p>";
                                    isi += "</div>";
                                    isi += "<div class=\"looking-for\">";
                                    isi += "<p>Looking For:" + content[i].partnerreq + "</p>";
                                    isi += "</div>";
                                    isi += "<hr>";
                                    isi += "<div class=\"about-me\">";
                                    isi += "<p>";
                                    isi += "About Me: <br>";
                                    isi += content[i].aboutme.substring(0, 100) + "..." + "<a href=\"http://localhost/bizshout2/index.php/view/index/id/" + content[i].member_id + "\"> More </a>";
                                    isi += "</p>";
                                    isi += "</div>";
                                    isi += "</div>"

                                    if (i == 0) {
                                        $('#change').html(isi);
                                    }
                                    else if (content.length != 0) {
                                        $('#change').append(isi);
                                    }
                                    else {
                                        $('#change').append("");
                                    }
                                }
                            }
                        });
                    });
                    $('.button').click(function() {
                        $(this).attr('class', 'button active');
                        //location.reload(true);
                        $('.button active').removeClass('button active').addClass('button');


                    });

                });
            </script>

            
            <p style="text-align: center; margin-top: 40px">
                <a href="#" class="button">
                    <span class="title" id="Software" >Software/Internet</span>
                </a>
                <a href="#" class="button">
                    <span class="title" id="Computer">Comp/Electronics</span>
                </a>
                <a href="#" class="button">
                    <span class="title" id="Media">Media</span>
                </a>
                <a href="#" class="button">
                    <span class="title" id="Finance">Finance</span>
                </a>
                <a href="#" class="button">
                    <span class="title" id="Healthcare">Healthcare</span>
                </a>
            </p>
            <p style="text-align: center;margin-top: 40px">
                <a href="#" class="button">
                    <span class="title" id="Transportation">Transportation</span>
                </a>
                <a href="#" class="button">
                    <span class="title" id="Legal">Legal</span>
                </a>
                <a href="#" class="button">
                    <span class="title" id="Food">Food & baverage</span>
                </a>
                <a href="#" class="button">
                    <span class="title" id="Music">Music/Entertainment</span>
                </a>
            </p>
        </div>
    </div>
</div>
<div style="width: 100%;min-height: 100%; background: #f4f4f4;padding-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="span12" id="enterpreneur1">

            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="row" id="change">
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
                                    <p><?php echo $member_item['title'] . ", "; ?> <br><?php echo $member_item['industry']; ?><br> <?php echo $member_item['city'] . ", " . $member_item['state'] . ", " . $member_item['country']; ?></p>

                                </div>
                                <br/>
                                <div class="looking-for">
                                    <p>Looking For: <?php echo $member_item['partnerreq']; ?></p>
                                </div>
                                <hr>
                                <div class="about-me">
                                    <p>
                                        About Me: <br>
                                        <?php echo substr($member_item['aboutme'], 0, 100); ?>... <a href=<?php echo site_url("view/index/id/" . $member_item['member_id']) ?>>More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div><!--row-->                     
                <a style="text-align: right;" href=<?php echo site_url("/browse_all") ?>>See all our list of potential partners</a>
            </div>
        </div>
        <div class="row">
            <div class="span12">

            </div>
        </div>
    </div>
</div>
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
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
