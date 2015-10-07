<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Policies</title>

<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/policies.css")?>">
<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/global.css")?>">
<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/font.css")?>">
<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/findhelp.css")?>">

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
                      <li class="active">Policies</li>
                    </ol>
                </div><!--breadcrumb-->
                <div class="sub-menu">
                    <ul>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/aboutus")?>">about us</a></li>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/contact")?>">contact us</a></li>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/reportbug")?>">report bug</a></li>
                        <li><a class="active" href="<?php echo \Main\Helper\URL::absolute("/policies")?>">policies</a></li>
                   </ul>
                </div><!--sub-menu-->
            </div><!--page-next-->
        </div><!--container-->
        <div class="container">
            <div class="policies">
                <div class="privacy">
                    <h1>Privacy</h1>
                    <p>We collect IP addresses, information about how you use
the site and all necessary information to schedule lessons.
We don’t market, sell or otherwise disclose that information
unless required by law.</p>
                </div><!--whoweare-->
                <div class="refunds">
                    <h1>Refunds</h1>
                    <p>We will refund your money for credit purchases under $101
if valid.No refunds over 101 bath without special authorization.
Please contact us at contactus@easyeducation.com
to work that out. Thanks!</p>
                </div><!--whowedo-->
            </div><!--about-->
        </div><!--container-->
        
	<?php $this->import("/layout/social"); ?>
   	<!--social-->
        
     <?php $this->import("/layout/footer"); ?>
    <!--footer-->


</body>
</html>