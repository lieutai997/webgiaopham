<?php
      $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.
      id_sanpham DESC LIMIT 25";
      $query_pro = mysqli_query($mysqli,$sql_pro);

      ?>

<style> h1{
                    text-align: center;
                    font-size: 20px;
                }</style>
                
                
  

                <H1>SẢN PHẨM MỚI</H1>
                <ul class="product_list">
                

                <?php
                while($sql_pro = mysqli_fetch_array($query_pro)){
                ?>

                    <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $sql_pro["id_sanpham"]?>">
                    <img src="admincp/modules/quanlysanpham/uploads/<?php echo $sql_pro['hinhanh']?>" alt="">
                        <p class="tile_product">Tên sản phẩm: <?php echo $sql_pro['tensanpham']?></p>
                        <p class="price_product">Giá: <?php echo number_format($sql_pro['giasanpham'],0,',','.').' VNĐ' ?></p>
                        <p><?php echo $sql_pro['tendanhmuc']?></p>
                    </a>
                    </li>
                    <?php
                    }
                    ?>
                    </ul>