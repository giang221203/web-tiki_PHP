<div class="row">
            <div class="row frmtitle">
                <H1>Thống kê sản phẩm theo loại</H1>
            </div>
            <div class="row frmcontent mt">
                    <div class="row mb10 frmdsloai">
                       
                      <table>
                        <tr>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                        <?php
                          foreach ($listthongke as $thongke){
                            extract($thongke);
                            echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$avgprice.'</td>

                            
                            </td>';
                          }
                        ?>

                       
                       
                      
                      </table>
                      <div class="row mb10">
                        <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                      </div>

                    </div>
                  
            </div>
        </div>