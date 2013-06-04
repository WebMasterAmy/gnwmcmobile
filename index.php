<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<link href="jqm-icon-pack-3.0.0-fa.css" rel="stylesheet" type="text/css" />
<link href="css/ListViews.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.mobile-1.3.1.css" rel="stylesheet" type="text/css" />
<link href="css/gnwmthemes.css" rel="stylesheet" type="text/css" />
<link href="css/gnwmc-mobile.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.mobile-1.3.1.js"></script>

<title>Great Northwest Music</title>

</head>

<body>
<section data-role="page" data-theme="a" id="Home" class="ListViews">
<a href="../public/index.php" data-role="button" data-inline="true" data-mini="true" data-ajax="false">View Full Site</a>
	<h2 id="banner"><p>Great Northwest Music</p></h2><!--Banner area for Logo -->
    <header data-role="header"><h2></h2>
    	<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
		<a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	  </header>
	<!-- /header -->
	<div data-role="content">
	
        <ul data-role="listview" data-inset="true">
        	<li><a href="#Map" data-rel="dialog">
            	<img src="images/piano.JPG">
            	<h2>Store Info</h2>
                <p>Hours, phone, map.</p>
            </a></li>
        	<li><a href="#Lessons">
            	<img src="images/voice.JPG">
            	<h2>Lessons</h2>
                <p>We offer a variety of lessons, both private and group.</p>
            </a></li>
        	<li><a href="#CalendarOfEvents">
            	<img src="images/guitar.jpg">
            	<h2>Calendar of Events</h2>
                <p>What's happening locally.</p>
            </a></li>
        	<li><a href="#Sales">
            	<img src="images/drums.JPG">
            	<h2>Sales</h2>
                <p>Instruments, sheet music, parts.</p>
            </a></li>
        	<li><a href="#Rentals">
            	<img src="images/clarinet.JPG">
            	<h2>Rentals</h2>
                <p>Information about rental instruments for band and strings.</p>
            </a></li>
        	<li><a href="#FAQ">
            	<img src="images/viola.JPG">
            	<h2>FAQ</h2>
                <p>Frequently asked questions and answers.</p>
            </a></li>
            <li><a href="#StudentLogin" data-rel="dialog">
            	<img src="images/violin.jpg">
            	<h2>Student Login</h2>
                <p>Information for current students.</p>
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
<section id="phone" data-role="page">
        <div data-role="header">
            <h1><a href="tel:15417611893">541-956-8600</a></h1>
        </div>
</section>
<section id="contact" data-role="page" data-theme="a">
        <div data-role="header">
            <h1>Send Us a Message</h1>
        </div>
        <div data-role="content">
                    	<form name="contact" action="contact.php" method="post">
                            			<label for="Sender">Your Name:</label>
                                    	<input type="text" name="Sender" id="Sender" value="<?php echo $Sender; ?>" placeholder="Your Name"/>
                                        
                                        <label for="Phone">Phone Number:</label>
			    						<input type="tel" name="Phone" id="Phone" value="<?php echo $Phone; ?>" placeholder="Your Phone Number">
                             		    
                                        <label for="Email">Your email: </label>
                                		<input type="email" name="Email" id="Email" value="<?php echo $Email; ?>" placeholder="Your Email"/>
                            	
                            			<label for="Message">How can we help you?</label>
            							<textarea name="Message" id="Message" cols="25"><?php echo $Message; ?></textarea>
                                
                           
                            	<input type="reset" value="Clear Form" />
                                &nbsp;
                                &nbsp;
                                <input type="submit" name="Submit" value="Send Form" />
                    	</form>
                        
                    
        </div>
        <footer data-role="footer" class="ui-bar">We are happy to hear from you.</footer>
</section>
<section id="Map" data-role="page" data-theme="a">
<div data-role="header">
	<h1>Store Information and Map</h1>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>  
        </div>
    <div data-role="content">
    <h2>Great Northwest Music is located in the Town Center Plaza on G Street, in the heart of downtown Grants Pass.</h2>
            <p>220 SW G Street Grants Pass, OR 97526 Phone: (541) 956-8600</p>
        <a href="http://maps.google.com/maps?rlz=1C1CHFX_enUS529US529&q=220+SW+G+Street+Grants+Pass,+OR+97526&um=1&ie=UTF-8&hq=&hnear=0x54c57a3b12d2f7e9:0xcfea777db4a85227,220+SW+G+St,+Grants+Pass,+OR+97526&gl=us&sa=X&ei=LB5_Ub-2Eo6PigLG7YGABA&ved=0CDAQ8gEwAA" rel="external"><img id="Map" src="https://maps.googleapis.com/maps/api/staticmap?center=220 SW G St, Grants Pass, OR&amp;zoom=15&amp;size=288x200&amp;markers=220 SW G St, Grants Pass, OR&amp;sensor=false"
        width="288" height="200"></a></div>
        <footer data-role="footer" class="ui-bar"id="MapFooter">Hours:<br />Monday-Thursday: 10:00-1:00 and 2:00-6:00<br />Friday: 2:00-6:00<br />Saturday: 10:00-1:00<br />Sunday: Closed<br />
        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
        <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a></footer>
        
