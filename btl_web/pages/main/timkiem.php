<section class="banner" style="background: url('images/banner.jpg');
    background-size: cover;
    height: 500px;"></section>

<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($connect,$sql_pro);
	
?>
<h4 class="border-title" style="margin-top: 10px">Kết quả : <?php echo $_POST['tukhoa']; ?></h4>

<div class="main-content-product-container">
        <ul>   
                <?php
					while($row = mysqli_fetch_array($query_pro)){ 
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
	



