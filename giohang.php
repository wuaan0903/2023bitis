<link rel="stylesheet" href="./assets/giohang.css"/>
<?php
include 'admin/connect.php';


?>

<div class="container">
<div class="shopping-cart">
   <h1 class="heading">giỏ hàng</h1>
   <table>
      <thead>
         <th></th>
         <th>Tên sản phẩm</th>
         <th>size</th>
         <th>Đơn giá</th>
         <th>Số lượng</th>
         <th>Thành Tiền</th>
         <th>Hành động</th>
      </thead>
      <tbody>
      <?php


     if(isset($_SESSION['login_user_id']))
     {
         $cart_query = mysqli_query($mysqli,"SELECT * FROM cart WHERE user_id='".$_SESSION['login_user_id']."'");
     
         $grand_total = 0;

            while($fetch_cart = mysqli_fetch_array($cart_query)){
              if(isset($_SESSION['login_user_id'])){
                $data = $fetch_cart['user_id'];
              }
              else {$data = $fetch_cart['cilent_ip'];}
      ?>
         <tr>
            <td><img src="<?php echo $fetch_cart['product_image']; ?>" height="100" alt="" style="width: 100px;margin-top: 10px;">
            <td><?php echo $fetch_cart['product_name']; ?></td>
            <td><?php echo $fetch_cart['size']; ?></td>
            <td><?php echo number_format ($fetch_cart['price']) ?>₫</td>
            <td>
               <form action="" method="post" style="display: flex;justify-content: center;align-items: center;">
                  <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                  <input type="button" value="-" class="qty-btn">
                  <input type="text"  name="quantity" value="<?php echo $fetch_cart['soluong']; ?>" min="1" class="quantity-input">
                  <input type="button" value="+" class="qty-btn">
               </form>
            </td>
            <?php $sub_total =($fetch_cart['price'] * $fetch_cart['soluong']) ?>
            <td class="sub-total"><?php echo number_format($sub_total) ?>₫</td>
            <td><div class="delete-btn" onclick=  "DeleteSp(<?php echo $fetch_cart['id']?>)">remove</a></td>
         </tr>
         <?php $grand_total += $sub_total; } }
         else {
          $grand_total=0;
         }
         ?>

      <tr class="table-bottom">
         <td colspan="5"> <b>Tổng Cộng :</b></td>
         <td class="grand-total"> <?php echo number_format( $grand_total) ?>₫</td>
         <td> <div class="delete-btn" onclick=  "DeleteALL(<?php echo $data ?>)">delete all</a></td>
      </tr>
   </tbody>
   </table>

   <div class="cart-btn">  
      <a href="index.php?page=thanhtoan" class="btn1 <?php echo ($grand_total > 1)?'':'disabled'; ?>">Đi đến thanh toán</a>
   </div>
</div>
</div>


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



<script>
      
  document.addEventListener('DOMContentLoaded', function() {
  var minusButtons = document.querySelectorAll('.qty-btn[value="-"]');
  var plusButtons = document.querySelectorAll('.qty-btn[value="+"]');
  var quantityInputs = document.querySelectorAll('.quantity-input');

  // Lặp qua từng đối tượng riêng biệt
  for (var i = 0; i < minusButtons.length; i++) {
    var minusButton = minusButtons[i];
    var plusButton = plusButtons[i];
    var quantityInput = quantityInputs[i];

    // Áp dụng sự kiện cho từng đối tượng riêng biệt
    minusButton.addEventListener('click', createMinusButtonClickHandler(quantityInput));
    plusButton.addEventListener('click', createPlusButtonClickHandler(quantityInput));
  }

  // Hàm tạo sự kiện cho nút giảm số lượng
  function createMinusButtonClickHandler(input) {
    return function() {
      var currentValue = parseInt(input.value);
      if (currentValue > 1) {
        input.value = currentValue - 1;
      }
    };
  }

  // Hàm tạo sự kiện cho nút tăng số lượng
  function createPlusButtonClickHandler(input) {
    return function() {
      var currentValue = parseInt(input.value);
      input.value = currentValue + 1;
    };
  }
});

function numberWithCommas(x) {
      return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
   }

  // HÀM XÓA SẢN PHẨM
  function DeleteSp(idsp) {
   var deleteBtn = event.target;
   var row = deleteBtn.parentNode.parentNode;
   // Lấy tổng tiền của hàng sản phẩm
   var subTotal = parseFloat(row.querySelector('.sub-total').textContent.replace('₫', '').replaceAll(',', '')); 

   var grandTotalElement = document.querySelector('.grand-total');
   // Lấy giá tổng cộng hiện tại
   var grandTotal = parseFloat(grandTotalElement.textContent.replace('₫', '').replaceAll(',', '')); 

   swal({
  title: "Bạn có chắc muốn xóa sản phẩm này không ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Sản phẩm đã được xóa khỏi giỏ hàng !", {
      icon: "success",
      });
      var $id = idsp;
      $.ajax({
			url:'admin/ajax.php?action=delete-sp',
			type:'POST',
            dataType:'html',
			data:{
                pid: $id
            },
			success:function(resp){
				console.log('Yêu cầu Ajax đã được gửi thành công');
            row.remove();
             // Cập nhật giá tổng cộng
            grandTotal -= subTotal; // Trừ giá trị tổng tiền của hàng sản phẩm vừa xóa
            grandTotalElement.textContent = numberWithCommas(grandTotal) + '₫'; // Cập nhật giá tổng cộng
			}
		})


  } 
});

  }

// HÀM XÓA TẤT CẢ SẢN PHẨM
function DeleteALL(x){
   var sub_total =  document.querySelectorAll('.sub-total');
   var $data = x;
   swal({
  title: "Bạn có chắc muốn xóa tất cả sản phẩm không ?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Tất cả sản phẩm đã được xóa khỏi giỏ hàng !", {
      icon: "success",
      });
            $.ajax({
			url:'admin/ajax.php?action=delete-all',
			type:'POST',
            dataType:'html',
          data:{
              data: $data
          },
			success:function(resp){
				console.log('Yêu cầu Ajax đã được gửi thành công');
            for(var i=0;i<sub_total.length;i++){
            var row = sub_total[i].parentNode.parentNode;
            row.remove();
   }
			}
		})


  } 
});
}

</script>
