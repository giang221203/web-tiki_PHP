<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
     pdo_execute($sql);
}
?>