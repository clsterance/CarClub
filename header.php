<!DOCTYPE html>
<!--
Template Name: Algenius
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
https://www.os-templates.com/free-website-templates/algenius
-->
<html lang="">
<head>
<title>New Braunfels Area Car Club</title>
<meta name=”description” content="New Braunfels Area Car Club is an enthusiastic group of car lovers. We are located in the New Braunfels, Seguin and surrounding area's of Texas.">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<!-- ################################################################################################ -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- ################################################################################################ -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111294723-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111294723-1');
</script>



</head>
<body id="top">

<div class="wrapper row2">
	<?php include_once 'navigation.php';?>
</div>

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-envelope-o"></i> admin@newbraunfelsareacarclub.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul>
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="../members/">Member Login</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ --> 
  </div>
</div>


<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.html">New Braunfels Area Car Club</a></h1>
    </div>
    
    
    <div id="quickinfo" class="fl_right">
    <!-- Left the placeholder for the numbers in case we want them later -->
     <!--  <ul class="nospace inline">
        <li><strong>Aliquet:</strong><br>
          +00 (123) 456 7890</li>
        <li><strong>Efficitur:</strong><br>
          +00 (123) 456 7890</li>
      </ul>-->
      
      
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>


<!-- This prevents the image and floating navigation from appearing on the index page --> 
<?php if ($txt != "Home"): ?>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<?php
switch ($txt) {
    case "Swap Meet":
        $headerimage = "images/signs.png";
        break;
    case "Car Show":
        $headerimage = "images/GoodLine.jpg";
        break;
    case "About Us":
        $headerimage = "images/39.jpg";
        break;
     case "Newsletters":
        $headerimage = "images/newsletterHeader.png";
        break; 
     case "Vendors":
        $headerimage = "images/vendors.jpg";
        break;                
    default:
    	$headerimage = "images/3535.jpg";
}
?>


<div class="wrapper bgded overlay" style="background-image:url(<?php echo "$headerimage";?>);">

  <section id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#aboutus"><?php echo "$txt";?></a></li>

    </ul>
    <!-- ################################################################################################ -->
    <h6 class="heading"><?php echo "$txt";?></h6>
    <!-- ################################################################################################ --> 
  </section>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body --> 
    <!-- ################################################################################################ -->
    <div class="content" id="aboutus"> 
      <!-- ################################################################################################ -->
      
<?php endif ?>