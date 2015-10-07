<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sign In</title>

<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/signin.css")?>">
<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/global.css")?>">
<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/font.css")?>">
<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/findhelp.css")?>">
<?php echo \Main\Helper\URL::absolute("/public/")?>
</head>

<body>

	<?php $this->import("/layout/header"); ?>
    <!--header-->
    <?php $this->import("/layout/findhelp"); ?>
    <!--findhelp-->

	<div class="container">
    	<div class="page-next">
         	<div class="breadcrumb">
            	<ol>
                	<li><a href="<?php echo \Main\Helper\URL::absolute("/")?>">Home</a></li> //
                    <li class="active">Sign In</li>
                </ol>
			</div><!--breadcrumb-->
            <!--<div class="sub-menu">
            	<ul>
                	<li><a class="active" href="">about us</a></li>
                  	<li><a href="">contact us</a></li>
                    <li><a href="">report bug</a></li>
                    <li><a href="">policies</a></li>
               	</ul>
           </div><!--sub-menu-->
		</div><!--page-next-->
	</div><!--container-->
    <div class="signin">
    	<div class="container">
        	<div class="head">
            	<h1>Already a EasyEducation member ?</h1>
                <h3>Please enter your EasyEducation username/password to access your EasyEducation account.</h3>
            </div><!--head-->
            <div class="form-signin">
            	<div class="box-username">
            		<input class="username" type="text" name="username" placeholder="Username">
                </div>
                <div class="box-password">
                	<input class="password" type="text" name="password" placeholder="Password"><a href="">Forget?</a>
                </div>
                <button type="submit">submit</button>
                <div class="remember">
                	<input type="checkbox" name="remember" value="None" checked="check" />
                    Remember me
                </div>    
            </div><!--form-signin-->
            <div class="notremember">
            	<span class="text-notmember">Not a member ? Sign Up here</span>
                <span class="signup">Get a Free Account. Sign Up here.</span>
                <span><a href="<?php echo \Main\Helper\URL::absolute("/register")?>">sign up</a></span>
            </div>
        </div><!--container-->
    </div><!--signin-->
    
	<?php $this->import("/layout/social"); ?>
   	<!--social-->
        
     <?php $this->import("/layout/footer"); ?>
    <!--footer-->


</body>
</html>