<?php
require("connection.php");
session_start();
$updateId = $_GET['update_id'];
        $sql = "SELECT * FROM store WHERE st_id = '".$updateId."' ";
        $result = mysqli_query($conn,$sql);
        $arr1 = mysqli_fetch_array($result);
?>
<?php
    if(isset($_POST['submit'])){
        $st_id = $_POST["st_id"];
        $st_name = $_POST["st_name"];
        $st_address = $_POST["st_address"];
        $province = $_POST["province"];
        $amphur = $_POST["amphur"];
        $district = $_POST["district"];
        $postcode = $_POST["postcode"];
        $st_phone = $_POST["st_phone"];
        $result1 = mysqli_query($conn, $sql);
        $sql1 = "UPDATE store SET st_id = '".$_POST['st_id']."', st_name = '".$_POST["st_name"]."',
                    st_address = '".$_POST['st_address']."',province = '".$_POST['province']."',
                    amphur = '".$_POST['amphur']."',district = '".$_POST['district']."',
                    postcode ='".$_POST['postcode']."',st_phone ='".$_POST['st_phone']."'
                WHERE st_id = '".$_POST['st_id']."'";
        if(mysqli_query($conn,$sql1)){
            header("location:store_admin.php");
        }
        else{
            echo "ผิดพลาด!!";
            echo "$sql1";
        }
    }
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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index_admin.php">
                <div >
                    <i><img style="border-radius: 50%; width: 50px; " src="image/224019868_4188885927869080_8971062786250497666_n.jpg" ></i>
                </div>
                <div class="sidebar-brand-text mx-1">ป้อฮ์ไอติมกะทิสด</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="employee_admin.php">
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
                <a class="nav-link collapsed" href="truck_admin.php">
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
                        <h1 class="h3 mb-0 text-gray-800">เพิ่มข้อมูลร้านค้า</h1>
                    </div>

                    <div class="container">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div style="text-align: right; padding-left: 35px; padding-top: 110px">
                                            <b class="text-gray-900 mb-4">ชื่อร้านค้า : </b>
                                        </div>
                                        <div style="text-align: right; padding-left: 35px; padding-top: 40px">
                                            <b class="text-gray-900 mb-4">รายละเอียดที่อยู่ : </b>
                                        </div>
                                        <div style="text-align: right; padding-left: 35px; padding-top: 40px;">
                                            <b class="text-gray-900 mb-4">จังหวัด : </b>
                                        </div>
                                        <div style="text-align: right; padding-left: 35px; padding-top: 40px;">
                                            <b class="text-gray-900 mb-4">อำเภอ : </b>
                                        </div>
                                        <div style="text-align: right; padding-left: 35px; padding-top: 40px;">
                                            <b class="text-gray-900 mb-4">ตำบล : </b>
                                        </div>
                                        <div style="text-align: right; padding-left: 35px; padding-top: 40px;">
                                            <b class="text-gray-900 mb-4">รหัสไปรษณีย์ : </b>
                                        </div>
                                        <div style="text-align: right; padding-left: 35px; padding-top: 40px;">
                                            <b class="text-gray-900 mb-4">เบอร์โทรศัพท์ : </b>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">ข้อมูลร้านค้า</h1>
                                            </div>
                                            <form class="user" action="store_admin_insert.php?update_id=<?php echo $updateId ?>" method="post" name="myForm">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg"
                                                        id="st_name" name="st_name" placeholder="ชื่อร้านค้า" value="<?php echo $arr1['st_name'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" 
                                                        id="st_address" name="st_address" placeholder="รายละเอียดที่อยู่" value="<?php echo $arr1['st_address'] ?>">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" id="province" name="province">
                                                        <option value="0">เลือกจังหวัด</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" id="amphur" name="amphur">
                                                        <option value="0">เลือกอำเภอ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" id="district" name="district">
                                                        <option value="0">เลือกตำบล</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" 
                                                        id="postcode" name="postcode" placeholder="รหัสไปรษณีย์" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-lg" 
                                                        id="st_phone" name="st_phone" placeholder="เบอร์โทรศัพท์" value="<?php echo $arr1['st_phone'] ?>">
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-success btn-user btn-block">
                                                    <i class="fas fa-plus"></i>
                                                    <b>เพิ่มข้อมูล</b>
                                                </button>
                                            </form>
                                        </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script type="text/javascript" src="AutoProvince.min.js"></script>     
    <script>
	$('body').AutoProvince({
		PROVINCE:		'#province', // select div สำหรับรายชื่อจังหวัด
		AMPHUR:			'#amphur', // select div สำหรับรายชื่ออำเภอ
		DISTRICT:		'#district', // select div สำหรับรายชื่อตำบล
		POSTCODE:		'#postcode', // input field สำหรับรายชื่อรหัสไปรษณีย์
		GEOGRAPHY:		'#geography', // input field แสดงภาค
		CURRENT_PROVINCE:<?=$arr1["province"]?>, //  แสดงค่าเริ่มต้น ใส่ไอดีจังหวัดที่เคยเลือกไว้
		CURRENT_AMPHUR:<?=$arr1["amphur"]?>, // แสดงค่าเริ่มต้น  ใส่ไอดีอำเภอที่เคยเลือกไว้
		CURRENT_DISTRICT:<?=$arr1["district"]?>, // แสดงค่าเริ่มต้น  ใส่ไอดีตำบลที่เคยเลือกไว้
		arrangeByName:	true // กำหนดให้เรียงตามตัวอักษร
	});

    </script>  

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