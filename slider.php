<?php include_once("include/header.php");
    include_once("include/side_bar.php");?>

    <?php
 if (!isset($_SESSION['user_id']))
  {
    redirect_to('login.php');
    
   }
?>
    <?php
      if (isset($_GET['sdl'])) {
          $DlId = $_GET['sdl'];
          $SliderDelete = "DELETE FROM slider WHERE s_id ='$DlId'";
          $SliderDeleteRun = $con->query($SliderDelete);
          redirect_to("slider.php");
      }



    ?>


            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sliders</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                       <!-- <div class="mcat">
                         <a class="btn btn-primary" href="AddSliders.php" id="toggleNavPosition" style="float: right;  margin-top: 4px;">Add Sliders</a>
                           
						</div> -->
                        <div class="panel panel-default">

                            <div class="panel-heading">
                               Sliders Details

                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                               
                                                <th>Slider Image</th>
                                                <th>Content</th>
                                                <th>Post message</th>
                                                 <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count = 1;

                                            $GetSlider = "SELECT * FROM slider";
                                        $RunSlider= $con->query($GetSlider);
                                            while ($row=mysqli_fetch_object($RunSlider))
                                             {
                                              $s_id=$row->s_id;    
                                                  ?>

                                                 <tr class="odd gradeX">

                                                <td><img style="height: 80px; width: 150px;" src="AllImages/Slider/<?php echo $row->slider; ?>" alt="" class="img-responsive"></td>
                                                <td><?php echo $row->content; ?></td>
                                                <td><?php echo $row->post; ?></td>
                                                
                                                <td class="center">
                                                <a href="edit_slider.php?slid=<?php echo $row->s_id;?>" class="btn btn-primary">Edit</a>
                                               <!-- <a href="slider.php?sdl=<?php echo $row->s_id;?>" class="btn btn-danger" onclick = "return confirm('Are you sure want to delete!!');">Delete</a> -->

                                                </td>
                                                
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                               
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
           
                <!-- /.row -->
               
                <!-- /.row -->
             
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
