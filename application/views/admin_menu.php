<!DOCTYPE html>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Test Admin</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">-->
	<?php 
  	$css1=base_url().'resources/Admin_files/bower_components/bootstrap/dist/css/bootstrap.min.css';
	$font1=base_url().'resources/Admin_files/fonts/glyphicons-halflings-regular.svg';
 	$font2=base_url().'resources/Admin_files/bower_components/font-awesome/css/font-awesome.min.css';
	$css2=base_url().'resources/Admin_files/bower_components/metisMenu/dist/metisMenu.min.css';
	$css3=base_url().'resources/Admin_files/dist/css/timeline.css';
	$css4=base_url().'resources/Admin_files/dist/css/sb-admin-2.css';
	$css5=base_url().'resources/Admin_files/bower_components/morrisjs/morris.css';
        $csstable=base_url().'resources/Admin_files/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css';
	$responsivetable=base_url().'resources/Admin_files/bower_components/datatables-responsive/css/dataTables.responsive.css';
        ?>
    
   <link rel="stylesheet" type="text/css" href="<?php echo $css1 ?>">

    <!-- MetisMenu CSS -->
    <link rel="stylesheet"  href="<?php echo $css2 ?>">
    <!-- Timeline CSS -->
    <link rel="stylesheet"  href="<?php //echo $css3 ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet"  href="<?php echo $css4 ?>">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet"  href="<?php //echo $css5 ?>">

    <!-- Custom Fonts -->
    
    <link rel="stylesheet"  href="<?php echo $font2 ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php $url=base_url().'main/index';echo $url;?>">أصل البركة</a>
          
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
           
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php $url=base_url().'main/logout';echo $url;?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li data-toggle="collapse" data-target="#images" class="collapsed active">
                            <a><i class="fa fa-edit fa-fw"></i>Images<span class="fa arrow"></span> </a>
                            <ul class="collapse nav nav-second-level" id="images">
                                <li>
                                    <a href="<?php $url=base_url().'main/addImage';echo $url;?>">Add Image</a>
                                </li>
                                <li>
                                    <a href="<?php $url=base_url().'main/listImages';echo $url;?>">List Images</a>
                                </li>
                            </ul>
                        </li>
                        <li data-toggle="collapse" data-target="#news" class="collapsed active">
                            <a><i class="fa fa-gift fa-fw"></i>News<span class="fa arrow"></span></a>
                          <!-- /.nav-second-level -->
                          <ul class="collapse nav nav-second-level" id="news">
                                <li>
                                    <a href="<?php $url=base_url().'main/addNews';echo $url;?>">Add News</a>
                                </li>
                                <li>
                                    <a href="<?php $url=base_url().'main/listNews';echo $url;?>">List News</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
    </div>
    
    <!-- /#wrapper --> 
   <!-- jQuery -->
	<?php
	    $js1=base_url().'resources/Admin_files/bower_components/jquery/dist/jquery.min.js';
	    $js2=base_url().'resources/Admin_files/bower_components/bootstrap/dist/js/bootstrap.min.js';
	    $js3=base_url().'resources/Admin_files/bower_components/metisMenu/dist/metisMenu.min.js';
	    $js4=base_url().'resources/Admin_files/bower_components/raphael/raphael-min.js';
	    $js5=base_url().'resources/Admin_files/bower_components/morrisjs/morris.min.js';
	    $js6=base_url().'resources/Admin_files/js/morris-data.js';
	    $js7=base_url().'resources/Admin_files/dist/js/sb-admin-2.js';
            $js8=base_url().'resources/fancybox/jquery.fancybox.pack-v=2.1.5.js';
            $tablescript=base_url().'resources/Admin_files/bower_components/datatables/media/js/jquery.dataTables.min.js';
            $tablescript1=base_url().'resources/Admin_files/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js';
        ?>
    <script src="<?php echo $js1;?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $js2;?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php// echo $js3;?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php //echo $js4;?>"></script>
    <script src="<?php //echo $js5;?>"></script>
    <script src="<?php //echo $js6;?>"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $js7;?>"></script>
    <script src="<?php echo $tablescript;?>"></script>
    <script src="<?php echo $tablescript1;?>"></script>
     <script type="text/javascript" src="<?php echo base_url(); ?>resources/js/ckeditor/ckeditor.js"></script>
