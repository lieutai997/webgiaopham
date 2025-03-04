<?php
 $sql_lietke_danhmucsanpham = "SELECT * FROM tbl_danhmuc order by thutu desc";
 $query_lietke_danhmucsanpham = mysqli_query($mysqli,$sql_lietke_danhmucsanpham);
?>
<p>Liệt kê danh mục sản phẩm</p>

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




<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Tên Danh Mục</th>
    <th>Chỉnh Sửa</th>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsanpham)){
        $i++;
    
    ?>
  </tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["tendanhmuc"]?></td>
    <td>
        <a href="modules/quanlydanhmucsanpham/xuly.php?iddanhmuc=<?php echo $row ['id_danhmuc'] ?>">Xóa</a> | 
        <a href = "?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row ['id_danhmuc'] ?>">Sửa</a>
    </td>
  </tr>
    <?php
    }
    ?>
</table>
