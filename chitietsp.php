

<?php
include('admin/connect.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}
else {$id='';}
$sql_chitiet= mysqli_query($mysqli,"SELECT * FROM product WHERE id='$id'");
?>


<!-- MAIN -->
    <div class="main chitiet">
<?php
while($row_chitiet = mysqli_fetch_array($sql_chitiet)) {
?>
        <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "<?php echo $row_chitiet['image'] ?>" alt = "shoe image">
              <img src = "<?php echo $row_chitiet['image_hover'] ?>" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src ="<?php echo $row_chitiet['image'] ?>" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "<?php echo $row_chitiet['image_hover'] ?>" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?php echo $row_chitiet['name'] ?></h2>
          <div class = "product-rating">
          <i class='bx bxs-star' style='color:#ffd500' ></i>
          <i class='bx bxs-star' style='color:#ffd500' ></i>
          <i class='bx bxs-star' style='color:#ffd500' ></i>
          <i class='bx bxs-star' style='color:#ffd500' ></i>
          <i class='bx bxs-star-half' style='color:#ffd500' ></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span><?php echo number_format( $row_chitiet['old_price']) ?> đ</span></p>
            <p class = "new-price">New Price: <span><?php echo number_format( $row_chitiet['price']) ?> đ</span></p>
          </div>

          <div class = "product-detail">
            <h2>Mô tả sản phẩm </h2>
            <p>Giày Thể Thao Nam - Nữ Biti's Hunter Core cho mọi Phong cách và mọi Hành trình. </p>
            <p>Phù hợp với mọi nhu cầu sử dụng, Biti's Hunter Core mới "chào sân" với 3 phối màu trung tính cho mùa hè năng động. Mẫu giày nổi bật cho trải nghiệm đẹp - nhẹ - bền, phù hợp cho mọi hoạt động thường ngày - kể cả hoạt động thể thao cơ bản.</p>

            <p>Tình trạng : <b>Còn hàng</b> </p>
            <p>Kích thước :</p>
            <div class="sub-swap">
        <div data-value="36" class="n-sd swatch-element 36">
			<input class="variant-1" id="swatch-1-36" type="radio" name="option3" value="36" data-vhandle="36" checked>
			
			<label for="swatch-1-36" class="active">
				<span>36</span>
			</label>
			
		</div>
        <div data-value="37" class="n-sd swatch-element 37">
			<input class="variant-1" id="swatch-1-37" type="radio" name="option2" value="37" data-vhandle="37">
			
			<label for="swatch-1-37">
				<span>37</span>
			</label>
			
		</div>
        <div data-value="38" class="n-sd swatch-element 38">
			<input class="variant-1" id="swatch-1-38" type="radio" name="option2" value="38" data-vhandle="38">
			
			<label for="swatch-1-38">
				<span>38</span>
			</label>
			
		</div>
        <div data-value="39" class="n-sd swatch-element 39">
			<input class="variant-1" id="swatch-1-39" type="radio" name="option2" value="39" data-vhandle="39">
			
			<label for="swatch-1-39">
				<span>39</span>
			</label>
			
		</div>
		<div data-value="40" class="n-sd swatch-element 40">
			<input class="variant-1" id="swatch-1-40" type="radio" name="option2" value="40" data-vhandle="40">
			
			<label for="swatch-1-40" class="">
				<span>40</span>
			</label>
			
		</div>
		<div data-value="41" class="n-sd swatch-element 41">
			<input class="variant-1" id="swatch-1-41" type="radio" name="option2" value="41" data-vhandle="41">
			
			<label for="swatch-1-41">
				<span>41</span>
			</label>
			
		</div>
		<div data-value="42" class="n-sd swatch-element 42">
			<input class="variant-1" id="swatch-1-42" type="radio" name="option2" value="42" data-vhandle="42">
			
			<label for="swatch-1-42">
				<span>42</span>
			</label>
			
		</div>
		<div data-value="43" class="n-sd swatch-element 43">
			<input class="variant-1" id="swatch-1-43" type="radio" name="option2" value="43" data-vhandle="43">
			
			<label for="swatch-1-43">
				<span>43</span>
			</label>
			
		</div>
		<div data-value="44" class="n-sd swatch-element 44">
			<input class="variant-1" id="swatch-1-44" type="radio" name="option2" value="44" data-vhandle="44">
			
			<label for="swatch-1-44">
				<span>44</span>
			</label>
			
		</div>
		<div data-value="45" class="n-sd swatch-element 45">
			<input class="variant-1" id="swatch-1-45" type="radio" name="option2" value="45" data-vhandle="45">
			
			<label for="swatch-1-45">
				<span>45</span>
			</label>
			
		</div>
		</div>
          </div>
          <div class = "purchase-info">
            <div class="quantity-area">
									<input type="button" value="-" class="qty-btn">
									<input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-input">
									<input type="button" value="+" class="qty-btn">
			</div>
            <button  onclick="add()"  class="add-to-cart-modal">
                                <div class="btn__icon">
                                    <i class="bx bx-cart bx-tada"></i>
                                </div>
                                <div class="btn__txt">THÊM VÀO GIỎ HÀNG</div>
                            </button>
            
            <a href="index.php?page=giohang">
            <button type = "button" class = "btn">
              <b>XEM GIỎ HÀNG</b></button>
            </a>
          </div>

          
        </div>
      </div>
    </div>
        <?php } ?>
    </div>
<!-- MAIN -->

<div class="what-new grid-col3">
            <div class="title">
                <h1>SẢN PHẨM LIÊN QUAN</h1>
            </div>
            <div class="owl-carousel owl-theme product-other grid-col">
                <?php
                $sql_spmoi= mysqli_query($mysqli,"SELECT * FROM product order by rand()");
                while($row_sp = mysqli_fetch_array($sql_spmoi)) {
                    $id_sp = $row_sp['id'];
                ?>
                <div class="product">
                    <div class="image">
                        <div class="img">
                            <img src="<?php echo $row_sp['image'] ?>" alt="">
                        </div>
                        <div class="img-hover">
                            <img src=" <?php echo $row_sp['image_hover'] ?> " alt="">
                        </div>
                    </div>
                    <div class="size-color">
                        <div class="size">+10 size</div>
                        <div class="color">+3 Màu sắc</div>
                    </div>
                    <a href="index.php?page=chitietsp&id=<?php echo $id_sp ?>"> <h2> <?php echo $row_sp['name'] ?> </h2> </a>
                    <h3> <?php echo number_format( $row_sp['price']) ?> đ </h2>
                    <div class="button">
                            <a href="index.php?page=chitietsp&id=<?php echo $id_sp ?>">
                            <button class="btn">
                                <div class="btn__icon">
                                <i class='bx bxs-chevrons-right bx-tada' ></i>
                                </div>
                                <div class="btn__txt">XEM NGAY</div>
                            </button>
                            </a>
                            
                        </div>
                </div>
                
                <?php
                }
                ?>
            </div>
        </div>


<div class=" News">
        <h3>BLOG POSTS</h3>
        <div class="owl-carousel owl-theme News-Content">
            <div class="item">
                <div class="item-img"><img src="https://file.hstatic.net/1000230642/article/cover_0806_763f935075434c9995305035848c4b71_grande.png" alt=""></div>
                <div class="item-detail">
                    <a href=""><h4>THE SOUND OF BITI’S: BƯỚC CHÂN SÓNG ĐÔI CÙNG THỜI ĐẠI</h4></a>
                    <div class="short-description">"CON MUỐN ĐI DÉP ‘BI-TÍT’ CƠ!” Tôi nhớ ngày xưa khi còn bé, cứ mỗi lần được đi...
                    </div>
                    <div class="item-footer">
                        <div class="item-time">09/06/2021</div>
                        <div class="item-view">Xem thêm</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img"><img src="https://file.hstatic.net/1000230642/article/an_giang_4_vuong_5891f9dace2c4da6a469f11c9e7ef0ee_e1136df870c746988e7ca962ae806b7e_grande.jpg" alt=""></div>
                <div class="item-detail">
                    <a href=""><h4>[GRAND - OPENING] CHÀO MỪNG CỬA HÀNG THỨ 198 – BITI’S AN GIANG 4</h4></a>
                    <div class="short-description">"Cuối tháng 2 này, Biti's chào đón cửa hàng tiếp thị thứ 198 - BITI'S AN GIANG 4.Địa...
                    </div>
                    <div class="item-footer">
                        <div class="item-time">09/06/2021</div>
                        <div class="item-view">Xem thêm</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img"><img src="https://file.hstatic.net/1000230642/article/artboard_1_411206de84af4555b4e076d2a3869990_708a131e436f4074a50875272fc08e8c_grande.png" alt=""></div>
                <div class="item-detail">
                    <a href=""><h4>TRẢI NGHIỆM NGAY BITI’S CONCEPT STORE ĐẦU TIÊN TẠI HÀ NỘI TẠI L3 – VINCOM PHẠM NGỌC THẠCH VỚI VÔ VÀN ƯU ĐÃI</h4></a>
                    <div class="short-description">"Sau bao ngày chờ đợi, cuối cùng Biti’s đã có thể giới thiệu tới những người yêu mến...
                    </div>
                    <div class="item-footer">
                        <div class="item-time">09/06/2021</div>
                        <div class="item-view">Xem thêm</div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-img"><img src="https://file.hstatic.net/1000230642/article/mau_couche_matt_fbe12e45e95841938213e23fee35d0f1_4dbfa4b2dd0c4b21a9e8c2b2e822bc90_grande.jpg" alt=""></div>
                <div class="item-detail">
                    <a href=""><h4>CÙNG BITI'S "LÌ XÌ MAY MẮN - MỞ LỘC ĐẦU NĂM" MỪNG XUÂN CANH TÝ 2020</h4></a>
                    <div class="short-description">"CUNG CHÚC TÂN NIÊN – XUÂN CANH TÝ 2020 Như một món quà mang ý nghĩa cầu chúc...
                    </div>
                    <div class="item-footer">
                        <div class="item-time">09/06/2021</div>
                        <div class="item-view">Xem thêm</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/chitietspp.js"></script>
    <script>





         $('.add-to-cart-modal').click(function(){
            
            var $qty1 = $('[name="quantity"]').val();
            var $size = $('[name="option3"]').val();

            $.ajax({
			url:'admin/ajax.php?action=add-to-cart',
			type:'POST',
            dataType:'html',
			data:{
                pid: <?php echo $_GET['id']?>,
                qty: $qty1,
                size: $size
            },
			success:function(resp){
				if(resp==1)
                {
                    location.href ='index.php?page=login';
                }
                else{
                    swal("Thành Công !", "Bạn đã thêm thành công 1 sản phẩm vào giỏ hàng", "success");
                    $('.count-number').html(parseInt($('.count-number').html()) + parseInt($('[name="quantity"]').val()))
                }
                
			}
            
		})
        })
    </script>