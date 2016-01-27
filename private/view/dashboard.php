<link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/iconmoon.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/button.css">
<link rel="stylesheet" type="text/css" href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/card.css">
<link rel="stylesheet" type="text/css" href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/transition.css">
<link rel="stylesheet" href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/default.date.css">
	
	
	<?php $this->import("/layout/header"); ?>
    <!--header-->
    <?php $this->import("/layout/findhelp"); ?>
    <!--findhelp-->

    
    <div class="profile">
		<div class="container">
        <div class="dashboard-inner">
        <div class="col-md-3">
        	<div class="profile-inner">
            	<div class="pic-avatar">
               		<div class="ui card">
                        <div class="blurring dimmable image">
                          <div class="ui dimmer">
                            <div class="content">
                              <div class="center">
                                <div class="ui inverted button">change Image</div>
                              </div>
                            </div>
                          </div>
                          <img src="<?php echo \Main\Helper\URL::absolute("/public/images/image.png")?>" alt="">
                        </div>
                        <div class="content name-inner">
                          <a class="header name">Alic Jazz</a>
                          <div class="meta">
                            <span class="date">Member since <span class="month-year">December 2015</span></span>
                          </div>
                        </div>
                        <div class="extra content menu-profile-inner">
                          	<ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#dash" aria-controls="home" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-heart"></span>Dashboard</a></li>
                                <li role="presentation"><a href="#edit-profile" aria-controls="profile" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>Edit Profile</a></li>
                                <li role="presentation"><a href="#mycourse" aria-controls="mycourse" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span>My Course</a></li>
                                <li role="presentation"><a href="#wallet" aria-controls="wallet" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-usd"></span>Transaction</a></li>
                			</ul>
                        </div>
                      </div>
                </div><!-- End pic avatar -->
                <div class="identity">
                	<div class="ui card">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
        	<div class="menu-profile">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="dash">
                    	<div class="dash-inner">
                        	<div class="col-sm-4 name-my-course">
                            	<div class="name-my-course-inner text-center">
                                	<div class="panel panel-info"> 
                                    	<div class="panel-heading"> 
                                        	<h3 class="panel-title">My Course</h3>
                                        </div> 
                                        <a href="#mycourse" aria-controls="messages" role="tab" data-toggle="tab"><h1 class="panel-body">10</h1></a>
                                	</div>
                                </div>
                            </div>
                            <div class="col-sm-4 name-my-course">
                            	<div class="name-my-course-inner text-center">
                                	<div class="panel panel-success"> 
                                    	<div class="panel-heading"> 
                                        	<h3 class="panel-title">My Favorite Courses</h3>
                                        </div> 
                                        <h1 class="panel-body">10</h1> 
                                	</div>
                                </div>
                            </div>
                            <div class="col-sm-4 name-my-course">
                            	<div class="name-my-course-inner text-center">
                                	<div class="panel panel-danger"> 
                                    	<div class="panel-heading"> 
                                        	<h3 class="panel-title">My Wallet</h3>
                                        </div> 
                                        <a href="#wallet" aria-controls="wallet" role="tab" data-toggle="tab"><h1 class="panel-body">10 <small>Baht</small></h1></a>
                                	</div>
                                </div>
                            </div>
                        </div>
                        <div class="dash-news-inner">
                        	<div class="col-sm-8">
                            	<div class="course-box-inner panel panel-primary">
                                	<!--<div class="panel-heading text-center"> 
                                    	<h3 class="panel-title">My Course</h3>
                                    </div> -->
                                    <div class="panel-body">
                                        <table class="table table-hover"> 
                                            <thead> 
                                                <tr> 
                                                    <th>#</th> 
                                                    <th>Course Name</th> 
                                                    <th>Teacher Name</th> 
                                                    <th></th> 
                                                </tr> 
                                            </thead> 
                                            <tbody> 
                                                <tr> 
                                                    <th scope="row">1</th> 
                                                    <td>SCIENCE</td> 
                                                    <td>Otto</td> 
                                                    <td><button type="button" class="btn btn-success">Go</button></td> 
                                                </tr> 
                                                <tr> 
                                                    <th scope="row">2</th> 
                                                    <td>BUSINESS</td> 
                                                    <td>Thornton</td> 
                                                    <td><button type="button" class="btn btn-success">Go</button></td> 
                                                </tr> 
                                                <tr> 
                                                    <th scope="row">3</th> 
                                                    <td>ARCHITECTURE</td> 
                                                    <td>The Bird</td> 
                                                    <td><button type="button" class="btn btn-success">Go</button></td>
                                                </tr> 
                                                <tr> 
                                                    <th scope="row">4</th> 
                                                    <td>SCIENCE</td> 
                                                    <td>Otto</td> 
                                                    <td><button type="button" class="btn btn-success">Go</button></td> 
                                                </tr> 
                                                <tr> 
                                                    <th scope="row">5</th> 
                                                    <td>BUSINESS</td> 
                                                    <td>Thornton</td> 
                                                    <td><button type="button" class="btn btn-success">Go</button></td> 
                                                </tr> 
                                            </tbody> 
                                        </table> <!-- ตั้งให้แสดงแค่ 5 ครอส -->
                                        <div class="button-inner-course-box text-right">
                                        	<button type="button" class="btn btn-info">READ MORE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="news-box-inner">
                                	<div class="panel panel-warning"> 
                                    	<div class="panel-heading"> 
                                        	<h3 class="panel-title"><span class="glyphicon glyphicon-star"></span> News</h3> 
                                        </div> 
                                        <div class="panel-body list-news-box-inner">
                                        	<ul>
                                            	<li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                            </ul>
                                            <div class="news-page-next text-right">	
                                            	<button type="button" class="btn btn-warning">READ MORE</button>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="event-box-inner">
                                	<div class="panel panel-warning"> 
                                    	<div class="panel-heading"> 
                                        	<h3 class="panel-title"><span class="glyphicon glyphicon-bookmark"></span> Event</h3> 
                                        </div> 
                                        <div class="panel-body list-news-box-inner">
                                        	<h3 class="text-center">No Event</h3>
                                            <!--<ul>
                                            	<li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                                <li><a href="">- Top 10 universities have the best quality</a></li>
                                            </ul>-->
                                            <!--<div class="news-page-next text-right">	
                                            	<button type="button" class="btn btn-warning">READ MORE</button>
                                            </div>-->
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End dash -->
                    <div role="tabpanel" class="tab-pane" id="edit-profile">
                    	<div class="col-sm-12 input-profile">
                        	<h2><span class="glyphicon glyphicon-user"></span> Profile</h2>
                        	<div class="col-xs-6">
                            	<span class="first-name">
                                    <label>Name  </label>
    								<input type="text" class="form-control" id="Inputname" placeholder="Name">
                                </span>
                            </div>
                            <div class="col-xs-6">
                            	<span class="last-name">
                                    <label>Last Name  </label>
                                    <input type="text" class="form-control" id="Inputname" placeholder="Last Name">
                                </span>
                            </div>
                            <div class="col-xs-6">
                            	<span class="user-name">
                                	<label>Gender</label>
                                    <select  class="form-control">
                                    	<option value="">-</option>
                                    	<option value="1">Male</option>
                                    	<option value="0">Female</option>
                                	</select>
                                </span>
                            </div>
                            <div class="col-xs-6">
                            	<span class="birthdate">
                                    <label>Birth Date  </label>
                                    <input id="input_01" class="datepicker form-control" name="date" type="text" autofocuss value="" data-valuee="2014-08-08">
                    				<div id="container"></div>
                                </span>
                            </div>
                            <div class="col-xs-6">
                            	<span class="email">
                                	<label>Email</label><span class="label label-success">Success</span>
                                    <input type="email" class="form-control" id="Inputname" placeholder="Email">
                                </span>
                            </div>
                            <div class="col-xs-6">
                            	<span class="Tel">
                                	<label>Phone Number</label>
                                    <input type="tel" class="form-control" id="Input" placeholder="Tel..">
                                </span>
                            </div>
                            
                            <div class="col-xs-12">
                            	<button type="button" class="btn btn-primary btn-lg">Update</button>
                            </div>
                        </div>
                    
                    </div><!-- End Edit Profile -->
                    <div role="tabpanel" class="tab-pane" id="mycourse">
                    	<div class="my-course-inner-box">
                    		<h2><span class="glyphicon glyphicon-list-alt"></span> My Course</h2>
                    		<table class="table table-hover"> 
                            	<thead> 
                                	<tr> 
                                     	<th>#</th> 
                                    	<th>Course Name</th> 
                                    	<th>Teacher Name</th> 
                                    	<th></th> 
                                	</tr> 
                           		</thead> 
                                <tbody> 
                                	<tr> 
                                    	<th scope="row">1</th> 
                                    	<td>SCIENCE</td> 
                                        <td>Otto</td> 
                                        <td><button type="button" class="btn btn-success">Go</button></td> 
                                    </tr> 
                                    <tr> 
                                    	<th scope="row">2</th> 
                                    	<td>BUSINESS</td> 
                                    	<td>Thornton</td> 
                                   		<td><button type="button" class="btn btn-success">Go</button></td> 
                                    </tr> 
                                    <tr> 
                                    	<th scope="row">3</th> 
                                    	<td>ARCHITECTURE</td> 
                                    	<td>The Bird</td> 
                                    	<td><button type="button" class="btn btn-success">Go</button></td>
                                    </tr> 
                                    <tr> 
                                    	<th scope="row">4</th> 
                                    	<td>SCIENCE</td> 
                                    	<td>Otto</td> 
                                   		<td><button type="button" class="btn btn-success">Go</button></td> 
                                	</tr> 
                                    <tr> 
                                    	<th scope="row">5</th> 
                                    	<td>BUSINESS</td> 
                                    	<td>Thornton</td> 
                                    	<td><button type="button" class="btn btn-success">Go</button></td> 
                                    </tr> 
                        		</tbody> 
                    		</table>
                   		</div>
               		</div>
                    <div role="tabpanel" class="tab-pane" id="wallet">
                    	<div class="my-cash">
                        	<h2><span class="glyphicon glyphicon-usd"></span>Transaction</h2>
                            <div class="col-sm-4 text-center my-cash-inner-box">
                            	<div class="panel panel-primary"> 
                                	<div class="panel-heading"><h3 class="panel-title">My Point</h3></div> 
                                    <h1 class="panel-body">3 <small> Point</small></h1>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center my-cash-inner-box">
                            	<div class="panel panel-primary"> 
                                	<div class="panel-heading"><h3 class="panel-title">My Wallet</h3></div> 
                                    <h1 class="panel-body">10 <small> Baht</small></h1>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center pre-paid">
                            	<div class="panel panel-primary"> 
                                	<div class="panel-heading"><h3 class="panel-title">Pre-Paid</h3></div> 
                                    <a class="panel-body" href="">
                                    <img src="<?php echo \Main\Helper\URL::absolute("/public/images/my-wallet.gif")?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-sm-12 pre-paid-table">
                            	<table class="table table-hover"> 
                            	<thead> 
                                	<tr> 
                                     	<th>#</th> 
                                    	<th>Course Name</th> 
                                    	<th>Teacher Name</th> 
                                    	<th></th> 
                                	</tr> 
                           		</thead> 
                                <tbody> 
                                	<tr class="warning"> 
                                    	<th scope="row">1</th> 
                                    	<td>SCIENCE</td> 
                                        <td>Otto</td> 
                                        <td><button type="button" class="btn btn-warning">Waiting...</button></td> 
                                    </tr> 
                                    <tr class="success"> 
                                    	<th scope="row">2</th> 
                                    	<td>BUSINESS</td> 
                                    	<td>Thornton</td> 
                                   		<td><button type="button" class="btn btn-success">Success</button></td> 
                                    </tr> 
                                    <tr class="success"> 
                                    	<th scope="row">3</th> 
                                    	<td>ARCHITECTURE</td> 
                                    	<td>The Bird</td> 
                                    	<td><button type="button" class="btn btn-success">Success</button></td>
                                    </tr> 
                                    <tr class="success"> 
                                    	<th scope="row">4</th> 
                                    	<td>SCIENCE</td> 
                                    	<td>Otto</td> 
                                   		<td><button type="button" class="btn btn-success">Success</button></td> 
                                	</tr> 
                                    <tr class="success"> 
                                    	<th scope="row">5</th> 
                                    	<td>BUSINESS</td> 
                                    	<td>Thornton</td> 
                                    	<td><button type="button" class="btn btn-success">Success</button></td> 
                                    </tr> 
                        		</tbody> 
                    		</table>
                            </div>
                        </div>
                	</div><!-- End Credit -->
                </div>
        	</div>
        </div>

 

			</div>
    	</div>
    </div>
    
	<?php $this->import("/layout/footer"); ?>
    <!--footer-->
    
    
<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/iframe-content.js"></script>
<script type="text/javascript" src="public/js/dimmer.js"></script>
<script type="text/javascript" src="public/js/transition.js"></script>
<script src="public/js/picker.js"></script>

<script>
$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>

<script>
  $(document)
    .ready(function() {
      $('.special.card .image').dimmer({
        on: 'hover'
      });
      $('.star.rating')
        .rating()
      ;
      $('.card .dimmer')
        .dimmer({
          on: 'hover'
        })
      ;
    })
  ;
</script>
<script type="text/javascript">

        var $input = $( '.datepicker' ).pickadate({
            formatSubmit: 'yyyy/mm/dd',
            // min: [2015, 7, 14],
            container: '#container',
            // editable: true,
            closeOnSelect: false,
            closeOnClear: false,
        })

        var picker = $input.pickadate('picker')
        // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });
</script>