</section> 
<!--Lessons Page Begin -->
<section data-role="page" data-theme="a" id="Lessons" class="ListViews">
<a href="../public/index.php" data-role="button" data-inline="true" data-mini="true" data-ajax="false">View Full Site</a>
		<h2 id="banner"><p>Great Northwest Music</p></h2><!--Banner area for Logo -->
    <header data-role="header"><h2></h2>
    	<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	  </header>
	<div data-role="content">
    <p>Great Northwest Music Academy offers music classes and lessons for all ages from babies to senior adults.</p>
    <p><a href="pdf/schedule.pdf" rel="external">Click here</a> to view our current class schedule.</p>
        <ul data-role="listview" data-inset="true">
        	<li><a href="#Accordion">
            	<img src="images/accordian.JPG">
            	<h2>Accordion</h2>            </a></li>
        	<li><a href="#Banjo">
            	<img src="images/banjo.JPG">
            	<h2>Banjo</h2>
            </a></li>
        	<li><a href="#Cello">
            	<img src="images/cello.JPG">
            	<h2>Cello</h2>
          </a></li>
        	<li><a href="#Clarinet">
            	<img src="images/clarinet.JPG">
            	<h2>Clarinet</h2>
          </a>
          <li><a href="#Drums">
            	<img src="images/drums.JPG">
            	<h2>Drums</h2>
            </a></li>
        	<li><a href="#Electric Bass">
            	<img src="images/bass.JPG">
            	<h2>Electric Bass</h2>
            </a></li>
        	<li><a href="#Flute">
            	<img src="images/flute.jpg">
            	<h2>Flute</h2>
          </a></li>
          <li><a href="#Guitar">
            	<img src="images/guitar.jpg">
            	<h2>Guitar</h2>
            </a></li>
            <li><a href="#HandPercussion">
            	<img src="images/HandPercussion.JPG">
            	<h2>Hand Percussion</h2>
            </a></li>
            <li><a href="#Kindermusic">
            	<img src="images/ourTime_t.jpg">
            	<h2>Kindermusik</h2>
            </a></li>
        	
        	<li><a href="#Mandolin">
            	<img src="images/mandolin.JPG">
            	<h2>Mandolin</h2>
            </a></li>
        	<li><a href="#Organ">
            	<img src="images/organ.JPG">
            	<h2>Organ</h2>
            </a></li>
        	<li><a href="#Piano">
            	<img src="images/piano.JPG">
            	<h2>Piano</h2>
            </a></li>
        	<li><a href="#Recorder">
            	<img src="images/recorder.png">
            	<h2>Recorder</h2>
            </a></li>
        	<li><a href="#Saxaphone">
            	<img src="images/saxaphone.jpg">
            	<h2>Saxophone</h2>
            </a></li>
        	<li><a href="#Songwriting">
            	<img src="images/songwriting.JPG">
            	<h2>Song writing</h2>
            </a></li>
            <li><a href="#Ukelele">
            	<img src="images/Ukulele.JPG">
            	<h2>Ukulele</h2>
          </a></li>
          <li><a href="#Violin">
            	<img src="images/violin.jpg">
            	<h2>Violin</h2>
          </a></li>
          <li><a href="#Voice">
            	<img src="images/voice.JPG">
            	<h2>Voice</h2>
            </a></li>
            
      </ul>
                
    </div><!-- /content -->
    
    <footer data-role="footer">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
            <a href="https://www.facebook.com/pages/Great-Northwest-Music/128631783856803?fref=ts" rel="external" data-role="button" data-inline="true" data-icon="facebook">Facebook</a>
        </footer>

</section><!--Lessons Page End -->
<!--Begin Individual Lesson Type Pages 9 total -->
<section data-role="page" data-theme="a" id="Kindermusic" class="ListViews">

	<div data-role="header">
		<h1>Kindermusik</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left"  data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Kindermusik introduces your young child to the joy and adventure of music. From birth through age seven, with the caring guidance of our trained and licensed Kindermusik educators, your child can grow and learn through joyful musical experiences that foster music skills as well as promoting social, emotional, cognitive, language and physical development.</p>
    <p>Instructors available for Kindermusik Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor1" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Maria</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula gravida magna. Phasellus at lobortis felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p class="ui-li-aside">Maria's Schedule</p>
            </a></li>
        	<li><a href="#Instructor2" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Bob</h2>
                <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>
                <p class="ui-li-aside">Bob's schedule</p>
            </a></li>
        	<li><a href="#Instructor3" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Brian</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Brian's Schedule</p>
            </a></li>
            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Accordion" class="ListViews">

	<div data-role="header">
		<h1>Accordion</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Banjo" class="ListViews">

	<div data-role="header">
		<h1>Banjo</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Cello" class="ListViews">

	<div data-role="header">
		<h1>Cello</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Clarinet" class="ListViews">

	<div data-role="header">
		<h1>Clarinet</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Drums" class="ListViews">

	<div data-role="header">
		<h1>Drums</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left"data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>The beginning drumming class for ages 10 to 13 is a good preparation for learning drum set or playing in band. Our family drumming class starting this fall for ages 8 to adult offers a more
