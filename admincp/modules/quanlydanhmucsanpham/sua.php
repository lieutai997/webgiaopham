<?php
 $sql_sua_danhmucsanpham = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]'LIMIT 1";
 $query_sua_danhmucsanpham = mysqli_query($mysqli,$sql_sua_danhmucsanpham);
?>
<p>Sửa Danh Mục Sản Phẩm</p>
<style>
table, th, td {
  border:1px solid black;
 
} table, input {
    border: none;
    width: 99%;
}
input:hover{
    color: aqua;
}
</style>



<form method="POST" action="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>" >
<table style="width:100%">
  <?php
    while($dong = mysqli_fetch_array($query_sua_danhmucsanpham)){
  ?>
  <tr>
    <th>Tên Danh Mục</th>
    <th>Thứ Tự</th>
    <th>Chỉnh Sửa</th>
  </tr>
    <td><input type="text" value="<?php echo  $dong['tendanhmuc']?>" name="tendanhmuc" > </td>
    <td><input type="text" value="<?php echo  $dong['thutu']?>" name="thutu" ></td>
    <td><input  type="submit" name="suadanhmuc" value="Sửa sản Phẩm" ></td>
  </tr>
 <?php
    }
    ?>
</table>
</form>