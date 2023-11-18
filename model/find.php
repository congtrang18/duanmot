<?php
function getgt()
{
        $sql = "SELECT * FROM `gioitinh`";
        return pdo_query($sql);
}
function getsize()
{
        $sql = "SELECT * FROM `chitietsize` JOIN size ON size.id_size=chitietsize.idsize ";
        return pdo_query($sql);
}
function getgia()
{
$sql="SELECT * FROM `sanphamct`";
return pdo_query($sql);
}
function loaisp($iddm)
{
        $sql = "SELECT * FROM `danh_muc` JOIN san_pham ON san_pham.id_dm=danh_muc.id_dm where san_pham.id_dm=$iddm";
        return pdo_query($sql);
}
