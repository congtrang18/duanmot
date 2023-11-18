<?php
session_start();
include('../../model/pdo.php');
include('../../model/login.php');
$nv = nhanvien();

// var_dump($admin);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <title>Đăng nhập quản trị | Website quản trị v2.0</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../../qlbh/fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/animate/animate.css" />
  <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/css-hamburgers/hamburgers.min.css" />
  <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/select2/select2.min.css" />
  <link rel="stylesheet" type="text/css" href="../../qlbh/css/util.css" />
  <link rel="stylesheet" type="text/css" href="../../qlbh/css/main.css" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="../../qlbh/images/team.jpg" alt="IMG" />
        </div>
        <!--=====TIÊU ĐỀ======-->
        <form class="col-md-6" method="post" action="">
          <span class="login100-form-title">
            <b>ĐĂNG NHẬP HỆ THỐNG POS</b>
          </span>
          <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
          <!-- <form action="" method="post"> -->
          <div class="wrap-input100">
            <input class="input100" type="text" placeholder="Tài khoản quản trị" name="user" />

            <span class="symbol-input100">
              <i class="bx bx-user"></i>
            </span>
          </div>
          <div class="wrap-input100 validate-input">
            <input autocomplete="off" type="password" class="input100" placeholder="Mật khẩu" name="pass" />
            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>

            <span class="symbol-input100">
              <i class="bx bx-key"></i>
            </span>
          </div>


          <!--=====ĐĂNG NHẬP======-->
          <div>
            <input type="submit" value="Đăng nhập" name="btnsubmit" />
          </div>
          <!--=====LINK TÌM MẬT KHẨU======-->
          <div class="text-right p-t-12">
            <a class="txt2" href="quenmk.php"> Bạn quên mật khẩu? </a>
          </div>
          <!-- </form> -->

        </form>
      </div>
    </div>
  </div>

</body>

</html>
<?php
if (isset($_POST['btnsubmit'])) {
    foreach ($nv as $key => $value) {

      if ($_POST['user'] == $value['tendangnhap'] && $_POST['pass'] == $value['matkhau']) {

        $_SESSION['user'] = $_POST['user'];
        header('location:../?act=bangdieukhien');
       
      }
      // if ($_POST['user'] == $value['tendn'] && $_POST['pass'] == $value['mk']) {

      //   $_SESSION['ceo'] = $_POST['user'];
      //   header('location:../?act=bangdieukhien');
       
      // }
    }
  
}
if (isset($_SESSION['mknv']) || isset($_SESSION['mkceo'])) {
  // echo 1;
  unset($_SESSION['mknv']);
  unset($_SESSION['mkceo']);
}
?>