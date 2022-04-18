<?php
require("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ป้อฮ์ไอติมกะทิสด</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free-6.0.0-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_driver.php">
                <div >
                    <i><img style="border-radius: 50%; width: 50px; " src="image/224019868_4188885927869080_8971062786250497666_n.jpg" ></i>
                </div>
                <div class="sidebar-brand-text mx-1">ป้อฮ์ไอติมกะทิสด</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="employee_driver.php">
                    <i class="fa-solid fa-user"></i>
                    <span><b>ข้อมูลพนักงาน</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa-solid fa-ice-cream"></i>
                    <span><b>ข้อมูลสินค้า</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa-solid fa-ice-cream"></i>
                    <span><b>ข้อมูลประเภทสินค้า</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa-solid fa-truck"></i>
                    <span><b>ข้อมูลรถส่งสินค้า</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa-solid fa-store"></i>
                    <span><b>ข้อมูลร้านค้า</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa-solid fa-battery-full"></i>
                    <span><b>ข้อมูลสินค้านำเข้ารถไอศกรีม</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa-solid fa-battery-empty"></i>
                    <span><b>ข้อมูลสินค้านำออกรถไอศกรีม</b></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa-solid fa-truck-fast"></i>
                    <span><b>ข้อมูลการส่งสินค้า</b></span>
                </a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['emp_name'],' ',$_SESSION['emp_sname']?></span>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ตำแหน่ง: <?=$_SESSION['position']?></span>
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ข้อมูลพนักงาน</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-10 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                    <table class="table table-striped table-lg" id="table" style="margin: auto;">
                                    <tbody>
                                        <tr>
                                        <td class="table-dark" style="text-align: center;"><b>ชื่อ</b></td>
                                        <td class="table-dark" style="text-align: center;"><b>นามสกุล</b></td>
                                        <td class="table-dark" style="text-align: center;"><b>วันเกิด</b></td>
                                        <td class="table-dark" style="text-align: center;"><b>เบอร์โทรศัพท์</b></td>
                                        <td class="table-dark" style="text-align: center;"><b>คุณสมบัติ</b></td>
                                        <td class="table-dark" style="text-align: center;"><b>ตำแหน่ง</b></td>
                                        <tr></tr>
                                            <?php
                                            $sql2 = "SELECT * FROM employee";
                                            $result = mysqli_query($conn,$sql2);
                                            while ($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                
                                                <td><?php echo $row['emp_name']?></td>
                                                <td><?php echo $row['emp_sname']?></td>
                                                <td><?php echo $row['emp_birth']?></td>
                                                <td><?php echo $row['emp_phone']?></td>
                                                <td><?php echo $row['qualification']?></td>
                                                <td><?php echo $row['position']?></td>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ป้อฮ์ไอติมกะทิสด 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">ต้องการจะ Logout ใช่ไหม?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-danger" href="logout.php" name="logout" >ตกลง</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete employee Modal-->
    <div class="modal fade" id="deleteempModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ลบรายการ</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">ต้องการจะลบรายการใช่ไหม?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                    <a class="btn btn-danger" href="logout.php" name="logout" >ตกลง</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>