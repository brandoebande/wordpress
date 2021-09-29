<?php
	$tutorials = array(
        array('link'=>'D5d5wGkbn6o' , 
            'readings'=>'N/A',
            'theme'=>'00',
            'preacher'=> 'Rev Bande',
            'decr'=>'00'),
        array('link'=>'QBY9DvHi4Tk' ,
             'readings'=>'Michael Todd',
             'theme'=>'01',
             'preacher'=> '',
             'decr'=>''),
        array('link'=>'dznoeeOCyLA' 
            , 'readings'=>'',
            'theme'=>'02',
            'preacher'=> 'C. Chiwona',
            'decr'=>''),
        array('link'=>'-aCJtxibSpA' 
            , 'readings'=>'',
            'theme'=>'03',
            'preacher'=> 'LAsaGnA',
            'decr'=>''),
			array('link'=>'D5d5wGkbn6o' , 
            'readings'=>'N/A',
            'theme'=>'00',
            'preacher'=> 'Rev Bande',
            'decr'=>'00'),
        array('link'=>'QBY9DvHi4Tk' ,
             'readings'=>'Michael Todd',
             'theme'=>'01',
             'preacher'=> '',
             'decr'=>''),
        array('link'=>'dznoeeOCyLA' 
            , 'readings'=>'',
            'theme'=>'02',
            'preacher'=> 'C. Chiwona',
            'decr'=>''),
        array('link'=>'-aCJtxibSpA' 
            , 'readings'=>'',
            'theme'=>'03',
            'preacher'=> 'LAsaGnA',
            'decr'=>''),
        array('link'=>'QHi6WXg1C-U' , 
                    'readings'=>'',
                    'theme'=>'04',
                    'preacher'=> 'Evangelist Matanhire',
                    'decr'=>'')
    );

	if(!empty($_GET["id"])){
		$id =  (int)$_GET['id'];
		var_dump($id);
	}else{
		$id = 0 ;
	}
	
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Sunningdale United Methodist Church</title>
	<link rel = "icon" href = "assets/images/favicon.ico"  type = "image/x-icon">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
	<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="videos.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
					<img src="assets/images/logo2.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
						<li><a href="courses.php">News</a></li>
					<li><a href="price.php">SUMC Shop</a></li>
					<li class="active"><a href="videos.php">Sermons and Teachings</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Organisations <b class="caret"></b></a>
						<ul class="dropdown-menu">
							
						<li><a href="sidebar-right.php">RRW</a></li>
						<li><a href="sidebar-right1.php">MUMC</a></li>
						<li><a href="sidebar-right2.php">UMYF</a></li>
						<li><a href="sidebar-right3.php">JSS</a></li>
					
					</li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Online Videos</h1>
                    <p>Our Sermons</p>
                </div>
    </header>

<div class = 'videos-container'>
		<div id = 'main-video' style="padding:2px" >
			<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $tutorials[$id]['link']; ?>" allowfullscreen></iframe>
			</div>
			<div  style ='overflow-y: scroll;'>
			<p> Ash Wednesday </p>
			<p>Preacher : <?php echo $tutorials[$id]['preacher']; ?> </p>
			<p>Bible Readings: <?php echo $tutorials[$id]['readings']; ?></p>
			<p>Theme : <?php echo $tutorials[$id]['theme']; ?></p>
			</div>
		</div>
	<div id = 'other-videos'style=padding:2px;' >
	<?php 
			for($i =0;$i<sizeof($tutorials);$i++){
	?>
			<div style='height:150px;padding:2px;'> 
					<a  href ="videos.php?id=<?php echo $i; ?>"><img class = "center-block" src="https://img.youtube.com/vi/<?php echo $tutorials[$i]["link"]?>/1.jpg" >
					<div class = "center-block"><?php echo $tutorials[$i]["theme"]?></div>
					</a>
					<hr color="white" width ="70%" >
			</div>
	<?php  } ?>
	</div>
	
</div>
	<footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          ABOUT SUMC
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="https://www.umc.org/who-we-are">
                WHO ARE WE
              </a>
            </li>
            <li><a href="https://www.umc.org/what-we-believe">
                WHAT WE BELIEVE
              </a>
            </li>
            <li><a href="https://www.umc.org/how-we-serve">
                HOW WE SERVE
              </a>
            </li>
            <li><a href="http://umczea.org/">
               ZEAC UMC
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Latest News
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li> <a href="#">
                		Wedding diaries </a>
            </li>
            <li><a href="#">
                Installation of Solar gyser
                at the passornage
              </a>
            </li>
            <li><a href="#">
                memorial Service
              </a>
            </li>
            <li><a href="#">
                Death notice
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Latest Tweets
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                Projects
              </a>
            </li>
            <li> <a href="#">
                Holy Communion
              </a>
            </li>
            <li><a href="#">
                Palm Sunday
              </a>
            </li>
            <li>
              <a href="#">
                Welcome for Rev D Mupaya
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                <img src="assets/images/logo4.jpg" width="90px" alt="Techro HTML5 template"></a>
                        <p><h4>Sunday Service Starts @ 8:00</h4></p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> 1074 3 Kingbird Road<br>
            <i class="fa fa-phone"></i> 04 576 776<br>
             <i class="fa fa-envelope-o"></i> sunningdaleumczw@gmail.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
			<a href="https://twitter.com/SunningdaleUmc"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/pages/category/Methodist-Church/United-Methodist-Church-Sunningdale-Circuit-987074271500731/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/sunningdale_umc/"><i class="fa fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UCG1a0pucBsx1xoRD1qvufRw/"><i class="fa fa-youtube"></i></a>
        
			
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.php">Home</a> | 
								<a href="about.php">About</a> |
								<a href="courses.php">News</a> |
								<a href="price.php">SUMC Shop</a> |
								<a href="videos.php">Sermons and Teachings</a> |
								<a href="contact.php">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Sunningdale United Methodist Church   &copy; <?php echo date("Y");?>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
