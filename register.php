<link rel="stylesheet" href="./assets/login-register.css"/>
<div class="container-register">
    <div class="heading">
        <div class="heading-page">
            <h2>
                <a href="index.php?page=login">Đăng nhập</a>
            </h2>
            <h2>Đăng ký</h2>
        </div>
    </div>
    <div class="content">
    <form accept-charset="UTF-8" id="form-register" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Họ</span>
            <input type="text" name="firstname" placeholder="Họ" required="">
          </div>
          <div class="input-box">
            <span class="details">Tên</span>
            <input type="text" name="lastname" placeholder="Tên" required="">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Email" required="required">
            <div class="error-modal-email" ></div>
          </div>
          <div class="input-box">
            <span class="details">Số điện thoại</span>
            <input type="text" name="phone" placeholder="Số điện thoại" required="">
          </div>
          <div class="input-box">
            <span class="details">Mật khẩu</span>
            <input type="password" name="password" placeholder="Mật khẩu" required="">
          </div>
          <div class="input-box">
            <span class="details">Xác nhận mật khẩu</span>
            <input type="password" name="cf-password" placeholder="Xác nhận mật khẩu" required="">
            <div class="error-modal-pass" style="position: absolute;"></div>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="Nam">
          <input type="radio" name="gender" id="dot-2" value="Nữ">
          <input type="radio" name="gender" id="dot-3" value="Khác">
          <span class="gender-title">Giới tính</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender" style="font-weight: 500;">Nam</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender" style="font-weight: 500;">Nữ</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender" style="font-weight: 500;">Khác</span>
            </label>
          </div>
          <div class="error-modal-gender" ></div>
        </div>
          <button id="submit-register">Đăng ký</button>
      </form>
    </div>
</div>

<script>
    // Lắng nghe sự kiện submit của form
    $('#form-register').submit(function(e){
  e.preventDefault(); // Ngăn chặn hành vi mặc định của form

    if($(this).find('.alert-danger').length > 0 )
		$(this).find('.alert-danger').remove();

  // Lấy giá trị từ các trường input
    var $firstname = $('[name="firstname"]').val();
		var $lastname = $('[name="lastname"]').val();
		var $email = $('[name="email"]').val();
		var $phone = $('[name="phone"]').val();
		var $pass = $('[name="password"]').val();
		var $cfpass = $('[name="cf-password"]').val();
  // Lấy giá trị của giới tính
  var $gender = $('input[name="gender"]:checked').val();
    if ($pass !== $cfpass) {
      $('.error-modal-pass').prepend('<div class="alert-danger"><i class="bx bx-error-circle"></i> Mật khẩu bạn nhập lại chưa chính xác !</div>');
    }
    if(!$gender)
    {
      $('.error-modal-gender').prepend('<div class="alert-danger"><i class="bx bx-error-circle"></i> Bạn chưa chọn trường hợp này !</div>');

    }
    if($pass== $cfpass & !$gender==false)
    {
      $.ajax({
			url:'admin/ajax.php?action=register',
			method:'POST',
			data:{ firstname : $firstname,
			lastname : $lastname,
      email: $email,
      phone:$phone,
      pass: $pass,
      gender :$gender
			},
			error:err=>{
				console.log(err)
		$('#form-register button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
          console.log("hihi")
          location.href ='index.php?page=login';
				}
				else if(resp==0){
                    console.log("ahi")
                    $('.error-modal-email').prepend('<div class="alert-danger"><i class="bx bx-error-circle"></i> Email này đã được sử dụng !</div>');
					$('#customer_login button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
    }

});

</script>