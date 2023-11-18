<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="?act=adddm" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới danh mục</a>
                        </div>

                    
                    </div>
                    <table class="table table-hover table-bordered" >
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>STT</th>
                                <th>Tên danh mục</th>
                                <th>Hình ảnh danh mục</th>
                                <th>Chức năng</th>

                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($listdm as $key => $list) : ?>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $list['tendm'] ?></td>
                                    <td><img src="<?= $list['hinhanhdm'] ?>" style="width: 200px;" alt=""></td>

                                    <td colspan="2">
                                        <button class="btn btn-primary btn-sm"><a href="?act=editdm&iddm=<?= $list['id_dm'] ?>" >
                                                <i class="fas fa-edit"></i></a>
                                            </button>
                                        <button class="btn btn-primary btn-sm "><a href="?act=deletedm&iddm=<?= $list['id_dm'] ?>" class="xoa" >
                                                <i class="fas fa-trash-alt"></i> </a></button>
                                    </td>
                                  
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>