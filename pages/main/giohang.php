<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
/* #customers td a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 10px 19px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
#customers td a:hover, a:active {
  background-color: red;
} */
 .dathang td {
  clear: both;
    margin:0;
    padding:0;
    border:none;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
 }
.dathang a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 10px 19px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
.dathang a:hover, a:active{
  background-color: red;
}
</style>

<?php
    session_start();
?>
<h4 style="text-align:center">Giỏ hàng:
  <?php
  if(isset($_SESSION['dangky'])){
    echo $_SESSION['dangky'];
  }
  ?>

</h4>
<?php
    if(isset($_SESSION['cart'])){
      
    }
?>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Mã Sản Phẩm</th>
    <th>Tên Sản Phẩm</th>
    <th>Hình Ảnh</th>
    <th>Số Lượng</th>
    <th>Giá</th>
    <th>Thành tiền</th>
    <th>Xóa</th>
  </tr>
  <?php
    if(isset($_SESSION['cart'])){
        $i=0;
        $tongtien=0;

        foreach($_SESSION['cart'] as $cart_item){
            $i++;
            $thanhtien= $cart_item['soluong']*$cart_item['giasanpham'];
            $tongtien+=$thanhtien
  ?>
  <tr>
    <td> <?php echo $i; ?></td>
    <td><?php echo $cart_item['masanpham']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td> <img src="admincp/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>

    
    <td style="text-align:center">
      <a class="cong" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
      <?php echo $cart_item['soluong']; ?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
    
    </td>


    <td style="text-align:center"><?php echo number_format ($cart_item['giasanpham'],0,',','.').' VNĐ'; ?></td>
    <td style="text-align:center"><?php echo number_format($thanhtien ,0,',','.').' VNĐ' ; ?></td>
    
    <td style="text-align:center"><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-trash"></i></a></p>
    </td>
  </tr>
  <?php
        }
        ?>
        <tr>
    <td colspan="8">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ'; ?></td>

<tr class="dathang">
<td colspan="8">
  <?php
      if(isset($_SESSION['dangky'])){
        ?>
        <p><a href="">Đặt Hàng</a></p>
        <?php
      }else{
            ?>
      <p class="dathang"><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
    
        <?php
      }
      ?>

        <?php
    }else{

    ?>
    </td>     
</tr>

 
   
  </tr>

  <tr>
    <td style ="text-align: center" colspan="8">Giỏ hàng trống</td>
   
  </tr>
  <?php
    }
    ?>
  
</table>

