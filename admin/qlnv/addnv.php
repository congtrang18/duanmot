<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Danh sách nhân viên</li>
      <li class="breadcrumb-item"><a href="#">Thêm nhân viên</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">

      <div class="tile">

        <h3 class="tile-title">Tạo mới nhân viên</h3>
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i class="fas fa-folder-plus"></i> Tạo chức vụ mới</b></a>
            </div>
          </div>
          <form class="row" action="?act=addnv" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-4">
              <label class="control-label">Họ và tên</label>
              <input class="form-control" type="text" name="hoten" >
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Ngày sinh</label>
              <input class="form-control" type="date" name="ngaysinh" >
            </div>
            <div class="form-group col-md-4">
              <label class="form-control" for="">Ảnh nhân viên</label>
              <input type="file" name="hinhanhnv" >
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Tên đăng nhập</label>
              <input class="form-control" type="text" name="tendangnhap" >
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Email</label>
              <input class="form-control" type="text" name="email" >
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Số điện thoại</label>
              <input class="form-control" type="number" name="sdt" >
            </div>

            <div class="form-group  col-md-4">
              <label class="control-label">Địa chỉ</label>
              <input class="form-control" type="text" name="diachi" >
            </div>
            <div class="form-group  col-md-4">
              <label class="control-label">Vai trò</label>
              <input class="form-control" type="text" name="vaitro" >
            </div>

            <div class="form-group  col-md-4">
              <label class="control-label">Lương</label>
              <input class="form-control" type="text" name="luong" >
            </div>
            
            <div class="form-group  col-md-8">
            <button class="btn btn-save mr-3" name="btn" type="submit">Lưu lại</button>
            <a class="btn btn-cancel" href="?act=quanlynhanvien">Hủy bỏ</a>
            </div>



           
          </form>
        </div>

</main>