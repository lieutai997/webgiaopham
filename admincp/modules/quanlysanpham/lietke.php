<?php
 $sql_lietke_sanpham = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham desc";
 $query_lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham);
?>
<h4> Liệt kê sản phẩm</h4>
<style>
 
  h4{
    text-align: center;
    color: red;
  }
table, th, td {
  text-align: center;
  border:1px solid black;
 
} table, input {
    border: none;
    width: 99%;
}
input:hover{
    color: aqua;
}
</style>




<table style="width:100%">
  <tr>
  <th>STT</th>
  <th>Tên Sản Phẩm</th>
    <th>Mã Sản Phẩm</th>
    <th>Giá sản phẩm</th>
    <th>Số Lượng</th>
    <th>Danh Mục</th>
    
    <th>Hình Ảnh</th>
  
    <th>Tóm tắt</th>
    <th>Nội Dung</th>
    <th>Tình Trạng</th> 
    <!-- <th>Danh Mục</th> -->
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sanpham)){
        $i++;
    
    ?>
  </tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["tensanpham"]?></td>
    <td><?php echo $row["masanpham"]?></td>
    <td><?php echo $row["giasanpham"]?></td>
    <td><?php echo $row["soluong"]?></td>
    <td><?php echo $row["tendanhmuc"]?></td>
    <td> <img src="modules/quanlysanpham/uploads/<?php echo $row["hinhanh"]?>" alt="" width="120px"> </td>
    
    <td><?php echo $row["tomtat"]?></td>
    <td><?php echo $row["noidung"]?></td>
    <td><?php if($row["tinhtrang"]==1){
      echo 'Kích hoạt';

    }else{
      echo'Ẩn';
    } 
    ?></td>
    <td>
      <!-- <td><?php echo $row["tendanhmuc"]?></td> -->
        <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row ['id_sanpham'] ?>"><button style='font: size 20px'>Xóa <i class='far fa-trash-alt'></i></button></a> | 
        <a href = "?action=quanlysanpham&query=sua&idsanpham=<?php echo $row ['id_sanpham'] ?>"><button style='font: size 20px'>Sửa</button></a>
    </td>
  </tr>
    <?php
    }
    ?>
</table>
