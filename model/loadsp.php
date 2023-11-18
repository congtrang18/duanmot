<?php
function loadspsale() {
    $sql = "SELECT * FROM sanphamct JOIN san_pham ON san_pham.id_sp = sanphamct.idsp WHERE dacbiet > 0 ";
   return pdo_query($sql);
}
function loaddm() {
    $sql = "SELECT * FROM danh_muc JOIN san_pham ON danh_muc.id_dm = san_pham.id_dm";
    return pdo_query($sql);
}
?>