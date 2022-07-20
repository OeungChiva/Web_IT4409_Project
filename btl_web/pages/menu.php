<?php
     $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
     $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>

<div class="header">
        <div class="header-container">
            <div class="header-row">
                <div class="header-col-left">
                    <div class="header-logo">
                        <h1>Sport Accessories</h1>
                    </div>
                </div>

                <div class="header-col-right">
                    <div class="header-menu-5">
                        <ul>
                            <li class="active"><a  href="index.php"><b><i class="fa fa-home"></i></b></a></li>
                            <li >
                                <a href=""><b>Danh Mục</b></a>
                                <div class="menu-dropdown">
                                    <ul>
                                        <?php 
                                            while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                                        ?>
                                            <li>
                                                <a href="index.php?quanly=danhmuclist&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><b><?php echo $row_danhmuc['tendanhmuc']?></b></a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div> 
                            </li>
                                <?php
                                    if(isset($_SESSION['dangky'])){
                                ?>
                            <li><a href="index.php?quanly=giohang"><b>Giỏ hàng</b></a></li>
                            <li><a href="index.php?quanly=lichsudonhang"><b>Lịch sử</b></a></li>  
                            <li><a href="index.php?quanly=thongtin"><i class="fa fa-user"></i></a></li>
                            <li><a href="index.php?dangxuat=1"><i class="fa fa-sign-out"></i></a></li>
                                <?php
                                    }else{
                                ?>
                            <li><a href="index.php?quanly=dangnhap"><b>Đăng nhập</b></a></li>
                            <li><a href="index.php?quanly=dangky"><b>Đăng ký</b></a></li>
                                <?php
                                }
                                ?>
                            <li>
                                <form method="POST" action="index.php?quanly=timkiem">
                                    <input type="text" placeholder="Tim kiem....." name="tukhoa">
                                    <button type="submit" name="timkiem"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>