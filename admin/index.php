
<?php
session_start();
if (!isset($_SESSION['user'])) {

   header('location:login/login.php');
} else {


   include('trangchu/head.php');
   // include('xoa.js');   
   include('trangchu/navbar.php');
   include('trangchu/slidebar.php');
   include('../model/pdo.php');
   include('../model/qlsp.php');
   include('../model/qldm.php');
   include('../model/qldh.php');
   include('../model/qlnv.php');
   include('../model/qlkh.php');

   include('../model/gioitinh.php');

   include('../model/baocaodoanhthu.php');
   include('../model/login.php');
   // include('trangchu/main.php');

   if (isset($_GET['act'])) {
      $act = $_GET['act'];
      switch ($act) {
         case 'bangdieukhien':


            include('trangchu/main.php');
            include('trangchu/footer.php');

            break;


         case 'quanlydanhmuc':
            $listdm = listdm();

            include('qldm/main.php');

            break;
         case 'adddm':
            // adddm();
            if (isset($_POST['btnsubmit'])) {
               $upload_img="upload_img/".time().$_FILES['hinhanhdm']['name'];
               move_uploaded_file($_FILES['hinhanhdm']['tmp_name'],$upload_img);
               adddm($_POST['tendm'],$upload_img);
               header('location:?act=quanlydanhmuc');
            }
            include('qldm/adddm.php');

            break;
         case 'editdm':
            if (isset($_GET['iddm'])) {
               $editdm = getname($_GET['iddm']);
            }
            if (isset($_POST['btnsubmit'])) {
               updatedm($_GET['iddm'], $_POST['namedm']);
               header('location:?act=quanlydanhmuc');
            }
            include('qldm/editdm.php');

            break;
         case 'deletedm':
            if (isset($_GET['iddm'])) {
               deletedm($_GET['iddm']);
               header('location:?act=quanlydanhmuc');
            }
            break;
         case 'quanlysanpham':
            $listsp = listsp();

        

            include('qlsp/main.php');
            include('qlsp/modal.php');
            break;
         case 'addsp':
            $getdm = listdm();
            $getgt = listgt();
            $getsize = size();
            if (isset($_POST['btnsubmit'])) {
               $upload = "upload_img/" . time() . $_FILES['hinhanh']['name'];
               move_uploaded_file($_FILES['hinhanh']['tmp_name'], $upload);
               addsp(
                  $_POST['tensp'],
                  $upload,
                  intval($_POST['luotxem']),
                  $_POST['dacbiet'],
                  intval($_POST['danhmuc']),
                  intval($_POST['gioitinh']),
                  intval($_POST['size'])

               );
               header('location:?act=quanlysanpham');
            }
            include('qlsp/addsp.php');

            break;
         case 'deletesp':
            if (isset($_GET['idsp'])) {
               deletesp($_GET['idsp']);
               header('location:?act=quanlysanpham');
            }

            break;
         case 'deleteall':
            deleteall();

            header('location:?act=quanlysanpham');


            break;
         case 'updatesp':

            if (isset($_GET['idsp'])) {
               $listdm = listdm();
               $getsp = getsp($_GET['idsp']);
            }
            if (isset($_POST['btnsubmit'])) {

               if ($_FILES['hinhanh']['name'] == '') {
                  $upload = $getsp['hinhanh'];
                  updatesp($_GET['idsp'], $_POST['tensp'], $upload,  $_POST['dacbiet'], $_POST['danhmuc']);
                  header('location:?act=quanlysanpham');
               } else {
                  unlink($getsp['hinhanh']);
                  $upload = "upload_img/" . time() . $_FILES['hinhanh']['name'];
                  move_uploaded_file($_FILES['hinhanh']['tmp_name'], $upload);
                  updatesp($_GET['idsp'], $_POST['tensp'], $upload,  $_POST['dacbiet'], $_POST['danhmuc']);
                  header('location:?act=quanlysanpham');
               }
            }


            include('qlsp/updatesp.php');
            break;
         case 'chitietsp':
            $_SESSION['idsp'] = $_GET['idsp'];
            $listchitietsp = listchitietsp($_GET['idsp']);
            include('qlsp/chitietsp/main.php');
            break;
         case 'addspchitiet':
            if (isset($_POST['btnsubmit'])) {
               $upload = "upload_img/" . time() . $_FILES['hinhanh']['name'];
               move_uploaded_file($_FILES['hinhanh']['tmp_name'], $upload);
               addspchitiet(
                  intval($_POST['soluong']),

                  floatval($_POST['gia']),
                  $_POST['mota'],
                  $_POST['tenspchitiet'],
                  $upload,
                  intval($_GET['idsp'])
               );
               header('location:?act=chitietsp&idsp=' . $_GET['idsp']);
            }

            include('qlsp/chitietsp/addspchitiet.php');

            break;
         case 'deletespchitiet':
            if (isset($_GET['idspchitiet'])) {
               deletespchitiet($_GET['idspchitiet']);
               header('location:?act=chitietsp&idsp=' . $_SESSION['idsp']);
            }
            break;
         case 'updatespchitiet':
            $getspchitiet = getchitietsp($_GET['idspchitiet']);
            // var_dump($getspchitiet);
            if (isset($_POST['btnsubmit'])) {

               if ($_FILES['hinhanhchitiet']['name'] == '') {
                  $upload = $getspchitiet['hinhanhchitiet'];
                  updatechitietsp(
                     $_GET['idspchitiet'],
                     $_POST['soluong'],
                     // $_POST['size'],
                     // $_POST['gioitinh'],
                     $_POST['gia'],
                     $_POST['mota'],
                     $_POST['tenspchitiet'],
                     $upload
                  );
                  header('location:?act=chitietsp&idsp=' . $_GET['idsp']);
               } else {
                  unlink($getspchitiet['hinhanhchitiet']);
                  $upload = "upload_img/" . time() . $_FILES['hinhanhchitiet']['name'];
                  move_uploaded_file($_FILES['hinhanhchitiet']['tmp_name'], $upload);
                  updatechitietsp(
                     $_GET['idspchitiet'],
                     $_POST['soluong'],

                     $_POST['gia'],
                     $_POST['mota'],
                     $_POST['tenspchitiet'],
                     $upload
                  );
                  header('location:?act=chitietsp&idsp=' . $_GET['idsp']);
               }
            }

            include('qlsp/chitietsp/updatespchitiet.php');

            break;

         case 'quanlydonhang':
            $listdh = loadallDH();
            include('qldh/main.php');
            break;
         case 'xoadonhang':
            if (isset($_GET["id_dh"]) && ($_GET["id_dh"] > 0)) {
               xoadonhang($_GET["id_dh"]);
            }
            $listdh = loadallDH();
            include('qldh/main.php');
            break;
         case 'quanlynoibo':
            include('qlnoibo/main.php');

            break;
         case 'bankeluong':
            include('bankeluong/main.php');

            break;
         case 'baocaodoanhthu':
            if (!isset($_SESSION['ceo'])) {
               $tongnv = tongnhanvien();
               $tongspct = tongspchitiet();
               $tongsldh = tongsldh();
               $thanhtien = thanhtien();
               $spbanchay = sanphambanchay();
               $tongdh = tongdh();
               $thongkesp = thongkesp();
               $thongkedoanhthu = thongkedoanhthu();

               // var_dump($thongkesp);
               include('baocaodoanhthu/main.php');
            }

            break;
         case 'logout':
            if (isset($_SESSION['user'])) {
               unset($_SESSION['user']);
            }
            header('location:../admin/login/login.php');

            break;
         case 'quanlynhanvien':
            $listnv = listnv();
            // var_dump($listnv);
            include('qlnv/main.php');
            break;
         case 'addnv':
            // $ceo = ceo();
            if (isset($_POST['btn'])) {
               $hoten = $_POST['hoten'];
               $tendangnhap = $_POST['tendangnhap'];
               $ngaysinh = $_POST['ngaysinh'];

               $target_dir = "upload_img/";
               $image = $_FILES['hinhanhnv']['name'];
               $random = rand(1, 100000);
               $target_file = $target_dir . $random . $image;
               move_uploaded_file($_FILES['hinhanhnv']['tmp_name'], $target_file);


               $email = $_POST['email'];
               $sdt = $_POST['sdt'];
               $diachi = $_POST['diachi'];
               $vaitro = $_POST['vaitro'];
               $luong = $_POST['luong'];
          

               addnv($hoten, $tendangnhap, $ngaysinh, $target_file, $email, $sdt, $diachi, $vaitro, floatval($luong));
               header('location: ?act=quanlynhanvien');
            }
            // $listnv = listnv();

            include('qlnv/addnv.php');
            break;
         case 'modalnv':
    
            $nhanvien = getone_nv($_GET['id_nv']);
           
            
            if (isset($_POST['btn'])) {
           
               if ($_FILES['hinhanhnv']['name']=='') {
               $hoten = $_POST['hoten'];
               $tendangnhap = $_POST['tendangnhap'];
               $ngaysinh = $_POST['ngaysinh'];
   
               $email = $_POST['email'];
               $sdt = $_POST['sdt'];
               $diachi = $_POST['diachi'];
               $vaitro = $_POST['vaitro'];
               $luong = $_POST['luong'];
               
               $id_nv = $_POST['id_nv'];
               modalnv($hoten, $tendangnhap, $ngaysinh, $nhanvien['hinhanhnv'], $email, $sdt, $diachi, $vaitro, $luong, $id_nv);

               header('location: ?act=quanlynhanvien');
                 
               }else{
                  unlink($nhanvien['hinhanhnv']);
                  $hoten = $_POST['hoten'];
                  $tendangnhap = $_POST['tendangnhap'];
                  $ngaysinh = $_POST['ngaysinh'];
                  $target_dir = "upload_img/";
                  $image = $_FILES['hinhanhnv']['name'];
                  $random = rand(1, 100000);
                  $target_file = $target_dir . $random . $image;
                  move_uploaded_file($_FILES['hinhanhnv']['tmp_name'], $target_file);
                  $email = $_POST['email'];
                  $sdt = $_POST['sdt'];
                  $diachi = $_POST['diachi'];
                  $vaitro = $_POST['vaitro'];
                  $luong = $_POST['luong'];
                  
                  $id_nv = $_POST['id_nv'];
                  modalnv($hoten, $tendangnhap, $ngaysinh,$target_file , $email, $sdt, $diachi, $vaitro, $luong, $id_nv);
   
                  header('location: ?act=quanlynhanvien');
               }
              
            }
            include('qlnv/modal.php');
            break;
         case 'deletenv':
            if (isset($_GET['id_nv'])) {
               deletenv($_GET['id_nv']);
               header('location: ?act=quanlynhanvien');
            }
            
            break;
         case 'quanlykhachhang':
            $listkh = listkh();
            // var_dump($listkh);
            include('qlkh/main.php');
            break;
         case 'deletekh':
            if (isset($_GET['id_kh'])) {
             deletekh($_GET['id_kh']);
               header('location: ?act=quanlykhachhang');
            }
            break;
      }
      // include('footer.php');
   } else {
      include('trangchu/main.php');
      include('trangchu/footer.php');
   }
}
