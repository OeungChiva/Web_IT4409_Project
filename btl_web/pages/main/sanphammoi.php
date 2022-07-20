<?php
    // GET id là lấy id từ bên MENU.php 
    $sql_show_new ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.trangthai=1 ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 10";
    $query_show_new =mysqli_query($connect,$sql_show_new);  
?>
    <div class="main-content-product-container">
        <ul>   
                <?php
                    while ($row=mysqli_fetch_array($query_show_new)){
                ?>   
            <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                    <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                    <table class="items">
                        <tr>
                            <td><p class="name"><?php echo $row['tensanpham']?></p></td>   
                        </tr>
                        <tr>
                            <td><?php echo '<label class="underline">đ</label>'.'<b class="price">'.number_format($row['giasanpham'],0,',','.').'</b>'; ?></td>
                        </tr>
                    </table>
                </a>
            </li>   
                <?php
                    }
                ?>
        </ul>  
    </div>

