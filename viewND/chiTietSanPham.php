<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CHI TIẾT SẢN PHẨM </title>
</head>

<body>



    <div class="container">




        <div class="header">
            <div class="menu1">
                <h1><img src="image/logo.png" alt=""></h1>
            </div>

            <div class="menu2">
                <ul class="">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="sanpham.php">Sản Phẩm </a></li>
                    <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                    <li><a href="">Liên Hệ </a></li>
                    <li><a href="./giohang.php">Giỏ Hàng</a></li>
                </ul>
            </div>
            <div class="btn">
                <?php
        if(empty($_SESSION["email"])){
            echo ' <div >
            <button > <a href="dangNhap.php">Đăng nhập</a></button>
            <button >  <a href="dangKi.php">Đăng kí</a></button>
            </div>';
        }else{  
           echo '<div class="text-center w-[216px]">
           <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
           <p >'.$_SESSION["email"].'</p>
           
            </div>';
        }
        ?>



            </div>

        </div>
        <div class="spct mr">
       <h3> CHI TIẾT SẢN PHẨM</h3>
            <?php
    
        require "../models/connect.php";
        $id = $_GET["id"];
        $query = "SELECT * FROM products WHERE id = $id";
        $product = getAll($query);
        $comments = "SELECT * FROM comment WHERE idp = $id";
        $comment = getAll($comments);
    //    giỏ hàng
    ?>


       
        <?php foreach($product as $details):?>

        <img src="<?= " ../image/".$details["image"]?>" alt="">
        <h2>
            <?= $details["descrtiption"]?>
        </h2>
        <?php endforeach?>


        <?php foreach($comment as $bl):?>
        <div>
            <h3>
                <?= $bl["name"]?>
            </h3>
            <h2>
                <?= $bl["date"]?>
            </h2>
            <h4>
                <?= $bl["comment"]?>
            </h4>
        </div>
        <?php endforeach?>


        <?php 
        if(isset($_SESSION["id"])&&($_SESSION["id"]) > 0){
            
         $id_p = $_GET["id"];
         $id_user = $_SESSION["id"];

         $a = "SELECT * FROM products WHERE id = $id_p";
         $p = getOne($a);
        
    ?>
    
        <form action="../control/gioHang_control.php" method="POST" enctype="multipart/form-data">
            <input type="text" hidden value="<?php echo $id_p?>" name="id_p" id="">
            <input type="text" hidden value="<?php echo $id_user?>" name="id_user" id="">
            <input type="text" hidden value="<?php echo $p['name']?>" name="name" id="">
            <input type="number" min="1" value="1" name="sl" id="">
            <input type="text" hidden value="<?php echo $p['image']?>" name="image" id="">
            <input type="text" hidden value="<?php echo $p['price']?>" name="price" id=""> <br>
            <a href="../control/gioHang_control.php"><button>Thêm vào giỏ hàng</button></a>
        </form>

        <form action="../control/comment.php" method="POST">
            <div>
                <input type="text" hidden value="<?= $id?>" name="id_p" id="">
                <input type="text" hidden value="<?= $_SESSION["email"]?>" name="name" id="">
                <input type="text" hidden value="<?= $_SESSION["id"]?>" name="id_u" id="">

                <textarea name="comment" id="" cols="30" rows="10" placeholder="sản phẩm tốt"></textarea>
                <button>Bình Luận</button>
            </div>
        </form>
        
            <?php 
       
    }else{
       echo " <button   ><a href='../viewND/dangNhap.php?'>đăng nhập để bình luận</a></button>";
    }
    ?>
       </div>
    </div>

</body>

</html>