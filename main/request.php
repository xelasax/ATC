<?php
  include('connection.php');
  //ASYS
   $quer = mysqli_query($con,"SELECT * from atcgui where req_date > curdate() and (msisdn != 'ECOBANK' and msisdn NOT LIKE 'CHECK%') ;");
   $asy = mysqli_num_rows($quer);

//INVENDIS
  // $logsql=mysqli_query($con,"SELECT count(*)  AS logc FROM logs WHERE submit_date>CURDATE() AND username='na1-atc' AND sender ='ATC';");
  // $logcount=mysqli_fetch_assoc($logsql);
  // $logc=$logcount['logc'];

$quer1 = mysqli_query($con,"SELECT count(*) AS vim from atcgui_invendis where req_date > curdate() and (msisdn != 'ECOBANK' and msisdn NOT LIKE 'CHECK%') ;");
    $vim = mysqli_fetch_assoc($quer1);
    $invi=$vim['vim'];
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
                    <h2>SERVER REQUEST <small>ASCIS/INVENDIS</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     <div class="col-md-8 ">

                        <h3>TOTAL REQUEST</h3>
                        <table class="table table-hover table-condensed" cellspacing="0" width="100%">
                         <thead>
                          <tr>
                           <th>TYPE</th>
                           <th>RECEIVED</th>
                           <th>SENT OUT</th>
                           <th>SUCCESS RATE</th>
                         </tr>
                       </thead>
                       <tfoot>
                        <tr>
                         <th>TYPE</th>
                         <th>RECEIVED</th>
                         <th>SENT OUT</th>
                         <th>SUCCESS RATE</th>
                         </tr>
                       </tfoot>
                       <tbody>
                        <tr>
                         <td>
                          ACSYS
                        </td>
                        <td>
                          <?php echo $asy; ?>
                        </td>
                        <td>
                          <?php echo $asy;?>
                        </td>
                        <td>
                          <?php 
                          $rate=($asy/$asy)*100;
                          echo $rate." %";
                          ?>
                        </td>
                      </tr>
                      <tr>
                       <td>
                        INVENDIS
                      </td>
                      <td>
                        <?php echo $invi; ?>
                      </td>
                      <td>
                        <?php echo $invi;?>
                      </td>
                      <td>
                        <?php 
                        $rate=($invi/$invi)*100;
                        echo $rate." %";
                        ?>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      
                      </div>
                      </div>


                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SERVICE <small>UPTIME</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="gateway status" class="col-md-8 ">
                       <h3></h3>
                       <p>UNDER CONSTRUCTION</p>
<!--                        <table class="table table-hover table-condensed" cellspacing="0" width="100%">
                         <thead>
                          <tr>
                           <th>TYPE</th>
                           <th>STATUS</th>
                           <th>TIMESTAMP</th>
                         </tr>
                       </thead>
                       <tfoot>
                        <tr>
                         <th>TYPE</th>
                         <th>STATUS</th>
                          <th>TIMESTAMP</th>
                       </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                         <td>
                          ACSYS
                        </td>
                        <td>
                          <?php echo "ACTIVE"; ?>
                        </td>
                        <td></td>
                      
                      </tr>
                      <tr>
                       <td>
                        INVENDIS
                      </td>
                      <td>
                        <?php echo "ACTIVE"; ?>
                      </td>
                      <td></td>
                      </tr> 
                      </tbody>
                      </table> -->
                      </div>
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