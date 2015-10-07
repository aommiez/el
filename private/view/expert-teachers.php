<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Expert Teachers</title>

<link type="text/css" rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/public/css/expert-teachers.css")?>">
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
                    <li class="active">Expert Teachers</li>
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
    <div class="container">
    	<div class="expert">
            <div class="category-expert">
                <h1>filter by category</h1>
                <div class="filter">
                    <div class="sub-category"><a href="">All Categories</a></div>
                    <div class="sub-number"><a href="">3500</a></div>
                </div><!--filter-->
                <div class="filter">
                    <div class="sub-category"><a href="">3D Animation</a></div>
                    <div class="sub-number"><a href="">25</a></div>
                </div><!--filter-->
                <div class="filter">
                    <div class="sub-category"><a href="">3D Modelling</a></div>
                    <div class="sub-number"><a href="">15</a></div>
                </div><!--filter-->
            </div><!--category-expert-->
            <div class="profile">
                <div class="box-profile">
                    <img src="<?php echo \Main\Helper\URL::absolute("/public/images/star.png")?>" alt="">
                    <a href=""><img class="display" src="<?php echo \Main\Helper\URL::absolute("/public/images/profile-expert.png")?>" alt="display"></a>
                    <a class="name">Water white</a>
                    <a class="branch">Chemistry Genius</a>
                    <div class="add"><a href="">add</a></div>
                    <p class="graduate">Bachelor (Hons) of Computing Science
                    Computer games and chess</p>
                </div><!--box-profile-->
                <div class="box-profile">
                    <img src="<?php echo \Main\Helper\URL::absolute("/public/images/star.png")?>" alt="">
                    <a href=""><img class="display" src="<?php echo \Main\Helper\URL::absolute("/public/images/profile-expert.png")?>" alt="display"></a>
                    <a class="name">Water white</a>
                    <a class="branch">Chemistry Genius</a>
                    <div class="add"><a href="">add</a></div>
                    <p class="graduate">Bachelor (Hons) of Computing Science
                    Computer games and chess</p>
                </div><!--box-profile-->
                <div class="box-profile">
                    <img src="<?php echo \Main\Helper\URL::absolute("/public/images/star.png")?>" alt="">
                    <a href=""><img class="display" src="<?php echo \Main\Helper\URL::absolute("/public/images/profile-expert.png")?>" alt="display"></a>
                    <a class="name">Water white</a>
                    <a class="branch">Chemistry Genius</a>
                    <div class="add"><a href="">add</a></div>
                    <p class="graduate">Bachelor (Hons) of Computing Science
                    Computer games and chess</p>
                </div><!--box-profile-->
            </div><!--profile-->
    	</div><!--expert-->
    </div><!--container-->
    
     <?php $this->import("/layout/footer"); ?>
    <!--footer-->

</body>
</html>