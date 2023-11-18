<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách danh mục</li>
            <li class="breadcrumb-item"><a href="#">Thêm danh mục</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới danh mục</h3>
                <div class="tile-body">
                    <form action="?act=adddm" method="post" enctype="multipart/form-data">
                        <label>Tên danh mục</label>
                        <input name="tendm" type="text"> <br>
                        <label class="mt-3">Hình ảnh danh mục</label>
                        <input name="hinhanhdm" type="file"><br>
                        <button type="submit" name="btnsubmit" class="btn btn-success mt-3">Thêm mới</button>
                    </form>


                </div>

            </div>
</main>