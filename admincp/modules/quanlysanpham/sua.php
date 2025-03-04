<?php

$sql_sua_sanpham = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]'LIMIT 1";
$query_sua_sanpham = mysqli_query($mysqli, $sql_sua_sanpham);
?>
<p>Sửa Sản Phẩm</p>
<style>
  table,
  th,
  td {
    border: 1px solid black;

  }

  table,
  input {
    border: none;
    width: 99%;
    height: 100%;
  }

  input:hover {
    color: aqua;
  }
</style>

 <?php
    while ($row = mysqli_fetch_array($query_sua_sanpham)) {
    ?>

<form method="POST" action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data" >


  <table style="width:100%">
   

      <tr>
        <th>Tên Sản Phẩm</th>
        <th>Mã Sản Phẩm</th>
        <th>Giá sản phẩm</th>
        <th>Số Lượng</th>
        <th>Danh Mục</th>

        <th>Hình Ảnh</th>
        <th>Tóm tắt</th>
        <th>Nội Dung</th>
        <th>Tình Trạng</th>

      </tr>
      <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"> </td>
      <td><input type="text" value="<?php echo $row['masanpham'] ?>" name="masanpham"> </td>
      <td><input type="text" value="<?php echo $row['giasanpham'] ?>" name="giasanpham"> </td>
      <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"> </td>

      <td><select name="danhmuc" >
      <?php
      $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
      $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
      while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){   
        if($row_danhmuc ['id_danhmuc']==$row['id_danhmuc']){
      ?>
      <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
     <?php  
          }else{
            ?>
                  <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>

            <?php
          }
     }
     ?>
        </select>
      </td>

      <td><input type="file" name="hinhanh">
        <img src="modules/quanlysanpham/uploads/<?php echo $row["hinhanh"] ?>" alt="" width="120px">
      </td>
      <td><textarea rows="5" name="tomtat"> <?php echo $row['tomtat'] ?></textarea> </td>
      <td><textarea rows="5" name="noidung">  <?php echo $row['noidung'] ?> </textarea> </td>
      <td><select name="tinhtrang">
          <?php
          if ($row['tinhtrang'] == 1) {
          ?>
            <option value="1" selected>Kích hoạt</option>
            <option value="0">Ẩn</option>
          <?php
          } else {

          ?>
            <option value="1">Kích hoạt</option>
            <option value="0" selected>Ẩn</option>
          <?php
          }
          ?>
        </select>
      </td>
      <td colspan="2"><input type="submit" name="suasanpham" value="Sửa"></td>
      </tr>
    
   
  </table>


</form>
<?php
    }
  ?>