<?php
  include('connection.php');
   $quer1 = mysqli_query($con,"select * from atcgui_invendis where req_date > curdate() and (msisdn != 'ECOBANK' and msisdn NOT LIKE 'CHECK%') ;");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include('header.html');
  ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php
        include('sidemenu.php');
        include('topnav.php');
      ?>

        <!-- page content -->
          <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ASCYS <small>Request</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>INVENDIS <small>Request</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!-- footer content -->
        <?php
      include('pagefooter.php');
      ?>
        <!-- /footer content -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
  
    <!-- /Datatables -->
  </body>
</html>