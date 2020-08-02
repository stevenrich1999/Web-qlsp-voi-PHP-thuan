<?php
	$user=$_POST['user'];
	$repass=$_POST['repass'];
	$pass=$_POST['pass'];
	$phone=$_POST['phone'];
	$name=$_POST['name'];
	$conn=new mysqli("localhost","root","","hungphp");
	
	if($_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['dangky'])){
		if (!empty($_POST['user']) && !empty($_POST['repass']) && !empty($_POST['pass']) && !empty($_POST['phone']) && !empty($_POST['name'])){
			
			$checkuser=$conn->query("select * from taikhoan where tendangnhap='$user'");
			if($checkuser->num_rows>0) {
				echo "<script>alert('Tài khoản đã tồn tại'); window.location='formdangki.php';</script>";
			}
			else {
				$conn->query("insert into taikhoan(tendangnhap,matkhau,sdt,ten,level) values('{$user}','{$pass}','{$phone}','{$name}',2)");
		
				header("Location:./formdangnhap.php");
			}
		} else {
			echo "<script>alert('Nhập thiếu thông tin'); window.location='formdangki.php';</script>";
			
		}
	}
?>