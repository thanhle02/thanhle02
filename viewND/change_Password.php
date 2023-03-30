<div class="flex justify-center my-[100px]">
        <div class="flex max-w-[700px] gap-5 items-center">
            <div class="max-w-[350px]">
                <img class="max-w-full" src="image/item9.png" alt="">
            </div>
            <div class="max-w-[350px]">
                <div class="text-center">
                    <p class="font-bold text-[24px] text-[#37A9CD]">Đăng nhập</p>
                </div>
                <form class="grid gap-y-[7px]" action="./change_Password.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label><br>
                        
                        <input  class="w-[360px] h-[40px]  pl-[5px] border-[#37A9CD] border-[1px] rounded" type="email" placeholder="dinhdvph29050@gamil.com" name="email" required="">
                       
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu cũ<br>
                        <input class="w-[360px] h-[40px]  pl-[5px] border-[#37A9CD] border-[1px] rounded" required=""  type="password" name="pass">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu mới<br>
                        <input class="w-[360px] h-[40px]  pl-[5px] border-[#37A9CD] border-[1px] rounded" required=""  type="password" name="password">
                    </div>
                    <div>
                       
                    </div>
                    <div class="grid gap-y-[10px] pt-[60px]">
                        <button class="w-[360px] h-[40px] bg-[#37A9CD] font-bold text-[white] border-[1px] border-[#37A9CD]  rounded" type="submit" name="btn">Đổi mật khẩu</button>
                        
                        </button>
                    </div>
                  
                </form>
            
            </div>
          
        </div>
    </div>