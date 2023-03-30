<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <script src="https://cdn.tailwindcss.com"></script>

    <title>ĐĂNG KÍ </title>
</head>


<body >
    <div class="container">
<div >
       
    
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
           echo '<div >
           <a  href="../control/login_out.php"><button >Đăng xuất</button></a>
           <p >'.$_SESSION["email"].'</p>
           
            </div>';
        }
        ?>



                    </div>
               
           
            <div>

        
    
            </div>
          
  
  
    </div>
    <div class="lg:flex lg:justify-center lg:items-center lg:mt-32">
            <div class="mr-[84px]">
                <a href=""><img class="h-[600px] rounded-xl" src="https://i.pinimg.com/564x/6d/af/4d/6daf4d8945cb714b580f9a0a2aaffcb8.jpg" alt=""></a>
            </div>
            <div>
                <h1 class="font-bold text-3xl text-[#D93240] text-center">Đăng ký</h1>
                <form action="../control/control_dK.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <p class="lg:font-normal lg:text-base lg:text-[#4A5568] lg:mt-3">Họ và tên</p>
                        <input  type="text" class="border-2 border-[#D93240] mt-2 rounded w-[300px] h-[48px] pl-3 name="username" id="username" required=""  placeholder="Bae Joo Huyn">
                    </div> 
                    <div>
                        <p class="lg:font-normal lg:text-base lg:text-[#4A5568] lg:mt-3">Email</p>
                        <input name="email" id="email" required="" type="text" class="border-2 border-[#D93240] mt-2 rounded w-[300px] h-[48px] pl-3 " placeholder="ygentertaimenr@gmail.com">
                    </div>
                    <div class="mr1">
                        <p class="mt-3" class> Ảnh</p> <br>
                        <input type="file" name="avatar" class="mt-2 rounded w-[300px] h-[48px] pl-3"> 
                    </div>
    
                    <div>
                        <p class="lg:font-normal lg:text-base lg:text-[#4A5568] lg:mt-3">Mật Khẩu</p>
                        <input name="password" id="password" type="password" class="border-2 border-[#D93240] mt-2 rounded w-[300px] h-[48px] pl-3" placeholder="*********">
                    </div>
                    <div>
                        <p class="lg:font-normal lg:text-base lg:text-[#4A5568] lg:mt-3">Nhập lại mật khẩu</p>
                        <input type="password"  name="retype-password" id="retype-password" class="border-2 border-[#D93240] mt-2 rounded w-[300px] h-[48px] pl-3" placeholder="********">            
                    </div>
                    <div>
                        <button type="submit" name="register" id="register" class="mt-3 text-[#FFFFFF] bg-[#D93240] text-sm font-bold w-[300px] h-[40px] text-center rounded ">Đăng ký</button>
                    </div>
                </form>
            </div>
        </div>
    <div >
<div class="footer mr">
  <div class="anh"><h1>  <img src="image/logo.png" alt=""></h1></div>
    <div class="menu2">
        <ul class="">
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">About us </a></li>
            <li><a href="">Contract us </a></li>

        </ul>
    </div>
</div>  
</div>
</body>

</html>