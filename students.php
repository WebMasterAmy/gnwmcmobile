<?php
	session_start();
	include_once('../public/includes/PWhash.php');
	if($_SESSION['user']['expires'] >= time()){	//	logged in and not expired
		
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<link href="jqm-icon-pack-3.0.0-fa.css" rel="stylesheet" type="text/css" />
<link href="css/ListViews.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mobile-1.3.1.css" rel="stylesheet" type="text/css" />
<link href="css/gnwmthemes.css" rel="stylesheet" type="text/css" />
<link href="css/gnwmc-mobile.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.mobile-1.3.1.js"></script>
<title>Student Resources</title>
</head>

<body>
<h3>Hello <?php echo $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name']; ?></h3>
<h6>Your Access to this site will expire on: <?php echo date('D, M jS, Y @ g:i a', $_SESSION['user']['expires']); ?></h6>
<section data-role="page" data-theme="a" id="StudentLoggedIn" class="ListViews">
<a href="../public/index.php" data-role="button" data-inline="true" data-mini="true" data-ajax="false">View Full Site</a>
	<header data-role="header">
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
		<a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
       <h2>Student Page</h2> 
	</header>
	
	<!-- /header -->
    <!-- Space for Youtube videos -->
    <div data-role="content">
    <a href="../public/logout.php" data-role="button" data-inline="true" data-icon="signout" data-ajax="false">Log Out</a>
	<p>Videos on this site are for Students of Great Northwest Music of Grants Pass, Oregon.</p>
	<ul data-role="listview" data-inset="true">
			<li><a href="#Video1"><h2>Video One</h2></a></li>
			<li><a href="#Video2"><h2>Video Two</h2></a></li>
			<li><a href="#Video3"><h2>Video Three</h2></a></li>
	</ul>
	</div>
    <div data-role="content">
	<!-- Links to PDF's -->
    <p>Sheet music on this page is for students of Great Northwest Music only.</p>
        <ul data-role="listview" data-inset="true">
        	<li><a href="pdf/SheetMusic1.pdf" rel="external">
            	<h2>Sheet Music title 1</h2>
            </a></li>
        	<li><a href="pdf/SheetMusic2.pdf" rel="external">
            	<h2>Sheet Music title 2</h2>
            </a></li>
        	<li><a href="pdf/SheetMusic3.pdf" rel="external">
            	<h2>Sheet Music title 3</h2>
            </a></li>
        	<li><a href="pdf/SheetMusic4.pdf" rel="external">
            	<h2>Sheet Music title 4</h2>
            </a></li>
        	<li><a href="pdf/SheetMusic5.pdf" rel="external">
            	<h2>Sheet Music title 5</h2>
            </a></li>
        	<li><a href="pdf/SheetMusic6.pdf" rel="external">
            	<h2>Sheet Music title 6</h2>
            </a></li>
        </ul>
                
    </div><!-- /content -->
	<div data-role="content">
	<!-- Links to PDF's -->
    <p>The following forms are available in PDF file format.  Some mobile devices cannot open PDF files.</p>
        <ul data-role="listview" data-inset="true">
        	<li><a href="pdf/daily_practice_chart.pdf" rel="external">
            	<h2>Daily Practice Plan</h2>
            </a></li>
        	<li><a href="pdf/practice_plan.pdf" rel="external">
            	<h2>Weekly Practice Plan</h2>
            </a></li>
        	<li><a href="pdf/Lesson_Make-up_Request_Form.pdf" rel="external">
            	<h2>Lesson Make-Up Request</h2>
            </a></li>
        	<li><a href="pdf/student_handbook.pdf" rel="external">
            	<h2>Student-Parent Handbook</h2>
            </a></li>
        	<li><a href="pdf/recital_info.pdf" rel="external">
            	<h2>Recital Information</h2>
            </a></li>
        	<li><a href="pdf/withdrawal_form.pdf" rel="external">
            	<h2>Withdrawl Form</h2>
            </a></li>
        </ul>
                
    </div><!-- /content -->
    
    <footer data-role="footer">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
            <a href="https://www.facebook.com/pages/Great-Northwest-Music/128631783856803?fref=ts" rel="external" data-role="button" data-inline="true" data-icon="facebook">Facebook</a>
        </footer>

</section><!-- /page -->

<section data-role="page" data-theme="a" id="Video1">
	<header data-role="header">
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
		<a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
       <h2>Video One</h2> 
	</header>
	
	<!-- /header -->
    <!-- Space for Youtube videos -->
    <div data-role="content">
    <a href="../index.php" data-role="button" data-inline="true" data-icon="signout">Log Out</a>
	<p>Videos on this site are for Students of Great Northwest Music of Grants Pass, Oregon.</p>
	
			<iframe width="420" height="315" src="http://www.youtube.com/embed/n-lA5SvWOiI" frameborder="0" allowfullscreen></iframe>
	</div>
    
    <footer data-role="footer">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
            <a href="https://www.facebook.com/pages/Great-Northwest-Music/128631783856803?fref=ts" rel="external" data-role="button" data-inline="true" data-icon="facebook">Facebook</a>
        </footer>

</section><!-- /page -->

<section data-role="page" data-theme="a" id="Video2">
	<header data-role="header">
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
		<a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
       <h2>Video Two</h2> 
	</header>
	
	<!-- /header -->
    <!-- Space for Youtube videos -->
    <div data-role="content">
    <a href="../index.php" data-role="button" data-inline="true" data-icon="signout">Log Out</a>
	<p>Videos on this site are for Students of Great Northwest Music of Grants Pass, Oregon.</p>
	
			<iframe width="420" height="315" src="http://www.youtube.com/embed/R1iMFIs5Fq0" frameborder="0" allowfullscreen></iframe>
	</div>
    
    <footer data-role="footer">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
            <a href="https://www.facebook.com/pages/Great-Northwest-Music/128631783856803?fref=ts" rel="external" data-role="button" data-inline="true" data-icon="facebook">Facebook</a>
        </footer>

</section><!-- /page -->

<section data-role="page" data-theme="a" id="Video3">
	<header data-role="header">
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
		<a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
       <h2>Video Three</h2> 
	</header>
	
	<!-- /header -->
    <!-- Space for Youtube videos -->
    <div data-role="content">
    <a href="../index.php" data-role="button" data-inline="true" data-icon="signout">Log Out</a>
	<p>Videos on this site are for Students of Great Northwest Music of Grants Pass, Oregon.</p>
	
		<iframe width="420" height="315" src="http://www.youtube.com/embed/LKJVubeajjE" frameborder="0" allowfullscreen></iframe>
    </div>

    
    <footer data-role="footer">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
            <a href="https://www.facebook.com/pages/Great-Northwest-Music/128631783856803?fref=ts" rel="external" data-role="button" data-inline="true" data-icon="facebook">Facebook</a>
        </footer>

</section><!-- /page -->

</body>
</html>
<?php
	}else{	// not logged in
		header("Location: ../enter.php");
	}