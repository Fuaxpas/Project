<?php 
  session_start();
  if(isset($_POST['login'])){
    require("connection.php");
    $emp_id = $_POST['emp_id'];
    $emp_psw = ($_POST['emp_psw']);
    $sql="SELECT * FROM employee Where emp_id ='".$emp_id."' AND emp_psw='".$emp_psw."' ";
    
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        $row = mysqli_fetch_array($result);

        $_SESSION["emp_name"] = $row["emp_name"];
        $_SESSION["emp_sname"] = $row["emp_sname"];
        $_SESSION["emp_id"] = $row["emp_id"];
        $_SESSION["position"] = $row["position"];

        if($_SESSION["position"]=="admin"){
          Header("Location: index_admin.php");
        }

        if ($_SESSION["position"]=="employee"){
          Header("Location: index_employee.php");
        }

        if ($_SESSION["position"]=="driver"){
          Header("Location: index_driver.php");
        }

    }else{
      echo "<script>";
          echo "alert(\"ชื่อผู้ใช้ หรือ  รหัสผ่าน ไม่ถูกต้อง\");"; 
          echo "window.history.back()";
      echo "</script>";
    }
    }else{
          Header("Location: login.php");

    }
?>