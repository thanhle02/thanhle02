 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/style.css">
       <script src="https://cdn.tailwindcss.com"></script>
        <title>ĐĂNG NHẬP</title>
    </head>


    <body >
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
   
    <div >
        <p >
        <?php 
            session_start();
            /*
                session là một phiên làm việc giữa client và server 
                Một session bắt đầu khi client gửi request đến server, 
                nó tồn tại xuyên suốt từ trang này đến trang khác trong 
                ứng dụng web và chỉ kết thúc khi hết thời gian timeout 
                hoặc khi bạn đóng ứng dụng. 
                Giá trị của session sẽ được lưu trong biến $_SESSION
            */
            require "../models/connect.php";

            $query = "SELECT * FROM users";
            $use = getAll($query);
        
            $check = 0;
        //    var_dump($_POST);
            foreach($use as $suv){
                if(isset($_POST["btn"])){
                    if(!$_POST["email"] == "" && !$_POST["pass"] == ""){
                        // var_dump($suv["Email"]);die;

                        if($_POST["email"] == $suv["email"] && $_POST["pass"] == $suv["password"]){
                            $_SESSION["email"] = $_POST["email"];
                            if($suv["role"]=="1"){
                                $_SESSION["user"]= $suv["user"];
                                $_SESSION["id"]=$suv["id"];
                                header("location:../view/admin/dashboard.php");
                            }else{
                                $_SESSION["user"]=$suv["user"];
                                $_SESSION["id"]=$suv["id"];
                                header("location:./index.php");
                            } 
                        }else{
                            $check = 1;
                        }
                    }
                
                }
            }
            if($check == 1){
                echo "sai tài khoản hoặc mật khẩu";
            }

        ?>
        </p>
        <div class="lg:flex lg:justify-center lg:items-center lg:mt-32">
            <div class="mr-[84px]">
                <a href=""><img class="object-cover h-[560px] rounded-xl"
                        src="https://i.pinimg.com/564x/57/8c/a8/578ca81049c051d5a1fbb752f3d7f2f0.jpg" alt=""></a>
            </div>
            <form action="./dangNhap.php" method="POST">
                <div class="mt-6 ml-12 ">
                    <h1 class="font-bold text-3xl text-[#37A9CD] text-center">Đăng nhập</h1>
                    <div class="mt-5">
                        <p class="text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Email</p>
                        <input name="email" type="text" required=""
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 "
                            placeholder="irenesm@gmail.com.vn">
                       
                    </div>
                    <div class="mt-6">
                        <p class="mt-3 text-base font-semibold lg:font-normal lg:text-lg lg:text-[#4A5568] lg:mt-3">Mật Khẩu
                        </p>
                        <input name="pass" type="password" required=""
                            class="border-2 border-[#37A9CD] mt-2 rounded w-[300px] h-[48px] pl-3 " placeholder="*********">
        
                    </div>
                    <div>
                        <button name="btn" type="submit"
                            class="mt-8 text-[#FFFFFF] bg-[#37A9CD] text-sm font-bold w-[300px] h-[40px] text-center rounded ">Đăng
                            nhập ngay</button>
                    </div>
                    <div class="mt-9 text-center mr-16 lg:mr-0">
                        <a href="">
                            <a class="font-normal text-sm text-[#37A9CD] cursor-pointer">Quên mật khẩu</a>
                        </a>
                        <div class="flex mt-2 justify-center items-center">
                            <a href=".change_Password.php">
                                <h6 class="text-[#616161] font-normal text-sm">Đổi mật khẩu?</h6>
                            </a>
                            <a href="./dangKi.php">
                                <p class="text-[#37A9CD] font-normal text-sm pl-1">Đăng kí ngay</p>
                            </a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <script src="vadiform_DK.js"></script>
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
    </body>

    </html>

