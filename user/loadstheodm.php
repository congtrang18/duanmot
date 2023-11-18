<body>

    <main>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#"><?= $loadsptheodm[0]['tendm'] ?></a></li>

                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="banner">
                <img src="img/KimCuong_PC.jpg" class="w-100" alt="">
            </div>
        </div>
        <div class="container">
            <div class="trangsucvang text-center mt-3">
                <h1><?=$loadsptheodm[1]['tendm']?></h1>

            </div>
            <div class="find p-3 ">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 text-center">
                            <select>
                                <option selected>Loại sản phẩm</option>
                                <?php foreach ($loaisp as $key => $value) { ?>
                                    <option value="<?= $value['id_sp'] ?>"><?= $value['tensp'] ?></option>
                                <?php  } ?>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-3 text-center">
                            <select>
                                <option selected>Giá</option>
                                <?php foreach ($getgia as $key => $value) { ?>
                                    <option value="<?= $value['id_spct'] ?>"><?= number_format($value['gia']) ?></option>
                                <?php  } ?>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-3 text-center">
                            <select>
                                <option selected>size</option>

                                <?php foreach ($getsize as $key => $value) { ?>
                                    <option value="<?= $value['id_chitietsize'] ?>"><?= $value['bankinh'] ?></option>
                                <?php  } ?>
                            </select>
                        </div>

                        <div class="col-md-2 col-sm-6  text-center">
                            <select>
                                <option selected>Giới tính</option>

                                <?php foreach ($listgioitinh as $key => $value) { ?>
                                    <option value="<?= $value['id_gt'] ?>"><?= $value['ten_gt'] ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-6  text-center">
                            <button type="submit" name="btnsubmit">Tìm</button>
                        </div>


                    </div>
                </form>
            </div>

            <div class="product_vang ">
                <div class="row p-3">
                    <?php foreach ($loadsptheodm as $item) : ?>
                        <div class="col-md-3 col-sm-4 col-6 add">
                            <div class="card cardto">
                                <img src="admin/<?php echo $item['hinhanh'] ?>" alt="...">
                                <div class="heart">

                                    <button><i class="ti-heart"></i></button><br>
                                    <button><i class="ti-search"></i></button>
                                </div>
                                <!-- <div class="addtocart">
                                    <button type="button" class="btn btn-outline-success w-100">Thêm vào giỏ hàng</button>
                                </div> -->
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item['tensp']; ?></h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                        card's content.</p>

                                </div>
                            </div>

                        </div>
                    <?php endforeach ?>


                </div>
                <div class="row p-3">
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-6">
                        <div class="card">
                            <img src="img/VFH1124ABW.WG06A-hover.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <hr>
        </div>

    </main>

</body>