<?php
    require("connection.php");
    if(isset($_GET['delete_id'])){
        $deleteId = $_GET['delete_id'];
        $sql = "DELETE FROM store WHERE st_id = '".$deleteId."' ";
        mysqli_query($conn,$sql);
        if(mysqli_query($conn,$sql)){
            echo "แก้ไขเรียบร้อย";
            header("location:store_admin.php");
            exit();
        }
        else{
            echo "ผิดพลาด!!";
    
        }
    }
?>