<div class="clear"></div>
<div class="main">
    <?php
    if(isset($_GET['action'])&& $_GET['query']){
        $tam=$_GET['action'];
        $query = $_GET['query'];
    }else{
        $tam='';
        $query='';
    }
    // quanly danhmuc
    if($tam=='quanlydanhmucsanpham'&& $query=='them'){
        include("modules/quanlydanhmucsanpham/them.php");
        include("modules/quanlydanhmucsanpham/lietke.php");

    // }elseif($tam=='quanlysanpham'){
    //     include("main/giohang.php");
    // }elseif($tam=='quanlytintuc'){
    //     include("main/tintuc.php");
    // }elseif($tam=='quanlyquangcao'){
    //     include("main/lienhe.php");
    
    }elseif ($tam=='quanlydanhmucsanpham'&& $query=='sua'){
        include("modules/quanlydanhmucsanpham/sua.php"); 
    }
    //quanlysanpham
        elseif ($tam=='quanlysanpham'&& $query=='them'){
        include("modules/quanlysanpham/them.php");
        include("modules/quanlysanpham/lietke.php"); 
    }elseif ($tam=='quanlysanpham'&& $query=='sua'){
        include("modules/quanlysanpham/sua.php"); 
    }
    else {
        include("modules/dashboard.php");
    }
    ?>
</div>