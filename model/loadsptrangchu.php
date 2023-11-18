
<?php
function loadtrangsuccaocap() {
    $sql = "SELECT * FROM sanphamct";
    return pdo_query($sql);
}

function loadtrangsuckimcuong() {
    $sql = "SELECT * FROM sanphamct JOIN san_pham ON sanphamct.idsp = san_pham.id_sp WHERE id_dm = 2 ";
    return pdo_query($sql);
}
function search($tensp){
    $sql="SELECT * FROM `sanphamct` WHERE tenspchitiet LIKE '%$tensp%'";
    return pdo_query($sql);
}

?>  