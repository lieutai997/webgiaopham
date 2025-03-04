<?php 
session_start();
include('../../admincp/config/config.php');
//them soluong
//tru soluong
//xoa sanpham
//thêm sản phẩm vào giỏ hàng
if(isset($_POST['themgiohang'])){
    
    //session_destroy();//xoa session cũ

    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giasanpham'=>$row['giasanpham'],
        'hinhanh'=>$row['hinhanh'],'masanpham'=>$row['masanpham']));
        // kiem tra session gio hang ton tai
        if (isset($_SESSION['cart'])){
            $found=false;
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['id']==$id){
                    $product[]=array ('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,
                    'giasanpham'=>$cart_item['giasanpham'],'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                    $found = true;
                }else{
                    $product[]=array ('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong,
                    'giasanpham'=>$cart_item['giasanpham'],'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                }

            }
            if($found == false){
                $_SESSION['cart']=array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart']=$new_product;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
?>