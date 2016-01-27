<link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/iconmoon.css" rel="stylesheet" />
<link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/animate.css" rel="stylesheet" media="screen">

	<?php $this->import("/layout/header"); ?>
    <!--header-->
    <div class="action fullscreen parallax" style="background-image: url(public/images/aboutus/search-cat.png" data-diff="100">
        <div class="category-search">
            <div class="container">
                <input type="text" name="search" placeholder="Search">
            </div>
        </div>
    </div>
    
    <div class="all-course">
		<div class="container">
        	<div class="row">
            	<div class="col-md-12 course-inner-head">
                	<h1>All Course</h1>
                    <p class="course-inner-gary">650+ video-based courses and short courses to help you develop creative and technical skills. What would you like to learn?</p>
                </div>
                <div class="col-md-12">
               		<div class="course-submenu">
                    	<ul class="list-all-type">
                       		<li role="presentation" class="dropdown">
    							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      							<span class="subject-submenu">All Course<span class="caret"></span>
    							</a>
                                <ul class="dropdown-menu">
                                	<li><a href="">MATHEMATICS</a></li>
                                    <li><a href="">SCIENCE</a></li>
                                    <li><a href="">LANGUAGE</a></li>
                                    <li><a href="">SOCIAL STUDIES</a></li>
                                    <li><a href="">TECHNOLOGY</a></li>
                                    <li><a href="">BUSINESS</a></li>
                                </ul>
                         	</li>
                        	<li class="course-submenu-type">
                            	<div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary active"><input type="radio" name="options" id="option1" autocomplete="off" checked> All </label>
                                    <label class="btn btn-primary"><input type="radio" name="options" id="option2" autocomplete="off">Beginner</label>
                                    <label class="btn btn-primary"><input type="radio" name="options" id="option3" autocomplete="off"> Advanced</label>
								</div>
                            </li>
                            <li class="course-submenu-type">
                            	<div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary active"><input type="radio" name="options" id="option1" autocomplete="off" checked> All</label>
                                    <label class="btn btn-primary"><input type="radio" name="options" id="option2" autocomplete="off"> Paid </label>
                                    <label class="btn btn-primary"><input type="radio" name="options" id="option3" autocomplete="off"> free </label>
								</div>
                            </li>
                    	</ul>
                    </div>
                </div>
                <div class="col-md-12 all-this-course">
                	<ul class="posts posts--full-width nolinks">
                    	<li class="posts__post">
                        	<div class="posts__post-primary-topic topic-design">
                                <a class="posts__post-primary-topic-link topic-design" href="">
                                Design &amp; Illustration
                                </a>
                            </div>
                            <a class="posts__post-title " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">How to Create a Surreal Scene With Photo Manipulation</a>
                            <a class="posts__post-preview " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">
                            <img sizes="(max-width: 679px) 76px, 300px" 
                            class="posts__post-preview-image posts__post-preview-image--regular"  
                            src="<?php echo \Main\Helper\URL::absolute("/public/images/all-course.gif")?>" alt=""></a>
                            <div class="posts__post-details">
                            	<img class="posts__post-author_photo" src="<?php echo \Main\Helper\URL::absolute("/public/images/teacher.gif")?>" alt="">
                                <div class="posts__post-publication-meta">
                                	<span class="posts__post-author">
                                    <a class="posts__post-author-link" href="">Lewis Moorhead</a>
                                    </span>
                                    <span class="star-course">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-none.png")?>" alt="star full">
                                    </span>
                             	</div>
                        	</div>
                    	</li>
                        <li class="posts__post">
                        	<div class="posts__post-primary-topic topic-design">
                                <a class="posts__post-primary-topic-link topic-design" href="">
                                Design &amp; Illustration
                                </a>
                            </div>
                            <a class="posts__post-title " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">How to Create a Surreal Scene With Photo Manipulation</a>
                            <a class="posts__post-preview " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">
                            <img sizes="(max-width: 679px) 76px, 300px" 
                            class="posts__post-preview-image posts__post-preview-image--regular"  
                            src="<?php echo \Main\Helper\URL::absolute("/public/images/all-course.gif")?>" alt=""></a>
                            <div class="posts__post-details">
                            	<img class="posts__post-author_photo" src="<?php echo \Main\Helper\URL::absolute("/public/images/teacher.gif")?>" alt="">
                                <div class="posts__post-publication-meta">
                                	<span class="posts__post-author">
                                    <a class="posts__post-author-link" href="">Lewis Moorhead</a>
                                    </span>
                                    <span class="star-course">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-none.png")?>" alt="star full">
                                    </span>
                             	</div>
                        	</div>
                    	</li>
                        <li class="posts__post">
                        	<div class="posts__post-primary-topic topic-design">
                                <a class="posts__post-primary-topic-link topic-design" href="">
                                Design &amp; Illustration
                                </a>
                            </div>
                            <a class="posts__post-title " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">How to Create a Surreal Scene With Photo Manipulation</a>
                            <a class="posts__post-preview " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">
                            <img sizes="(max-width: 679px) 76px, 300px" 
                            class="posts__post-preview-image posts__post-preview-image--regular"  
                            src="<?php echo \Main\Helper\URL::absolute("/public/images/all-course.gif")?>"></a>
                            <div class="posts__post-details">
                            	<img class="posts__post-author_photo" src="<?php echo \Main\Helper\URL::absolute("/public/images/teacher.gif")?>" alt="">
                                <div class="posts__post-publication-meta">
                                	<span class="posts__post-author">
                                    <a class="posts__post-author-link" href="">Lewis Moorhead</a>
                                    </span>
                                    <span class="star-course">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-none.png")?>" alt="star full">
                                    </span>
                             	</div>
                        	</div>
                    	</li>
                        <li class="posts__post">
                        	<div class="posts__post-primary-topic topic-design">
                                <a class="posts__post-primary-topic-link topic-design" href="">
                                Design &amp; Illustration
                                </a>
                            </div>
                            <a class="posts__post-title " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">How to Create a Surreal Scene With Photo Manipulation</a>
                            <a class="posts__post-preview " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">
                            <img sizes="(max-width: 679px) 76px, 300px" 
                            class="posts__post-preview-image posts__post-preview-image--regular"  
                            src="<?php echo \Main\Helper\URL::absolute("/public/images/all-course.gif")?>"></a>
                            <div class="posts__post-details">
                            	<img class="posts__post-author_photo" src="<?php echo \Main\Helper\URL::absolute("/public/images/teacher.gif")?>" alt="">
                                <div class="posts__post-publication-meta">
                                	<span class="posts__post-author">
                                    <a class="posts__post-author-link" href="">Lewis Moorhead</a>
                                    </span>
                                    <span class="star-course">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-none.png")?>" alt="star full">
                                    </span>
                             	</div>
                        	</div>
                    	</li>
                        <li class="posts__post">
                        	<div class="posts__post-primary-topic topic-design">
                                <a class="posts__post-primary-topic-link topic-design" href="">
                                Design &amp; Illustration
                                </a>
                            </div>
                            <a class="posts__post-title " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">How to Create a Surreal Scene With Photo Manipulation</a>
                            <a class="posts__post-preview " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">
                            <img sizes="(max-width: 679px) 76px, 300px" 
                            class="posts__post-preview-image posts__post-preview-image--regular"  
                            src="<?php echo \Main\Helper\URL::absolute("/public/images/all-course.gif")?>"></a>
                            <div class="posts__post-details">
                            	<img class="posts__post-author_photo" src="<?php echo \Main\Helper\URL::absolute("/public/images/teacher.gif")?>" alt="">
                                <div class="posts__post-publication-meta">
                                	<span class="posts__post-author">
                                    <a class="posts__post-author-link" href="">Lewis Moorhead</a>
                                    </span>
                                    <span class="star-course">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-none.png")?>" alt="star full">
                                    </span>
                             	</div>
                        	</div>
                    	</li>
                        <li class="posts__post">
                        	<div class="posts__post-primary-topic topic-design">
                                <a class="posts__post-primary-topic-link topic-design" href="">
                                Design &amp; Illustration
                                </a>
                            </div>
                            <a class="posts__post-title " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">How to Create a Surreal Scene With Photo Manipulation</a>
                            <a class="posts__post-preview " href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">
                            <img sizes="(max-width: 679px) 76px, 300px" 
                            class="posts__post-preview-image posts__post-preview-image--regular"  
                            src="<?php echo \Main\Helper\URL::absolute("/public/images/all-course.gif")?>"></a>
                            <div class="posts__post-details">
                            	<img class="posts__post-author_photo" src="<?php echo \Main\Helper\URL::absolute("/public/images/teacher.gif")?>" alt="">
                                <div class="posts__post-publication-meta">
                                	<span class="posts__post-author">
                                    <a class="posts__post-author-link" href="">Lewis Moorhead</a>
                                    </span>
                                    <span class="star-course">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-full.png")?>" alt="star full">
                                    	<img class="img-responsive" src="<?php echo \Main\Helper\URL::absolute("/public/images/star-none.png")?>" alt="star full">
                                    </span>
                             	</div>
                        	</div>
                    	</li>
                    </ul>
                </div>
                <div class="col-md-12 text-center page-next-course">
                	<nav>
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
    	</div>
    </div>
    
    <?php $this->import("/layout/footer"); ?>
    <!--footer-->

<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/custom.js"></script>