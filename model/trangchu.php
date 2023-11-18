<?php 
// load sản phẩm theo danh mục
function Trangsucvang(){
    $sql="SELECT * FROM `danh_muc`";
    return pdo_query($sql);
    
}
?>