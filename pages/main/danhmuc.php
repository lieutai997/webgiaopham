      <?php
      $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
      $query_pro = mysqli_query($mysqli,$sql_pro);
      //get ten danh muc
      $sql_tendanhmuc = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
      $query_tendanhmuc = mysqli_query($mysqli,$sql_tendanhmuc);
      $row_title = mysqli_fetch_array($query_tendanhmuc);
      ?>
      
      <style> h1{
                    text-align: center;
                    font-size: 20px;
                  
                }</style>
     
                <h1>DANH MỤC: <?php echo $row_title['tendanhmuc']?></h1>
                <ul class="product_list">
                    <?php
                    while($sql_pro=mysqli_fetch_array($query_pro)){
                    ?>
                    <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $sql_pro["id_sanpham"]?>">
                            <img src="admincp/modules/quanlysanpham/uploads/<?php echo $sql_pro['hinhanh']?>" alt="">
                        <p class="tile_product">Tên sản phẩm: <?php echo $sql_pro['tensanpham']?></p>
                        <p class="price_product">Giá: <?php echo number_format($sql_pro['giasanpham'],0,',','.').' VNĐ' ?></p>
                    </a>
                    </li>
                    <?php
                    }
                    ?>
            </ul>