<?php 
function tongnhanvien(){
    $sql="SELECT COUNT(*) AS 'tongnv' FROM `nhanvien`";
    return pdo_query($sql);
}
function tongspchitiet(){
    $sql="SELECT COUNT(*) AS 'tongspct' FROM `sanphamct`";
    return pdo_query($sql);
}
function tongsldh(){
   
    $sql=" SELECT SUM(soluongchitiet) AS 'tongdh' FROM `chitietdonhang`";
    return pdo_query($sql);
    // SELECT COUNT(*) AS 'tongdh' FROM `donhang`

}
function thanhtien(){
    $sql=" SELECT SUM(tongtien) AS 'thanhtien' FROM `chitietdonhang`";
    return pdo_query($sql);
}
function sanphambanchay(){
    $sql="SELECT * FROM `chitietdonhang` JOIN sanphamct ON sanphamct.id_spct=chitietdonhang.idspct JOIN san_pham ON san_pham.id_sp=sanphamct.idsp 
    ORDER BY chitietdonhang.soluongchitiet DESC LIMIT 10;";
    return pdo_query($sql);
}
function tongdh(){
    $sql="SELECT khachhang.*,donhang.*,sanphamct.*,chitietdonhang.soluongchitiet AS 'sl',chitietdonhang.tongtien  
    FROM `khachhang` JOIN donhang ON donhang.idkh=khachhang.id_kh 
    JOIN chitietdonhang ON chitietdonhang.iddh=donhang.id_dh JOIN sanphamct ON sanphamct.id_spct=chitietdonhang.idspct;";
    // thanhtien();
    return pdo_query($sql);
    
}
function thongkesp(){
    $sql="SELECT COUNT(*) AS 'sl',san_pham.tensp as 'tensp' FROM `san_pham` JOIN sanphamct ON sanphamct.id_spct=san_pham.id_sp GROUP BY sanphamct.idsp;";
     return pdo_query($sql);
}
function thongkedoanhthu(){
    $sql="SELECT khachhang.*,donhang.*,sanphamct.*,chitietdonhang.soluongchitiet AS 'sl',chitietdonhang.tongtien  
    FROM `khachhang` JOIN donhang ON donhang.idkh=khachhang.id_kh JOIN chitietdonhang ON chitietdonhang.iddh=donhang.id_dh JOIN sanphamct ON sanphamct.id_spct=chitietdonhang.idspct;";
    // thanhtien();
    return pdo_query($sql);
    
}
?>