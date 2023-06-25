<link rel="stylesheet" href="./assets/login-register.css"/>
<div class="container-register">
    <div class="heading">
        <div class="heading-page">
            <h2>Đăng nhập</h2>
            <h2>
            <a href="index.php?page=register" style="padding-left: 20px; margin-left: 20px;border-left: 2px solid #000;padding-right: 0;margin-right: 0;border-right: none;">Đăng ký</a>
            </h2>
        </div>
    </div>
    <div class="content">
    <form accept-charset="UTF-8" id="form-login" method="post">
    <div class="user-details" style="display: block;width: 400px;">
          
          <div class="input-box" style="width: 100%;">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Email" required="required">
            <div class="error-modal-email" ></div>
          </div>
          
          <div class="input-box" style="width: 100%;">
            <span class="details">Mật khẩu</span>
            <input type="password" name="password" placeholder="Mật khẩu" required="">
          </div>
          
        </div>
        <div class="alert-login" style="color: #f00;font-weight: 500;font-size: 13px;padding-bottom: 10px;"></div>
          <button id="submit-register">Đăng nhập</button>
      </form>
    </div>
</div>

<script>
    // Lắng nghe sự kiện submit của form
    $('#form-login').submit(function(e){
        e.preventDefault()
		$('#form-login button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
		$(this).find('.alert-danger').remove();
		var $email = $('[name="email"]').val();
		var $password = $('[name="password"]').val();
		$.ajax({
			url:'admin/ajax.php?action=login2',
			method:'POST',
			data:{ email : $email,
			password : $password
			},
			error:err=>{
				console.log(err)
		$('#form-login button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 3){
                    $('.alert-login').prepend('<div class="alert-danger">Tên đăng nhập hoặc mật khẩu không chính xác</div>');
					$('#form-login button[type="button"]').removeAttr('disabled').html('Login');

				}
				else{
                    location.href ='index.php';
				}
			}
		})

});

</script>