<div class="main grid-col5">
        <!-- <div class="owl-carousel owl-theme grid-col2" id="suggest-slider">
            <div class="item"><h2>Đồng giá ship chỉ 20.000 đồng cho đơn toàn quốc </h2></div>
            <div class="item"><h2>Ưu đãi giảm giá 10.000 đồng cho đơn hàng trả trước </h2></div>
            <div class="item"><h2>Đồng giá ship chỉ 10.000 đồng cho đơn nội thành </h2></div>
        </div> -->
        <div id="slider"> 
            <div class="container">
                <div class="owl-carousel owl-theme" id="banner-slider">
                    <div class="item">
                        <a href=""><img src="https://file.hstatic.net/1000230642/file/z3601683251924_4a799cd9f122a5d8bf962d0fc72c3952_0791922831db437997117734dc240acf.jpg"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="https://file.hstatic.net/1000230642/file/web_banner___phien_ban_40_nam_5a1237144cf647d9930c714147b0b223.png"></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="https://file.hstatic.net/1000230642/file/z3605900532098_b79c5c168b3cbec684c01e6895c74961_3a7bb4a6693f4086b5cb0ea79c13fb6b.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="three-banner">
            <div class="owl-carousel owl-theme grid-col2" id="suggest-slider-2">
                <div class="item"><h2>Hỗ trợ đổi size tại tất cả cửa hàng trong vòng 1 tuần</h2></div>
                <div class="item"><h2>Miễn phí vận chuyển với hóa đơn trên 1 triệu tại TP Hồ Chí Minh</h2></div>
                <div class="item"><h2>Miễn phí vận chuyển với hóa đơn trên 1,5 triệu tại các tỉnh thành khác</h2></div>
            </div>
            <div class="owl-carousel owl-theme row-three-banner grid-col1">
                <div class="row item">
                    <a class="BannerEffect" href=""><img src="https://file.hstatic.net/200000522597/file/2_510x275_b4821a2d66c04eb09a0403079c2fd5bb.jpg" alt=""></a>
                </div>
                <div class="row item">
                    <a class="BannerEffect" href=""><img src="https://file.hstatic.net/200000522597/file/3_510x275_b304bdd7130d489c9330c9dc2cdaadc2.jpg" alt=""></a>
                </div>
                <div class="row item">
                    <a class="BannerEffect" href=""><img src="https://file.hstatic.net/200000522597/file/4_510x275_63bbf2e07bbf4510bc673944c9ddf028.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="what-new grid-col3">
            <div class="title">
                <h1>WHAT'S NEW</h1>
            </div>
            <div class="owl-carousel owl-theme slider grid-col">
                <?php
                $sql_spmoi= mysqli_query($mysqli,"SELECT * FROM product ORDER BY id ASC");
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
        <div class="seaction grid-col">
            <div class="policy-card">
                <div class="policy-card__icon">
                    <i class="bx bx-shopping-bag"></i>
                </div>
                <div class="policy-card__info">
                    <div class="policy-card__info__name">Miễn phí giao hàng</div>
                    <div class="policy-card__info__description">Miễn phí ship với đơn hàng &gt; 239K</div>
                </div>
            </div>
            <div class="policy-card">
                <div class="policy-card__icon">
                    <i class='bx bx-credit-card'></i>
                </div>
                <div class="policy-card__info">
                    <div class="policy-card__info__name">Thanh toán COD</div>
                    <div class="policy-card__info__description">Thanh toán khi nhận hàng (COD)</div>
                </div>
            </div>
            <div class="policy-card">
                <div class="policy-card__icon">
                    <i class='bx bx-diamond'></i>
                </div>
                <div class="policy-card__info">
                    <div class="policy-card__info__name">Khách hàng VIP</div>
                    <div class="policy-card__info__description">Ưu đãi dành cho khách hàng VIP</div>
                </div>
            </div>
            <div class="policy-card">
                <div class="policy-card__icon">
                    <i class="bx bx-donate-heart"></i>
                </div>
                <div class="policy-card__info">
                    <div class="policy-card__info__name">Hỗ trợ bảo hành</div>
                    <div class="policy-card__info__description">Đổi, sửa đổi tại tất cả store</div>
                </div>
            </div>
        </div>

        <div class="weekly-best grid-col6">
            <div class="title">WEEKLY BEST</div>
            <div class="content">
            <?php
                $sql_spmoi= mysqli_query($mysqli,"SELECT * FROM product ORDER BY id ASC");
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
    </div>
    <div class="Banner-Bottom">
        <img src="https://file.hstatic.net/200000522597/file/2_1920x750_8d8ae5ef81364f288889339c63147dbb.jpg" alt="">
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