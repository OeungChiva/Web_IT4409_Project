<section class="banner" style="background: url('images/banner.jpg');background-size: cover;height: 500px;"></section>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet"> 
<style>
     body{
		background:#f2f2f2;
       
	}
    .user {
        width: 30%;
        margin: 16px 35%;
        border: 0px solid #e74c3c;
        border-radius: 15px;
        padding: 12px 40px;
        text-align: center;
       
    }
    .user table td {
       padding: 5px;
       border: none;
    }
    .user p{
		font-size: 12px;
        float: left;
        margin-left: 5px;
	}
    .user h2{
        color: #e74c3c;
        text-transform: capitalize;
        font-family: 'Roboto Slab', serif;
        text-align: center;
        font-size: 18px;
    }
    .user h3{
        border-left: 5px solid  #e74c3c;
        width: fit-content;
        padding: 5px;
        margin-left: 20px;
        font-family: 'Roboto Slab', serif;
        text-transform: capitalize;
        font-size: 12px;
    }
    @media  screen and (max-width: 1024px) {
        .user h2, h3{
            display: none;
        }
    }
</style>
<div class="new_product">
    <h2>Thông tin cá nhân</h2>
</div>
 <div class="user">
    <h2>Thông tin đăng ký của bạn</h2>
    <table>
        <tr>
            <td><h3>Taì Khoản : </h3></td>
            <td>
                <p>
                    <?php
                        if(isset($_SESSION['dangky'])){
                            echo '<span style="color:red">'.$_SESSION['dangky'].'</span>';
                            $id =$_SESSION['dangky'];
                            $sql_thongtin ="SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
                            $query_thongtin=mysqli_query($connect,$sql_thongtin);
                            while($row=mysqli_fetch_array($query_thongtin)){  
                    ?>
                </p>
            </td>
        </tr>
        <tr>
            <td><h3>Họ và tên : </h3></td>
            <td><p><?php echo $row['hovaten']  ?></p></td>
        </tr>
        <tr>
            <td><h3>Email : </h3></td>
            <td><p><?php echo $row['email']  ?></p></td>
        </tr>
        <tr>
            <td><h3>Địa chỉ : </h3></td>
            <td><p><?php echo $row['diachi']  ?></p></td>
        </tr>
        <tr>
            <td><h3>Số điện thoại : </h3></td>
            <td><p><?php echo $row['sodienthoai']  ?></p></td>
        </tr>
        <?php
            }
        }
    ?> 
    </table>
</div>