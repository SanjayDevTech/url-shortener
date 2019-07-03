
<?php
require ('config.php');
$con = mysqli_connect($data_host,$data_user,$data_pass,$data_name);
if (mysqli_connect_errno())
  {
  header('Location: install.php');
  }


 ?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title>Url shortener</title>
 <meta content="width=device-width, initial-scale=1.0" name="viewport">
 <meta content="" name="keywords">
 <meta content="" name="description">

 <!-- Favicons -->
 <link href="img/favicon.png" rel="icon">
 <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

 <!-- Bootstrap CSS File -->
 <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <!-- Libraries CSS Files -->
 <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="lib/animate/animate.min.css" rel="stylesheet">
 <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
 <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
 <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

 <!-- Main Stylesheet File -->
 <link href="css/style.css" rel="stylesheet">

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function SubmitForm() {
  var xmlhttp;
var url = $("#url").val();
var alias = $("#alias").val();
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    }
  }

$("#btn").hide();
$.post("submit.php", { url: url, alias: alias},
   function(data) {
      $("#results").show();
      $("#error").show();
      $("#btn").show();

     $('#results').html(data);

   });
}
</script>
<?php $errors=array(); ?>

 <style >
   .enter-text{
     font-family: "Montserrat", sans-serif;
     font-weight: 700;
     font-size: 16px;
     letter-spacing: 1px;

     padding: 8px 26px;
     border-radius: 3px;
     transition: 0.5s;
     margin: 10px;
     border: 3px solid #fff;
     color: #000;

   }
   .text-white{
     width: 100%;
     font-family: "Montserrat", sans-serif;
     font-weight: 700;
     font-size: 16px;
     letter-spacing: 1px;

     padding: 8px;
     border-radius: 3px;
     transition: 0.5s;
     margin: 10px;
background-color: green;
     color: #fff;

   }
   .enter-text:hover{
     color:#000;
       border: 3px solid #FF6347;

   }
   .submit-btn{
     font-family: "Montserrat", sans-serif;
     font-weight: 700;
     font-size: 16px;
     letter-spacing: 1px;

     padding: 8px 26px;
     border-radius: 3px;
     transition: 0.5s;
     margin: 10px;
     background-color: #FF6347;
     border: 3px solid #FF6347;
     color: #fff;

   }
   .submit-btn:hover{
     color:#FF6347;
      border: 3px solid #fff;
      background-color: #fff;


   }
 </style>
<style >
#results{ display:none; }
#error{display: none;}

</style>

 </head>

 <body id="body">
 	<section id="topbar" class="d-none d-lg-block">
 		<div class="container clearfix">
 			<div class="contact-info float-left">
 				<i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
 				<i class="fa fa-phone"></i> +1 5589 55488 55
 			</div>
 			<div class="social-links float-right">
 				<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
 				<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
 				<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
 				<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
 				<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
 			</div>
 		</div>
 	</section>

 	<!--==========================
 		Header
 	============================-->
 	<header id="header">
 		<div class="container-fluid">

 			<div id="logo" class="pull-left">
 				<h1><a href="#body" class="scrollto">Short<span> Urls</span></a></h1>

 			</div>

 			<nav id="nav-menu-container">
 				<ul class="nav-menu">
 					<li class="menu-active"><a href="#body">Home</a></li>
 					<li><a href="#about">About Us</a></li>
 					<li><a href="#services">Services</a></li>



 </ul>
 </nav><!-- #nav-menu-container -->
 </div>
 </header><!-- #header -->

 <!--==========================
 Intro Section
 ============================-->
 <section id="intro">

 <div class="intro-content">
 <h2>Short <span>your Urls</span><br>Easily!</h2>
 <div>
 <a href="#call-to-action" class="btn-get-started scrollto">Short Urls</a>
 <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
 </div>
 </div>

 <div id="intro-carousel" class="owl-carousel" >
 <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
 <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
 <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
 <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
 <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
 </div>

 </section><!-- #intro -->

 <main id="main">

 <!--==========================
 About Section
 ============================-->
 <section id="about" class="wow fadeInUp">
 <div class="container">
 <div class="row">
 	<div class="col-lg-6 about-img">
 		<img src="img/about-img.jpg" alt="">
 	</div>

 	<div class="col-lg-6 content">
 		<h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
 		<h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

 		<ul>
 			<li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
 			<li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
 			<li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
 		</ul>

 	</div>
 </div>

 </div>
