<?php
require("connection.php");
session_start();
$updateId = $_GET['update_id'];
        $sql = "SELECT * FROM employee WHERE emp_id = '".$updateId."' ";
        $result = mysqli_query($conn,$sql);
        $arr1 = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลพนักงาน</title>
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<style>
    .tcp{
        color: rgb(255, 169, 169);
    }
    .tcg{
        color: green;
    }
    .tcr{
        color: red;
    }
    .tcw{
        color: white;
    }
    body {
          background-image: url('image/bg2.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }
    .card { background-color: rgba(245, 245, 245, 0.4); }
    .card-header, .card-footer { opacity: 1}
</style>

</head>
<body style="background-color: rgb(255, 254, 179);">
    <form action="employee_admin_edit.php?update_id=<?php echo $updateId ?>" method="post" name="myForm">
    <div class="d-flex justify-content-center align-items-center text-dark" style="background-color: rgb(59, 59, 59);">
        <img src="image/224019868_4188885927869080_8971062786250497666_n.jpg" class="rounded-circle" style="width: 160px; ">
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div style = "color:white; padding-left: 75%"><b>ผู้ใช้งาน:<?=$_SESSION['emp_name'],' ',$_SESSION['emp_sname']?></b></div>
            <div style = "color:white;"><b>ตำแหน่ง:<?=$_SESSION['position']?></b></div>
            <div><a class="navbar-brand" href="logout.php" name="logout"><b class="tcr">Log out</b></a></div>
        </div>
    </nav>
 
    <div class="container" style="margin-top: 20px;">
        <div class="card" style="width: 1000px; margin: auto;">
            <h1>แก้ไขข้อมูลพนักงาน</h1>
            <div class="row card-body">
                <div class="col-md-4">
                    <h2>ไอดีผู้ใช้</h2><br>
                    <h2>รหัสผ่าน</h2><br>
                    <h2>ชื่อ</h2><br>
                    <h2>นามสกุล</h2><br>
                    <h2>วันเกิด</h2><br>
                    <h2>เบอร์โทรศัพท์</h2><br>
                    <h2>คุณสมบัติ</h2><br>
                    <h2>ตำแหน่ง</h2><br>
                </div>

                <div class="col-md-8">
                    <input type="text" id="emp_id" name="emp_id" class="form-control form-control-lg" style="width: 100%;" value="<?php echo $arr1['emp_id'] ?>"><br>
                    <input type="text" id="emp_psw" name="emp_psw" class="form-control form-control-lg" style="width: 100%;" value="<?php echo $arr1['emp_psw'] ?>"><br>
                    <input type="text" id="emp_name" name="emp_name" class="form-control form-control-lg" style="width: 100%;" value="<?php echo $arr1['emp_name'] ?>"><br>
                    <input type="text" id="emp_sname" name="emp_sname" class="form-control form-control-lg" style="width: 100%;" value="<?php echo $arr1['emp_sname'] ?>"><br>
                    <input type="date" id="emp_birth" name="emp_birth" class="form-control form-control-lg" style="width: 100%;" value="<?php echo $arr1['emp_birth'] ?>"><br>
                    <input type="text" id="emp_phone" name="emp_phone" class="form-control form-control-lg" style="width: 100%;" value="<?php echo $arr1['emp_phone'] ?>"><br>
                    <input type="text" id="qualification" name="qualification" class="form-control form-control-lg" style="width: 100%;" value="<?php echo $arr1['qualification'] ?>"><br>
                    <select class="form-control form-control-lg" style="width: 100%;" id="position" name="position">
                        <option selected value="">ตำแหน่ง</option>
                        <option value="admin" <?php if($arr1['position'] == 'admin' ) { echo "selected='selected'"; }?>>admin</option>
                        <option value="driver" <?php if($arr1['position'] == 'driver' ) { echo "selected='selected'"; }?>>driver</option>
                        <option value="employee" <?php if($arr1['position'] == 'employee' ) { echo "selected='selected'"; }?>>employee</option>
                    </select><br>
                    <button type="submit" name="submit" class="btn-lg btn-success">แก้ไข</button>
                    </div>
                    <?php
                    if(isset($_POST['submit'])){
                        $emp_id = $_POST["emp_id"];
                        $emp_psw = $_POST["emp_psw"];
                        $emp_name = $_POST["emp_name"];
                        $emp_sname = $_POST["emp_sname"];
                        $emp_birth = $_POST["emp_birth"];
                        $emp_phone = $_POST["emp_phone"];
                        $qualification = $_POST["qualification"];
                        $position = $_POST["position"];
                        $result1 = mysqli_query($conn, $sql);
                        $sql1 = "UPDATE employee SET emp_id = '".$_POST['emp_id']."', emp_psw = '".$_POST["emp_psw"]."',
                                    emp_name = '".$_POST['emp_name']."',emp_sname = '".$_POST['emp_sname']."',
                                    emp_birth = '".$_POST['emp_birth']."',emp_phone = '".$_POST['emp_phone']."',
                                    qualification ='".$_POST['qualification']."',position ='".$_POST['position']."'
                                WHERE emp_id = '".$_POST['emp_id']."'";
                        if(mysqli_query($conn,$sql1)){
                            header("location:employee_admin.php");
                        }
                        else{
                            echo "ผิดพลาด!!";
                            echo "$sql1";
                        }
                    }
            ?>
        </div>
    </div>
    </form>
</body>
</html>