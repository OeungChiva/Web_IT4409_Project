<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
    if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*10)-10;
	}
    // GET id là lấy id từ bên MENU.php 
    $sql_show ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,10";
    $query_show =mysqli_query($connect,$sql_show);
?>

<div class="main-content-product-container">
		<ul>
    		<?php
        		while ($row=mysqli_fetch_array($query_show)){
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
   
<div style="clear:both;"></div>
<style type="text/css">
	ul.list_trang {
		padding: 0;
		margin: 0;
		list-style: none;
		margin-left: 16px;
	}
	ul.list_trang li {
		float: left;
		padding: 5px 13px;
		margin: 5px;
		background: gray;
		display: block;
		margin-bottom: 10px;
		
	}
	ul.list_trang li a {
		color: #000;
		text-align: center;
		text-decoration: none;
		}
</style>
<?php
	$sql_trang = mysqli_query($connect,"SELECT * FROM tbl_sanpham");
	$row_count = mysqli_num_rows($sql_trang);  
	$trang = ceil($row_count/10);
?>
<div style="align-content: center;">
	<h4 class="border-title" style="margin-top: 15px">Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?></h4><br>
	<ul class="list_trang">
		<?php
			for($i=1;$i<=$trang;$i++){ 
			?>
		<li 
			<?php 
				if($i==$page){
					echo 'style="background: #e74c3c;"';
				}else{ echo ''; }  	
			?>>
			<a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
		</li>
			<?php
				} 
			?>
	</ul>
</div>