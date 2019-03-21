<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- DASHBOARD-->
    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="vendor/chart.js/Charts.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="js/demo/datatables-demo.js"></script>
        <script src="js/demo/chart-area-demo.js"></script>
    </div>

    <?php include_once('navbar.php') ?>

    <div id="wrapper">

        <?php include_once('sidebar.php') ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Add Class Example -->

                <div class="container">
                    <div class="addClassDiv col-lg-6">

                        <label>
                              <H1>
                                 Add a class below <br>   
                              </H1>
                        </label>

                        <form action="" method="POST">

                            <div class="form-group">
                                <label for="course">Course
                                            <input required type="text" class="form-control" name="course" placeholder="Enter course name">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="section">Section
                                            <input required type="text" class="form-control" name="section" placeholder="Enter section">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="startDate">Start Date
                                            <input required type="text" class="form-control" name="startDate" placeholder="Enter start date">   
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="endDate">End Date
                                            <input required type="text" class="form-control" name="endDate" placeholder="Enter end date">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="startTime">Start Time
                                            <input required type="text" class="form-control" name="startTime" placeholder="Enter start time">   
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="endTime">End Time
                                            <input required type="text" class="form-control" name="endTime" placeholder="Enter end time">
                                </label>
                            </div>
                            
                            <div class="form-group">
                                <label for="days">Days</label>
                                    <select name="days" required>
                                       <option value="monday">MWF</option>
                                       <option value="tuesday">TR</option>
                                       <option value="wednesday">Monday</option>
                                       <option value="w">Wednesday</option>
                                       <option value="f Senior">Friday</option>
                                       <option value="t">Tuesday</option>
                                       <option value="r">Thursday</option>
                                       <option value="mtwr">MTWR</option>
                                   </select>
                            </div>
                                <input type="submit" value="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>

            </div>

            <!-- Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">

                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
