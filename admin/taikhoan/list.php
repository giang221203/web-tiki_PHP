<div class="row">
            <div class="row frmtitle">
                <H1>DANH SÁCH TÀI KHOẢN</H1>
            </div>
            <div class="row frmcontent">
                <form action="#" method="post">
                    <div class="row mb10 frmdsloai">
                      <table>
                        <tr>
                            <th></th>
                            <th>Mã tk</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Vai trò</th>
                            <th></th>
                        </tr>

                        <?php
                        foreach($listtaikhoan as $taikhoan){
                            extract($taikhoan);
                            $suatk ="index.php?act=suatk&id=".$id;
                            $xoatk ="index.php?act=xoatk&id=".$id;
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>
                            <td>'.$pass.'</td>
                            <td>'.$email.'</td>
                            <td>'.$address.'</td>
                            <td>'.$tel.'</td>
                            <td>'.$role.'</td>
                            <td>
                            <a href="'.$suatk.'"><input type="button" value="sửa"></a>
                             <a href="'.$xoatk.'"><input type="button" value="xóa"></a>
                             </td>
                        </tr> ';
                        }
                        ?>
                      </table>

                    </div>
                    <div class="row mb10">
                        <br>
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>