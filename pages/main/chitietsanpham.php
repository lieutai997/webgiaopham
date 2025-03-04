

<h2>Chi tiết sản phẩm</h2>
<?php
      $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";   
      $query_pro = mysqli_query($mysqli,$sql_pro);
      while($sql_pro = mysqli_fetch_array($query_pro)){

      ?>
      <div class="wrapper_chitietsanpham">
<div class="hinhanh_sanpham">
<img width="300px"  src="admincp/modules/quanlysanpham/uploads/<?php echo $sql_pro['hinhanh']?>" alt="">
</div>
<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $sql_pro['id_sanpham'] ?>">
<div class="chitietsanpham">
<h3>Tên sản phẩm: <?php echo $sql_pro['tensanpham']?></h3>
<p>Mã sản phẩm: <?php echo $sql_pro['masanpham']?></p>
<p>Danh mục: <?php echo $sql_pro['tendanhmuc']?></p>
<p>Số Lượng: <?php echo $sql_pro['soluong']?></p>
<p>Giá: <?php echo number_format ($sql_pro['giasanpham'],0,',','.').' VNĐ'?></p>
<p><input class="themgiohang" type="submit" value ="Thêm giỏ hàng"></p>
</div>
</form>
</div>

<?php
      }
      ?>