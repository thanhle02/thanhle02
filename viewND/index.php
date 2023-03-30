<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/layout.css">
    <title>Indext</title>
</head>

<body>
    <div class="container">
    <?php
    session_start();
    ?>   
        <header>
            <div class="logo">
                <img src="image/logo_1.1.png" alt="">
            </div>
            <div class="menu">
                <ul class="">
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="sanpham.php">Sản Phẩm </a></li>
                    <li><a href="giam_gia.php">Hàng Giảm Giá </a></li>
                    <li><a href="">Liên Hệ </a></li>
                    <li><a href="./giohang.php">Giỏ Hàng</a></li>
                </ul>
            </div>

            <div class="authenticate">
                <?php
                    if(empty($_SESSION["email"])){
                    echo ' <div >
                    <button id="signin"> <a href="dangNhap.php">Đăng nhập</a></button>
                    <button id="signup">  <a href="dangKi.php">Đăng kí</a></button>
                    </div>';
                    }else{  
                    echo '<div class="text-center w-[216px]">
                    <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
                    <p >'.$_SESSION["email"].'</p>
                            
                    </div>';
                    }
                ?>
            </div>
        </header>

                
    <div>
    <div class="banner">
                <div class="tieude">
                    <div class="dis">
                        <button>cosmetic quality</button>
                    </div>
                    
                    <div class="chude">
                        <h1>Fastest Delivery & Easy Pickup</h1>
                    </div>
                    
                    <p>The place where the world's most prestigious and quality brands are gathered</p>
                        <div class="check">
                            <input type="text" placeholder="Enter your delivery location">
                            <button>Discover</button>
                        </div>
                    
                </div>
                <div class="anhmh">
                    <div class="pic">
                        <img id="slide" src="image/anh1.1_1.png" alt="">
                    </div>
                    <p class="left" onclick="Prev()" id="but1"></p>
                    <p class="right" onclick="Next()" id="but2"></p>
                </div>
            </div>

        
   
    
    <?php

        require '../models/connect.php';
        $query = "SELECT * FROM products";
        $productList = getAll($query);
        //  echo "<pre>";
        //  var_dump($productList);die;
        
        
    ?>




    <div>
        <div class="product mr" >
            <?php  for($i = 0; $i < 4; $i++):?>
            <div class="trangchu">
               <div class="div"> <img  src="<?= " ../image/".$productList[$i]["image"]?>"> </div>
               <div class="boxs">
               <h3>
                    <?= $productList[$i]["name"]?>
                </h3>
                <p >
                    <?= $productList[$i]["descrtiption"]?>
                </p>
                <span >
                    <?= $productList[$i]["price"]."$"?>
                </span>
            </div>
            </div>
            <?php endfor?>

        </div>
           
    </div>
    <div class="showadd mr">
    <h1>Show more</h1>


    <h2>Tips & Tricks</h2>


    <div class="tips">
        <div class="tips-box mr">
            <img src="image/item5.png" alt="">
            <p>How to create a living room to love</p>
            <p>20 jan 2020</p>
        </div>
        <div class="tips-box mr">
            <img src="image/item6.png" alt="">
            <p>Solution for clean look working space
            </p>
            <p>10 jan 2020</p>
        </div >
        <div class="tips-box mr">
            <img src="image/item7.png" alt="">
            <p class="font-bold">Make your cooking activity more fun with good setup</p>
            <p>20 jan 2020</p>
        </div>
    </div>
</div>

            <div class="item">
                <div class="item1">
                    <h2>Categories</h2>
                    <button>View All Categories</button>
                </div>
                <div class="item2">
                    <div class="item2-1">
                        <img src="./image/11.png" alt="">
                        <h3>Ring</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/11.png" alt="">
                        <h3>Necklace</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/11.png" alt="">
                        <h3>Earring</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/11.png" alt="">
                        <h3>Clock</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/11.png" alt="">
                        <h3>Bracelet</h3>
                    </div>
                    <div class="item2-1">
                        <img src="./image/11.png" alt="">
                        <h3>Anklet</h3>
                    </div>    
                </div>
            </div>
        </div>

        <hr>
        <footer>
            <div class="logocuoi">
            <img src="image/logo_1.1.png" alt="">
            </div>
            <div class="menucuoi">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </footer>

</div>
</div>
</body>

</html>