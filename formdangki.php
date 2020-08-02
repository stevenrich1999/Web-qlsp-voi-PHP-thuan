<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<html>
<head><title>Đăng kí</title>
<link  rel="stylesheet" type="text/css"  href="css/styledangki.css">




</head>
<body>


<div class="page-container">
            
            <form action="processregister.php" method="POST">
			<h1>Tạo tài khoản mới</h1>
                <input type="text" name="user" class="Name" placeholder="Tên đăng nhập">
                <input type="password" name="pass" class="Tele" placeholder="Mật khẩu">
                <input type="password" name="repass" class="Tele" placeholder="Nhập lại Mật khẩu">
				<input type="text" name="name" class="Email" placeholder="Họ Tên">
				<input type="text" name="phone" class="Address" placeholder="Số Điện thoại">
                <button type="submit" value="Add" name="dangky">Đăng kí</button>
            </form>
        </div>

		

</body>
</html>