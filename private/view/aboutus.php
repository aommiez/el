<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>About Us</title>

<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/aboutus.css")?>">
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
                      <li class="active">About</li>
                    </ol>
                </div><!--breadcrumb-->
                <div class="sub-menu">
                    <ul>
                        <li><a class="active" href="<?php echo \Main\Helper\URL::absolute("/aboutus")?>">about us</a></li>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/contact")?>">contact us</a></li>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/reportbug")?>">report bug</a></li>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/policies")?>">policies</a></li>
                   </ul>
                </div><!--sub-menu-->
            </div><!--page-next-->
        </div><!--container-->
        <div class="container">
            <div class="about">
                <div class="whoweare">
                    <h1>Who We Are ?</h1>
                    <p>Easyeducation.com is an exciting new way to get involved
                        with education that operates outside the status quo. 
                        It’s an engaging platform that allows students and tutors
                        access to a diverse array of resources that just do not exist
                        in a normal classroom setting.</p>
                </div><!--whoweare-->
                <div class="whowedo">
                    <h1>Who We Do ?</h1>
                    <p>At EasyEducation.com, we’re building a community of learners
                    and educators that are interested in accessing quality 
                    education and expanding their knowledge base outside
                    the walls of the classroom.   We can’t build easyeducation.com
                    without you :  won’t you join us as we build the educational
                    community of tomorrow, today?</p>
                </div><!--whowedo-->
            </div><!--about-->
        </div><!--container-->
        
    <?php $this->import("/layout/social"); ?>
   	<!--social-->

        
	<?php $this->import("/layout/footer"); ?>
    <!--footer-->

</body>
</html>