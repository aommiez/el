

	<?php $this->import("/layout/header"); ?>
    <!--header-->
    <?php $this->import("/layout/findhelp"); ?>
    <!--findhelp-->

 	<div class="container">
    	<div class="page-next">
         	<div class="breadcrumb">
            	<ol>
                	<li><a href="<?php echo \Main\Helper\URL::absolute("/public/")?>">Home</a></li> //
                    <li class="active">Contact us</li>
                </ol>
			</div><!--breadcrumb-->
            <div class="sub-menu">
            	<ul>
                	<li><a href="<?php echo \Main\Helper\URL::absolute("/aboutus")?>">about us</a></li>
                        <li><a class="active" href="<?php echo \Main\Helper\URL::absolute("/contact")?>">contact us</a></li>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/reportbug")?>">report bug</a></li>
                        <li><a href="<?php echo \Main\Helper\URL::absolute("/policies")?>">policies</a></li>
               	</ul>
           </div><!--sub-menu-->
		</div><!--page-next-->
	</div><!--container-->
    <div class="container">
    	<div class="contact">
        	<h1>Send us a Quick Message !</h1>
            <div class="form-contact">
                <div class="box-contact">
                    <input class="myname" type="text" name="name" placeholder="Your name">
                    <input class="myname" type="text" name="email" placeholder="Your email address">
                    <input class="myname" type="text" name="subject" placeholder="Your Subject">
                    <button type="submit" name="submit">submit</button>
                </div>
                <div class="box-textarea">
                    <textarea placeholder="Your Question"></textarea>
                </div>
            </div>
        </div><!--contact-->
    </div><!--container-->

     <?php $this->import("/layout/footer"); ?>
    <!--footer-->