relaxed atmosphere and focuses on African and Latin rhythms played with conga style drums
and other world percussion instruments.
</p>
    <p>Instructors available for Drum Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor8" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Arleigh</h2>
                <p>Nokia confirms the end of Symbian</p>
                <p class="ui-li-aside">Arleigh's schedule</p>
            </a></li>
            <li><a href="#Instructor9" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Amy</h2>
                <p>Apple released iOS 6.1</p>
                <p class="ui-li-aside">Amy's schedule</p>
            </a></li>
            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Electric Bass" class="ListViews">

	<div data-role="header">
		<h1>Electric Bass</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left"data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Flute" class="ListViews">

	<div data-role="header">
		<h1>Flute</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Guitar" class="ListViews">

	<div data-role="header">
		<h1>Guitar</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left"  data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="HandPercussion" class="ListViews">

	<div data-role="header">
		<h1>Hand Percussion</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Kindermusik" class="ListViews">

	<div data-role="header">
		<h1>Kindermusik</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Mandolin" class="ListViews">

	<div data-role="header">
		<h1>Mandolin</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Organ" class="ListViews">

	<div data-role="header">
		<h1>Organ</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Piano" class="ListViews">

	<div data-role="header">
		<h1>Piano</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>We offer both classes and private piano lessons for students from age 6 through adults. Often considered the best first instrument to learn, the piano or keyboard is laid out in
such a way as to make understanding music easier. More
</p>
    <p>Instructors available for Piano and Keyboard lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor10" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Andy</h2>
                <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>
                <p class="ui-li-aside">Andy's Schedule</p>
            </a></li>
        	<li><a href="#Instructor11" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Alex</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Alex's Schedule</p>
            </a></li>
            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Recorder" class="ListViews">

	<div data-role="header">
		<h1>Recorder</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>The recorder is one of the most popular beginning musical instruments because it is easy to play and has a lovely sound when played correctly. We offer a beginning recorder class for ages
7-10 and a recorder ensemble for continuing students or those who have learned recorder at school. Private lessons in recorder are also available.</p>
    <p>Instructors available for Recorder Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor3" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Brian</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Brian's Schedule</p>
            </a></li>
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Saxaphone" class="ListViews">

	<div data-role="header">
		<h1>Saxophone</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Songwriting" class="ListViews">

	<div data-role="header">
		<h1>Song writing</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>These classes for teens and adults provide an opportunity to learn to write songs, put your songs into standard music notation, read music or expand your understanding of the building blocks
of music--scales, chords and the circle of fifths.</p>
    <p>Instructors available for Song writing and Music Theory Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor9" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Amy</h2>
                <p>Apple released iOS 6.1</p>
                <p class="ui-li-aside">Amy's schedule</p>
            </a></li>
        	<li><a href="#Instructor10" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Andy</h2>
                <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>
                <p class="ui-li-aside">Andy's Schedule</p>
            </a></li>
        	<li><a href="#Instructor11" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Alex</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Alex's Schedule</p>
            </a></li>
            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Ukelele" class="ListViews">

	<div data-role="header">
		<h1>Ukulele</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our classes and lessons for ages 8 to adult introduce beginners to a wide variety of styles. Guitar is one of our most requested classes, probably because this instrument is played in so
much of the popular music of our day.</p>
    <p>Instructors available for Guitar Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Violin" class="ListViews">

	<div data-role="header">
		<h1>Violin</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our band and string programs include ensembles for those who already play as well as classes for adult beginners and those who need a refresher to recover past music reading skills and
improve their playing ability. The emphasis is on having fun and enjoying the social aspects of
playing music. Private lessons are also available for students of all ages.</p>
    <p>Instructors available for Band and Strings lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor1" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Maria</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula gravida magna. Phasellus at lobortis felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p class="ui-li-aside">Maria's Schedule</p>
            </a></li>
        	<li><a href="#Instructor2" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Bob</h2>
                <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>
                <p class="ui-li-aside">Bob's schedule</p>
            </a></li>
        	<li><a href="#Instructor3" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Brian</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Brian's Schedule</p>
            </a></li>
            <li><a href="#Instructor6" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Don</h2>
                <p>ZTE to launch Firefox OS smartphone at MWC</p>
                <p class="ui-li-aside">Don's Schedule</p>
            </a></li>
        	<li><a href="#Instructor7" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Kendra</h2>
                <p>First Samsung phones with Tizen can be expected in 2013</p>
                <p class="ui-li-aside">Kendra's Schedule</p>
            </a></li>
            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Voice" class="ListViews">

	<div data-role="header">
		<h1>Voice</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Our vocal program for singers from 8 year olds to adults offers an opportunity to sing a variety of music under the direction of an experienced voice teacher. We also offer private voice lessons.</p>
    <p>Instructors available for Vocal Lessons:</p>
     <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor7" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Kendra</h2>
                <p>First Samsung phones with Tizen can be expected in 2013</p>
                <p class="ui-li-aside">Kendra's Schedule</p>
            </a></li>
        	<li><a href="#Instructor8" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Arleigh</h2>
                <p>Nokia confirms the end of Symbian</p>
                <p class="ui-li-aside">Arleigh's schedule</p>
            </a></li>

            </ul>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>



