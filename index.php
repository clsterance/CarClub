<?php $thisPage="Home"; ?>
<?php $txt = "Home";?>

<!DOCTYPE html>
<!--
Template Name: Algenius
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html lang="">
<head>
<title>New Braunfels Area Car Club</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php include_once 'header.php';?>
<div class="wrapper row2">
<?php include_once 'navigation.php';?>
</div>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/header.jpg');">
  <article id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h3 class="heading">Welcome to New Braunfels Area Car Club</h3>
    
    <P>New Braunfels Area Car Club is a fun loving, enthusiastic group of men and woman who enjoy cruisin' 
    and socializing with classics.  We are located in the New Braunfels, Seguin and surrounding area's of Texas.</p>
    
    <p>Join us First Sunday of the Month, 2:00 PM, New Braunfels Public Library</p>

	<P>Come back to our website often to stay up on current cruises and events!</p>

    <footer><a class="btn" href="about-us.php">Learn About Us</a></footer>
    <!-- ################################################################################################ --> 
  </article>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body --> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_third first">
        <article><i class="btmspace-30 fa fa-3x fa-cogs"></i>
          <h6 class="heading font-x1">Join The Club</h6>
          <p class="btmspace-30">
          The New Braunfels Area Car Club, which is dedicated to the restoration and preservation of antique, classic, and
  		  special-interest automobiles and trucks that are at least twenty years old.  If you have a classic that is from  
  		   <?php
  		   $time = strtotime("-20 year", time());
  		   echo date("Y", $time);  
  		   ?>
  		   or older, consider joining our car club.  		  
  		  </p>
          <footer><a class="btn" href="files/registration.pdf" target="_blank">Membership Info &rsaquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-heart"></i>
          <h6 class="heading font-x1">Giving Back</h6>
          <p class="btmspace-30">Getting together and sharing a passion for cars isn't all we do.  The Club is also involved throughout the 
          community. </p>
          
          <!--  Disclaimer: https://termsfeed.com/disclaimer/e35ecdab1a249fa1832ce0fb49fe65d9
          Terms: http://driveviper.com/privacy-refund-policies.php
          What can we do to help: http://www.lonestarcorvetteclub.com/content.aspx?page_id=22&club_id=977600&module_id=273570
          Would love to get a Tech Tips sections going-->
          
          <footer><a class="btn" href="givingback.php">Read More &rsaquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-calendar"></i>
          <h6 class="heading font-x1">Upcoming Events</h6>
          
          <p class="btmspace-30">
          	Snow Bowling Party - Jan 27<BR>
          	Mardi Gras Party - TBD
          </p>
          
          <P>While we get our calendar up and running, check out the newsletter page for the most up to date club information</P>
          <footer><a class="btn" href="newsletters.php">Calendar of Events &rsaquo;</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ --> 
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>


<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/black.png');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">26th Annual Swap Meet and Sunday Car Show</h6>
    </div>
    <div class="group">
      <div class="one_half first">
      	<P>If you're looking to buy or sell any hard-to-find classic automotive parts, 
      	memorabilia or even a vehicle, then the NBACC Swap Meet is the selling or shopping experience for you! 
		</P>
		<ul>
          <li>8:00 AM to dusk</li>
          <li>1,000+ spaces of hard-to-find car parts and related items</li>
          <li>Food and drink concessions</li>
          <li>ATM at Fairgrounds</li>
          <li>Free parts hauling by swap meet volunteers</li>
          <li>Round the clock security</li>
  		</ul> 
        
        <footer><a class="btn" href="swap-meet.php">Read More &raquo;</a></footer>
      </div>
      <div class="one_half">

        <a href="#"><img src="../images/022.jpg" alt=""></a>

      </div>
    </div>
    <!-- ################################################################################################ --> 
  </section>
</div>




<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle" id="MeetWithUs">
      <h6 class="heading">Come Meet With Us</h6>
    </div>
    <div class="group testimonials">
      <article class="one_half first"><img src="images/008.jpg" alt="">
        <blockquote>
            <H6>Every Friday Night </H6>
            
            <p>Seguin, TX: Kirby Korner
            TX 123 Bypass South 
            </p>
            <p>San Antonio, TX: Biff Busby's
            IH-35 N @ Toepperwein Rd
            </p>
            <p>Sattler, TX: Cruise In 
            Fox Pizza / Movies &amp; Music Store
            </p>
            
            <p>Kerrville, TX: 
            Culver's Restaurant
            1300 Junction Hwy
            </p>
		</blockquote>
    
        </article>
      <article class="one_half"><img src="images/007.jpg" alt="">
           <H6>Second Friday Night </H6>
            <p>Castroville, TX:
            Wommack Chevrolet, Hwy 90</p>
            <H6>Every Saturday Night</H6> 
            <p>New Braunfels, TX: 
            Denny's, 1348 North IH 35</p>
            <P>
            Buda, TX: Cabela's, IH 35</P>
        </article>
    </div>
    <!-- ################################################################################################ --> 
  </section>
</div>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <figure class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group logos">
      <li class="one_quarter first"><a href="#"><img src="images/19.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/264.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/21.jpg" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/25.jpg" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ --> 
  </figure>
</div>

<?php include_once 'footer.php';?>

</body>
</html>