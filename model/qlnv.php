<?php
function listnv()
{
  $sql = "SELECT*FROM nhanvien";
  return pdo_query($sql);
}

function addnv($hoten, $tendangnhap, $ngaysinh, $target_file, $email, $sdt, $diachi, $vaitro, $luong)
{
  $sql = "INSERT INTO nhanvien(hoten,tendangnhap,ngaysinh,hinhanhnv,email,sdt,diachi,vaitro,luong)
     VALUES('$hoten','$tendangnhap','$ngaysinh','$target_file ','$email','$sdt','$diachi','$vaitro',$luong)";
  pdo_execute($sql);
}

function getone_nv($id_nv)
{
  $sql = "SELECT * FROM nhanvien WHERE id_nv=$id_nv";
  $result =  pdo_query_one($sql);
  return $result;
}
function modalnv($hoten, $tendangnhap, $ngaysinh, $target_file, $email, $sdt, $diachi, $vaitro, $luong, $id_nv)
{
  $sql = "UPDATE nhanvien SET hoten='$hoten',tendangnhap='$tendangnhap',ngaysinh='$ngaysinh',hinhanhnv='$target_file',email='$email',
   sdt='$sdt',diachi='$diachi',vaitro='$vaitro',luong=$luong 
   WHERE id_nv = $id_nv
   ";
  pdo_execute($sql);
}
function deletenv($id_nv)
{
  $sql = "DELETE FROM nhanvien WHERE id_nv = $id_nv";
  pdo_execute($sql);
}