<!--End of Individual Lesson Pages -->
<!--Instructor Page Begin page not used, uncomment to use, listview of all intructors linking to individual pages for each with schedules-->
<!-- <section data-role="page" data-theme="a" id="Instructors" class="ListViews">
	<header data-role="header"><a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home" data-iconpos="notext" data-rel="back"></a></header>
	<h2 id="banner"><p>Great Nortwest Music</p></h2>
	<div data-role="content">
	
        <ul data-role="listview" data-inset="true">
        	<li><a href="#Instructor1" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Maria</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula gravida magna. Phasellus at lobortis felis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                <p class="ui-li-aside">Maria's Schedule</p>
            </a></li>
        	<li><a href="#Instructor2" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Bob</h2>
                <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>
                <p class="ui-li-aside">Bob's schedule</p>
            </a></li>
        	<li><a href="#Instructor3" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Brian</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Brian's Scheduls</p>
            </a></li>
        	<li><a href="#Instructor4" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Steve</h2>
                <p>New Samsung Galaxy Express</p>
                <p class="ui-li-aside">Steve's Schedule</p>
            </a></li>
        	<li><a href="#Instructor5" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Darryl</h2>
                <p>Rumours about new full HD Nexus 7</p>
                <p class="ui-li-aside">Darryl's Schedule</p>
            </a></li>
        	<li><a href="#Instructor6" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Don</h2>
                <p>ZTE to launch Firefox OS smartphone at MWC</p>
                <p class="ui-li-aside">Don's Schedule</p>
            </a></li>
        	<li><a href="#Instructor7" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Kendra</h2>
                <p>First Samsung phones with Tizen can be expected in 2013</p>
                <p class="ui-li-aside">Kendra's Schedule</p>
            </a></li>
        	<li><a href="#Instructor8" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Arleigh</h2>
                <p>Nokia confirms the end of Symbian</p>
                <p class="ui-li-aside">Arleigh's schedule</p>
            </a></li>
            <li><a href="#Instructor9" data-rel="dialog">
            	<img src="images/female.png">
            	<h2>Amy</h2>
                <p>Apple released iOS 6.1</p>
                <p class="ui-li-aside">Amy's schedule</p>
            </a></li>
        	<li><a href="#Instructor10" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Andy</h2>
                <p>BlackBerry launched the Z10 and Q10 with the new BB10 OS</p>
                <p class="ui-li-aside">Andy's Schedule</p>
            </a></li>
        	<li><a href="#Instructor11" data-rel="dialog">
            	<img src="images/male.png">
            	<h2>Alex</h2>
                <p>Nokia rolls out WP 7.8 to Lumia 800</p>
                <p class="ui-li-aside">Alex's Schedule</p>
            </a></li>
        </ul>
                
    </div>
    
    <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
            <a href="https://www.facebook.com/pages/Great-Northwest-Music/128631783856803?fref=ts" rel="external" data-role="button" data-inline="true" data-icon="facebook">Facebook</a>
        </footer>

</section><!--Instructor Page End -->

