<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
        body {
          background-image: url('image/bg1.gif');
          background-repeat: no-repeat;
          background-size: cover;
        }
    </style>

</head>
<body>
    <form action="login_action.php" method="post" name="myForm">
    <div style="text-align: center; margin-top: 100px;">
    <img src="image/224019868_4188885927869080_8971062786250497666_n.jpg" style="width: 150px; ">
    </div>
    <div class="container" style="margin-left: 37%; margin-top: 10px;">
        <div class="card" style="width: 500px;">
            <div class="row card-body">
                <div class="col-md-12">
                        <h3>เข้าสู่ระบบ</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="emp_id" placeholder="Your Username *" pattern="[a-zA-Z\u0E00-\u0E7F0-9]+" required>
                            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">กรุณากรอกเป็นตัวอักษรหรือตัวเลขเท่านั้น</div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="emp_psw" placeholder="Your Password *" pattern="[a-zA-Z\u0E00-\u0E7F0-9]+" required>
                            <div class="valid-feedback">ข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">กรอกตัวเลขได้ 4 ตัวเท่านั้น</div>
                        </div>
                        <div class="form-group">
                            <input type="submit" onclick="check()" class="btn btn-success btn-block" name="login" value="Login" >
                        </div>
                        <div class="form-group">
                            <input type="reset" class="btn btn-danger" name="cancel" value="Cancel" >
                        </div>
                </div>
            </div>
        </div>    
    </div>
    </form>
</body>
<script>
    function check() {
      var formEl = document.forms['myForm'];
      formEl.classList.add('was-validated');
      var form = formEl.elements;
      if (form["usernamename"].value == ""){
        formEl["usernamename"].nextSibling.remove();
      }
      if (form["psw"].value == "") {
        formEl["psw"].nextSibling.remove();
        return;
      }
    }
</script>
</html>