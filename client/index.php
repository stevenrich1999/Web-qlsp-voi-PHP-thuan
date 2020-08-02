
<!doctype html>
<html lang="en">
  <head>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Trang của nhan vien </title>
  </head>
  <body>
			<nav class="navbar navbar-light bg-light">
				<form class="form-inline">
    				<input id="input1" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
    				<!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm sản phẩm</button> -->
  			  </form>
			  <a class="btn btn-primary btn-lg" href="qlsp.php">
			    Quản lý sản phẩm
			  </a>
        <!-- <a class="navbar-brand" href="#">
          Xin chao <?php echo $_GET['name']; ?>
        </a> -->
        		<a class="btn btn-primary btn-lg" href="#"> 
			    Tài khoản nhân viên
			  	</a>
  			  <a class="btn btn-primary btn-lg" href="../admin/dangxuat.php"> 
			    Đăng xuất
			  </a>
			</nav>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
  	<div class="p-5 row w-100" id="body1">
  </div>



  <div class="footer-copyright text-center py-3">© 2020 Designed by 
                    <a href="https://www.facebook.com/Wake.up.the.monster.27" target="_blank"> Đặng Văn Hùng</a>
            </div>
</body>
</html>
<script>
	$(document).ready(function(){
		$("#input1").keyup(function(){
			let ct=$(this).val();
			$.post("search.php",{ct:ct},function(data){
				$("#body1").html(data);
			});
		});
	});
</script>