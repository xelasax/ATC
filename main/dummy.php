<?php 
  require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('header.html'); ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <!-- SIDEBAR -->
      <?php 
      include('sidemenu.php');
      include('topnav.php');
      ?>
      <!-- SIDEBAR -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="clearfix"></div>



        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php 
      include('pagefooter.php');
      ?>
      <!-- /footer content -->
    </div>
  </div>

  <!-- scripts -->
  <?php 
  include('scripts.php');
  ?>

</body>
</html>