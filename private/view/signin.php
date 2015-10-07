<?php
$this->import('/layout/header');
?>
<div class="findhelp">
  <div class="container">
      <input type="text" name="search" placeholder="Find help immediately !!!">
    </div><!--container-->
</div><!--filehelp-->
<div class="container">
    <div class="page-next">
        <div class="breadcrumb" id="mainSignup">
            <ol>
                <li><a href="#">Home</a></li> //
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
                <input class="password" type="text" name="password" placeholder="Password"><a href="#" style="    position: absolute;
    top: 16px;">Forget?</a>
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
  <?php
  $this->import('/layout/social');
  $this->import('/layout/footer');
   ?>
