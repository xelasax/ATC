<?php
  include('connection.php');
  if (isset($_POST['generate'])) {
     $type=$_POST['type'];
     $type=urlencode($type);

     $init=$_POST['idate'];
     $init=urlencode($init);

     $finit=$_POST['fdate'];
     $finit=urlencode($finit);

  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
  include('header.html');
  ?>
  <link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
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
                    <h2>GENERATE <small>REPORT</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <h3></h3>
                    </p>
                   <div class="col-md-12  ">
                         <h1></h1>
                         <h3>GENERATE REPORT</h3>
                         <h1></h1>
                    
                         <form class="form-inline text-center" role="form" name="dowsub" method="post" action="tempCopy.php">
                          <div class="form-group">
                            <label for="sender_single" class="col-sm-3 control-label">Type</label>
                            <div class="col-sm-9">
                             <select class="form-control" name="type">
                               <option>ACSYS</option>
                               <option>INVENDIS</option>
                             </select>
                            </div>
                          </div>
                    
                          <div class="form-group" >
                            <label for="sender_single" class="col-sm-3 control-label">From</label>
                            <div class="col-sm-9">                             
                              <input type="text" class="some_class form-control" name="from" id="some_class_2" required="required" />
                            </div>
                          </div>
                          <div class="form-group" >
                            <label for="sender_single" class="col-sm-3 control-label">To</label>
                            <div class="col-sm-9">
                               <input type="text" class="some_class form-control" name="to" id="some_class_1" required="required" />
                            </div>
                          </div>
                          <br/>
                          <h1></h1>
                          <button name='generate' type='submit' name='show' class='btn btn-dark'><span class='glyphicon glyphicon-cloud-download'></span>&nbsp;&nbsp;DOWNLOAD REPORT</button>
                          <!-- <button name='generate' type='submit' name='show' class='btn btn-dark'><i class='glyphicon glyphicon-cloud-refresh'></i> Generate </button> -->
                          </form>
                          </div>
                  </div>
                </div>
              </div>

              <!-- Checking For 
              <?php
                //if (isset($_POST['generate'])) {
                //  include('download.php');
               // }
              ?>
            </div>
          </div>
        </div>
        Set Download Buttons-->
        <!-- /page content -->

        <!-- footer content -->
        <!-- footer content -->

        <!-- /footer content -->
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="./jquery.js"></script>
<script src="../build/jquery.datetimepicker_new.full.js"></script>
<script type="text/javascript">
  $('.some_class').datetimepicker({
      hours12 : false,
      format : 'Y-m-d H:m'
    });
</script>
  </body>
</html>