<body>

    <div class="check-main">
        <div class="container">
            <div class="row mt-20">
                <div class="col-12">
                    <div class="check-user">

                    </div>
                </div>
            </div>
            <form action="">
                <div class="row">
                    <div class="col-lg-7">
                        <h5 class="checkout-title">Thông tin người mua</h5>
                        <div class="single-input-item">
                            <input class="form-control p-3" type="text" id="name" name="UserName"
                                placeholder="Họ và tên của bạn" required="">

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input-item">
                                    <input class="form-control mt-5 w-100 p-3" type="email" id="email" name="Email"
                                        placeholder="Email của bạn" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control mt-5 w-100 p-3" type="phone" id="phone" name="PhoneNumber"
                                    placeholder="Số điện thoại của bạn" required="">
                            </div>
                        </div>


                        <h5 class="mt-5 checkout-title">Địa chỉ nhận hàng</h5>
                        <div class="single-input-item">
                            <input class="form-control p-3" type="text" id="name" name="UserName"
                                placeholder="Địa chỉ nhận hàng" required="">

                        </div>

                        <h5 class="mt-5 checkout-title">Chọn hình thức thanh toán</h5>
                        <div class="option-checkout">
                            <div class="option-iem d-flex">
                                <input type="radio" name="" id="">
                                <label class="m-3">Thanh toán tiền mặt khi nhận hàng</label>
                            </div>
                            <div class="option-iem">
                                <input type="radio" name="" id="">
                                <label class="m-3">Thanh toán tiền mặt tại cửa hàng</label>
                            </div>
                            <div class="option-iem">
                                <input type="radio" name="" id="">
                                <label class="m-3">Chuyển khoản</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <h5 class="mt-5 checkout-title">Thông tin đơn hàng</h5>
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="title">
                                        <th class="pro-img">Sản phẩm</th>
                                        <th class="pro-quantity">Số lượng</th>
                                        <th class="pro-price">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><img style="width: 120px; height: 100px;"
                                                src="/img/DBC0014BRW.WR20A-hover.jpg" alt=""></th>
                                        <th>2</th>
                                        <th>120.000.00</th>
                                    </tr>

                                  

                                </tbody>

                                <tr>
                                    <th colspan="2">
                                        <div class="title-sale">
                                            Nhập mã ưu đãi <br>
                                            <input type="text">
                                        </div>
                                    </th>
                                    <th>
                                        <div class="btn-sale">
                                            <button class="btn btn-secondary">Áp dụng</button>
                                        </div>
                                    </th>
                                    
                                </tr>
                                <tr>
                                    <th>Thành tiền</th>
                                    <th colspan="2">120.000.000</th>
                                </tr>

                            </table>
                            <div class="single-input-item">
                                <textarea name="Note" id="ordernote" cols="63" rows="6" placeholder="Quý khách có thể để lại lời nhắn cho Lộc Phúc Fine Jewelry tại đây!"></textarea>
                            </div>
                            <div class="summary-footer-area">
                                <div class="custom-control custom-checkbox mb-20 d-flex">
                                    <input type="checkbox" class="custom-control-input m-3" id="terms" required="">
                                    <label class="custom-control-label" for="terms">Tôi đồng ý với các <a href="#">điều khoản và điều kiện</a> giao dịch của Lộc Phúc Fine Jewelry</label>
                                </div>
                                <button type="button" id="dat-mua-notlogin" class="btn btn-secondary btn-dathang">Đặt Mua</button>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- <button type="submit">Đặt mua</button> -->
            </form>
        </div>

    </div>


</body>