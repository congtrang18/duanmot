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

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" >
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>STT</th>
                                <th>Tên danh mục</th>
                                <th>Chức năng</th>

                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($listdm as $key => $list) : ?>
                                <tr>
                                    <th width="10"><input type="checkbox" id="all"></th>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $list['tendm'] ?></td>
                                    <td colspan="2">
                                        <button class="btn btn-primary btn-sm"><a href="?act=editdm&iddm=<?= $list['id_dm'] ?>" >
                                                <i class="fas fa-edit"></i></a>
                                            </button>
                                        <button class="btn btn-primary btn-sm "><a class="xoa" >
                                                <i class="fas fa-trash-alt"></i> </a></button>
                                    </td>
                                    <!-- <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"
                                            onclick="myFunction(this)"><i class="fas fa-trash-alt"></i> 
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                      data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                       
                                    </td> -->
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