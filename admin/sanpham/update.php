<?php
    if(is_array($sanpham)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <H1>CẬP NHẬP LOẠI HÀNG HÓA</H1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb">
                        Mã sản phẩm <br>    
                        <input type="text" name="masp" disabled>
                    </div>
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb">
                        Giá sản phẩm <br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb">
                        Hình <br>
                        <input type="file" name="hinh" id="">
                    </div>
                    <div class="row mb">
                        Mô tả <br>
                        <textarea name="mota"  cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb">
                        <br>
                        <input type="submit" name="themmoi" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>