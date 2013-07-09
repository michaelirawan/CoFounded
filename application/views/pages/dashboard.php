<script src="<?php echo base_url("js/jquery.js") ?>"></script>
<script src="<?php echo base_url("js/bootstrap.min.js") ?>"></script>
<script src="<?php echo base_url("js/jquery-ui-1.9.2.custom.min.js") ?>"></script>
<script src="<?php echo base_url("http://code.highcharts.com/highcharts.js") ?>"></script>
<script src="<?php echo base_url("http://code.highcharts.com/modules/exporting.js") ?>"></script>
<!-- the mousewheel plugin -->
<script type="text/javascript" src="<?php echo base_url("js/jquery.mousewheel.js") ?>"></script>
<!-- the jScrollPane script -->
<script type="text/javascript"src="<?php echo base_url("js/jquery.jscrollpane.js") ?>"></script>
<script type="text/javascript">
    $(function() {
        $('.potential_matches').jScrollPane();
        $('.latest_comment').jScrollPane();
        $('.connection').jScrollPane();
        var chart;
        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container',
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 25
                },
                title: {
                    text: 'Last 90 days',
                    x: -20 //center
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Page Impressions'
                    },
                    plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080'
                        }]
                },
                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + '</b><br/>' +
                                this.x + ': ' + this.y + '°C';
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0
                },
                series: [{
                        name: 'Tokyo',
                        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                    }]
            });
        });

    });
</script>

<div style="margin-bottom: 30px;margin-top: 40px">
</div>
<div class="container-1200 body">
    <div class="row-fluid">
        <div class="span6">
            <div class="well-route">
                <div class="itemin">
                    <h4>Profile Statistic</h4>
                    <div id="container" style="min-width: 200px; min-height: 150px;"></div>
                    <hr>
                    <h4>Your Connections</h4>
                    <div class="connection">

                        <div class="row">
                            <?php
                            foreach ($connect->result() as $row) {
                                ?> 
                                <a href=<?php echo site_url("view/index/id/" . $row->member_id) ?>/>
                                <div class="span2 itemin connect">
                                    <img src="<?php echo base_url($row->photo) ?>" />
                                    <div class="img_tagging">
                                        <div class="text_tagging">
                                            <p class="head"><?php echo $row->firstname ?> <?php echo $row->lastname ?></p>                                           
                                            <p class="industry"><?php echo $row->title ?></p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                <?php
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="span3">
            <div class="well-route">
                <div class="itemin">
                    <h4>Potential Matches</h4>
                    <div class="potential_matches">
                        <?php
                        foreach ($potential->result() as $row) {
                            ?>
                            <a href=<?php echo site_url("view/index/id/" . $row->member_id) ?>/>
                            <div class="item relation">
                                <div class="image">
                                    <img src="<?php echo base_url($row->photo) ?>"/>
                                </div>
                                <div class="description">
                                    <p style="font-weight: bold"><?php echo $row->firstname ?> <?php echo $row->lastname ?></p>
                                    <p><?php echo $row->title ?></p>
                                    <br/>
                                    <p>Profession : <?php echo $row->profession ?></p>
                                    <p>Location : <?php echo $row->location ?></p>
                                    <p>Requirement : <?php echo $row->requirement ?></p>
                                </div>
                            </div><!-- item -->
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="span3">
            <div class="well-route">
                <div class="itemin">
                    <h4>Latest Comments</h4>
                    <div class="latest_comment">
                        <div class="item click" data-toggle="modal" data-target="#myModal">
                            <p><b>From: </b><a href="#"><b>John</b></a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim... <a href="#">Read more</a></p>
                        </div>
                        <div class="item click" data-toggle="modal" data-target="#myModal">
                            <p><b>From: </b><a href="#"><b>John</b></a></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim... <a href="#">Read more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Messages</h3>
    </div>
    <div class="modal-body">
        <div class="chatbox">
            <div class="chatbox_scroll">
                <div class="chat">
                    <?php
                    foreach ($message->result() as $row) {
                        ?>
                        <div class="image-chat">
                            <img src="<?php echo base_url($row->photo) ?>"/>
                        </div>
                        <div class="info-chat">
                            <div class="name-chat sender">
                                <?php echo $row->firstname ?> <?php echo $row->lastname ?>
                            </div>
                            <div class="time-chat">
                                <?php echo $row->date_scape ?> -  <?php echo $row->time_scape ?>
                            </div>
                            <div class="desc-chat">
                                <?php echo $row->message ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div><!-- chat -->
            </div>
            <div class="chatbox-input">
                <div class="textarea-input">
                    <textarea style="height: 30px;width: 350px;resize: none;"></textarea>
                    <btn class="btn btn-info" style="line-height: 30px;margin-top: -10px;">Send</btn>
                    <btn class="btn btn-primary" style="line-height: 30px;margin-top: -10px;">Connect</btn>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


</body>
