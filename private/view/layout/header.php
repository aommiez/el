<?php
use Main\Helper;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php
            echo \Main\AppConfig::get("application.title");
        ?>
    </title>
    <link href="<?php echo Helper\URL::absolute("/public/css/core.css")?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo Helper\URL::absolute("/public/css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo \Main\Helper\URL::absolute("/public/js/jquery.min.js")?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo \Main\Helper\URL::absolute("/public/js/bootstrap.min.js")?>"></script>
</head>
<body>

  	<header>
      	<div class="header">
              <div class="container">
                  <a name="top"></a>
                  <div class="logo">
                      <a href="<?php echo \Main\Helper\URL::absolute("/")?>"><img src="<?php echo \Main\Helper\URL::absolute("/public/images/logo.png")?>" alt="logo"></a>
                  </div><!--logo-->
                  <menu>
                      <ul class="menu">
                          <li><a class="active" href="<?php echo \Main\Helper\URL::absolute("/")?>">Home</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/itwork")?>">How it Works</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/services")?>">Services</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/categorties")?>">Categorty</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/aboutus?pages=aboutus")?>">About Us</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/signin")?>">Sign in</a></li>
                      </ul>
                  </menu><!--menu-->
              </div><!--container-->
  	</div>
  </header><!--header-->
