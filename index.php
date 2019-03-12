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
                <br>

                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);   
                require('database.php'); 
                if($_SERVER["REQUEST_METHOD"] === "POST"){

                    $username = $_POST['username'];
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $password = $_POST['password'];
                    $email = $_POST['email'];
                    $gradeyear = $_POST['gradeyear'];
                    $major = $_POST['major'];
                    $gender = $_POST['gender'];
                    $race = $_POST['race'];
                    $ethnicity = $_POST['ethnicity'];
                    
                    $sql = "INSERT INTO student_info (first_name, last_name, username, email, password, grade_year, major, gender, race, ethnicity) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$email."', '".$password."', '".$gradeyear."', '".$major."', '".$gender."', '".$race."', '".$ethnicity."')";
                    if($conn->query($sql) === TRUE){
                        echo "We have successfully entered your info.";
                    }
                    else{
                        echo"We could not insert your info.";
                    }
                }
                $conn->close();
                ?>
                    <br>
                    <br>
                    <!-- Add User Example-->
                    <div class="container">
                        <div class="addUserDiv col-lg-6">

                            <label>
                              <H1>
                                 Add a user below <br>   
                              </H1>
                           </label>

                            <!-- Add User Example------------------------------->
                            <form action="" method="POST">

                                <div class="form-group">
                                    <label for="firstname">First Name
                                           <input required type="text" class="form-control" name="firstname" placeholder="Enter first name">
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Last Name
                                            <input required type="text" class="form-control" name="lastname" placeholder="Enter last name">   
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username
                                            <input required type="text" class="form-control" name="username" placeholder="Enter username">
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email
                                            <input required type="text" class="form-control" name="email" placeholder="Enter email">
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password
                                            <input required type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label for="gradeyear">Grade Year</label>
                                    <select name="gradeyear" required>
                                       <option value="Freshman">Freshman</option>
                                       <option value="Sophomore">Sophomore</option>
                                       <option value="Junior">Junior</option>
                                       <option value="Senior">Senior</option>
                                       <option value="Super Senior">Super Senior</option>
                                       <option value="Graduate">Graduate</option>
                                       <option value="Other">Other</option>
                                       <option value="Prefer not to say">Prefer not to say</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="major">Major
                                            <input required type="text" class="form-control" name="major" placeholder="Enter major">
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select name="gender" required>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                       <option value="Other">Other</option>
                                       <option value="Prefer not to say">Prefer not to say</option>
                                   </select>
                                </div>
                                <div class="form-group">
                                    <label for="race">Race</label>
                                    <select name="race" required>
                                       <option value="American Indian or Alaska Native">American Indian or Alaska Native</option>
                                       <option value="Asian">Asian</option>
                                       <option value="Black or African American">Black or African American</option>
                                       <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
                                       <option value="White">White</option>
                                       <option value="Other">Other</option>
                                       <option value="Prefer not to say">Prefer not to say</option>
                                   </select>
                                </div>

                                <div class="form-group">
                                    <label for="ethnicity">Ethnicity</label>
                                    <select name="ethnicity" required>
                                       <option value="Hispanic or Latino">Hispanic or Latino</option>
                                       <option value="Not Hispanic or Latino">Not Hispanic or Latino</option>
                                       <option value="Other">Other</option>
                                       <option value="Prefer not to say">Prefer not to say</option>
                                   </select>
                                </div>

                                <input type="submit" value="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                    <br>
                    <!-- Sticky Footer -->
                    <footer class="sticky-footer">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">

                            </div>
                        </div>
                    </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

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
</body>

</html>