</section>
<section id="call-to-action" class="wow fadeInUp">
 <div class="container">
 <div class="row">

   <form method="post" class="user" >
 	<div class="col-lg-3 text-center text-center">

 	<input type="url" name="url"id="url"  class="enter-text" value="https://" placeholder="https://example.com">
  <input type="text" name="alias" id="alias"   class="enter-text" placeholder="Alias">
 	</div>
 	<div id="btn" class="col-lg-3 text-center">
 		<input type="button" onclick="SubmitForm();" class="submit-btn" value="Short">
 	</div>

  <div class="text-white" id="results">


</div>

</form>
 </div>

 </div>
 </section>
 <section id="services">
 <div class="container">
 <div class="section-header">
 	<h2>Services</h2>
 	<p>We are offering many services...</p>
 </div>

 <div class="row">

 	<div class="col-lg-6">
 		<div class="box wow fadeInLeft">
 			<div class="icon"><i class="fa fa-bar-chart"></i></div>
 			<h4 class="title">Short Urls</h4>
 			<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
 		</div>
 	</div>

 	<div class="col-lg-6">
 		<div class="box wow fadeInRight">
 			<div class="icon"><i class="fa fa-picture-o"></i></div>
 			<h4 class="title">Dolor Sitema</h4>
 			<p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
 		</div>
 	</div>

 	<div class="col-lg-6">
 		<div class="box wow fadeInLeft" data-wow-delay="0.2s">
 			<div class="icon"><i class="fa fa-shopping-bag"></i></div>
 			<h4 class="title">Sed ut perspiciatis</h4>
 			<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
 		</div>
 	</div>

 	<div class="col-lg-6">
 		<div class="box wow fadeInRight" data-wow-delay="0.2s">
 			<div class="icon"><i class="fa fa-map"></i></div>
 			<h4 class="title">Magni Dolores</h4>
 			<p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
 		</div>
 	</div>

 </div>

 </div>


 <section id="contact" class="wow fadeInUp">
 <div class="container">
 <div class="section-header">
 	<h2>Contact Us</h2>
 	<p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
 </div>

 <div class="row contact-info">

 	<div class="col-md-4">
 		<div class="contact-address">
 			<i class="ion-ios-location-outline"></i>
 			<h3>Address</h3>
 			<address>A108 Adam Street, NY 535022, USA</address>
 		</div>
 	</div>

 	<div class="col-md-4">
 		<div class="contact-phone">
 			<i class="ion-ios-telephone-outline"></i>
 			<h3>Phone Number</h3>
 			<p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
 		</div>
 	</div>

 	<div class="col-md-4">
 		<div class="contact-email">
 			<i class="ion-ios-email-outline"></i>
 			<h3>Email</h3>
 			<p><a href="mailto:info@example.com">info@example.com</a></p>
 		</div>
 	</div>

 </div>
 </div>


 </section><!-- #contact -->

 </main>

 <!--==========================
 Footer
 ============================-->
 <footer id="footer">
 <div class="container">
 <div class="copyright">
 &copy; Copyright <strong>Short urls</strong>. All Rights Reserved
 </div>

 </div>
 </footer><!-- #footer -->

 <a href="#body" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

 <!-- JavaScript Libraries -->
 <script src="lib/jquery/jquery.min.js"></script>
 <script src="lib/jquery/jquery-migrate.min.js"></script>
 <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="lib/easing/easing.min.js"></script>
 <script src="lib/superfish/hoverIntent.js"></script>
 <script src="lib/superfish/superfish.min.js"></script>
 <script src="lib/wow/wow.min.js"></script>
 <script src="lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="lib/magnific-popup/magnific-popup.min.js"></script>
 <script src="lib/sticky/sticky.js"></script>



 <!-- Template Main Javascript File -->
 <script src="js/main.js"></script>

 </body>
 </html>
