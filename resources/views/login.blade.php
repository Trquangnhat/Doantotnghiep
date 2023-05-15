<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/style.css">
 
  <!-- jQuery CDN Link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Trang đăng nhập</title>
</head>
 
<body>
  <div class="container">
    <div class="form">
      <div class="btn">
        <button class="signUpBtn">ĐĂNG KÍ</button>
        <button class="loginBtn">ĐĂNG NHẬP</button>
      </div>
      @include('admin.alert')
      <form class="signUp" action="register_action" method="post">
        <div class="formGroup">
          <input type="text" id="userName" placeholder="Tên người dùng" autocomplete="off" name="tennd">
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email" name="email" required autocomplete="off" name="email">
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Mật khẩu" required autocomplete="off" name="password">
        </div>
        <div class="formGroup">
          <input type="password" id="confirmPassword" placeholder="Xác nhận mật khẩu" required autocomplete="off" name="confirm_password">
        </div>
       
        <div class="formGroup">
          <button type="submit" class="btn2">ĐĂNG KÍ</button>
        </div>
        @csrf
      </form>
        
      <!------ Login Form -------- -->
      <form class="login" action="login_action" method="post">
        
        <div class="formGroup">
          <input type="email" placeholder="Email" name="email" required autocomplete="off" name="email">
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Mật khẩu" required autocomplete="off" name="password">
         
        </div>
       
        <div class="formGroup">
          <button type="submit" class="btn2">ĐĂNG NHẬP</button>
        </div>
        @csrf
      </form>
      
    </div>
  </div>
 
  <script src="jQuery.js"></script>
</body>
 @include('admin.footer')
</html>