<?php
	session_start();
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$conn=new mysqli("localhost:3308","root","","hungphp");
	$data=$conn->query("select * from taikhoan where tendangnhap='$user' and matkhau='$pass'");
	
	if($data->num_rows>0){
		$res=$data->fetch_assoc();
		$level=$res['level'];
		if($level==1){
			$_SESSION['name']=$info->ten;
			header("Location:./admin/index.php");
		}
		
		else{
			$_SESSION['name']=$info->ten;
			 header("Location: ./client/index.php?name={$user}");
		}
	}
	else{
		 echo "<script>
		 alert('Nhập sai hoặc thiếu tài khoản, mật khẩu');
		location='formdangnhap.php';
		 </script>";
	}
?> 