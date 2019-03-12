<?php?>
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
           <?php
            if (isset($_SESSION['username'])){
                ?>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fas fa-fw"></i>
                        <span>Welcome: <?php echo $_SESSION['username']?></span>
                    </a>
                </li>
                <?php
            }
            ?>
            
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="login.php">Login</a>
                    <a class="dropdown-item" href="register.php">Register</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="students.php">
                    <i class="fas fa-fw fa-stuent-area"></i>
                    <span>Student</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="layouts.php">
                    <i class="fas fa-fw fa-layout"></i>
                    <span>Room Layouts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="surveys.php">
                    <i class="fas fa-fw fa-survey"></i>
                    <span>Survey</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="designer.php">
                    <i class="fas fa-fw fa-design"></i>
                    <span>Survey Designer</span></a>
            </li>
        </ul>