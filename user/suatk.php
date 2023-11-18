<body>


  <div class="container">
    <div class="main-body">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="<?= $gettk['hinhanhkh'] ?>" alt="Admin" class="rounded-circle p-1 bg-dark" width="110" />
                <div class="mt-3">
                  <h4><?= $gettk['tenkh'] ?></h4>
                </div>
              </div>
              <hr class="my-4" />
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Họ và tên:</h6>
                  <span class="text-secondary"><?= $gettk['tenkh'] ?></span>
                </li>
                <!-- -- -->
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">User:</h6>
                  <span class="text-secondary"><?= $gettk['tentk'] ?></span>
                </li>
                <!-- ---- -->
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Email:</h6>
                  <span class="text-secondary"><?= $gettk['email'] ?></span>
                </li>
                <!-- -- -->
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Số điện thoại:</h6>
                  <span class="text-secondary"><?= $gettk['sodienthoai'] ?></span>
                </li>
                <!-- -- -->

                <!-- -- -->
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Địa chỉ:</h6>
                  <span class="text-secondary"><?= $gettk['diachi'] ?></span>
                </li>
                <!-- -- -->
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Mật khẩu:</h6>
                  <span class="text-secondary"><?= $gettk['matkhau'] ?></span>
                </li>
                <!-- -- -->
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <h6 class="mb-0">Ngày sinh:</h6>
                  <span class="text-secondary"><?= date('d-m-Y', strtotime($gettk['ngaysinh'])) ?></span>
                </li>
                <!-- -- -->
              </ul>
            </div>
          </div>
        </div>
        <!-- BOX SỬA TÀI KHOẢN  -->
        <form action="?act=suatk" method="post" class="col-md-8" enctype="multipart/form-data">
          <div class="">
            <div class="card p-2">
              <div class="card-body">
                <h3 class="p-1">SỬA THÔNG TIN</h3>
                <!-- --AVATAR -->
                <div class="d-flex flex-column justify-content-between">
                  <img src="<?= $gettk['hinhanhkh'] ?>" alt="" class="rounded-circle p-1 bg-dark" width="85" />
                  <input type="file" class="form-control-file p-2" name="anhkh" />
                </div>
                <!-- --TÊN -->
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Họ và tên</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input name="tenkh" type="text" class="form-control" value="<?= $gettk['tenkh'] ?>" />
                  </div>
                </div>
                <!-- tên tk -->

                
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Tên tài khoản</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input name="tentk" type="text" class="form-control" value="<?= $gettk['tentk'] ?>" />
                  </div>
                </div>
                <!--EMAIL -- -->
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input name="email" type="text" class="form-control" value="<?= $gettk['email'] ?>" />
                  </div>
                </div>
                <!--SỐ ĐIỆN THOẠI -- -->
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Số điện thoại</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input name="sdt" type="text" class="form-control" value="<?= $gettk['sodienthoai'] ?>" />
                  </div>
                </div>
                <!-- -- -->

                <!-- --ĐỊA CHỈ -->
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Địa chỉ</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input name="diachi" type="text" class="form-control" value="<?= $gettk['diachi'] ?>" />
                  </div>
                </div>
                <!-- --MẬT KHẨU -->
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Mật khẩu</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input name="matkhau" type="text" class="form-control" value="<?= $gettk['matkhau'] ?>" />
                  </div>
                </div>

                <!-- NGÀY SINH-- -->
                <div class="row mb-3">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Ngày sinh</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input readonly name="ngaysinh" type="text" class="form-control" value="<?= date('d-m-Y', strtotime($gettk['ngaysinh'])) ?>" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3"></div>
                  <div class="col-sm-9 text-secondary">
                    <input name="inputsubmit" type="submit" class="btn btn-dark px-4" value="Lưu thay đổi" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>