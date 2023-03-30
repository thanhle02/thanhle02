<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid orange;
        }
    </style>
</head>

<body class="max-w-full m-auto">
<?php
        session_start();
    ?>

<div>
        <div class="flex justify-between mx-[20px]">
            <div class="">
                <img src="../../viewND/image/logo.png" alt="">
            </div>
            <div class="flex ">
                <div class="flex">
                <p>xin chào <div class="text-[#37A9CD]"><?php echo $_SESSION["email"]?></div><a href="../../control/login_out.php"><button class="border-[1px] bg-[#38A169] rounded hover:text-[white]">logout</button></a></p>
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="flex gap-5 justify-between mx-[30px] my-[50px]">
            <div class="w-[200px] border-r-[1px] border-[#CBD5E0] h-[550px]">
                <div class="">
                    <ul>
                    <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector.png" alt=""><a href="dashboard.php">Dashboard</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (1).png" alt=""><a href="product_management.php">Quản lý sản phẩm</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (2).png" alt=""><a href="quanLi_user.php">Quản lý user</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (3).png" alt=""><a href="./quanLi_danhMuc.php">Quản lý danh mục</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (3).png" alt=""><a href="quanLi_binhLuan.php">Quản lý bình luận</a></li>
                        <li class="flex items-center gap-2 border-[1px] w-[200px] h-[40px] border-[orange] hover:bg-[orange] hover:text-[white] font-bold"><img class="w-[20px]" src="../../viewND/image/Vector (4).png" alt=""><a href="">Thống kê</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="max-w-[1000px]">
                    <p class="absolute text-[white] font-bold right-[450px] top-[170px]">Quản lí user</p>
                    <img class="max-w-full" src="../../viewND/image/Rectangle 152.png" alt="">
                </div>
                <div class="">
                    <div class="my-[15px]">
                        <form action="./quanLi_user.php" method="POST">
                            <div class="flex gap-2">
                                <div>
                                    <img class="absolute pt-1 pl-1" src="../../viewND/image/Search.png" alt="">
                                     <input class="border-[1px] border-[black] rounded pl-[30px] h-[30px]" placeholder="Aspen Weste" type="text" name="search">
                                 </div>
                                <div>
                                     <button class="border-[1px] border-[#38A169] h-[30px] rounded text-[white] font-bold bg-[#38A169]">Search</button>
                                 </div>
                            </div>
                        </form>
                    </div>
              
    <table class="w-[1000px] h-[200px]">
        <thead>
            <tr class="bg-[black] h-[50px]">
                <th class="text-[white]">Id</th>
                <th class="text-[white]">Product Name</th>
                <th class="text-[white]">Product Desc</th>
                <th class="text-[white]">Product Image</th>
                <th class="text-[white]">password</th>
                <th class="text-[white]">Vai trò</th>
                <th class="text-[white]">Action</th>
            </tr>
        </thead>
    
        <tbody>
            <?php
               require "../../models/connect.php";
            //    $query = "SELECT * FROM products"; 
            //    $productList = getAll($query);

               if(empty($_POST["search"])){
                $user = "SELECT * FROM users";
            }else{
                $search = $_POST["search"];
                $user = "SELECT * FROM users WHERE fullname LIKE '$search'";
            }
            $productList = getAll($user);               
               
            ?>
            
                <?php foreach($productList as $product):?>
                <tr>
                   
                    <td class="text-center">
                        <?php echo $product["id"]?>
                    </td>
                    <td>
                        <?php echo $product["fullname"]?>
                    </td>
                    <td>
                        <?php echo $product["email"]?>
                    </td>
                    <td><img class="w-[50px]" src="<?php echo "../../image/".$product["image"]?>" alt=""></td>
                    <td>
                        <?php echo $product["password"]?>
                    </td>
                    <td>
                        <?php 
                            $class = $product["role"];
                            $query = "SELECT * FROM vaitro WHERE id = $class";
                            $vaiTro = getOne($query);
                        ?>
                        <?php echo $vaiTro["user"]?>
                    </td>
                    <td class="text-center">
                        <a href="../../control/control_deleteUser.php?id=<?php echo $product["id"]?>"><button class="border-[1px] rounded w-[100px] bg-[#1E74A4] text-[white] ">xóa user</button></a>
                    </td>
                </tr>
                <?php endforeach?>
                
        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>