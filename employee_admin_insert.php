<?php
require("connection.php");
session_start();
?>

<?php //* เพิ่มข้อมูลพนักงาน
if(isset($_POST['submit'])){
    $emp_id = $_POST["emp_id"];
    $emp_psw = $_POST["emp_psw"];
    $emp_name = $_POST["emp_name"];
    $emp_sname = $_POST["emp_sname"];
    $emp_birth = $_POST["emp_birth"];
    $emp_phone = $_POST["emp_phone"];
    $qualification = $_POST["qualification"];
    $position = $_POST["position"];
    $sql1 = "INSERT INTO employee(emp_id,emp_psw,emp_name,emp_sname,emp_birth,emp_phone,qualification,position)
    VALUES ('$emp_id','$emp_psw','$emp_name','$emp_sname','$emp_birth','$emp_phone','$qualification','$position')";
    if(mysqli_query($conn,$sql1)){
        header("location:employee_admin.php");
    }
    else{
        echo "ผิดพลาด!!";
    }
}
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
    <form action="employee_admin_insert.php" method="post" name="myForm">
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
            <h1>เพิ่มข้อมูลพนักงาน</h1>
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
                    <input type="text" id="emp_id" name="emp_id" class="form-control form-control-lg" style="width: 100%;" placeholder="ชื่อผู้ใช้" ><br>
                    <input type="text" id="emp_psw" name="emp_psw" class="form-control form-control-lg" style="width: 100%;" placeholder="รหัสผ่าน"><br>
                    <input type="text" id="emp_name" name="emp_name" class="form-control form-control-lg" style="width: 100%;" placeholder="ชื่อ"><br>
                    <input type="text" id="emp_sname" name="emp_sname" class="form-control form-control-lg" style="width: 100%;" placeholder="นามสกุล"><br>
                    <input type="date" id="emp_birth" name="emp_birth" class="form-control form-control-lg" style="width: 100%;" ><br>
                    <input type="text" id="emp_phone" name="emp_phone" class="form-control form-control-lg" style="width: 100%;" placeholder="เบอร์โทรศัพท์"><br>
                    <input type="text" id="qualification" name="qualification" class="form-control form-control-lg" style="width: 100%;" placeholder="คุณสมบัติ"><br>
                    <select class="form-control form-control-lg" style="width: 100%;" id="position" name="position">
                        <option selected value="">ตำแหน่ง</option>
                        <option value="admin">admin</option>
                        <option value="driver">driver</option>
                        <option value="employee">employee</option>
                    </select><br>
                    <button type="submit" name="submit" class="btn-lg btn-success">เพิ่มข้อมูล</button>
                    </div>
        </div>
    </div>
    </form>
</body>
</html>