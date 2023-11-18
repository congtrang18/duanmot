<?php
$iddm = getiddm();
var_dump($iddm);
?>
<header>

  <div class="title">
    <div class="container">
      <div class="row m-3">
        <div class="col-md-2">
         <!-- logo -->
        </div>
        <div class="col-md-9">
        <form class="d-flex" role="search">
                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success text-bg-secondary" type="submit">Search</button>
              </form>
        </div>

        <div class="col-md-1">
          <div class="row ">
           
            <div class="col-md-8">
              <a href="?act=giohang">
                <button type="button" class="btn btn-primary position-relative">
                  <i class="ti-shopping-cart"></i>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </button>
              </a>
            </div>

            <?php if (isset($_SESSION['emailkh'])) { ?>
              <div class="col-md-6 btn-user">
                <a href="">
                  <button type="button" class="btn btn-primary position-relative">
                    <?= $_SESSION['emailkh']  ?>
                  </button>
                  <div class="account">
                    <a href="?act=dangxuat">đăng xuất</a>

                  </div>
                </a>

              </div>
            <?php } else { ?>
              <div class="col-md-4 btn-user">
                <a href="">
                  <button type="button" class="btn btn-primary position-relative">
                    <i class="ti-user">
                    </i>
                  </button>
                  <div class="account">
                    <li><a href="?act=dangnhap">đăng nhập</a></li>
                    <li><a href="?act=dangky">đăng ký</a></li>
                  </div>
                </a>

              </div>
            <?php } ?>

          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="nav menu-destop">
            <ul class="d-flex justify-content-sm-between">
              <li><a href="?act=trangchu">TRANG CHỦ</a></li>
              <li class="drop-down"><a href="?act=trangsucvang&iddm=<?= $iddm[1]['id_dm'] ?>">TRANG SỨC VÀNG <i class="ti-angle-down"></i></a>
                <div class="menu-sub-gold">
                  <ul class="mega-menu d-flex justify-content-evenly">
                    <li class="mega-title"><a href="?act=trangsuckimcuong&iddm=<?= $iddm[2]['id_dm'] ?>"><span>TRANG SÚC KIM CƯƠNG</span></a>
                      <ul class="menu-item">
                        <li><a href="">Nhẫn kim cương</a>

                        </li>
                        <li><a href="#">Bông tai kim cương</a></li>
                        <li><a href="#">Dây chuyền kim cương</a></li>
                        <li><a href="#">Vòng & Lắc kim cương</a></li>
                        <li><a href="#">Trang sức cưới</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức CZ</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn CZ</a></li>
                        <li><a href="#">Bông tai CZ</a></li>
                        <li><a href="#">Dây chuyền CZ</a></li>
                        <li><a href="#">Vòng & Lắc</a></li>
                        <li><a href="#">Trang sức cưới</a></li>
                        <li><a href="#">Vòng Pan-Charm</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href=""><span>Trang sức đá màu</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn đá màu</a></li>
                        <li><a href="#">Bông tai đá màu</a></li>
                        <li><a href="#">Dây chuyền đá màu</a></li>
                        <li><a href="#">Vòng và lắc đá màu</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức ngọc trai</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn ngọc trai</a></li>
                        <li><a href="#">Bông tai ngọc trai</a></li>
                        <li><a href="#">Dây chuyền ngọc trai</a></li>
                        <li><a href="#">Vòng và lắc ngọc trai</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức không gắn đá</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn </a></li>
                        <li><a href="#">Bông tai </a></li>
                        <li><a href="#">Dây chuyền </a></li>
                        <li><a href="#">Vòng và lắc </a></li>
                        <li><a href="#">Nhẫn cưới </a></li>
                        <li><a href="#">Charm </a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="drop-down"><a href="?act=trangsuckimcuong&iddm=<?= $iddm[2]['id_dm'] ?>">TRANG SỨC KIM CƯƠNG<i class="ti-angle-down"></i></a>
                <ul class="menu-sub dropdown">
                  <li class="drop-down"><a href="#">Nhẫn cưới</a>
                    <ul class="dropdown menu-sub-child">
                      <li><a href="#">Nhẫn Cưới Kim Cương</a></li>
                      <li><a href="#">Nhẫn Cưới CZ</a></li>
                      <li><a href="#">Nhẫn Cưới Trơn</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Nhẫn cầu hôn</a>
                    <ul class="dropdown menu-sub-child">
                      <li><a href="#">Nhẫn Cầu Hôn Kim Cương</a></li>
                      <li><a href="#">Nhẫn Cầu Hôn CZ</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Kiềng cưới</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="?act=trangsucngoctrai&iddm=<?= $iddm[3]['id_dm'] ?>">TRANG SỨC NGỌC TRAI <i class="ti-angle-down"></i></a>
                <ul class="menu-sub dropdown">
                  <li class="drop-down"><a href="#">Nhẫn</a>
                  </li>
                  <li><a href="#">Bông Tai</a>
                  </li>
                  <li><a href="#">Dây Chuyền</a></li>
                  <li><a href="#">Vòng & Lắc</a></li>
                </ul>
              </li>
              <li><a href="#">BẠC</a></li>
              <?php if (isset($_SESSION['emailkh'])) { ?>
                <li><a href="?act=suatk">Quản lý tài khoản</a></li>

              <?php } ?>
              <li><a href="?act=tintuc">TIN TỨC</a></li>
              <li><a href="?act=lienhe">LIÊN HỆ</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- <div class="title-mobile">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="header-link-icon mt-4">
            <div class="icon-menu-mobile ">
              <i class="ti-menu"></i>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4">
          <img class="w-100 " src="/img/loc-phuc-logo.jpg" alt="">
        </div>
        <div class="col-md-4  mt-2">
          <div class="row p-3">
            <div class="col-md-8">
              <form class="" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
            <div class="col-md-2">

              <button type="button" class="btn btn-primary position-relative">
                <i class="ti-shopping-cart"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                  99+
                  <span class="visually-hidden">unread messages</span>
                </span>
              </button>

            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary position-relative">
                <i class="ti-user"></i>

              </button>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="menu-mobile">
    <div class="icon-close-menu">
      <i class="ti-close"></i>
    </div>
    <div class="overlay">

    </div>
    <form class="d-flex" role="search">
      <input class="form-control m-3" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success m-1" type="submit">Search</button>
    </form>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="nav menu-destop">
            <ul class="justify-content-sm-between">
              <li><a href="#">TRANG CHỦ</a></li>
              <li class="drop-down"><a href="#">TRANG SỨC VÀNG <i class="ti-angle-down"></i></a>
                <div class="menu-sub-gold">
                  <ul class="mega-menu">
                    <li class="mega-title"><a href="#"><span>Trang sức kim cương</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn kim cương</a>

                        </li>
                        <li><a href="#">Bông tai kim cương</a></li>
                        <li><a href="#">Dây chuyền kim cương</a></li>
                        <li><a href="#">Vòng & Lắc kim cương</a></li>
                        <li><a href="#">Trang sức cưới</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức CZ</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn CZ</a></li>
                        <li><a href="#">Bông tai CZ</a></li>
                        <li><a href="#">Dây chuyền CZ</a></li>
                        <li><a href="#">Vòng & Lắc</a></li>
                        <li><a href="#">Trang sức cưới</a></li>
                        <li><a href="#">Vòng Pan-Charm</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức đá màu</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn đá màu</a></li>
                        <li><a href="#">Bông tai đá màu</a></li>
                        <li><a href="#">Dây chuyền đá màu</a></li>
                        <li><a href="#">Vòng và lắc đá màu</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức ngọc trai</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn ngọc trai</a></li>
                        <li><a href="#">Bông tai ngọc trai</a></li>
                        <li><a href="#">Dây chuyền ngọc trai</a></li>
                        <li><a href="#">Vòng và lắc ngọc trai</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức không gắn đá</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn </a></li>
                        <li><a href="#">Bông tai </a></li>
                        <li><a href="#">Dây chuyền </a></li>
                        <li><a href="#">Vòng và lắc </a></li>
                        <li><a href="#">Nhẫn cưới </a></li>
                        <li><a href="#">Charm </a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="drop-down"><a href="#">TRANG SỨC CƯỚI <i class="ti-angle-down"></i></a>
                <ul class="menu-sub dropdown">
                  <li class="drop-down"><a href="#">Nhẫn cưới</a>
                    <ul class="dropdown menu-sub-child">
                      <li><a href="#">Nhẫn Cưới Kim Cương</a></li>
                      <li><a href="#">Nhẫn Cưới CZ</a></li>
                      <li><a href="#">Nhẫn Cưới Trơn</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Nhẫn cầu hôn</a>
                    <ul class="dropdown menu-sub-child">
                      <li><a href="#">Nhẫn Cầu Hôn Kim Cương</a></li>
                      <li><a href="#">Nhẫn Cầu Hôn CZ</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Kiềng cưới</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">TRANG SỨC CAO CẤP <i class="ti-angle-down"></i></a>
                <ul class="menu-sub dropdown">
                  <li class="drop-down"><a href="#">Nhẫn</a>
                  </li>
                  <li><a href="#">Bông Tai</a>
                  </li>
                  <li><a href="#">Dây Chuyền</a></li>
                  <li><a href="#">Vòng & Lắc</a></li>
                </ul>
              </li>
              <li><a href="#">KIM CƯƠNG</a></li>
              <li><a href="#">BỘ SƯU TẬP</a></li>
              <li><a href="#">TIN TỨC</a></li>
              <li><a href="#">LIÊN HỆ&GÓP Ý</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div> -->

</header>