<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Categorties</title>

<link type="text/css" rel="stylesheet" href="css/categorties.css">
<link type="text/css" rel="stylesheet" href="css/global.css">
<link type="text/css" rel="stylesheet" href="css/font.css">

</head>

<body>

	<?php include("header.php"); ?>
    <!--header-->

	<div class="category-search">
    	<div class="container">
        	<input type="text" name="search" placeholder="Search">
        </div><!--container-->
    </div>
    <div class="content">
    	<div class="container">
            <div class="breadcrumb">
                <ol>
                   <li><a href="#">Home</a></li> //
                   <li class="active">Popular Categorties</li>
                </ol>
            </div><!--breadcrumb-->
            <div class="category">
            	<div class="icon1">
                	<a href=""><img src="images/aboutus/3-icon.png" alt="icon"></a>
                </div>
                <div class="icon">
                	<a href=""><img src="images/aboutus/a-icon.png" alt="icon"></a>
                </div>
                <div class="icon">
                	<a href=""><img src="images/aboutus/b-icon.png" alt="icon"></a>
                </div>
                <div class="icon2">
                	<a href=""><img src="images/aboutus/c-icon.png" alt="icon"></a>
                </div>
            </div><!--category-->
    	</div><!--container-->
	</div><!--content-->
    
   	<?php include("social.php"); ?>
   	<!--social-->

    <?php include("footer.php"); ?>
    <!--footer-->


</body>
</html>