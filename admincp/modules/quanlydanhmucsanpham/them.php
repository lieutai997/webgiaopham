
<p>Thêm Danh Mục Sản Phẩm</p>
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



<form method="POST" action="modules/quanlydanhmucsanpham/xuly.php" >
<table style="width:100%">
  <tr>
    <th>Tên Danh Mục</th>
    <th>Thứ Tự</th>
    <th>Thêm</th>
  </tr>
    <td><input type="text" name="tendanhmuc" > </td>
    <td><input type="text" name="thutu" ></td>
    <td><input  type="submit" name="themdanhmuc" value="Thêm danh mục" ></td>
  </tr>
 
</table>
</form>