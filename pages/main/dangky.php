<?php
session_start();
if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,matkhau,dienthoai,diachi) VALUE ('".$tenkhachhang."','".$email."',
    '".$matkhau."','".$dienthoai."','".$diachi."')");
    if($sql_dangky){
        echo '<p style ="color:green"> Bạn đã đăng ký thành công </p>';
        $_SESSION['dangky'] = $tenkhachhang;
        header("Location:index.php?quanly=giohang")
    }

}
?>




<p>Đăng ký</p>
<form action="" method="POST">
<table border = "1" width ="30%" style ="border-collape: collapse;" >
    <tr>
        <td>Họ và tên</td>
        <td><input type="text" size="30" name = "hovaten"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text"size="30"  name = "email"></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="text" size="30"  name = "matkhau"></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" size="30"   name = "dienthoai"></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" size="30"   name = "diachi"></td>
    </tr>
   
    <tr>

        <td clspan= "2"><input type="submit" size="30"  name = "dangky" value="Đăng Ký"></td>
    </tr>
</table>
</form>