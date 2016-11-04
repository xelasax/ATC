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
  <style type="text/css">
    .wrapword{
    white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
    white-space: -webkit-pre-wrap; /*Chrome & Safari */ 
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    white-space: pre-wrap;       /* css-3 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
    word-break: break-all;
    white-space: normal;
    }
   </style>
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
                    <h2>INVENDIS <small>Data</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <h3></h3>
                    </p>
                    <table id="datatable" class="table table-striped table-bordered ">
                      <thead>
                         <tr>
                          <th>MSISDN</th>
                          <th >REQUEST</th>
                          <th>DATETIME</th>
                      
                        </tr>
                      </thead>
                        <tbody>
                          <?php
                           while($fdata1=mysqli_fetch_assoc($quer1)){?>
                              <tr>
                               <td><?php echo $fdata1['msisdn'];?></td>
                               <td class="wrapword"><?php echo $fdata1['request'];?></small></td>
                               <td><?php echo $fdata1['req_date'];?></td>
                             </tr>
                             <?php
                             }
                            ?>
                        </tbody>
                    </table>
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
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/jquery.datetimepicker.full.js"></script>
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
<!--     <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($(".datatable-buttons").length) {
            $(".datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        // $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script> -->
    <!-- /Datatables -->

 <script>

 $(document).ready(function() {
  
  var tableasc = $('#datatable').DataTable({
   "order": [[ 2, "desc" ]]
 }); 

   $('#datatable thead th').each( function () {
    var title = $(this).text();
    $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
 } );

  tableasc.columns().every( function () {
    var that = this;

    $( 'input', this.header() ).on( 'keyup change', function () {
    if ( that.search() !== this.value ) {
       that
      .search( this.value )
      .draw();
     }
   } );
 } );
        
} );
</script>
  </body>
</html>