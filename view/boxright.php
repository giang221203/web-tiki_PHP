<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);
                        ?>
                             <div class="row mb10">
                            Xin chào<br>
                            <?=$user?>
                        </div>
                        <div class="row mb10">
                        <li>
                            <a href="index.php?act=quenmk">Quên mật khẩu</a>
                        </li>
                        <?php if($role==1){?>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                        </li>
                        <?php }?>
                        <li>
                            <a href="admin/index.php">Đăng nhập admin</a>
                        </li>
                        <li>
                            <a href="index.php?act=thoat">Thoát</a>
                        </li>
                        </div>
                        <?php
                        }else{
                        
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                            Tên đăng nhập<br>
                            <input type="text" name="user">
                        </div>
                        <div class="row mb10">
                            <br>Mật khẩu<br>
                            <input type="password" name="pass">
                        </div>
                            <br>
                            <div class="row mb10">
                                <input type="checkbox" name="">Ghi nhớ tài khoản?<br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                           
                            
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng kí thành viên</a>
                        </li>
                        <?php }?>;
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                        <?php
                    foreach ($dsdm as $dm) {
                       extract($dm);
                       $linkdm="index.php?act=sanpham&iddm=".$id;
                       echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                    }
                    ?>
                            <!-- <li><a href="">Đồng hồ</a></li>
                            <li><a href="">LapTop</a></li>
                            <li><a href="">Điện Thoại</a></li>
                            <li><a href="">Ba lô</a></li>
                            <li><a href="">Đồng hồ</a></li>
                            <li><a href="">LapTop</a></li>
                            <li><a href="">Điện Thoại</a></li>
                            <li><a href="">Ba lô</a></li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" >
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                    <?php
                    foreach ($dstop10 as $sp) {
                       extract($sp);
                       $linksp="index.php?act=sanphamct&idsp=".$id;
                       $img=$img_path.$img;
                       echo '<div class="row mb10 top10">
                            <img src="'.$img.'" alt="">
                            <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
                    }
                    ?>
                         <!-- <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div>
                         <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div>
                         <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div>
                         <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div>
                         <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div>
                         <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div>
                         <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div>
                         <div class="row mb10 top10">
                            <img src="view/images/iphone10.jfif" alt="">
                            <a href="#">iphone 10</a>
                         </div> -->
                    </div>
                </div>