<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">

                    <div class="boxtitle">Đăng kí thành viên</div>
                    <div class="row boxcontent formtaikhoan">
                    <form action="index.php?act=dangky" method="post">
                        <div class="row mb">
                            Email
                        <input type="email" name="email" id="">
                        </div>
                        <div class="row mb">
                            Tên đăng nhập
                        <input type="text" name="user">
                        </div>
                        <div class="row mb">
                            Mật khẩu
                        <input type="password" name="pass" id="">
                        </div>
                        <div class="row mb">
                        <input type="submit" value="Đăng ký" name="dangky">
                        <input type="reset" value="Nhập lại">
                        </div>
                        
 
                    </form>
                    <h2 class="thongbao">
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                    ?>
                    </h2>
                    </div>
                </div>
            </div>
            <div class="boxphai">
                <?php include "view/boxright.php";?>
            </div>
        </div>