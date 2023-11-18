<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="?act=quanlynhanvien">Danh sách nhân viên</a></li>
      <li class="breadcrumb-item"><a href="#">Sửa nhân viên</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Sửa nhân viên</h3>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i class="fas fa-folder-plus"></i> Sửa nhân viên</b></a>
            </div>

          </div>
          <form class="row" action="?act=modalnv&id_nv=<?=$nhanvien['id_nv']?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_nv" value="<?php echo $nhanvien['id_nv']; ?>">
            <div class="form-group col-md-4">
              <label class="control-label">Họ và tên</label>
              <input class="form-control" value="<?php echo $nhanvien['hoten']; ?>" type="text" name="hoten" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Ngày sinh</label>
              <input class="form-control" value="<?php echo $nhanvien['ngaysinh']; ?>" type="text" name="ngaysinh" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Ảnh nhân viên</label>

              <img width="75px" src="<?php echo $nhanvien['hinhanhnv']; ?>" alt="">

              <input type="file" name="hinhanhnv" value="" readonly>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Tên đăng nhập</label>
              <input class="form-control" value="<?php echo $nhanvien['tendangnhap']; ?>" type="text" name="tendangnhap" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Email</label>
              <input class="form-control" value="<?php echo $nhanvien['email']; ?>" type="text" name="email" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" value="<?php echo $nhanvien['sdt']; ?>" type="number" name="sdt" required>
            </div>

            <div class="form-group  col-md-4">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" value="<?php echo $nhanvien['diachi']; ?>" type="text" name="diachi" required>
            </div>
            <div class="form-group  col-md-4">
              <label class="control-label">Vai trò</label>
              <input class="form-control" value="<?php echo $nhanvien['vaitro']; ?>" type="text" name="vaitro" required>
            </div>

            <div class="form-group  col-md-3">
              <label class="control-label">Lương</label>
              <input class="form-control" value="<?php echo $nhanvien['luong']; ?>" type="text" name="luong" required>
            </div>




            <button class="btn btn-save" type="submit" name="btn">Sửa</button>

          </form>
        </div>

</main>