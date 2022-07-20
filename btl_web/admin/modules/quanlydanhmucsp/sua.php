<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($connect,$sql_sua_danhmucsp);
?>
<style>
  <?php include 'css/styleadmin.css'; ?>
</style>
<h4>Sửa danh mục sản phẩm</h4>
<table class="product_add">
 <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
 	?>
	  <tr>
	  	<th>Tên danh mục</th>
	  	<td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
	  </tr>
	  <tr>
	    <th>Thứ tự</th>
	    <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
	  </tr>
	   <tr class="block">
			<td></td>
			<td><input type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
		</tr>
	  <?php
	  } 
	  ?>

 </form>
</table>