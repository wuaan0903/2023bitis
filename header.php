<?php
    $sql_menu_nam = mysqli_query($mysqli,'SELECT * FROM menu_nam ORDER BY id ASC');
    ?>
    <div class="header">
        <div class="menu-pc grid-col0">
            <div class="menu">
                <div class="menu-left">
                    <ul>
                        <div class="logo">
                            <a href="./">
                                <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/3/37/Bitis_logo.svg/1280px-Bitis_logo.svg.png" alt="">
                            </a>
                        </div>
                        <li><a href="">Về Biti's</a></li>
                        <li><a href="">
                            Nam
                            <i class='bx bx-chevron-down'></i>
                        </a>
                        <ul class="sub-list" >
                            <?php
                            while($row = mysqli_fetch_array($sql_menu_nam))
                            {
                            ?>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=""> 
                                    <?php echo $row['name'] ?>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                        <li><a href=" ">Nữ
                            <i class='bx bx-chevron-down'></i>
                        </a>
                        <ul class="sub-list" >
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Hunter
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    GOSTO
                                </a>
                            </li>

                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Sandal
                                </a>
                            </li>

                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Giày Búp Bê
                                </a>
                            </li>

                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Giày Thời Trang
                                </a>
                            </li>

                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Giày Đi Bộ - Chạy Bộ
                                </a>
                            </li>

                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Giày Thể Thao Nữ
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Dép
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Túi Xách
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li><a href=" ">Trẻ em
                            <i class='bx bx-chevron-down'></i>
                        </a>
                        <ul class="sub-list" >
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Sandal
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Giày Búp Bê
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Giày Tập Đi
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Giày Thể Thao
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-chevrons-right'></i>
                                <a href=" "> 
                                    Dép
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li><a href=" ">Khuyến mãi</a></li>
                        <li><a href=" ">Tuyển dụng</a></li>
                        <li><a href=" ">Green Biti's</a></li>
                    </ul>
                </div>
                <div class="menu-right">
                    <div class="search-box">
                        <input type="text" placeholder="Bạn đang cần gì...">
                        <label for="check" class="icon">
                            <i class="bx bx-search"></i>
                        </label>
                    </div>
                    <div class="search-box-show">
                        <div class="item-ult">
                            <div class="thumbs">
                                <a href="#" title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700HOG (Hồng)">
                                    <img alt="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700HOG (Hồng)" src="https://product.hstatic.net/1000230642/product/dsmh09700trg__2__18c92ba0263a4ebabde7c7b00dfd4d0d_grande.jpg">
                                </a>
                            </div>
                            <div class="title">
                                <a title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700TRG (Trắng)" href="#">[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700HOG (Hồng)</a>
                                <p class="f-initial">1,187,000 ₫</p>
                            </div>
                        </div>
                        <div class="item-ult">
                            <div class="thumbs">
                                <a href="/products/phien-ban-ky-niem-40-nam-giay-the-thao-nu-hunter-x-dswh09700trg-trang" title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700TRG (Trắng)">
                                    <img alt="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700TRG (Trắng)" src="https://product.hstatic.net/1000230642/product/dsmh09700trg__2__18c92ba0263a4ebabde7c7b00dfd4d0d_grande.jpg">
                                </a>
                            </div>
                            <div class="title">
                                <a title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700TRG (Trắng)" href="#">[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700TRG (Trắng)</a>
                                <p class="f-initial">1,187,000 ₫
                                    
                                </p>
                            </div>
                        </div>
                        <div class="item-ult">
                            <div class="thumbs">
                                <a href="/products/phien-ban-ky-niem-40-nam-giay-the-thao-nu-hunter-x-dswh09700den-den" title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700DEN (Đen)">
                                    <img alt="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700DEN (Đen)" src="https://product.hstatic.net/1000230642/product/dsmh09700trg__2__18c92ba0263a4ebabde7c7b00dfd4d0d_grande.jpg">
                                </a>
                            </div>
                            <div class="title">
                                <a title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700DEN (Đen)" href="#">[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nữ Hunter X DSWH09700DEN (Đen)</a>
                                <p class="f-initial">1,187,000 ₫
                                    
                                </p>
                            </div>
                        </div>
                        <div class="item-ult">
                            <div class="thumbs">
                                <a href="/products/phien-ban-ky-niem-40-nam-giay-the-thao-nam-hunter-x-dsmh09700trg-trang" title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700TRG (Trắng)">
                                    <img alt="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700TRG (Trắng)" src="https://product.hstatic.net/1000230642/product/dsmh09700trg__2__18c92ba0263a4ebabde7c7b00dfd4d0d_grande.jpg">
                                </a>
                            </div>
                            <div class="title">
                                <a title="[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700TRG (Trắng)" href="#">[Phiên Bản Kỷ Niệm 40 Năm] Giày Thể Thao Nam Hunter X DSMH09700TRG (Trắng)</a>
                                <p class="f-initial">1,236,000 ₫
                                    
                                </p>
                            </div>
                        </div>
                        <div class="resultsMore">
                            <a href="#">Xem thêm 108 sản phẩm</a>
                        </div>
                    </div>
                    <div style="display:flex;">
                        <div class="login">
                            <i class='bx bx-user user'></i>
                            <i class='bx bx-x close'></i>
                        </div>
                        <?php if(!isset($_SESSION['login_user_id'])): ?>
                        <div class="login-form">
                            <div>
                                <div class="site_account_header">
                                    <h2 class="site_account_title heading">Đăng nhập tài khoản</h2>
                                    <p class="site_account_legend">Nhập email và mật khẩu của bạn:</p>
                                </div>
                                <div class="site_account_inner">                                        
                                    <form accept-charset="UTF-8" id="customer_login" method="post">
                                        <div class="form__input-wrapper form__input-wrapper--labelled">
                                            <input type="email" minlength="1" id="login-customer[email]" class="form__field form__field--text" name="customer[email]" placeholder="Email" required="required">
                                      
                                        </div>
                                        <div class="form__input-wrapper form__input-wrapper--labelled">  
                                            <input type="password" id="login-customer[password]" class="form__field form__field--text" name="customer[password]" placeholder="Mật khẩu" required="required" autocomplete="current-password">
                                            			                       
                                            <div class="sitebox-recaptcha">
                                                This site is protected by reCAPTCHA and the Google
                                                <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> 
                                                and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                                            </div>
                                        </div>
                                        <div class="alert-login" style="color: #f00;font-weight: 500;font-size: 13px;padding-bottom: 10px;"></div>
                                        <button class="form__submit button dark" id="form_submit-login">Đăng nhập</button>
                                    </form>
                                    <div class="site_account_secondary-action">
                                        <p>Khách hàng mới? 
                                            <a class="link" href="index.php?page=register">Tạo tài khoản</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <?php else: ?>
                            <div class="container-login-form">
                            <div class="login-form" style="width: 320px;">
                            <div>
                            <h3 style="
                                font-size: 16px;
                                text-align: center;
                                padding-bottom: 10px;
                                margin-bottom: 20px;
                                border-bottom: 1px solid #909090;

                            ">THÔNG TIN TÀI KHOẢN</h3>

                                <ul style="text-align: left;float: left;text-transform: inherit;line-height: 40px;display:block;width: 100%;">
                                    <li class="user-name">
                                    <i class="bx bxs-user" style="color: #004da1;margin: 0;transform: translateY(2px);"></i>
                                        <span style="
                                    color: #004da1;
                                    font-size: 16px;
                                    font-weight: 800;
                                ">Minh Quân Đẹp Trai</span>
                                <i class='bx bx-star' style="color: #ff0000;font-weight:600;margin: 0;transform: translateY(2px);" ></i>
                                    </li>
                                    <li>
                                    <i class='bx bxs-user-account' style="color: #000;margin: 0;transform: translateY(2px);"></i>
                                        <a href="index.php?page=account" style="padding: 10px 80px 10px 0px;"> Tài khoản của tôi</a>
                                        <i class='bx bx-chevron-right' style="color: #000;margin: 0;transform: translateY(10px);float:right;font-size: 24px;"></i>
                                    </li>
                                    <li>
                                    <i class='bx bxs-cart' style="color: #000;margin: 0;transform: translateY(2px);"></i>
                                    <a href="index.php?page=giohang" style="padding :10px 80px 10px 0px;">Danh sách đơn hàng</a>
                                    <i class='bx bx-chevron-right' style="color: #000;margin: 0;transform: translateY(10px);float:right;font-size: 24px;"></i>
                                    </li>
                                    <li>
                                    <i class='bx bx-log-out' style="color: #000;margin: 0;transform: translateY(2px);"></i>
                                        <a href="admin/ajax.php?action=logout2" style="padding: 10px 80px 10px 0px;">Đăng xuất</a>
                                        <i class='bx bx-chevron-right' style="color: #000;margin: 0;transform: translateY(10px);float:right;font-size: 24px;"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            </div>
                        <?php endif; ?>
                        <div class="favourite">
                            <i class='bx bx-heart' ></i>
                        </div>
                        <?php
                        
                        if(isset($_SESSION['login_user_id'])){
                        $query = "SELECT IFNULL(SUM(soluong), 0) AS total_quantity FROM cart WHERE user_id='".$_SESSION['login_user_id']."'";
                        

                        $result = mysqli_query($mysqli, $query);
                        // Kiểm tra kết quả truy vấn
                        if ($result) {
                            // Lấy tổng số lượng sản phẩm từ kết quả truy vấn
                            $row = mysqli_fetch_assoc($result);
                            $totalQuantity = $row['total_quantity'];
                        } else {
                            // Xử lý khi truy vấn không thành công
                            echo "Lỗi truy vấn cơ sở dữ liệu: " . mysqli_error($mysqli);
                        }
                        }
                        else {$totalQuantity=0;}
                        ?>
                        <div class="shop">
                            <div class="icon-shop">
                                <i class='bx bx-cart'></i>
                                <span class="count">
                                    <span class="count-number"><?php echo $totalQuantity; ?></span>
                                </span>
                            </div>
                        </div>
                        <div class="shop-form1">
                            <div class="shop-form">
                                <p class="boxtitle">GIỎ HÀNG</p>
                                <div class="cart">
                                    <div class="cart-view-scroll">
                                        <div id="cart-view">
                                        <?php
                            if(isset($_SESSION['login_user_id'])){            
                            $gio_hang = mysqli_query($mysqli,"SELECT * FROM cart WHERE user_id='".$_SESSION['login_user_id']."'");
                            

                            $grand_total = 0;
                            while($row = mysqli_fetch_array($gio_hang)){
                            ?>
                                        <div class="item">
                                            <div class="img">
                                            <img src = "<?php echo $row['product_image'] ?>" alt = "">
                                            </div>
                                            <div style="width: 100%;">
                                                <h2 style="padding-right: 30px;"><?php echo $row['product_name'] ?></h2>
                                            <button class="delete" ><i class='bx bx-x'></i></button>
                                            <input class="qty-value " type="text" readonly="" name="mnc-quantity" value="<?php echo $row['soluong'] ?>">
                                                <h3><?php echo number_format ($row['price']) ?> ₫</h2>
                                            </div>
                                        </div>
                                        <?php 
                                        $sub_total =($row['price'] * $row['soluong']);
                                        ?>
                                        
                            <?php 
                                $grand_total += $sub_total;
                            }
                            }
                            else{
                                $grand_total=0;
                            }
                            ?>
                            
                            
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <div class="total">
                                            <h2>TỔNG TIỀN:</h2>
                                            <h3 class="total-money"><?php echo number_format( $grand_total) ?>₫</h3>
                                        </div>
                                        <div class="cart-button">
                                            <a href="index.php?page=giohang" class="linktocart button ">XEM GIỎ HÀNG</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-right-mobile toggle">
                    <i class='bx bx-menu menu1'></i>
                    <i class='bx bx-x close' ></i>
                </div>
            </div>

            <div class="search-box-mobile">
                <input type="text" placeholder="Bạn đang cần gì...">
                <label for="check" class="icon">
                    <i class="bx bx-search"></i>
                </label>
            </div>

        </div>
        <div class="menu-mobile">
            <ul>
                <li><a href=" ">Về Biti's</a></li>
                    <li>
                        <div class="list">
                            <a href="#">
                                Nam
                                <i class='bx bx-chevron-down'></i>
                            </a>
                        </div>
                        <ul class="sub-list" >
                            <li>
                                <a href=" "> 
                                    Hunter
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Sandal
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Thể Thao
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Chạy Bộ
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Đá Banh
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Tây
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Dép
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li>
                            <div class="list">
                                <a href="#">Nữ
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                            </div>
                        <ul class="sub-list" >
                            <li>
                                <a href=" "> 
                                    Hunter
                                </a>
                            </li>
                            <li>
                                <a href=" "> 
                                    GOSTO
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Sandal
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Búp Bê
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Thời Trang
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Đi Bộ - Chạy Bộ
                                </a>
                            </li>

                            <li>
                                <a href=" "> 
                                    Giày Thể Thao Nữ
                                </a>
                            </li>
                            <li>
                                <a href=" "> 
                                    Dép
                                </a>
                            </li>
                            <li>
                                <a href=" "> 
                                    Túi Xách
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li>
                            <div class="list">
                                <a href="#">Trẻ em
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                            </div>
                        <ul class="sub-list" >
                            <li>
                                <a href=" "> 
                                    Sandal
                                </a>
                            </li>
                            <li>
                                <a href=" "> 
                                    Giày Búp Bê
                                </a>
                            </li>
                            <li>
                                <a href=" "> 
                                    Giày Tập Đi
                                </a>
                            </li>
                            <li>
                                <a href=" "> 
                                    Giày Thể Thao
                                </a>
                            </li>
                            <li>
                                <a href=" "> 
                                    Dép
                                </a>
                            </li>
                        </ul>
                    </li>
                        <li><a href=" ">Khuyến mãi</a></li>
                        <li><a href=" ">Tuyển dụng</a></li>
                        <li><a href=" ">Green Biti's</a></li>
            </ul>
        </div>
    </div>

<script>
	$('#customer_login').submit(function(e){
		e.preventDefault()
		$('#customer_login button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
		$(this).find('.alert-danger').remove();
		var $email = $('[name="customer[email]"]').val();
		var $password = $('[name="customer[password]"]').val();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:{ email : $email,
			password : $password
			},
			error:err=>{
				console.log(err)
		$('#customer_login button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 3){
                    $('.alert-login').prepend('<div class="alert-danger">Tên đăng nhập hoặc mật khẩu không chính xác</div>');
					$('#customer_login button[type="button"]').removeAttr('disabled').html('Login');

				}
				else{
                    location.reload();
				}
			}
		})
	})
</script>