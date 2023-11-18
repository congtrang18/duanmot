<?php

function loadsptheodm($iddm) {
    $sql = "SELECT * FROM san_pham join danh_muc 
    ON danh_muc.id_dm=san_pham.id_dm  WHERE danh_muc.id_dm = $iddm ";
    return pdo_query($sql);
}

function getiddm() {
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}


?>