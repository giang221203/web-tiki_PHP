
<?php
session_start();
$iduser=$_SESSION['user']['id'];
    $idpro=$_REQUEST['idpro'];
?>


<div class="row mb">
                    <div class="boxtitle">Bình luận</div>
                    <div class="boxcontent2">
                        <?php
                        echo "Nội dung bình luận ở đây: ".$idpro;
                    // foreach ($dsdm as $dm) {
                    //    extract($dm);
                    //    $linkdm="index.php?act=sanpham&iddm=".$id;
                    //    echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                    // }
                    ?>
                    </div>
                    <div class="boxfooter binhluanform">
                        <form action="binhluanform.php" method="post">
                            <input type="hidden" name="idpro" value="<?=$idpro?>">
                            <input type="text" name="noidung" >
                            <input type="submit" name="guibinhluan" value="Gửi bình luận">
                        </form>
                    </div>
                    <?php
                    if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                        $noidung=$_POST['noidung'];
                        $idpro=$_POST['idpro'];
                        $$iduser=$_SESSION['user']['id'];
                        $ngaybinhluan=date("h:i:sa d/m/Y");

                        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                    }
                    ?>
                </div>