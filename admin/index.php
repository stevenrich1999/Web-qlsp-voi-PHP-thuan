<!doctype html>
<html lang="en">
  <head>
  	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--																									-->
	
    

    <title>Trang của người quản lý</title>
  </head>
  <body>
  			
			<nav class=" navbar navbar-light bg-light" >
				<form class="form-inline">
    				<input id="input1" class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" aria-label="Search">
    				<!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm sản phẩm</button> -->
  			  </form>
			  <a class="btn btn-primary btn-lg" href="qltk.php">
			    
			    Quản lý tài khoản
			  </a>
			  <a class="btn btn-primary btn-lg" href="qlsp.php">
			    
			    Quản lý sản phẩm
			  </a>
			  
			  <a class="btn btn-primary btn-lg"href="index.php">
			    
			    Xin chào admin
			  </a>
			  
  			  <a class="btn btn-primary btn-lg" href="dangxuat.php">
			    
			    Đăng xuất
			  </a>

			</nav>

			 <div class="content">
				
				<div class="p-5 row w-100" id="body1">
				</div>
				
			</div> 

			<div class="footer-copyright text-center py-3">© 2020 Designed by 
                    <a href="https://www.facebook.com/Wake.up.the.monster.27" target="_blank"> Đặng Văn Hùng</a>
            </div>
			
    
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
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