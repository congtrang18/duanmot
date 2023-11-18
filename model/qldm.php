<?php 
function listdm(){
    $sql="SELECT*FROM danh_muc";
    return pdo_query($sql);
}
function adddm($tendm,$hinhanhdm){
$sql="INSERT INTO `danh_muc`( `tendm`,hinhanhdm) VALUES ('$tendm','$hinhanhdm')";
pdo_execute($sql);
}
function deletedm($iddm){
    $sql="DELETE FROM `danh_muc` WHERE id_dm=$iddm";
    pdo_execute($sql);
}
function getname($id){
    $sql="SELECT*FROM danh_muc where id_dm=$id";
    return pdo_query_one($sql);
}
function updatedm($iddm,$namedm){
    $sql="UPDATE `danh_muc` SET `id_dm`='[value-1]',`tendm`='$namedm' WHERE id_dm=$iddm ";
    pdo_execute($sql);
}

?>