<section data-role="dialog" data-theme="a" id="Instructor1">
	<div data-role="header">
		<h1>Maria</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor2">

	<div data-role="header">
		<h1>Bob</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor3">

	<div data-role="header">
		<h1>Brian</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor4">

	<div data-role="header">
		<h1>Steve</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor5">

	<div data-role="header">
		<h1>Darryl</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor6">

	<div data-role="header">
		<h1>Don</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor7">

	<div data-role="header">
		<h1>Kendra</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor8">

	<div data-role="header">
		<h1>Arleigh</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor9">

	<div data-role="header">
		<h1>Amy</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a> 
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor10">

	<div data-role="header">
		<h1>Andy</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Instructor11">

	<div data-role="header">
		<h1>Alex</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- /header -->
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at neque massa, et molestie tortor. Duis iaculis lorem id nisl tincidunt ac viverra nulla mattis.</p>
    <div class="ui-grid-b">
                <div class="ui-block-a"><p>Monday</p></div>
                <div class="ui-block-b"><p>Tuesday</p></div>
                <div class="ui-block-c"><p>Wednesday</p></div>
                <div class="ui-block-a"><p>Thursday</p></div>
                <div class="ui-block-b"><p>Friday</p></div>
                <div class="ui-block-c"><p>Saturday</p></div>
            </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="FAQ" class="ListViews">
	<h2 id="banner"><p>Great Northwest Music</p></h2><!--Banner area for Logo -->
    <header data-role="header"><h2></h2>
    	<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	  </header>
	
	<div data-role="content">
	
        <ul data-role="listview" data-inset="true">
        <h2>Retail</h2>
        	<li><a href="#Answer1" data-rel="dialog">
            	<img src="images/MusicNote1.png">
            	<h2>What size of guitar should I buy for my child?</h2>
          </a></li>
        	<li><a href="#Answer2" data-rel="dialog">
            	<img src="images/MusicNote2.png">
            	<h2>What are the differences between classical, acoustic and electric guitars?</h2>
            </a></li>
        	<li><a href="#Answer3" data-rel="dialog">
            	<img src="images/MusicNote3.png">
            	<h2>Should a beginner learn on a classical, acoustic or electric guitar?</h2>
            </a></li>
            </ul>
            <ul data-role="listview" data-inset="true">
        	<h2>Academy</h2>
        	<li><a href="#Answer4" data-rel="dialog">
            	<img src="images/MusicNote1.png">
            	<h2>How old does a child have to be to begin lessons?</h2>
            </a></li>
        	<li><a href="#Answer5" data-rel="dialog">
            	<img src="images/MusicNote2.png">
            	<h2>Are keyboard lessons and classes the same as piano?</h2>
            </a></li>
        	<li><a href="#Answer6" data-rel="dialog">
            	<img src="images/MusicNote3.png">
            	<h2>Is it better for a child to take classes or private lessons?</h2>
            </a></li>
        	<li><a href="#Answer7" data-rel="dialog">
            	<img src="images/MusicNote1.png">
            	<h2>Can a student join a class once it has already started?</h2>
            </a></li>
        	<li><a href="#Answer8" data-rel="dialog">
            	<img src="images/MusicNote2.png">
            	<h2>Do students have opportunities to perform?</h2>
            </a></li>
            <li><a href="#Answer9" data-rel="dialog">
            	<img src="images/MusicNote3.png">
            	<h2>What is an Apprentice Teacher?</h2>
            </a></li>
        	<li><a href="#Answer10" data-rel="dialog">
            	<img src="images/MusicNote1.png">
            	<h2>What are the qualifications of your Master Teachers?</h2>
            </a></li>
   	  </ul>
    </div><!-- /content -->
    <footer data-role="footer">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
            <a href="https://www.facebook.com/pages/Great-Northwest-Music/128631783856803?fref=ts" rel="external" data-role="button" data-inline="true" data-icon="facebook">Facebook</a>
    </footer>
</section>
<section data-role="page" data-theme="a" id="Answer1">
	<div data-role="header">
		<h1>What size of guitar should I buy for my child?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p>If you have access to try out different guitar sizes, look for the largest one that allows the student to play a full G chord without touching any of the open strings with the left hand (ask someone who plays the guitar to help you test this). The student also should be able to see where to put the left hand fingers without having to turn the guitar up for a better look.</p> 

<p>If you don't have access to different sized guitars, here are some general guidelines:</p>
<table border="1" cellpadding="10" align="center">

