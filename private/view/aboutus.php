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
        <div class="breadcrumb" id='mainAbout'>
            <ol>
              <li><a href="index.php">Home</a></li> //
              <li class="active">About</li>
            </ol>
        </div><!--breadcrumb-->
        <div class="sub-menu">
            <ul>
                <li><a class="active" href="<?php echo \Main\Helper\URL::absolute("/aboutus?pages=aboutus")?>">about us</a></li>
                <li><a href="<?php echo \Main\Helper\URL::absolute("/aboutus?pages=contact")?>">contact us</a></li>
                <li><a href="<?php echo \Main\Helper\URL::absolute("/aboutus?pages=reportbug")?>">report bug</a></li>
                <li><a href="<?php echo \Main\Helper\URL::absolute("/aboutus?pages=policies")?>">policies</a></li>
           </ul>
        </div><!--sub-menu-->
    </div><!--page-next-->
</div><!--container-->
<?php
if ($_GET['pages'] == 'aboutus') {
  $this->import('/aboutusView');
} else if ($_GET['pages'] == 'contact') {
  $this->import('/contact');
} else if ($_GET['pages'] == 'reportbug') {
  $this->import('/reportbug');
} else if ($_GET['pages'] == 'policies') {
  $this->import('/policies');
} else {
  $this->import('/aboutusView');
}
?>

<?php
$this->import('/layout/social');
$this->import('/layout/footer');
 ?>
