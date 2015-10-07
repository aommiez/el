

	<?php $this->import("/layout/header"); ?>
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
                   <li><a href="/">Home</a></li> //
                   <li class="active">Popular Categorties</li>
                </ol>
            </div><!--breadcrumb-->
            <div class="category">
            	<div class="icon1">
                	<a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/3-icon.png")?>" alt="icon"></a>
                </div>
                <div class="icon">
                	<a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/a-icon.png")?>" alt="icon"></a>
                </div>
                <div class="icon">
                	<a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/b-icon.png")?>" alt="icon"></a>
                </div>
                <div class="icon2">
                	<a href=""><img src="<?php echo \Main\Helper\URL::absolute("/public/images/aboutus/c-icon.png")?>" alt="icon"></a>
                </div>
            </div><!--category-->
    	</div><!--container-->
	</div><!--content-->
    
    <?php $this->import("/layout/social"); ?>
   	<!--social-->

    <?php $this->import("/layout/footer"); ?>
    <!--footer-->

