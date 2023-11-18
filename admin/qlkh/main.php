<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active"><a href="#"><b>Quản lý khách hàng</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">

            </div>

          
          </div>
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all"></th>
                <th>Id khách hàng</th>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Ngày sinh</th>
                <th>Tên tài khoản</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <?php foreach ($listkh as $item) : ?>
              <tbody>
                <tr>

                  <th></th>
                  <th><?php echo $item['id_kh'] ?></th>
                  <th><?php echo $item['tenkh'] ?></th>
                  <th><?php echo $item['email'] ?></th>
                  <th><?php echo $item['sodienthoai'] ?></th>
                  <th><?php echo $item['diachi'] ?></th>
                  <th><?= date('d-m-Y',strtotime($item['ngaysinh'])) ?></th>

                  <th><?php echo $item['tentk'] ?></th>
                  <td><a class="delete" id=<?php echo $item['id_kh'] ?>><button class="btn btn-primary" name="btn" type="button"><i class="fas fa-trash-alt"></i></button></a></td>
                </tr>
              </tbody>
            <?php endforeach ?>


          </table>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  var btnDelete = document.querySelectorAll(".delete");
  console.log(btnDelete);
  btnDelete.forEach(function(item) {
    item.addEventListener('click', function() {
      let x = item.getAttribute('id');
      let check = confirm("Bạn có muốn xóa khách hàng này?");
      if (check) {
        let href = item.setAttribute('href', '?act=deletekh&id_kh=' + x);
      }
    })
  });
</script>