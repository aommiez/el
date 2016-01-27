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
    <link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/iconmoon.css" rel="stylesheet" media="screen">

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
        	<div class="top-menu">
        	<div class="container">
    		<div class="row">
        		<div class="col-md-6">
            	</div>
            	<div class="col-md-6 text-right">
                <div class="top-right login-sns">
                	<ul>
                    	<li><button type="button" class="btn btn-default btn-fb" data-toggle="tooltip" data-placement="bottom" 
                        title="เราใช้การล็อกอินผ่าน Facebook โดยขอชื่อและอีเมล์เท่านั้น ท่านสามารถเปลี่ยนแปลงข้อมูลของท่านได้ใน &#8221;แก้ไขโปรไฟล์&#8221; ได้ตลอดเวลา"><span class="icon icon-facebook text-left"></span>LOGIN</button></li>
                        <li><button type="button" class="btn btn-default btn-gg" data-toggle="tooltip" data-placement="bottom" 
                        title="เราใช้การล็อกอินผ่าน google โดยขอชื่อและอีเมล์เท่านั้น ท่านสามารถเปลี่ยนแปลงข้อมูลของท่านได้ใน &#8221;แก้ไขโปรไฟล์&#8221; ได้ตลอดเวลา"><span class="icon icon-google-plus"></span>LOGIN</button></li> 
                        <li><button type="button" class="btn btn-default btn-tt" data-toggle="tooltip" data-placement="bottom" 
                        title="เราใช้การล็อกอินผ่าน twitter โดยขอชื่อและอีเมล์เท่านั้น ท่านสามารถเปลี่ยนแปลงข้อมูลของท่านได้ใน &#8221;แก้ไขโปรไฟล์&#8221; ได้ตลอดเวลา"><span class="icon icon-twitter"></span>LOGIN</button></li>
                        <li><a class="top-en"><img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/en.gif")?>" alt="en">EN</a></li> |
                        <li><a class="top-th"><img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/th.gif")?>" alt="th">TH</a></li> 
                    </ul>
                    
                    <div class="login-finish dropdown">
                    	<ul>
                        	<li role="presentation" class="avatar dropdown"><a href="#" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="img-circle" src="<?php echo \Main\Helper\URL::absolute("/public/images/avatar.gif")?>" alt="avatar">
                            <span class="name">Alice</span></a>
                            	<ul class="dropdown-menu submenu text-left" aria-labelledby="dLabel">
                                	<li><a href=""><span class="icon icon-equalizer"></span>DASHBOARD</a></li>
                                    <li><a href=""><span class="icon icon-user"></span>edit profile</a></li>
                                    <li><a href=""><span class="icon icon-star-full"></span>my course</a></li>
                                    <li><a href=""><span class="icon icon-credit-card"></span>credit</a></li>
                                    <li class="hr"></li>
                                    <li><a href=""><span class="icon icon-exit"></span>logout</a></li>
                                </ul>
                            
                            </li> 
                        	<li class="bell"><a href="" class="icon icon-bell"></a></li> |
                            <li><a class="top-en"><img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/en.gif")?>" alt="en">EN</a></li> |
                        <li><a class="top-th"><img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/th.gif")?>" alt="th">TH</a></li>
                        </ul>
                    </div>
                    
                    <!--<div class="modal fade bs-example-modal-lg text-left" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  						<div class="modal-dialog modal-lg">
    						<div class="modal-content box-login">
                            	<div class="col-md-12 text-center">
                                	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                	<h1>Sign in</h1>
									<p>with your social network</p>
                                	<div class="login-sns">
                                    	<div class="col-sm-4">
                                        	<button type="button" class="btn btn-default btn-fb"><span class="icon icon-facebook text-left"></span>facebook</button>
                                        </div>
                                        <div class="col-sm-4">
                                        	<button type="button" class="btn btn-default btn-gg"><span class="icon icon-google-plus"></span>google</button>
                                        </div>
                                        <div class="col-sm-4">
                                        	<button type="button" class="btn btn-default btn-tt"><span class="icon icon-twitter"></span>twitter</button>
                                        </div>
                                    </div>
                              	</div>
                                <div class="col-md-12 text-center">
                                    <div class="or"><span>or</span></div>
                                </div>
                                <div class="col-md-12">
                                	<form autocomplete="off">
                                    	<span class="input-group to_be_hidden btn-box-login">
											<input type="text" name="username" id="gr_login_username" tabindex="1" autocomplete="off" autofocus autocapitalize="off" autocorrect="off" placeholder="Username or email">
                                        	<label for="gr_login_username">Username or email</label>
                                   		</span>
                                        <span class="input-group to_be_hidden btn-box-login">
											<input type="password" name="password" id="gr_login_password" tabindex="1" autocomplete="off" autofocus autocapitalize="off" autocorrect="off" placeholder="Password">
                                        	<label for="gr_login_username">Password</label>
                                   		</span>
                                        <span class="checkbox-group text-right to_be_hidden">
                                            <label for="gr_login_rememberme" class="text">Keep me signed in</label>
                                            <input type="checkbox" name="remember" id="gr_login_rememberme" value="">
                                            <label for="gr_login_rememberme" class="fake-checkbox"></label>
                                        </span>
                                        <span class="btn-signin">
                                        	<button type="button" class="btn btn-primary">sign in</button>
										</span>
                                        <div class="bottom-links">
											<a href="register.php" class="href-sign-up text-left">Not a member? Sign up</a>
											<a href="" class="href-lost-password to_be_hidden pull-right text-right">Forgot your password?</a>
											<div><a href="" class="pull-right problems_signing text-right">Problems signing in?</a></div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>-->
            	</div>	
            </div>
        </div>
    </div>
    </div>
              <div class="container">
                  <a name="top"></a>
                  <div class="logo">
                      <a href="<?php echo \Main\Helper\URL::absolute("/")?>"><img src="<?php echo \Main\Helper\URL::absolute("/public/images/logo.png")?>" alt="logo"></a>
                  </div><!--logo-->
                  <menu>
                      <ul class="menu">
                          <li><a class="active" href="<?php echo \Main\Helper\URL::absolute("/")?>">Home</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/aboutus?pages=aboutus")?>">About Us</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/course")?>">Courses</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/teacher")?>">Teachers</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/blogs")?>">Blogs</a></li>
                          <li><a href="<?php echo \Main\Helper\URL::absolute("/webboard")?>">Webboard</a></li>
                      </ul>
                  </menu><!--menu-->
              </div><!--container-->
  	</div>
  </header><!--header-->
  
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

<script>
$('.dropdown-toggle').dropdown()
</script>