<tr>
	<td>Ages 4 - 6 </td>
	<td>up to 3'9" tall</td>
	<td>1/4 size (30") guitar</td>
</tr>
<tr>
	<td>Ages 7 - 8 </td>
	<td>3'10" - 4'5" tall</td>
	<td>1/2 size (34") guitar</td>
</tr>
<tr>
	<td>Ages 9-11 </td>
	<td>4'6" - 4'11" tall</td>
	<td>3/4 size (36") guitar</td>
</tr>
<tr>
	<td>Ages 12 and older </td>
	<td>5' and taller</td>
	<td>7/8 or Full Size guitar</td>
</tr>
</table>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer2">

	<div data-role="header">
		<h1>What are the differences between classical, acoustic and electric guitars?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p>Classical guitars have nylon strings with wider necks that allow the strings to be farther apart to facilitate finger picking.  They usually do not have a strap button on the bottom and often have decorative artwork around the sound hole.  Classical guitars are traditionally used to play classical, Flamenco, and folk music.  They have a mellow sound. Note that it is not recommended to put steel strings on a classical guitar, since the neck is not reinforced to hold the stronger pull of the steel strings.</p>

<p>Acoustic guitars have steel strings with a narrower neck than a classical guitar.  They generally have a strap button on the bottom and a pick guard under the sound hole.  Acoustic guitars have a brighter sound than the classical guitar and are used to play country and folk music as well as many other styles of popular music.  Acoustic guitars may be amplified using an added pick-up; acoustic-electric guitars have the pick-up designed as an integral part of the guitar.</p>

<p>Electric guitars may have a hollow or solid body and come in many different shapes and styles. They require an amplifier with speakers for the sound to be heard. Electric guitars have a strap button on the bottom and on the left side of the body and often have a pick guard on the front.  They usually have both a volume and a tone control and may also have other controls as well as  two or more pickups that can be selected individually or together for a variety of sound options.  Many accessories are available for the electric guitar providing a wide range of effects. </p>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer3">

	<div data-role="header">
		<h1>Should a beginner learn on a classical, acoustic or electric guitar?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p>A beginner may start on either a classical, acoustic or electric guitar.  All three guitars are available in 1/4, 1/2, 3/4 and full sizes.  There are advantages and disadvantages for each type (see table below), and the student should weigh them to decide which one will fit his personality, learning style, and music goals.</p>
                    
                    <table border="1" cellpadding="10" align="center">
<tr>
	<th>Type of Guitar</td>
	<th>Advantages</td>
	<th>Disadvantages</td>
</tr>
<tr>
	<td valign="top">Classical</td>
	<td valign="top"><font size="2">Nylon strings are easier on the fingers, so the beginner may be more willing to practice and continue lessons.<p>
No amplifier is required, making the guitar more portable.</font></td>
	<td valign="top"><font size="2">The neck is wider, so the beginner with small hands may have difficulty fingering some chords.</font><p>
<font size="2">The mellow sound of the classical guitar may not match the expectations of the student who is wanting to play popular music.  This may affect the student's motivation to play.</font></td>
</tr>
<tr>
	<td valign="top">Acoustic</td>
	<td valign="top"><font size="2">The neck is narrower than the classical guitar, making it easier for small hands to play.<p>
The sound of the acoustic guitar is familiar as it is used in popular music - this may help the student's motivation to play.<p>
No amplifier is required making the guitar more portable.<p>
To make it easier on the fingers it is possible to replace the steel strings on an acoustic guitar with nylon strings while the student is learning.  If you choose to do this, be sure to purchase nylon strings with ball ends.  The student may still have some discomfort whenever the steel strings begin to be used.</font></td>
	<td valign="top"><font size="2">The steel strings are harder on the fingers which become sore from practice until callouses are formed.  This may cause some students to give up their guitar playing.  However, the pain does go away completely after the callouses are formed and most students are able to work through the painful period by practicing in shorter sessions as necessary.</font></td>
</tr>
<tr>
	<td valign="top">Electric</td>
	<td valign="top"><font size="2">Contrary to popular opinion, there is no reason a beginner cannot start on an electric guitar. Playing the electric guitar can be very motivating for the student whose goal is to play rock or country music.  If they start on the acoustic or classical guitar, they may not be getting the sound that they crave, resulting in lack of motivation and discontinuing lessons.<p>
The strings on an electric guitar are closer to the fret board making it a little easier on the fingers than an acoustic guitar.  <p>
If the student uses an amplifier that has a headphone jack, they can practice without disturbing others.  This can be a huge advantage in a small home and could result in the student practicing more frequently since there is no embarrassment due to others hearing the beginner's mistakes.</font></td>
	<td valign="top"><font size="2">Electric guitars and the required amplifiers are a bit more expensive than beginner classical and acoustic guitars. <p>

An amplifier is required, making the guitar less portable.<p>If the student prefers the acoustic style and sound, the electric guitar will not be a good fit--the sound created by the electric guitar will not meet the student's expectations and may result in lack of motivation and/or discontinuing playing. </font>

	</td>    </tr></table>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer4">
	<div data-role="header">
		<h1>How old does a child have to be to begin lessons?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p>Adults can begin learning an instrument at any time.  In fact, many people invest the time during their retirement years to learn a musical instrument!</p>  
                    <p>For children, starting at the right age is a key element of success.  Children put into lessons too soon may feel overwhelmed and frustrated and want to stop lessons. A child who is driven to learn may be an exception to the starting ages given below if taught by the right teacher.  Children older than the suggested earliest starting age usually do very well.</p>  
					<p><b>Birth to 5 years old:</b> Kindermusik classes are highly recommended.  See Benefits box on the previous page.</p>   
					<p><b>Piano/Keyboard:</b> 5+ years.  By this age children have longer attention spans, can retain information and have the hand size and finger strength needed for playing.</p> 
					<p><b>Guitar</b>:  8+ years.  Guitar playing requires a fair amount of pressure on the fingertips from pressing on the strings, which may discourage younger students who also may not have the fine motor coordination necessary.</p>   
					<p><b>Voice</b>:  8+ years for group instruction, 10+ years for private lessons.  Due to the physical nature of voice training (lung capacity and development of vocal chords and lung capacity), the younger body is generally not yet ready for the rigors of vocal technique taught in private lessons.</p> 
					<p><b>Drums</b>:  Children can begin hand drumming at any age and drum set lessons as soon as they can reach both the pedals and the cymbals. Music4Kids sells quality junior sized drum sets for this purpose.</p>   
					<p><b>Flute, Clarinet, Saxophone, Trumpet, Trombone</b>:  9+ years. Wind instruments require lung capacity, physical exertion and the physical size to be able to hold and reach all the notes on the instrument.  Therefore 9 years and older is the recommended age to start.  (Band starts in 5th grade in the Grants Pass School District and in Middle School in the Three Rivers School District.)</p> 
					<p><b>Violin</b>:  5+ years.  Some teachers will start children as young as 3, but the most productive learning occurs when the beginner is 5 years or older.  (String instruction begins in the 4th grade in the Grants Pass School District.)</p>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer5">
	<div data-role="header">
		<h1>Are keyboard lessons and classes the same as piano?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p>The most noticeable difference between a keyboard and a piano for the beginning student is the strength needed in the fingers to push down the keys; the learning process is the same.  We use electronic keyboards in our keyboard classroom and one digital piano which has weighted keys that require the same strength to play as an acoustic piano.</p>
                    <p>The type of instrument used once a week for classes is less important than the student's practice instrument.  Students who have a piano to practice on at home will develop the finger strength needed to play the piano.  Students who practice on a piano at home are welcome to play on our digital piano during classes. Please let us know if you would like your child to play on the digital piano in class.  If we have more than one request, we will rotate those students on the piano on a weekly basis.</p>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer6">

	<div data-role="header">
		<h1>Is it better for a child to take classes or private lessons?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p>If your child has take lessons previously, private lessons are required.  However, if your child is an absolute beginner, you have the option to begin in a class.  There are advantages to each approach.</p> 				<p>In a class students learn in a social atmosphere where they may be motivated by the group to practice.  Learning with others also tends to make simple beginning concepts more interesting.</p>
                    <p>In addition, classes require students to learn to play in unison with others, which aids tremendously in learning to keep a steady beat while playing and learning to play songs from beginning to end without pausing or stopping.  This ability to play in ensemble is something that private students do not always attain.</p>  
                    <p>On the other hand, students get more personal attention in a private lesson and may progress further in the same amount of time.</p> 
                    <p>Classes are a good way to begin, moving to private lessons after basic concepts and skills have been mastered.</p>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer7">
	<div data-role="header">
		<h1>Can a student join a class once it has already started?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p><strong>Kindermusik classes: </strong> Except for Kindermusik for the Young Child, new students may join Kindermusik classes at any time (unless they are full).  For Kindermusik for the Young Child, we only accept new students in the first four weeks in the fall semester or in the first week of the second semester.</p>
                    <p><strong>Musical Instrument Classes:</strong>  We accept new students in these classes only during the first 2 weeks of the class.  Classes may begin in September, February or June/July. </p>

					<p><strong>Child and Youth Ensembles:</strong>  We accept new students in the first two weeks of the fall semester, in the first two weeks immediately after the Christmas break, and within two weeks after our annual recital in June.</p>

					<p><strong>Adult Ensembles: </strong> We accept new students at any time.</p>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer8">

	<div data-role="header">
		<h1>Do students have opportunities to perform?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p><strong>Kindermusik classes: </strong> These classes provide an introduction to music without the pressure of performance, so students do not perform.</p>
                    <p><strong>Ensembles: </strong> Ensembles perform at various community venues throughout the year, on the small stage at our store several times in the year, at our Holiday Music Night and also at our annual Spring Recital.</p>

					<p><strong>Classes and Private Lessons:</strong>  Students who are in their second year of study and above have the opportunity to perform during our Holiday Music Night and at our annual Spring Recital.  Beginners are encouraged to participated in Music Parties where they perform for smaller groups of family and friends. We also offer opportunities for students to perform on the small stage at our store during First Friday Art Nights and during the holiday season.  All performing opportunities are optional, but highly encouraged.  The younger a student begins performing for others, the easier it is to share their musical gifts as they get older.  					</p>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Answer9">

	<div data-role="header">
		<h1>What is an Apprentice Teacher?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <p>An apprentice teacher is an advanced music student who has been recommended to us by their instrumental or vocal teacher, and many have teaching experience gained through assisting music teachers in local elementary and middle schools.  Young beginning students look up to these high school and college age students and have great respect for them.  This helps motivate the students to practice and excel in their lessons.  Apprentice teachers teach under the guidance of a master teacher.</p>
     <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
     </footer>
</section>
<section data-role="page" data-theme="a" id="Answer10">

	<div data-role="header">
		<h1>What are the qualifications of your Master Teachers?</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
	<p>All of our master teachers have a music degree from a college or university or they have extensive experience teaching and/or performing experience.  In addition, we carefully select teachers who demonstrate caring attitudes toward their students.  We believe that a positive, caring relationship between the teacher and the student is a critical aspect of the learning process.</p>
	<footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
	</footer>
</section>
<section data-role="page" data-theme="a" id="Sales">

	<div data-role="header">
		<h1>Sales</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    
    <p>Visit our store today for a variety of instruments and music accessories.</p>
     <div data-role="collapsible-set">
                <div data-role="collapsible" data-collapsed="true">
                    <h1>Retail Sales</h1>
                    <p>Need some content here from Andy.</p>
                </div>
                <div data-role="collapsible">
                    <h1>Consignments</h1>
                    <p>Need some content here from Andy</p>
                </div>
     </div>
    </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="Rentals">

	<div data-role="header">
		<h1>Instrument Rentals</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    <p>Great Northwest Music offers the best band and string instrument rental program in the Rogue Valley. Both Rent-to-Own and Rent Only plans are available. Our quality beginner instruments have been approved by local band and string teachers, and we also carry all the books and supplies required. Stop in to rent your instrument at our store located in the Town Center Plaza at 5th and G Streets.</p>
    <p><a href="pdf/rentalflyer.pdf" rel="external">Click here</a> for more information abuot rental instruments. (This is a pdf file and may not be viewable on your mobile device)</p>
    <div data-role="collapsible-set">
    <div data-role="collapsible" data-collapsed="true">
        <h3>Rent to own</h3>
        <ul>
            <li>100% of&nbsp;the rental portion of your monthly payment&nbsp;applies to the purchase of your instrument for as long as you rent (other plans in our area limit to 50% after the first year).</li>
            <li>Money&nbsp;paid toward purchase&nbsp;in your first instrument is applied to all exchanges.</li>
            <li>100% of your earned credit may be used toward purchase of a higher quality step-up instrument.</li>
       </ul>
    </div>
    <div data-role="collapsible" data-collapsed="true">
        <h3>Great Value</h3>
        <ul>
             <li>Free use of music stand.</li>
             <li>Free ID tag for your instrument case.</li>
             <li>Standard Maintenance and Repair Plan included.</li>
             <li>Free loaner instrument if yours is in for maintenance or repair.</li>
       </ul>
    </div>
    <div data-role="collapsible" data-collapsed="true">
        <h3>Flexible</h3>
        <ul>
             <li>Choose the Rent to Own Plan or the Rent Only option.</li>
             <li>Exchange for a different instrument or a different size at any time.</li>
             <li>No obligation - return your instrument at any time to end your contract.</li>
             <li>Optional Damage Coverage&nbsp;and&nbsp;Replacement Coverage plans&nbsp;available.</li>
       </ul>
    </div>
    <div data-role="collapsible" data-collapsed="true">
        <h3>Easy and convenient</h3>
        <ul>
             <li>We stay in contact with local band and string teachers and know what they require.</li> 
             <li>All books and supplies on your band director's list are available through our store.</li> 
             <li>We care about you and your child and do everything we can to make it easy and fun to get started on this great musical journey!</li>
       </ul>
    </div>
</div>
</div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="StudentLogin">
	<div data-role="header">
		<h1>Student Login</h1>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    	<form method="post" action="../public/login-register.php" data-ajax="false">
			<p>
				<label for="email">Email:</label>
				<input type="email" name="email" size="15">
				<input type="hidden" name="return" value="mobile" />
			</p>
			<p>
				<label for="password">Password:</label>
				<input type="password" name="password" size="15">
			</p>
			<p>
				<input type="reset" value="Cancel">
				<input type="submit" name="login" value="Log In">
			</p>
		</form>
     </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
<section data-role="page" data-theme="a" id="CalendarOfEvents">
	<div data-role="header">
		<h2>Upcoming Local Events</h2>
		<a href="index.php" data-shadow="false" data-iconshadow="false" data-icon="arrow-left" data-rel="back">Back</a>
        <a href="index.php" data-role="button" data-inline="true" data-iconshadow="false" data-icon="home">Home</a>
	</div><!-- /header -->
    <div data-role="content">
    	<h3>APRIL 7th</h3>
            <p>&quot;UNITY AND ONENESS&quot;<br>
            Musical Guest: Debbie Voltura<br></p>
            <h3>APRIL 14th</h3>
            <p>&quot;God's Grace&quot;<br>
            Musical Guest:Faith Rivera<br></p>
            <h3>APRIL 21st</h3>
            <p>&quot;THE CREATIVE USE OF IMAGINATION&quot;<br>
            Musical Guest: Kris Shelton<br>
            Special Guest&quot; Bob Deaton<br></p>
            <h3>APRIL 28th</h3>
            <p>&quot;BE STILL AND KNOW&quot;<br>
            Musical Guest: Gino Walker<br></p>
     </div>
        <footer data-role="footer" class="ui-bar">
	        <a href="#phone" data-rel="dialog" data-role="button" data-inline="true" data-icon="phone">Call</a>
            <a href="#contact" data-rel="dialog" data-role="button" data-inline="true" data-icon="envelope">E-Mail</a>
        	<a href="#Map" data-rel="dialog" data-role="button" data-inline="true" data-icon="map-marker">Map</a>
        </footer>
</section>
</body>
</html>