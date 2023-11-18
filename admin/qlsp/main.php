<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="?act=addsp" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" style="color: black;" href="?act=deleteall"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                <th>Số thứ tự</th>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>

                                <th>Tình trạng</th>
                                <th>Giới tính</th>
                                <th>size</th>
                                <th>Danh mục</th>
                                <th>Xem thông tin về sản phẩm</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listsp as $key => $list) : ?>
                                <tr>
                                    <!-- <td width="10"><input type="checkbox" name="check1" value="1"></td> -->
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $list['id_sp'] ?></td>
                                    <td><?= $list['tensp'] ?></td>
                                    <td><img src="<?= $list['hinhanh'] ?>" alt="" width="100px"></td>

                                    <td><?= $list['dacbiet'] ?></td>
                                    <td><?= $list['ten_gt'] ?></td>
                                    <td><?= $list['id_size'] ?></td>
                                    <td><?= $list['tendm'] ?></td>
                                    <td><button class="btn btn-success"><a style="color: white;" href="?act=chitietsp&idsp=<?= $list['id_sp'] ?>">xem chi tiết sản phẩm</a></button></td>

                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>