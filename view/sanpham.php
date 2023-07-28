<div class="row mb">
            <div class="boxtrai mr">
            <div class="row mb">
             
                    <div class="boxtitle">Sản phẩm <?=$tendm?></div>
                    <div class="row boxcontent">
                    <?php
                    foreach ($dssp as $sp) {
                       extract($sp);
                       $linksp="index.php?act=sanphamct&idsp=".$id;
                       $hinh=$img_path.$img;
                       echo '<div class="boxsp mr mb">
                       <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                       <p>$'.$price.'</p>
                       <a href="'.$linksp.'">'.$name.'</a>
                   </div>';
                    }
                    ?>
                    </div>
                </div>
</div>
            <div class="boxphai">
                <?php include "boxright.php";?>
            </div>
        </div>