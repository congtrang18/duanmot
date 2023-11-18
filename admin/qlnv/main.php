<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">

          <div class="row element-button">
            <div class="col-sm-2">

              <a class="btn btn-add btn-sm" href="?act=addnv" title="Thêm"><i class="fas fa-plus"></i>
                Tạo mới nhân viên</a>
            </div>

          </div>
          <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0" id="sampleTable">
            <thead>
              <tr>
                <!-- <th><input type="checkbox" id="all"></th> -->
                <th>ID nhân viên</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Ảnh nhân viên</th>
                <th>Tên dăng nhập</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
                <th>Lương</th>

                <th width="100">Tính năng</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($listnv as $item) : ?>
                <tr>
                  <!-- <td><input type="checkbox" name="check1" value="1"></td> -->
                  <td><?php echo $item['id_nv'] ?></td>
                  <td><?php echo $item['hoten'] ?></td>
                  <td><?php echo date('d-m-Y', strtotime($item['ngaysinh'] )) ?></td>
                  <td><img style="width: 75px;" src="<?php echo $item['hinhanhnv'] ?>" alt=""></td>
                  <td><?php echo $item['tendangnhap'] ?></td>
                  <td><?php echo $item['email'] ?></td>
                  <td><?php echo $item['sdt'] ?></td>
                  <td><?php echo $item['diachi'] ?> </td>
                  <td><?php echo $item['vaitro'] ?> </td>
                  <td><?php echo number_format($item['luong']) ?> </td>  
                  <td class="table-td-center">
                   <a class="delete" id="<?php echo $item['id_nv'] ?>"> <button class="btn btn-primary" type="button"><i class="fas fa-trash-alt"></i> </button></a>
                   
                    <a href="?act=modalnv&id_nv=<?php echo $item['id_nv'];?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fas fa-edit"></i>
                    </button></a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    var btnDelete = document.querySelectorAll(".delete");
    btnDelete.forEach(function(item) {
      item.addEventListener('click', function(){
        let x = item.getAttribute('id');
        let check = confirm("Bạn chắc chắn muốn xóa");
        if(check) {
          let href = item.setAttribute('href', '?act=deletenv&id_nv=' +x);
        }
      })
    });
  </script>
</main>