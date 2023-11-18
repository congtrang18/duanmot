<?php
session_start();
include('model/pdo.php');
include('model/dangkyanddnusser.php');
include('model/loadsptheodm.php');
include('model/find.php');
include('model/qltk.php');
include('model/loadsptrangchu.php');
include('model/loadsp.php');
include('user/trangchu/head.php');
include('user/trangchu/menu.php');
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // nguyệt
        case 'trangchu':
            $loadtrangsuccaocap = loadtrangsuccaocap();
            $loadtrangsuckimcuong = loadtrangsuckimcuong();
            $loadspsale = loadspsale();
            $loaddm = loaddm();

            include('user/maintrangchu.php');
            break;
        case 'dangky':
            if (isset($_POST['btnsubmit'])) {

                $upload = "admin/upload_img/" . time() . $_FILES['avatar']['name'];
                move_uploaded_file($_FILES['avatar']['tmp_name'], $upload);
                $dangky = dangky(
                    $_POST['ten'],
                    $_POST['email'],
                    $_POST['phone'],
                    $_POST['address'],
                    $_POST['pass'],

                    $upload
                );
            }

            include('user/dangky.php');
            break;
        case 'dangnhap':
            if (isset($_POST['btnsubmit'])) {
                $dangnhap = dangnhap($_POST['email'], $_POST['mk']);
                if ($dangnhap) {
                    $_SESSION['emailkh'] = $dangnhap['email'];
                    $_SESSION['id_kh'] = $dangnhap['id_kh'];
                    // header('location:?act=trangchu');
                    echo '<meta http-equiv="refresh" content="0;url=?act=trangchu">';
                }
            }
            include('user/dangnhap.php');
            break;
        case 'dangxuat':
            if (isset($_SESSION['emailkh'])) {
                unset($_SESSION['emailkh']);
                // header('location:?act=trangchu');
                echo '<meta http-equiv="refresh" content="0;url=?act=trangchu">';
            }
            break;

        case 'suatk':
            $gettk = qltk($_SESSION['id_kh']);
            // var_dump($gettk);
            if (isset($_POST['inputsubmit'])) {
                $upload = "admin/upload_img/" . time() . $_FILES['anhkh']['name'];
                move_uploaded_file($_FILES['anhkh']['tmp_name'], $upload);
                updatetk(
                    $_SESSION['id_kh'],
                    $_POST['tenkh'],
                    $_POST['email'],
                    $_POST['sdt'],
                    $_POST['diachi'],
                    $_POST['matkhau'],
                    $_POST['tentk'],
                    $upload
                );
                // header('location:?act=suatk');
                echo '<meta http-equiv="refresh" content="0;url=?act=suatk&data=accounts">';
            }
            include('user/suatk.php');
            break;

        case 'lienhe':
            include('user/lienhe.php');
            break;
        case 'gioithieu':
            include('user/gioithieu.php');

            break;
        case 'quenmk':
            include('user/quenmk.php');
            # code...
            break;
            // trang

        case 'trangsucvang':
            $loaisp = loaisp($_GET['iddm']);
            $listgioitinh = getgt();
            $getsize = getsize();
            $getgia = getgia();
            // var_dump($getsize);

            $loadsptheodm = loadsptheodm($_GET['iddm']);
            include('user/loadstheodm.php');
            break;
        case 'trangsuckimcuong':
            $loaisp = loaisp($_GET['iddm']);
            $listgioitinh = getgt();
            $loadsptheodm = loadsptheodm($_GET['iddm']);
            include('user/loadstheodm.php');
            break;
        case 'trangsucngoctrai':

            $loadsptheodm = loadsptheodm($_GET['iddm']);
            include('user/loadstheodm.php');
            break;
        case 'chitietsp':
            include('user/chitietsp.php');
            break;
            // dũng

        case 'giohang':
            include('user/giohang.php');

            break;
        case 'muahang':
            include('user/muahang.php');

            break;
        case 'tintuc':
            include('user/tintuc.php');

            break;
    }
} else {
    $loadtrangsuccaocap = loadtrangsuccaocap();
    $loadtrangsuckimcuong = loadtrangsuckimcuong();
    $loadspsale = loadspsale();
    $loaddm = loaddm();
    include('user/maintrangchu.php');
}
include('user/trangchu/footer.php');
