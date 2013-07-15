<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->

        <link href= "<?php echo base_url('css/bootstrap.min.css'); ?>"  rel="stylesheet" type="text/css" />
        <link href= "<?php echo base_url('css/jquery.jscrollpane.css'); ?>" rel="stylesheet" type="text/css" media="all"/>
        <link href= "<?php echo base_url('css/style.css') ?> " rel="stylesheet" type="text/css"/>
        <link href= "<?php echo base_url('img/logo/favicon.ico') ?>" rel="icon" icon type="image/vnd.microsoft.icon" />
        <link href='http://fonts.googleapis.com/css?family=Oxygen:700' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Lusitana:700' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('js/jquery-ui-date/css/redmond/jquery-ui-1.10.3.custom.css') ?>" />
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href= "<?php echo site_url(); ?>/home">
                        <img src= "<?php echo base_url(); ?>img/logo/Logo_u.JPG"/>
                    </a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li>
                                <a href= "<?php echo site_url("home") ?>" > 
                                    <i class="icon-home icon-white">
                                    </i>&nbsp;Home
                                </a>
                            </li>
                            <li>
                                <a href= "<?php echo site_url("browse") ?>"> 
                                    </i>&nbsp;Browse
                                </a>
                            </li>
                            <li>
                                <a href= "<?php echo site_url("about") ?>"> 
                                    
                                    </i>&nbsp;About
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-search pull-left" method="post" action="<?php echo site_url(); ?>/search">
                            <input name="inputsearch" type="text" class="search-query" placeholder="Search" style="width: 100px;">
                            <div class="icon-search"></div>
                        </form>