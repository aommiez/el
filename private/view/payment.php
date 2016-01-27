<link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo \Main\Helper\URL::absolute("/")?>public/css/iconmoon.css" rel="stylesheet" media="screen">

<?php $this->import("/layout/header"); ?>
<!--header-->
    
<?php $this->import("/layout/findhelp"); ?>
<!--findhelp-->

<div class="payment">
    <div class="container">
    	<div class="col-md-12">
        	<h2>Order List
            <small><a href="<?php echo \Main\Helper\URL::absolute("/detailcourse")?>">Back >></a></small></h2>
            
        	<div class="detail-payment-inner">
            	<table class="table"> 
                	<thead> 
                    	<tr> 
                        	<th class="col-sm-8 text-center">Item</th> 
                            <th class="col-sm-1 text-center">Quantity</th> 
                            <th class="col-sm-3 text-center">Price</th>
                       	</tr> 
                   	</thead> 
                    <tbody> 
                    	<tr> 
                        	<td scope="row">
                            	<div class="media">
                                  <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" src="<?php echo \Main\Helper\URL::absolute("/public/images/all-course.gif")?>" alt="...">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading">How to Create a Surreal Scene With Photo</h4>
                                  </div>
                                </div>
                            </th> 
                            <td class="text-center">1</td> 
                            <td class="text-center">300 Baht</td>
                      	</tr> 
                   		<tr class="sum-price"> 
                        	<td scope="row"></th> 
                            <td class="red text-center">Total</td> 
                            <td class="red text-center"> 300 Baht</td> 
                       	</tr> 
                	</tbody> 
                </table>
            </div>
        </div>
        <div class="box-payment-inner">
        	<div class="col-md-12">
                <div class="col-sm-3">
                	<div class="box-payment-contact">
                    </div>
                </div>
                <div class="col-sm-9">
                	<div class="box-transaction-inner">
                    	<div class="panel panel-default my-wallet-pay-box">
                          <div class="panel-heading">
                            <h3 class="panel-title">My Wallet Payments ( Study immediately after payment is complete. )</h3>
                          </div>
                          <div class="panel-body">
                            
                          </div>
                        </div><!-- End -->
                        <div class="panel panel-default credit-card-box">
                          <div class="panel-heading">
                            <h3 class="panel-title">Credit Card Payments ( Study immediately after payment is complete. )</h3>
                          </div>
                          <div class="panel-body master-card" data-toggle="modal" data-target=".bs-example-modal-sm">
                            
                            <img src="<?php echo \Main\Helper\URL::absolute("/public/images/visa-mastercard.gif")?>" alt="">

                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                  ...
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->import("/layout/footer"); ?>
<!--footer-->