<div class="row">
            <div class="row frmtitle">
                <H1>THÊM MỚI HÀNG HÓA</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb">
                        Mã loại <br>    
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb">
                        Tên loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb">
                        <br>
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>