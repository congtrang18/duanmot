<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID đơn hàng</th>
                                <th>Sản Phẩm</th>
                                <th>Khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                                <th>Phương thức thanh toán</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($listdh as $donhang) {
                                    extract($donhang);
                                    $xoadonhang = "index.php?act=xoadonhang&id_dh=" . $id_dh;

                                    echo '

                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>

                   <td> ' . $id_dh . ' </td>
                    <td>' . $tensp . '</td>
                   <td>' . $tenkh . '</td>
                   <td>' . $diachinhan . '</td>
                   <td>' . $sodienthoai . '</td>
                   <td>' . $soluongchitiet . '</td>
                   <td>' . $giasp . '</td>
                   <td>' . $tongtien . '</td>
                   <td><span class="badge bg-success">Hoàn thành</span></td>
                   <td>' . $phuongthuctt . '</td>
                   <td><a href="' . $xoadonhang . '" > <button class="btn btn-primary trash" type="button" title="Xóa"><i
                      class="fas fa-trash-alt"></i> </button>
                  </a>
                </td>              
                   
      

                            </tr>';
                                }
                                ?>








                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>