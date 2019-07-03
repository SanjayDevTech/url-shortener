<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Url shortener</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
    body {width: 100%;
      background-color: powderblue;}
    .center {
      padding: 70px;
      background-color: green;
      border: 3px solid green;
      text-align: center;
      position: relative;

    }
    /* unvisited link */




    </style>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <div class="center">

<?php
require 'config.php';

$con = mysqli_connect($data_host, $data_user, $data_pass, $data_name);
if (!$con) {?>
  <div class="text-danger">



  <?php
echo "Database Connection Failed";?>
  </div>
  <?php


}else{
  if(isset($_GET['short_id'])){
    $short_id=mysqli_real_escape_string($con,$_GET['short_id']);
    $user_check_query = "SELECT * FROM links WHERE short_url='$short_id' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists


      if ($user['short_url'] === $short_id) {
$short_id= $user['short_url'];
$long_id=$user['long_url']
        ?>
        <script>
        function countDown(secs,elem) {
        	var element = document.getElementById(elem);
        	element.innerHTML = "Please wait for "+secs+" seconds";
        	if(secs < 1) {
        		clearTimeout(timer);
        		element.innerHTML = '<h2><a href="<?php echo $long_id; ?>" rel="nofollow" class="btn btn-info">Click here</a></h2>';

        	}
        	secs--;
        	var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
        }
        </script>
        <div id="status" class="text-light"></div>
        <script>countDown(8,"status");</script>
        <?php

      }
    }else {?>
      <div class="text-danger">


      <?php
      echo "404 not found";?>
      </div>
      <?php
    }

  }else {?>
    <div class="text-danger">


    <?php
    echo "404 not found";?>
    </div>
    <?php
  }
?>

<?php } ?>




</div>
</div>
  </body>
</html>
