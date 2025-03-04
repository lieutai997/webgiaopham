
<p>Thêm Sản Phẩm</p>
<style>
table, th, td {
  border:1px solid black;
 
} table, input {
    border: none;
    width: 99%;
    height: 100%;
}
input:hover{
    color: aqua;
}
</style>



<form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data" >
<table style="width:100%">
  <tr>
    <th>Tên Sản Phẩm</th>
    <th>Mã Sản Phẩm</th>
    <th>Giá sản phẩm</th>
    <th>Số Lượng</th>
     <th>Chọn Danh Mục</th>
     
    <th>Hình Ảnh</th>
    <th>Tóm tắt</th>
    <th>Nội Dung</th>
   
    <th>Tình Trạng</th>
    
  </tr>
    <td><input type="text" name="tensanpham" > </td>
    <td><input type="text" name="masanpham" > </td>
    <td><input type="text" name="giasanpham" > </td>
    <td><input type="text" name="soluong" > </td>
    <td><select name="danhmuc" >
      <?php
      $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
      $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
      while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){   
      ?>
      <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
     <?php  
     }
     ?>
        </select>
      </td>
    <td><input type="file" name="hinhanh" > </td>
    <td><textarea rows="5" name="tomtat" ></textarea> </td>
    <td><textarea rows="5" name="noidung" ></textarea> </td>

    <td><select name="tinhtrang" >
      <option value="1">Kích hoạt</option>
      <option value="0">Ẩn</option>
        </select>
      </td>
    <td><input  type="submit" name="themsanpham" value="Thêm sản phẩm" ></td>
  </tr>
 
</table>
</form>